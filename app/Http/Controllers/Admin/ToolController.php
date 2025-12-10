<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tools.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Tool::create($request->only('name'));

        return redirect(route('admin.tools.index'))->with('toast_success', 'Tool Created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tool $tool)
    {
        return view('admin.tools.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tool $tool)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $tool->update($request->only('name'));

        return redirect(route('admin.tools.index'))->with('toast_success', 'Tool Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tool $tool)
    {
        $tool->delete();

        return back()->with('toast_success', 'Tool Deleted');
    }

    public function datatable()
    {
        $tools = Tool::orderBy('created_at', 'DESC');

        return DataTables::of($tools)
            ->addIndexColumn()
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.tools.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.tools.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function getTools()
    {
        $tools = Tool::orderBy('name', 'ASC')->get(['id', 'name']);
        return response()->json($tools);
    }
}
