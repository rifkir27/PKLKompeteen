<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;

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
}
