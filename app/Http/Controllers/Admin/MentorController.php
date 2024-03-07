<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MentorRequest;
use Yajra\DataTables\Facades\DataTables;

class MentorController extends Controller
{
    public function index()
    {
        return view('admin.mentor.index');
    }

    public function create()
    {
        return view('admin.mentor.create');
    }

    public function store(MentorRequest $request)
    {
        // dd($request);
        $input = $request->all();

        Mentor::create($input);
        return redirect(route('admin.mentor.index'))->with('toast_success', 'Mentor Created');
    }

    public function edit(Mentor $mentor)
    {

        return view('admin.mentor.edit', compact('mentor'));
    }

    public function update(Mentor $mentor, MentorRequest $request)
    {

        // dd($request);
        $input = $request->all();

        $mentor->update($input);

        return redirect(route('admin.mentor.index'))->with('toast_success', 'Mentor Updated');
    }

    public function destroy(Mentor $mentor)
    {
        $mentor->delete();
        return back()->with('toast_success', 'Mentor Deleted');
    }

    public function datatable()
    {
        $mentor = Mentor::orderBy('created_at', 'DESC');

        return DataTables::of($mentor)
            ->addIndexColumn()
            ->editColumn('image', function($mentor) {
                return "<img src=".$mentor->image." width='50px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.mentor.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.mentor.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
