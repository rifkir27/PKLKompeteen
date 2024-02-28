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
                    <h1>Transactions</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Transactions</li>
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
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Invoice</th>
                                        <th>Email</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable({
            responsive : true,
            processing : true,
            serverSide : true,
            ajax : {
            url : '{!! route('member.transactions.ajax.datatable') !!}',
            },
            columns       : [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},                 
                {data: 'invoice', name: 'invoice', orderable: true, searchable: true},                    
                {data: 'user.email', name: 'user.email', orderable: true, searchable: true},                    
                {data: 'grand_total', name: 'grand_total', orderable: false, searchable: true},                            
                {data: 'status', name: 'status', orderable: false, searchable: true},                            
                {data: 'created_at', name: 'created_at', orderable: false, searchable: false},                            
                {data: 'action', name: 'action', orderable: false, searchable: false,}
            ]
        });
    });
</script>
@endpush