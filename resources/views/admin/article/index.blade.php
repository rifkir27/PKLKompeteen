@extends('layouts.backend.app', ['title' => 'Articles'])

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
                        <h1>Articles</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Articles</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('admin.articles.create') }}" class="btn btn-primary"><i
                                        class="fa fa-plus"></i> Create New</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>User</th>
                                            <th>Publish at</th>
                                            <th>created at</th>
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
            url : '{!! route('admin.articles.ajax.datatable') !!}',
            },
            columns       : [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},                 
                {data: 'title', name: 'title', orderable: true, searchable: true},                    
                {data: 'user', name: 'user', orderable: false, searchable: false},                            
                {data: 'published_at', name: 'published_at', orderable: false, searchable: false},                            
                {data: 'created_at', name: 'created_at', orderable: false, searchable: false},                            
                {data: 'action', name: 'action', orderable: false, searchable: false,}
            ]
        });
    });

    function deleteConfirm(id) {
    Swal.fire({
        text: "Are you sure you want to delete article ?",
        type: 'warning',
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete'
        }).then((result) => {
        if (result.value) {
            $('#submit_'+id).submit();
                Swal.fire(
                'Deleted!',
                'Article deleted',
                'success'
            )   
        }
    })
  }
</script>
@endpush