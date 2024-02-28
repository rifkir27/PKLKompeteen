<?php

namespace App\Http\Controllers\Member;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;
use DataTables;

class TransactionController extends Controller
{
    public function index()
    {
        return view('member.transaction.index');
    }

    public function show(Transaction $transaction)
    {
        $orders = TransactionDetail::with('transaction', 'course')
            ->where('transaction_id', $transaction->id)
            ->get();

        $snapToken = $transaction->snap_token;
        $grandTotal = $orders->sum('price');

        return view('member.transaction.show', compact('orders', 'snapToken', 'grandTotal', 'transaction'));
    }

    public function datatable(Request $request)
    {
        $transactions = Transaction::with(['details', 'user'])
            ->where('user_id', $request->user()->id)
            ->orderBy('created_at', 'DESC');

        return DataTables::of($transactions)
            ->addIndexColumn()
            ->editColumn('created_at', function($transactions) {
                return $transactions->created_at->format('d F Y H:i:s');
            })
            ->addColumn('action', function($transactions){
                return '<a href="'.route('member.transactions.show', $transactions->id).'" class="btn btn-info btn-sm btn-info"><i class="fas fa-th"></i> </a>';
            })
            ->rawColumns([ 'action'])
            ->make(true);

    }
}