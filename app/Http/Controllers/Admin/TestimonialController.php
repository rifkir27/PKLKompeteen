<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{
    public function index()
    {
        return view('admin.testimonial.index');
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
        ]);

        Testimonial::create($request->all());

        return redirect(route('admin.testimonials.index'))->with('toast_success', 'Testimonial Created');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($request->all());

        return redirect(route('admin.testimonial.index'))->with('toast_success', 'Testimonial Updated');
    }

    public function destroy($id)
    {
        Testimonial::findOrFail($id)->delete();

        return back()->with('toast_success', 'Testimonial Deleted');
    }

    public function datatable()
    {
        $testimonial = Testimonial::orderBy('created_at', 'DESC');

        return DataTables::of($testimonial)
            ->addIndexColumn()
            ->editColumn('image', function($testimonial) {
                return "<img src=".$testimonial->image." width='50px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.testimonials.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.testimonials.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
