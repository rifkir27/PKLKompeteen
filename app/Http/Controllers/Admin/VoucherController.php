<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::all();
        return view('admin.vouchers.index', compact('vouchers'));
    }

    public function create()
    {
        return view('admin.vouchers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:vouchers',
            'amount' => 'required|numeric',
            'usage_limit' => 'nullable|numeric',
            'expiry_date' => 'nullable|date',
            'active' => 'required|boolean',
        ]);

        Voucher::create($request->all());

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher created successfully.');
    }

    public function edit($id)
    {
        $voucher = Voucher::findOrFail($id);
        return view('admin.vouchers.edit', compact('voucher'));
    }

    public function update(Request $request, $id)
    {
        $voucher = Voucher::findOrFail($id);

        $request->validate([
            'code' => 'required|unique:vouchers,code,'.$voucher->id,
            'amount' => 'required|numeric',
            'usage_limit' => 'nullable|numeric',
            'expiry_date' => 'nullable|date',
            'active' => 'required|boolean',
        ]);

        $voucher->update($request->all());

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher updated successfully.');
    }

    public function destroy($id)
    {
        $voucher = Voucher::findOrFail($id);
        $voucher->delete();

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher deleted successfully.');
    }

    public function datatable()
    {
        $vouchers = Voucher::orderBy('created_at', 'DESC');

        return DataTables::of($vouchers)
            ->addIndexColumn()
            ->editColumn('image', function($vouchers) {
                return "<img src=".$vouchers->image." width='50px'>";
            })
            ->addColumn('action', function($data){
                return '<a href="'.route('admin.vouchers.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                        <button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.vouchers.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
