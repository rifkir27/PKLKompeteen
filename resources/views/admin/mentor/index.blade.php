@extends('layouts.backend.app', ['title' => 'mentor'])

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Mentor</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Mentor</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.mentor.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Create New
                        </a>
                    </div>

                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Rating</th> <!-- ⬅️ Tambah kolom rating -->
                                    <th>Created_at</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
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
            url : '{!! route('admin.mentor.ajax.datatable') !!}',
        },
        columns : [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'name', name: 'name'},

            // ⬅️ Tambahin kolom rating
            {
                data: 'rating',
                name: 'rating',
                orderable: false,
                searchable: false,
                render: function (rating) {
                    return rating ? rating : '-';
                }
            },

            {data: 'created_at', name: 'created_at'},
            {
                data: 'image',
                render: (image) => `${image}`
            },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});

function deleteConfirm(id) {
Swal.fire({
    text: "Are you sure you want to delete data ?",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Delete'
}).then((result) => {
    if (result.value) {
        $('#submit_'+id).submit();
        Swal.fire('Deleted!', 'Mentor data deleted', 'success');
    }
})
}
</script>
@endpush
