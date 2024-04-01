<?php

namespace App\Http\Controllers\Member;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\MentorRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member.mentor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function datatable(Request $request)
    {
        $mentor = Mentor::where('user_id', $request->user()->id)->orderBy('created_at', 'DESC');

        return DataTables::of($mentor)
            ->addIndexColumn()
            ->editColumn('cover', function($mentor) {
                return "<img src=".$mentor->cover." width='100px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('member.mentor.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('member.mentor.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['cover', 'action'])
            ->make(true);
    }
}
