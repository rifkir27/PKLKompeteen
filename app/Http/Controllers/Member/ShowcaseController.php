<?php

namespace App\Http\Controllers\Member;

use App\Models\Showcase;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ShowcaseRequest;
use Illuminate\Support\Facades\Storage;
use DataTables;

class ShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member.showcase.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $courses = TransactionDetail::with('transaction', 'course.reviews')
                ->whereHas('transaction', function($query) use($user){
                    $query->where('user_id', $user->id)->where('status', 'success');
                })->get();

        return view('member.showcase.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShowcaseRequest $request)
    {
        $input = $request->all();
        $cover = $request->file('cover');
        $cover->storeAs('public/showcases', $cover->hashName());
        $input['cover'] = $cover->hashName();

        $request->user()->showcases()->create($input);

        return redirect(route('member.showcases.index'))->with('toasts_success', 'Showcase Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Showcase $showcase)
    {
        $user = Auth::user();

        $courses = TransactionDetail::with('transaction', 'course.reviews')
                ->whereHas('transaction', function($query) use($user){
                    $query->where('user_id', $user->id)->where('status', 'success');
                })->get();

        return view('member.showcase.edit', compact('showcase', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShowcaseRequest $request, Showcase $showcase)
    {
        $input = $request->except(['_token', '_method']);

        if($request->file('cover')){
            Storage::disk('local')->delete('public/showcases/'.basename($showcase->cover));
            $cover = $request->file('cover');
            $cover->storeAs('public/showcases/', $cover->hashName());
            $input['cover'] = $cover->hashName();
        }

        $showcase->update($input);

        return redirect(route('member.showcases.index'))->with('toast_success', 'Showcase Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showcase $showcase)
    {
        Storage::disk('local')->delete('public/showcases/'.basename($showcase->cover));
        $showcase->delete();
        return back()->with('toast_success', 'Showcase Deleted');
    }

    public function datatable(Request $request)
    {
        $showcases = Showcase::where('user_id', $request->user()->id)->orderBy('created_at', 'DESC');

        return DataTables::of($showcases)
            ->addIndexColumn()
            ->editColumn('cover', function($showcases) {
                return "<img src=".$showcases->cover." width='100px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('member.showcases.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('member.showcases.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['cover', 'action'])
            ->make(true);
    }
}