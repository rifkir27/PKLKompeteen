<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Models\Infrastructure;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class InfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member.infra$infrastructure.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function datatable(Request $request)
    {
        $infrastructure = Infrastructure::where('user_id', $request->user()->id)->orderBy('created_at', 'DESC');

        return DataTables::of($infrastructure)
            ->addIndexColumn()
            ->editColumn('cover', function($infrastructure) {
                return "<img src=".$infrastructure->cover." width='100px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('member.infra$infrastructure.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('member.infra$infrastructure.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['cover', 'action'])
            ->make(true);
    }
}
