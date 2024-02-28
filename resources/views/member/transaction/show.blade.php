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
                                        <td width="30%">Nama</td>
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
                                                    Pembayaran Selesai
                                                </button>
                                            @elseif($transaction->status == 'pending')
                                                <button id="pay-button" class="btn btn-info btn-sm">
                                                    Belum Melakukan Pembayaran
                                                </button>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>
                                                    pembayaran untuk pesanan Anda sudah kedaluwarsa
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tanggal</td>
                                        <td>
                                            {{ $transaction->created_at->format('d M Y H:i:s') }}
                                        </td>
                                    </tr>
                                    @if ($transaction->status == "pending")
                                        <tr>
                                            <td>Transfer</td>
                                            <td>
                                                <p> Silakan Transfer Ke Rekening Berikut ini</p>
                                                <p>BCA<br>8105675450<br>Dede Rusliandi Taruna</p>
                                                <br>

                                                <a href="https://wa.me/6281212126043?text=Hallo%2C%20Admin%20Eduthings%20saya%20ingin%20melakukan%20konfirmasi%20pembayaran%0ANama%3A%20%0AEmail%3A%0ANo%20Invoice%3A%0ATotal%20Pembayaran%3A%0ABukti%20Transfer%3A" target="_blank">
                                                    <button class="btn btn-primary">
                                                        Konfirmasi Pembayaran
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
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