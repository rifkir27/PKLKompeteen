@extends('layouts.backend.app', ['title' => 'Detail Series'])

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/prism/prism.css') }}">

<style>
    /* Style untuk iframe */
    iframe {
        width: 100%; /* Lebar 100% dari container */
        height: 76vh; /* Tinggi 50% dari tinggi viewport */
        /* Tambahan gaya CSS lainnya */
    }
</style>

@endpush

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('admin.courses.series.index', $course->id) }}" class="btn btn-success" style="margin-bottom:10px; margin-top:10px;"><i class="fa fa-chevron-left"></i> Back</a>
                    <a href="{{ route('admin.courses.series.edit', [$course->id, $series->id]) }}" class="btn btn-warning" style="margin-bottom:10px; margin-top:10px;"><i class="fa fa-edit"></i> Edit</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if ($series->video_code)
                        <div class="card">
                            <div class="card-header">
                                <h3 style="font-family:Comic Sans MS">{{ $series->title }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body line-numbers">
                                <iframe src="https://www.youtube.com/embed/{{ $series->video_code }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    @endif

                    @if ($series->description)
                        <div class="card">
                            <div class="card-header">
                                <h3 style="font-family:Comic Sans MS">Bahasan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body line-numbers">
                                {!! $series->description !!}
                            </div>
                            <!-- /.card-body -->
                        </div>
                    @endif
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
<script src="{{ asset('assets/plugins/prism/prism.js') }}"></script>
@endpush