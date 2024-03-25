@extends('layouts.backend.app', ['title' => 'Testimonial Detail'])

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
                        <h1>Testimonial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Testimonial</li>
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
                        <div class="card card-dark">
                            <div class="row">
                                <div class="card-header">
                                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-success"><i
                                            class="fa fa-chevron-left"></i> Back</a>
                                </div>
                            </div>
                            <div class="card-header">
                                <h3 class="card-title">Testimonial Detail</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <tr>
                                                <td width="30%">Name</td>
                                                <td>
                                                    {{ $testimonial->name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">Description</td>
                                                <td>
                                                    {!! $testimonial->description !!}
                                                </td>
                                            </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
