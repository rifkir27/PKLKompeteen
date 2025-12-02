@extends('layouts.backend.app', ['title' => 'Favorite Courses'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Favorite Courses</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('member.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Favorite Courses</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if($favorites->count() > 0)
                <div class="row">
                    @foreach($favorites as $course)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column">
                                    <div class="position-relative">
                                        <img src="{{ $course->image }}" class="card-img-top" alt="{{ $course->name }}" style="height: 200px; object-fit: cover;">
                                        <button class="btn btn-sm btn-outline-danger position-absolute top-0 end-0 m-2 favorite-btn"
                                                data-course-id="{{ $course->id }}"
                                                data-url="{{ route('course.favorite', $course) }}">
                                            <i class="fas fa-heart text-danger"></i>
                                        </button>
                                    </div>
                                    <h5 class="card-title mt-3">{{ $course->name }}</h5>
                                    <p class="card-text text-muted">{{ Str::limit($course->sort_description, 100) }}</p>
                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <small class="text-muted">
                                                <i class="fas fa-user"></i> {{ $course->mentor?->name ?? 'No Mentor' }}
                                            </small>
                                            <small class="text-muted">
                                                <i class="fas fa-clock"></i> {{ $course->series->count() }} Series
                                            </small>
                                        </div>
                                        <a href="{{ route('course.show', $course->slug) }}" class="btn btn-primary btn-sm w-100">
                                            View Course
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-heart fa-3x text-muted mb-3"></i>
                    <h4 class="text-muted">No Favorite Courses Yet</h4>
                    <p class="text-muted">Start exploring courses and add them to your favorites!</p>
                    <a href="{{ route('course.index') }}" class="btn btn-primary">Browse Courses</a>
                </div>
            @endif
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('.favorite-btn').on('click', function(e) {
        e.preventDefault();
        var btn = $(this);
        var courseId = btn.data('course-id');
        var url = btn.data('url');

        $.ajax({
            url: url,
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.is_favorited) {
                    btn.find('i').removeClass('text-gray-400').addClass('text-red-500');
                } else {
                    // Remove from favorites list
                    btn.closest('.col-md-4').fadeOut(300, function() {
                        $(this).remove();
                        // Check if no favorites left
                        if ($('.col-md-4').length === 0) {
                            location.reload();
                        }
                    });
                }
            },
            error: function(xhr) {
                if (xhr.status === 401) {
                    alert('Please login to manage favorites.');
                } else {
                    alert('An error occurred. Please try again.');
                }
            }
        });
    });
});
</script>
@endpush
