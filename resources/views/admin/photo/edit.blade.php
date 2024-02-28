@extends('layouts.backend.app', ['title' => 'Edit Photo'])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Photo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Photo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- /.card -->
                    <!-- Horizontal Form -->
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.courses.photos.index', $course->id) }}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Back</a>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="POST" action="{{ route('admin.courses.photos.update', [$course->id, $photo->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name', $photo->name) }}">
                                    @error('name')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-form-label">Photo</label>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" placeholder="photo" name="photo" value="{{ old('photo') }}">
                                    @error('photo')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!-- /.card-footer -->
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
<!-- /.content-wrapper -->
@endsection