@extends('layouts.backend.app', ['title' => 'Transaction Detail'])

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaction Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Transaction Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('admin.transactions.edit', $transaction->id) }}" class="btn btn-warning" style="margin-bottom:10px;">Update Status Pembayaran</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Transaction Detail</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td width="30%">No.Invoice</td>
                                        <td>
                                            {{ $transaction->invoice }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama Lengkap</td>
                                        <td>
                                            {{ $transaction->user->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Email</td>
                                        <td>
                                            {{ $transaction->user->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Status</td>
                                        <td>
                                            @if ($transaction->status == 'success')
                                                <button class="btn btn-primary btn-sm" disabled>
                                                    Transaksi Selesai
                                                </button>
                                            @elseif($transaction->status == 'pending')
                                                <button id="pay-button" class="btn btn-info btn-sm">
                                                    Belum melakukan pembayaran
                                                </button>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>
                                                    pembayaran untuk pesanan Anda sudah kedaluwarsa
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tanggal Pembelian</td>
                                        <td>
                                            {{ $transaction->created_at->format('d M Y H:i:s') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Detail Item</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>COURSE</th>
                                        <th class="text-right">PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                {{ $order->course->name }}
                                            </td>
                                            <td class="text-right">
                                                <sup>Rp</sup> {{ moneyFormat($order->price) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td class="font-weight-bold">GRAND TOTAL</td>
                                        <td class="text-right text-success font-weight-bold">
                                            <sup>Rp</sup> {{ moneyFormat($grandTotal) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection