@extends('layouts.backend.app', ['title' => 'Mentor Detail'])

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mentor Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Mentor Detail</li>
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
                    <a href="{{ route('admin.mentor.edit', $mentor->id) }}" class="btn btn-warning" style="margin-bottom:10px;">Update Status Mentor</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Mentor Detail</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td width="30%">Name</td>
                                        <td>
                                            {{ $mentor->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Description</td>
                                        <td>
                                            {{ $mentor->description }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Image</td>
                                        <td>
                                            @php
                                            $a =  explode("/",$mentor->image)[3];
                                            @endphp
                                        <br>
                                        <img src="{{asset('/storage/mentor/'.$a)}}" alt="" height="100px" width="100px" srcset="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Status</td>
                                        <td>
                                            {{-- @if ($mentor->status == 'success')
                                                <button class="btn btn-primary btn-sm" disabled>
                                                    Aktif
                                                </button>
                                            @else
                                                <button class="btn btn-danger btn-sm" disabled>
                                                    Tidak Aktif
                                                </button>
                                            @endif --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tanggal Dibuat</td>
                                        <td>
                                            {{ $mentor->created_at->format('d M Y H:i:s') }}
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
