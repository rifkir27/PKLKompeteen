@extends('layouts.backend.app', ['title' => 'Transactions'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Voucher</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Voucher</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="container">
            <h1>Redeem Voucher</h1>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @elseif (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('member.voucher.redeem') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="voucher_code" class="form-label">Enter Voucher Code</label>
                    <input type="text" class="form-control" id="voucher_code" name="voucher_code" required>
                    @error('voucher_code')
                        <div class="text-danger">Kode tidak valid</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Redeem</button>
            </form>
        </div>
    </div>
@endsection
