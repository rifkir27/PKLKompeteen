<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.article.index');
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
            'published_at' => 'nullable|date',
        ]);

        Article::create($request->all());

        return redirect(route('admin.articles.index'))->with('toast_success', 'Article Created');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
            'published_at' => 'nullable|date',
        ]);

        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect(route('admin.articles.index'))->with('toast_success', 'Article Updated');
    }

    public function destroy($id)
    {
        Article::findOrFail($id)->delete();

        return back()->with('toast_success', 'Article Deleted');
    }

    public function datatable()
    {
        $article = Article::orderBy('created_at', 'DESC');

        return DataTables::of($article)
            ->addIndexColumn()
            ->editColumn('image', function($article) {
                return "<img src=".$article->image." width='50px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.articles.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.articles.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}