<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests\MentorRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class MentorController extends Controller
{
    public function index()
    {
        return view('admin.mentor.index');
    }

    public function show($id)
    {
        $mentor = Mentor::find($id);
        return view('admin.mentor.show', compact('mentor'));
    }


    public function create()
    {
        return view('admin.mentor.create');
    }

    public function store(Request $request)
    {
        // dd($request->file('image'));

        if($request->file('image')){
            Storage::disk('local')->delete('public/mentor/'.basename($request->image));
            $image = $request->file('image');
            $image->storeAs('public/mentor/', $image->hashName());
            Mentor::create([
                'name' => $request->name,
                'description'=>$request->description,
                'image'=>'../storage/mentor/'.$image->hashName()
            ]);
        }else{
            Mentor::create([
                'name' => $request->name,
                'description'=>$request->description
            ]);
        }

        return redirect(route('admin.mentor.index'))->with('toast_success', 'Mentor Created');
    }

    public function edit($id)
    {
        // dd($id);
        $mentor = Mentor::find($id);
        // Storage::disk('local')->delete('public/mentor/'.basename($mentor->image));
        return view('admin.mentor.edit', compact('mentor'));
    }

    public function update($id, MentorRequest $request)
    {

        // dd($request);
        $mentor = Mentor::find($id);
        if($request->file('image')){
            Storage::disk('local')->delete('public/mentor/'.basename($request->image));
            $image = $request->file('image');
            $image->storeAs('public/mentor/', $image->hashName());
            $mentor -> update([
                'name' => $request->name,
                'description'=>$request->description,
                'image'=>'../storage/mentor/'.$image->hashName()
            ]);
        }else{
            $mentor -> update([
                'name' => $request->name,
                'description'=>$request->description
            ]);
        }
        return redirect(route('admin.mentor.index'))->with('toast_success', 'Mentor Updated');
    }

    public function destroy($id)
    {
        // dd($mentor);
        $mentor = Mentor::find($id);
        Storage::disk('local')->delete('public/mentor/'.basename($mentor->image));
        $mentor->delete();
        return redirect(route('admin.mentor.index'))->with('toast_success', 'Mentor Deleted');
    }

    public function datatable()
    {
        $mentor = Mentor::select('mentors.*')
            ->orderBy('mentors.created_at', 'DESC');

        return DataTables::of($mentor)
            ->addIndexColumn()
            ->editColumn('image', function($mentor) {
                return "<img src=".$mentor->image." width='50px'>";
            })
            ->editColumn('created_at', function($mentor) {
                return Carbon::parse($mentor->created_at)->format('Y-m-d H:i:s');
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.mentor.edit', [$data->id]).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="'.route('admin.mentor.show', $data->id).'" class="btn btn-info btn-sm"><i class="fas fa-th"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.mentor.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
