<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Infrastructure;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\InfrastructureRequest;

class InfrastructureController extends Controller
{
public function index()
{
    return view('admin.infrastructure.index');
}

public function show($id)
{
    $infrastructure = Infrastructure::find($id);
    return view('admin.infrastructure.show', compact('infrastructure'));
}


public function create()
{
    return view('admin.infrastructure.create');
}

public function store(Request $request)
{
    // dd($request->file('image'));

    if($request->file('image')){
        Storage::disk('local')->delete('public/infrastructure/'.basename($request->image));
        $image = $request->file('image');
        $image->storeAs('public/infrastructure/', $image->hashName());
        Infrastructure::create([
            'name' => $request->name,
            'description'=>$request->description,
            'image'=>'../storage/infrastructure/'.$image->hashName().''
        ]);
    }else{
        Infrastructure::create([
            'name' => $request->name,
            'description'=>$request->description
        ]);
    }

    return redirect(route('admin.infrastructure.index'))->with('toast_success', 'Infrastructure Created');
}

public function edit($id)
{
    // dd($id);
    $infrastructure = Infrastructure::find($id);
    // dd($infrastructure);
    return view('admin.infrastructure.edit', compact('infrastructure'));
}

public function update($id, InfrastructureRequest $request)
{

    // dd($request);
    $infrastructure = Infrastructure::find($id);
    if($request->file('image')){
        Storage::disk('local')->delete('public/infrastructure/'.basename($request->image));
        $image = $request->file('image');
        $image->storeAs('public/infrastructure/', $image->hashName());
        $infrastructure -> update([
            'name' => $request->name,
            'description'=>$request->description,
            'image'=>'../storage/infrastructure/'.$image->hashName()
        ]);
    }else{
        $infrastructure -> update([
            'name' => $request->name,
            'description'=>$request->description
        ]);
    }
    return redirect(route('admin.infrastructure.index'))->with('toast_success', 'Infrastructure Updated');
}

public function destroy($id)
{
    // dd($infrastructure);
    $infrastructure = Infrastructure::find($id);
    Storage::disk('local')->delete('public/infrastructure/'.basename($infrastructure->image));
    $infrastructure->delete();
    return redirect(route('admin.infrastructure.index'))->with('toast_success', 'Infrastructure Deleted');
}

public function datatable()
{
    $infrastructure = Infrastructure::orderBy('created_at', 'DESC');

    return DataTables::of($infrastructure)
        ->addIndexColumn()
        ->editColumn('image', function($infrastructure) {
            return "<img src=".$infrastructure->image." width='50px'>";
        })
        ->editColumn('created_at', function($infrastructure) {
            return Carbon::parse($infrastructure->created_at)->format('Y-m-d H:i:s');
        })
        ->addColumn('action', function($data){
            return '<a href="'.route('admin.infrastructure.edit', [$data->id]).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                    <a href="'.route('admin.infrastructure.show', $data->id).'" class="btn btn-info btn-sm"><i class="fas fa-th"></i> </a>
                    <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    <form method="POST" action="'.route('admin.infrastructure.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                        '.method_field('delete').csrf_field().'
                    </form>';
        })
        ->rawColumns(['image', 'action'])
        ->make(true);
}
}
