@extends('layouts.backend.app', ['title' => 'Edit Voucher'])

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
                        <h1>Edit Voucher</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Voucher</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- /.card -->
                        <!-- Horizontal Form -->
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('admin.vouchers.index') }}" class="btn btn-success"><i
                                        class="fa fa-chevron-left"></i> Back</a>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.vouchers.update', $voucher->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="code" class="form-label">Voucher Code</label>
                                        <input type="text" class="form-control" id="code" name="code"
                                            value="{{ $voucher->code }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="amount" class="form-label">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount"
                                            value="{{ $voucher->amount }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="usage_limit" class="form-label">Usage Limit</label>
                                        <input type="number" class="form-control" id="usage_limit" name="usage_limit"
                                            value="{{ $voucher->usage_limit }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="expiry_date" class="form-label">Expiry Date</label>
                                        <input type="date" class="form-control" id="expiry_date" name="expiry_date"
                                            value="{{ $voucher->expiry_date }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="active" class="form-label">Status</label>
                                        <select class="form-control" id="active" name="active" required>
                                            <option value="1" {{ $voucher->active ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ !$voucher->active ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
