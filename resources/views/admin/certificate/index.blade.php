<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@extends('layouts.backend.app', ['title' => 'Certificate'])

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
                        <h1>Kategori Penilaian</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Certificate</li>
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
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('certificate.certificate') }}" method="GET">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="templatename" class="form-label">Nama Template</label>
                                        <input type="text" class="form-control" name="templatename" id="templatename">
                                    </div>
                                    <div class="mb-3">
                                        <label for="size" class="form-label">Ukuran</label>
                                        <select class="form-select" aria-label="Pilih ukuran template" id="size">
                                            <option selected>Pilih ukuran template</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="orientation" class="form-label">Orientasi</label>
                                        <select class="form-select" aria-label="Pilih orientasi template" id="orientation">
                                            <option selected>Pilih orientasi template</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Simpan Dan Buat Template</button>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                {{-- <a href="{{ route('admin.benefits.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create New</a> --}}
                                Variables that can be embedded in certificates
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Variable Name</th>
                                            <th>information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>{name}</td>
                                            <td>Menampilkan Nama Peserta</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>{date_of_birth}</td>
                                            <td>Menampilkan Tanggal Lahir Peserta (format: ddmmYY)</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>{gender}</td>
                                            <td>Menampilkan Jenis Kelamin Peserta (Male / Female)</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>{student_nummber}</td>
                                            <td>Menampilkan ID Pendaftaran Siswa</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>{date_of_completion}</td>
                                            <td>Menampilkan Tanggal Selesai Menonton Peserta</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Variable Name</th>
                                            <th>information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>{name}</td>
                                            <td>Menampilkan Nama Peserta</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>{date_of_birth}</td>
                                            <td>Menampilkan Tanggal Lahir Peserta (format: ddmmYY)</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>{gender}</td>
                                            <td>Menampilkan Jenis Kelamin Peserta (Male / Female)</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>{student_nummber}</td>
                                            <td>Menampilkan ID Pendaftaran Siswa</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>{date_of_completion}</td>
                                            <td>Menampilkan Tanggal Selesai Menonton Peserta</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Variable Name</th>
                                            <th>information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>{name}</td>
                                            <td>Menampilkan Nama Peserta</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>{date_of_birth}</td>
                                            <td>Menampilkan Tanggal Lahir Peserta (format: ddmmYY)</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>{gender}</td>
                                            <td>Menampilkan Jenis Kelamin Peserta (Male / Female)</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>{student_nummber}</td>
                                            <td>Menampilkan ID Pendaftaran Siswa</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>{date_of_completion}</td>
                                            <td>Menampilkan Tanggal Selesai Menonton Peserta</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
