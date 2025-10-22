<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Series;
use App\Models\Course;
use App\Http\Requests\SeriesRequest;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Illuminate\Support\Facades\Storage;

class SeriesController extends Controller
{
    public function index(Course $course)
    {
        return view('admin.series.index', compact('course'));
    }

    public function create(Course $course)
    {
        return view('admin.series.create', compact('course'));
    }

    public function store(Course $course, SeriesRequest $request)
    {
        $seriesData = $request->all();

        // Handle video based on source
        if ($request->input('video_source') === 'file' && $request->hasFile('video_file')) {
            $videoFile = $request->file('video_file');
            $videoName = time() . '_' . uniqid() . '.' . $videoFile->getClientOriginalExtension();
            $videoFile->storeAs('public/videos', $videoName);
            $seriesData['video_code'] = $videoName;
        }
        // For youtube/drive, video_code is already the URL

        $series = $course->series()->create($seriesData);
        return redirect(route('admin.courses.series.show', [$course->id, $series->id]))->with('toast_success', 'Series Created');
    }

    public function show(Course $course, Series $series)
    {
        return view('admin.series.show', compact('course','series'));
    }

    public function edit(Course $course, Series $series)
    {
        return view('admin.series.edit', compact('course','series'));
    }

    public function update(SeriesRequest $request, Course $course, Series $series)
    {
        $seriesData = $request->all();

        // Handle video based on source
        if ($request->input('video_source') === 'file' && $request->hasFile('video_file')) {
            // Delete old video file if exists and was a file
            if ($series->video_source === 'file' && $series->video_code && Storage::disk('public')->exists('videos/' . $series->video_code)) {
                Storage::disk('public')->delete('videos/' . $series->video_code);
            }
            $videoFile = $request->file('video_file');
            $videoName = time() . '_' . uniqid() . '.' . $videoFile->getClientOriginalExtension();
            $videoFile->storeAs('public/videos', $videoName);
            $seriesData['video_code'] = $videoName;
        }
        // For youtube/drive, video_code is already the URL

        $series->update($seriesData);
        return redirect(route('admin.courses.series.show', [$course->id, $series->id]))->with('toast_success', 'Series Updated');
    }

    public function destroy(Course $course, Series $series)
    {
        // Delete video file if it exists and is a file
        if ($series->video_source === 'file' && $series->video_code && Storage::disk('public')->exists('videos/' . $series->video_code)) {
            Storage::disk('public')->delete('videos/' . $series->video_code);
        }

        $series->delete();
        return back()->with('toast_success', 'Series Deleted');
    }

    public function datatable($courseId)
    {
        $series = Series::where('course_id', $courseId)->orderBy('number_of_series', 'ASC');

        return DataTables::of($series)
            ->addIndexColumn()
            ->editColumn('intro', function($series) {
                return $series->intro == 1
                    ? '<span class="badge badge-danger">Premium</span>'
                    : '<span class="badge badge-warning">Free</span>';
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.courses.series.show', [$data->course_id, $data->id]).'" class="btn btn-info btn-sm"><i class="fas fa-th"></i></a>
                        <a href="'.route('admin.courses.series.edit', [$data->course_id, $data->id]).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.courses.series.destroy',[$data->course_id,  $data->id]).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['intro', 'action'])
            ->make(true);
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('images'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
}
