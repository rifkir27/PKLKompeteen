@extends('layouts.backend.app', ['title' => 'Infrastructure Detail'])

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Infrastructure Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Infrastructure Detail</li>
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
                    <a href="{{ route('admin.infrastructure.edit', $infrastructure->id) }}" class="btn btn-warning" style="margin-bottom:10px;">Update Status Infrastructure</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Infrastructure Detail</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td width="30%">Name</td>
                                        <td>
                                            {{ $infrastructure->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Description</td>
                                        <td>
                                            {{ $infrastructure->description }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Image</td>
                                        <td>
                                            @php
                                            $a =  explode("/",$infrastructure->image)[3];
                                            @endphp
                                        <br>
                                        <img src="{{asset('/storage/infrastructure/'.$a)}}" alt="" height="100px" width="100px" srcset="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tanggal Dibuat</td>
                                        <td>
                                            {{ $infrastructure->created_at->format('d M Y H:i:s') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
