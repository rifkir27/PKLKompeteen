<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Benefit;
use App\Models\Category;
use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.course.index');
    }

    public function create()
    {
        $categories = Category::all();
        $benefits = Benefit::orderBy('created_at', 'ASC')->get();
        $mentors = Mentor::all();

        return view('admin.course.create', compact('categories', 'benefits', 'mentors'));
    }

    public function store(CourseRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = auth()->id();

        if ($request->file('image')) {
            $image = $request->file('image');
            $image->storeAs('courses', $image->hashName(), 'public');
            $input['image'] = $image->hashName();
        }

        $course = Course::create($input);

        if ($request->has('benefits')) {
            $course->benefits()->sync($request->benefits);
        }

        if ($request->has('series') && is_array($request->series)) {
            foreach ($request->series as $index => $seriesData) {
                // Handle video based on source
                if (isset($seriesData['video_source']) && $seriesData['video_source'] === 'file' && $request->hasFile("series.{$index}.video_file")) {
                    $videoFile = $request->file("series.{$index}.video_file");
                    $videoName = time() . '_' . uniqid() . '.' . $videoFile->getClientOriginalExtension();
                    $videoFile->storeAs('videos', $videoName, 'public');
                    $seriesData['video_code'] = $videoName;
                }
                // For youtube/drive, video_code is already the URL
                $course->series()->create($seriesData);
            }
        }

        return redirect(route('admin.courses.index'))->with('toast_success', 'Course Created with Series & Video!');
    }

    public function edit(Course $course)
    {
        $categories = Category::all();
        $benefits = Benefit::orderBy('created_at', 'ASC')->get();
        $benefitSelected = $course->benefits->pluck('id')->toArray();
        $mentors = Mentor::all();

        return view('admin.course.edit', compact('categories', 'course', 'benefits', 'benefitSelected', 'mentors'));
    }

    public function update(CourseRequest $request, Course $course)
    {
        $input = $request->all();
        $input['user_id'] = auth()->id();

        if ($request->file('image')) {
            Storage::disk('public')->delete('courses/' . basename($course->image));
            $image = $request->file('image');
            $image->storeAs('courses', $image->hashName(), 'public');
            $input['image'] = $image->hashName();
        }

        $course->update($input);

        if ($request->has('benefits')) {
            $course->benefits()->sync($request->benefits);
        }

        if ($request->has('series') && is_array($request->series)) {
            $existingSeriesIds = $course->series->pluck('id')->toArray();
            $updatedSeriesIds = [];

            foreach ($request->series as $index => $seriesData) {
                if (isset($seriesData['id'])) {
                    $series = $course->series()->find($seriesData['id']);
                    if ($series) {
                        // Handle video based on source for existing series
                        if (isset($seriesData['video_source']) && $seriesData['video_source'] === 'file' && $request->hasFile("series.{$index}.video_file")) {
                            // Delete old video file if exists and was a file
                            if ($series->video_source === 'file' && $series->video_code && Storage::disk('public')->exists('videos/' . $series->video_code)) {
                                Storage::disk('public')->delete('videos/' . $series->video_code);
                            }
                            $videoFile = $request->file("series.{$index}.video_file");
                            $videoName = time() . '_' . uniqid() . '.' . $videoFile->getClientOriginalExtension();
                            $videoFile->storeAs('videos', $videoName, 'public');
                            $seriesData['video_code'] = $videoName;
                        }
                        // For youtube/drive, video_code is already the URL
                        $series->update($seriesData);
                        $updatedSeriesIds[] = $seriesData['id'];
                    }
                } else {
                    // Create new series
                    // Handle video based on source for new series
                    if (isset($seriesData['video_source']) && $seriesData['video_source'] === 'file' && $request->hasFile("series.{$index}.video_file")) {
                        $videoFile = $request->file("series.{$index}.video_file");
                        $videoName = time() . '_' . uniqid() . '.' . $videoFile->getClientOriginalExtension();
                        $videoFile->storeAs('videos', $videoName, 'public');
                        $seriesData['video_code'] = $videoName;
                    }
                    // For youtube/drive, video_code is already the URL
                    $newSeries = $course->series()->create($seriesData);
                    $updatedSeriesIds[] = $newSeries->id;
                }
            }

            $seriesToDelete = array_diff($existingSeriesIds, $updatedSeriesIds);
            if (!empty($seriesToDelete)) {
                foreach ($course->series()->whereIn('id', $seriesToDelete)->get() as $series) {
                    if ($series->video_path && Storage::disk('public')->exists($series->video_path)) {
                        Storage::disk('public')->delete($series->video_path);
                    }
                    $series->delete();
                }
            }
        }

        return redirect(route('admin.courses.index'))->with('toast_success', 'Course Updated');
    }

    public function destroy(Course $course)
    {
        Storage::disk('local')->delete('public/courses/' . basename($course->image));

        // Delete video files for all series that are files
        foreach ($course->series as $series) {
            if ($series->video_source === 'file' && $series->video_code && Storage::disk('public')->exists('videos/' . $series->video_code)) {
                Storage::disk('public')->delete('videos/' . $series->video_code);
            }
        }

        $course->delete();
        return back()->with('toast_success', 'Course Deleted');
    }

    public function datatable()
    {
        $courses = Course::with(['mentor'])
            ->withCount(['series as series', 'details as enrolled' => function ($query) {
                $query->whereHas('transaction', function ($query) {
                    $query->where('status', 'success');
                });
            }])
            ->orderBy('created_at', 'DESC');

        return DataTables::of($courses)
            ->addIndexColumn()
            ->editColumn('image', function ($courses) {
                return "<img src='" . asset('storage/courses/' . $courses->image) . "' width='50px'>";
            })
            ->editColumn('is_published', function ($courses) {
                return $courses->is_published == 0
                    ? "<span class='badge badge-danger'>Not Published</span>"
                    : "<span class='badge badge-success'>Published</span>";
            })
            ->editColumn('price_after_discount', function ($courses) {
                return moneyFormat($courses->price_after_discount);
            })
            ->addColumn('mentor', function ($courses) {
                return $courses->mentor ? $courses->mentor->name : '-';
            })
            ->addColumn('action', function ($data) {
                return '<a href="' . route('admin.courses.photos.index', $data->id) . '" class="btn btn-success btn-sm"><i class="fas fa-image"></i></a>
                        <a href="' . route('admin.courses.series.index', $data->id) . '" class="btn btn-info btn-sm"><i class="fas fa-th"></i></a>
                        <a href="' . route('admin.courses.edit', $data->id) . '" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <button onclick="deleteConfirm(\'' . $data->id . '\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="' . route('admin.courses.destroy', $data->id) . '" style="display:inline-block;" id="submit_' . $data->id . '">
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
            })
            ->rawColumns(['image', 'action', 'is_published'])
            ->make(true);
    }
}
