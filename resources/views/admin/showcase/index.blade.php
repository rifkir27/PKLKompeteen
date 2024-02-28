@extends('layouts.backend.app', ['title' => 'Showcase'])

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Showcase</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Showcase</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach ($showcases as $showcase)
                    <div class="col-lg-4 col-12">
                        <div class="card card-dark card-outline shadow-none">
                            <div class="ribbon-wrapper ribbon-lg">
                                <div class="ribbon bg-primary">
                                    {{ $showcase->created_at->diffForHumans() }}
                                </div>
                            </div>
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="img-fluid" src="{{ $showcase->cover }}" alt="cover">
                                </div>
                                <h3 class="profile-username text-center">{{ $showcase->name }}</h3>
                                <h3 class="text-center font-weight-bold">
                                    {{ $showcase->title }}
                                </h3>
                                <p class="text-center text-secondary">{{ $showcase->description }}</p>
                                <hr>
                                <div>
                                    <div>
                                        <i class="fas fa-circle text-xs"></i>
                                        Course
                                    </div>
                                    <p>{{ $showcase->course->name }}</p>
                                </div>
                                <hr />
                                <div>
                                    <div>
                                        <i class="fas fa-circle text-xs"></i>
                                        User
                                    </div>
                                    <p>{{ $showcase->user->name }} - ({{ $showcase->user->email }})</p>
                                </div>
                                <hr />
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection