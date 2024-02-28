<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Course;
use App\Http\Requests\PhotoRequest;
use DataTables;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(Course $course)
    {
        return view('admin.photo.index', compact('course'));
    }

    public function create(Course $course)
    {
        return view('admin.photo.create', compact('course'));
    }

    public function store(Course $course, PhotoRequest $request)
    {
        $input = $request->all();
        $photo = $request->file('photo');
        $photo->storeAs('public/photos', $photo->hashName());
        $input['photo'] = $photo->hashName();
        $photo = $course->photo()->create($input);

        return redirect(route('admin.courses.photos.index', [$course->id]))->with('toast_success', 'Photo Created');
    }

    public function show(Course $course, Photo $photo)
    {
        return view('admin.photo.show', compact('course','photo'));
    }

    public function edit(Course $course, Photo $photo)
    {
        return view('admin.photo.edit', compact('course','photo'));
    }

    public function update(PhotoRequest $request, Course $course, Photo $photo)
    {
        $input = $request->all();

        if($request->file('photo')){
            Storage::disk('local')->delete('public/photos/'.basename($photo->photo));
            $image = $request->file('photo');
            $image->storeAs('public/photos', $image->hashName());
            $input['photo'] = $image->hashName();
        }

        $photo->update($input);
        
        return redirect(route('admin.courses.photos.index', $course->id))->with('toast_success', 'Photo Updated');

    }

    public function destroy(Course $course, Photo $photo)
    {
        Storage::disk('local')->delete('public/photos/'.basename($photo->photo));
        $photo->delete();

        return back()->with('toast_success', 'Photo Deleted');
    }

    public function datatable($courseId)
    {
        $data = Photo::where('course_id', $courseId)->orderBy('created_at', 'ASC');

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('photo', function($courses) {
                return "<img src=".asset('storage/photos/'.$courses->photo)." width='50px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.courses.photos.edit', [$data->course_id, $data->id]).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.courses.photos.destroy',[$data->course_id,  $data->id]).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['photo','action'])
            ->make(true);
    }
}
