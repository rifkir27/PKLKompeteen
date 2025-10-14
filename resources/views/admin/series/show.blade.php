@extends('layouts.backend.app', ['title' => 'Detail Series'])

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/prism/prism.css') }}">
<style>
    video {
        width: 100%;
        height: 76vh;
        border-radius: 10px;
        background: #000;
    }
</style>
@endpush

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('admin.courses.series.index', $course->id) }}" class="btn btn-success" style="margin-bottom:10px; margin-top:10px;">
                        <i class="fa fa-chevron-left"></i> Back
                    </a>
                    <a href="{{ route('admin.courses.series.edit', [$course->id, $series->id]) }}" class="btn btn-warning" style="margin-bottom:10px; margin-top:10px;">
                        <i class="fa fa-edit"></i> Edit
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    @if ($series->video_path)
                        <div class="card">
                            <div class="card-header">
                                <h3 style="font-family:Comic Sans MS">{{ $series->title }}</h3>
                            </div>
                            <div class="card-body line-numbers">
                                <video controls>
                                    <source src="{{ asset('storage/' . $series->video_path) }}" type="video/mp4">
                                    Browser kamu tidak mendukung video.
                                </video>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-warning text-center">
                            Belum ada video yang diupload untuk series ini.
                        </div>
                    @endif

                    @if ($series->description)
                        <div class="card">
                            <div class="card-header">
                                <h3 style="font-family:Comic Sans MS">Bahasan</h3>
                            </div>
                            <div class="card-body line-numbers">
                                {!! $series->description !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/plugins/prism/prism.js') }}"></script>
@endpush
    