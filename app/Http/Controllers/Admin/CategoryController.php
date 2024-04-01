<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

/**
 * Store a newly created resource in storage.
 */
public function store(CategoryRequest $request)
{
    $input = $request->all();
    $image = $request->file('image');
    $image->storeAs('public/categories', $image->hashName());
    $input['image'] = $image->hashName();

    Category::create($input);

    return redirect(route('admin.categories.index'))->with('toast_success', 'Category Created');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $input = $request->all();

        if($request->file('image')){
            Storage::disk('local')->delete('public/categories/'.basename($category->image));
            $image = $request->file('image');
            $image->storeAs('public/categories', $image->hashName());
            $input['image'] = $image->hashName();
        }

        $category->update($input);

        return redirect(route('admin.categories.index'))->with('toast_success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Storage::disk('local')->delete('public/categories/'.basename($category->image));
        $category->delete();

        return back()->with('toast_success', 'Category Deleted');
    }

    public function datatable()
    {
        $categories = Category::orderBy('created_at', 'DESC');

        return DataTables::of($categories)
            ->addIndexColumn()
            ->editColumn('image', function($categories) {
                return "<img src=".$categories->image." width='50px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.categories.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.categories.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
