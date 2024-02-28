<?php

namespace App\Http\Controllers\Admin;

use App\Models\Benefit;
use App\Http\Controllers\Controller;
use App\Http\Requests\BenefitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.benefit.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.benefit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BenefitRequest $request)
    {
        Benefit::create($request->all());
        return redirect(route('admin.benefits.index'))->with('toast_success', 'Benefit Created');
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
    public function edit(Benefit $benefit)
    {
        return view('admin.benefit.edit', compact('benefit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BenefitRequest $request, Benefit $benefit)
    {
        $benefit->update($request->all());
        return redirect(route('admin.benefits.index'))->with('toast_success', 'Benefit Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Benefit $benefit)
    {
        $benefit->delete();
        return back()->with('toast_success', 'Benefit Deleted');
    }

    public function datatable()
    {
        $benefits = Benefit::orderBy('created_at', 'ASC');

        return DataTables::of($benefits)
            ->addIndexColumn()
            ->addColumn('action', function($benefits){
                return '<a href="'.route('admin.benefits.edit', $benefits->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$benefits->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.benefits.destroy',$benefits->id).'" style="display:inline-block;" id="submit_'.$benefits->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
