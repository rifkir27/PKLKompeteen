<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Category;
use App\Models\Benefit;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $benefits = Benefit::orderBy('created_at', 'ASC')->get();
        return view('admin.course.create', compact('categories', 'benefits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $image = $request->file('image');
        $image->storeAs('public/courses', $image->hashName());
        $input = $request->all();
        $input['image'] = $request->file('image') ? $image->hashName() : null;
        $course = $request->user()->courses()->create($input);
        $course->benefits()->sync($request->benefits);

        return redirect(route('admin.courses.index'))->with('toast_success', 'Course Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $categories = Category::all();
        $benefits = Benefit::orderBy('created_at', 'ASC')->get();
        $benefitSelected = $course->benefits->pluck('id')->toArray();

        return view('admin.course.edit', compact('categories', 'course', 'benefits', 'benefitSelected'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {
        $input = $request->all();

        if($request->file('image')){
            Storage::disk('local')->delete('public/courses/'.basename($course->image));
            $image = $request->file('image');
            $image->storeAs('public/courses', $image->hashName());
            $input['image'] = $image->hashName();
        }

        $course->benefits()->sync($request->benefits);

        $course->update($input);

        return redirect(route('admin.courses.index'))->with('toast_success', 'Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        Storage::disk('local')->delete('public/courses/'.basename($course->image));
        $course->delete();
        return back()->with('toast_success', 'Course Deleted');
    }

    public function datatable()
    {
        $courses = Course::withCount(['series as series', 'details as enrolled' => function($query){
            $query->whereHas('transaction', function($query){
                $query->where('status', 'success');
            });
        }])->orderBy('created_at', 'DESC');

        return DataTables::of($courses)
            ->addIndexColumn()
            ->editColumn('image', function($courses) {
                return "<img src=".$courses->image." width='50px'>";
            })
            ->editColumn('is_published', function($courses) {
                return $courses->is_published == 0 ? "<span class='badge badge-danger'>Not Published</span>" : "<span class='badge badge-success'>Published</span>";
            })
            ->editColumn('price_after_discount', function($courses) {
                return moneyFormat($courses->price_after_discount);
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.courses.photos.index', $data->id).'" class="btn btn-success btn-sm"><i class="fas fa-image"></i> </a>
                        <a href="'.route('admin.courses.series.index', $data->id).'" class="btn btn-info btn-sm"><i class="fas fa-th"></i> </a>
                        <a href="'.route('admin.courses.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.courses.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['image', 'action', 'is_published'])
            ->make(true);
    }
}
