@extends('layouts.backend.app', ['title' => 'Course'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Courses</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Courses</li>
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
                        <div class="card-header">
                            <h1 class="card-title">
                                MY COURSE
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('member.mycourse') }}" method="GET" class="mb-3 mt-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by course title..."
                                        value="{{ request()->search }}" name="search">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-info">
                                            <i class="fas fa-search"></i> Search
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <hr style="border:1px dashed #ccc;">
                            @forelse ($courses as $data)
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <img src="{{ $data->course->image }}" class="mr-3 shadow-custom w-100">
                                    </div>
                                    <div class="col-md-9 mb-3 text-dark">
                                        <h5 class="mt-2">{{ $data->course->name }}</h5>
                                        <p class="mt-2">{{ $data->course->sort_description }}</p>
                                        <hr>
                                        <!--mobile -->
                                        <div class="d-block d-md-none d-lg-none mt-3">
                                            <a href="{{ route('member.mycourse.course', $data->course->id) }}"
                                                class="btn shadow btn-dark btn-md mb-2 w-100">
                                                <i class="fas fa-play mr-1"></i>
                                                Lanjutkan Belajar
                                            </a>

                                            <button type="button" class="btn btn-info btn-md mb-2 w-100" data-toggle="modal"
                                                data-target="#modal-default{{ $data->course->id }}">
                                                <i class="fas fa-comments mr-1"></i> Review Course
                                            </button>

                                            @if ($data->course->link_whatsapp)
                                            <a href="{{ $data->course->link_whatsapp }}" target="_blank"
                                                    class="btn shadow btn-success btn-md mb-2 w-100">
                                                    <i class="fab fa-whatsapp mr-1"></i>
                                                    Join Grup Whatsapp
                                                </a>
                                            @endif

                                            @if ($data->course->link_telegram)
                                                <a href="{{ $data->course->link_telegram }}" target="_blank"
                                                    class="btn shadow btn-primary btn-md mb-2 w-100">
                                                    <i class="fab fa-telegram mr-1"></i>
                                                    Join Grup Telegram
                                                </a>
                                            @endif

                                            <div class="modal fade" id="modal-default{{ $data->course->id }}">
                                                <div class="modal-dialog">
                                                    <form action="{{ route('member.review', $data->course->id) }}" method="POST">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Review Course</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <select class="form-control @error('rating') is-invalid @enderror" name="rating" title="Rating">
                                                                        <option value="5">5 </option>
                                                                        <option value="4">4</option>
                                                                        <option value="3">3</option>
                                                                        <option value="2">2</option>
                                                                        <option value="1">1</option>
                                                                    </select>
                                                                    @error('rating')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Review</label>
                                                                    <textarea class="form-control @error('review') is-invalid @enderror" rows="4" placeholder="Review" name="review">{{ old('review') }}</textarea>
                                                                    @error('review')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                                <button class="btn btn-success" type="submit">
                                                                    <i class="fas fa-check mr-1"></i> Save Review
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end mobile -->
                                        <!-- desktop -->
                                        <div class="d-none d-md-block d-lg-block mt-3">
                                            <a href="{{ route('member.mycourse.course', $data->course->id) }}"
                                                class="btn shadow btn-dark btn-md mb-2">
                                                <i class="fas fa-play mr-1"></i>
                                                Lanjutkan Belajar
                                            </a>

                                            <button type="button" class="btn btn-info btn-md mb-2" data-toggle="modal"
                                                data-target="#modal-lg{{ $data->course->id }}">
                                                <i class="fas fa-comments mr-1"></i> Review Course
                                            </button>

                                            @if ($data->course->link_whatsapp)
                                            <a href="{{ $data->course->link_whatsapp }}" target="_blank"
                                                    class="btn shadow btn-success btn-md mb-2">
                                                    <i class="fab fa-whatsapp mr-1"></i>
                                                    Join Grup Whatsapp
                                                </a>
                                            @endif

                                            @if ($data->course->link_telegram)
                                                <a href="{{ $data->course->link_telegram }}" target="_blank"
                                                    class="btn shadow btn-primary btn-md mb-2">
                                                    <i class="fab fa-telegram mr-1"></i>
                                                    Join Grup Telegram
                                                </a>
                                            @endif

                                            <div class="modal fade" id="modal-lg{{ $data->course->id }}">
                                                <div class="modal-dialog modal-lg">
                                                    <form action="{{ route('member.review', $data->course->id) }}" method="POST">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Review Course</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <select class="form-control @error('rating') is-invalid @enderror" name="rating" title="Rating">
                                                                        <option value="5">5 </option>
                                                                        <option value="4">4</option>
                                                                        <option value="3">3</option>
                                                                        <option value="2">2</option>
                                                                        <option value="1">1</option>
                                                                    </select>
                                                                    @error('rating')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Review</label>
                                                                    <textarea class="form-control @error('review') is-invalid @enderror" rows="4" placeholder="Review" name="review">{{ old('review') }}</textarea>
                                                                    @error('review')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                                <button class="btn btn-success" type="submit">
                                                                    <i class="fas fa-check mr-1"></i> Save Review
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="modal-default{{ $data->course->id }}">
                                                <div class="modal-dialog">
                                                    <form action="{{ route('member.review', $data->course->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Review Course</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <select class="form-control @error('rating') is-invalid @enderror" name="rating" title="Rating">
                                                                        <option value="5">5 </option>
                                                                        <option value="4">4</option>
                                                                        <option value="3">3</option>
                                                                        <option value="2">2</option>
                                                                        <option value="1">1</option>
                                                                    </select>
                                                                    @error('rating')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Review</label>
                                                                    <textarea class="form-control @error('review') is-invalid @enderror" rows="4" placeholder="Review" name="review">{{ old('review') }}</textarea>
                                                                    @error('review')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                                <button class="btn btn-primary" type="submit">
                                                                    <i class="fas fa-check mr-1"></i> Update role
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end desktop -->
                                        <hr>
                                        <div class="mt-2">
                                            Licensed to :
                                            <p>
                                                <b>{{ $data->transaction->user->name }}</b>
                                                <i>({{ $data->transaction->user->email }})</i><br>
                                                {{ $data->transaction->created_at->format('d F Y H:i:s') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border:1px dashed #ccc;">
                            @empty
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ asset('course.svg') }}" class="img-fluid" width="30%">
                                    </div>
                                    <div class="col-12 my-4">
                                        <h5 class="text-center font-weight-bold text-md">
                                            Anda belum memiliki course !
                                        </h5>
                                        <p class="text-center text-secondary text-sm">
                                            Silahkan tambahkan playlist course anda, dan mulailah bangun diri anda sesuai dengan
                                            yang anda impikan.
                                        </p>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('course.index') }}" class="btn btn-dark btn-sm">
                                                Lihat Daftar Course
                                            </a>
                                        </div> 
                                    </div>
                                </div>
                            @endforelse
                            <div class="d-flex justify-content-end">{{ $courses->links() }}</div>
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