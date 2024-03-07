<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Infrastructure;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\InfrastructureRequest;

class InfrastructureController extends Controller
{
    public function index()
    {
        return view('admin.infrastructure.index');
    }

    public function create()
    {
        return view('admin.infrastructure.create');
    }

    public function store(InfrastructureRequest $request)
    {
        // dd($request);
        $input = $request->all();

        Infrastructure::create($input);
        return redirect(route('admin.infrastructure.index'))->with('toast_success', 'infrastructure Created');
    }

    public function edit(Infrastructure $infrastructure)
    {

        return view('admin.infrastructure.edit', compact('infrastructure'));
    }

    public function update(Infrastructure $infrastructure, InfrastructureRequest $request)
    {

        // dd($request);
        $input = $request->all();

        $infrastructure->update($input);

        return redirect(route('admin.infrastructure.index'))->with('toast_success', 'infrastructure Updated');
    }

    public function destroy(Infrastructure $infrastructure)
    {
        $infrastructure->delete();
        return back()->with('toast_success', 'infrastructure Deleted');
    }

    public function datatable()
    {
        $infrastructure = Infrastructure::orderBy('created_at', 'DESC');

        return DataTables::of($infrastructure)
            ->addIndexColumn()
            ->editColumn('image', function($infrastructure) {
                return "<img src=".$infrastructure->image." width='50px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.infrastructure.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.infrastructure.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
