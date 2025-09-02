@extends('layouts.backend.app', ['title' => 'Profile'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                               <img src="{{ $user->avatar }}" 
                                alt="User profile picture"
                                class="profile-user-img img-circle"
                                style="width:120px; height:120px; object-fit:cover; border-radius:50%;">

                            </div>
                            <h3 class="profile-username text-center">{{ $user->name }}</h3>
                            <p class="text-muted text-center">{{ $user->about }}</p>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                    </svg>
                                    {{ $user->instagram }}
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5">
                                        </path>
                                    </svg>
                                    {{ $user->github }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Password</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <form class="form-horizontal" action="{{ route('admin.user.profile.update', $user->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                        <label class="col-form-label">Avatar</label>
                                        <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                            name="avatar" accept="image/*">
                                        @error('avatar')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>


                                        <div class="form-group">
                                            <label class="col-form-label">Full Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{ old('name', $user->name) }}">
                                            @error('name')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">Username</label>
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username', $user->username) }}">
                                            @error('username')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $user->email }}"disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">github</label>
                                            <input type="text" class="form-control @error('github') is-invalid @enderror" placeholder="github" name="github" value="{{ old('github', $user->github) }}">
                                            @error('github')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">instagram</label>
                                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" placeholder="instagram" name="instagram" value="{{ old('instagram', $user->instagram) }}">
                                            @error('instagram')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label">about</label>
                                            <textarea class="form-control @error('about') is-invalid @enderror" placeholder="about" name="about">{{ old('about', $user->about) }}</textarea>
                                            @error('about')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">
                                                <i class="fas fa-check mr-1"></i> Update Profile
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="password">
                                    <form class="form-horizontal" action="{{ route('admin.user.profile.password', $user->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <x-input title="Current Password" type="password" name="current_password" value=""
                                            placeholder="" />
                                        <x-input title="New Password" type="password" name="password" value=""
                                            placeholder="" />
                                        <x-input title="Password Confirmation" type="password" name="password_confirmation"
                                            value="" placeholder="" />
                                        <div class="form-group row">
                                            <button type="submit" class="btn btn-success">
                                                <i class="fas fa-check mr-1"></i> Update Password
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection