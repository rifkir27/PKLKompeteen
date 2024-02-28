<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;
use DataTables;

class TransactionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaction.index');
    }

    public function show(Transaction $transaction)
    {
        $orders = TransactionDetail::with('transaction', 'course')
            ->where('transaction_id', $transaction->id)
            ->get();

        $snapToken = $transaction->snap_token;

        $grandTotal = $orders->sum('price');

        return view('admin.transaction.show', compact('orders', 'grandTotal', 'transaction', 'snapToken'));
    }

    public function edit(Transaction $transaction)
    {
        return view('admin.transaction.edit', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $transaction->update($request->all());
        return redirect(route('admin.transactions.show', $transaction->id))->with('toast_success', 'Transaction Updated');

    }

    public function datatable()
    {
        $transactions = Transaction::with('details.course', 'user')->orderBy('created_at', 'DESC');

        return DataTables::of($transactions)
            ->addIndexColumn()
            ->editColumn('created_at', function($transactions) {
                return $transactions->created_at->format('d F Y H:i:s');
            })
            ->addColumn('action', function($transactions){
                return '<a href="'.route('admin.transactions.show', $transactions->id).'" class="btn btn-info btn-sm btn-info"><i class="fas fa-th"></i> </a>';
            })
            ->rawColumns([ 'action'])
            ->make(true);

    }
}
