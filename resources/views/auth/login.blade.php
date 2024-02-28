@extends('layouts.auth.app', ['title' => 'Login'])

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                    name="email" value="{{ old('email') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                    name="password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fa fa-lock"></span>
                    </div>
                </div>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>

        </form>
        {{-- <div class="mt-4">
            <p class="mb-0">
                <a class="btn btn-danger btn-block" href="{{ '/auth/redirect'}}"><i class="fa fa-google"></i> Sign In With Google</a>
            </p>
        </div> --}}
        <div class="mt-4">
            <p class="mb-0 text-center">
                <a href="{{ route('register') }}">Create new account</a>
            </p>
            <br>
            <p class="mb-0 text-center">
                <a href="{{ route('home') }}">Back to Home</a>
            </p>
        </div>
    </div>
@endsection