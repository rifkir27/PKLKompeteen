<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | {{ $course->name }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/prism/prism.css') }}">
    <link rel="icon" href="{{ asset('assets/dist/img/logo-icon.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/dist/img/logo-icon.png') }}" type="image/png">
    
    <style>
        .nav-link-custom {
            border:1px solid #eee;
            margin-top: 10px;
            min-height: 60px;
        }

        .nav-link-bab {
            margin-left:-10px;
            margin-top:10px;
            color:#eee;
        }

        .nav-link-bab p, .nav-link-bab i {
            color:#eee;
        }

        iframe {
            width: 100%; /* Lebar 100% dari container */
            height: 76vh; /* Tinggi 50% dari tinggi viewport */
            /* Tambahan gaya CSS lainnya */
        }

    </style>
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('member.dashboard') }}" class="nav-link">Dashboard</a>
                </li>
                @role('member')
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ route('member.mycourse') }}" class="nav-link">My Courses</a>
                    </li>
                @endrole
            </ul>
        
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">
                            {{ Auth::user()->unreadNotifications->count() }}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">
                            {{ Auth::user()->unreadNotifications->count() }} Notifications
                        </span>
                        <div class="dropdown-divider"></div>
                        @foreach (Auth::user()->notifications as $notification)
                            @if ($notification->read_at == null)
                                <form action="{{ route('admin.markNotification', $notification->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-info-circle mr-2"></i>{{ $notification->data['message'] }}
                                        <span
                                            class="float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>
                                    </button>
                                </form>
                            @endif
                            @if ($loop->last)
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('admin.markAllRead') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item dropdown-footer">Mark as Read</button>
                                </form>
                            @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/" class="brand-link">
                <div class="text-center">
                    <span class="brand-text font-weight-bold">Eduthings</span>
                </div>
            </a>
        
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        @foreach ($course->series as $index => $series)
                            @php
                                $isAccessible = true;
                                foreach ($course->series as $s) {
                                    if ($s->number_of_series < $series->number_of_series && !in_array($s->id, $seriesChecked)) {
                                        $isAccessible = false;
                                        break;
                                    }
                                }
                            @endphp
                            <li class="nav-item nav-item-custom" id="{{ $series->id }}">
                                @if ($isAccessible)
                                    <a href="{{ route('member.mycourse.course.show', [$course->id, $series->id]) }}" class="nav-link nav-link-custom {{ Request::segment(6) == $series->id ? 'active' : '' }}">
                                        @if (in_array($series->id, $seriesChecked))
                                            <i class="fas fa-check-circle" style="color:#4dc771;"></i>
                                        @else
                                            <i class="fas fa-check-circle"></i>   
                                        @endif
                                        <p>
                                            {{ $series->title }}
                                        </p>
                                    </a>
                                @else
                                    <a href="#" class="nav-link nav-link-custom disabled" style="pointer-events: none; opacity: 0.5;">
                                        <i class="fas fa-lock"></i>
                                        <p>
                                            {{ $series->title }}
                                        </p>
                                    </a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </aside>

        {{-- content --}}
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if ($series->video_code)
                                @php
                                    function extractGoogleDriveId($link) {
                                        if (preg_match('/\/d\/([a-zA-Z0-9_-]+)/', $link, $matches)) {
                                            return $matches[1];
                                        }
                                        return $link; // assume it's already ID
                                    }
                                    $driveId = extractGoogleDriveId($seriesDetail->video_code);
                                @endphp
                                <div class="card">
                                    <div class="card-header">
                                        <h3 style="font-family:Comic Sans MS">{{ $seriesDetail->title }}</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body line-numbers">
                                        <iframe src="https://drive.google.com/file/d/{{ $driveId }}/preview" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    @if ($seriesDetail->description == null)
                                        <div class="card-footer">
                                            @if($prevSeries)
                                                <a href="{{ route('member.mycourse.course.show', [$course->id, $prevSeries->id]) }}" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Sebelumnya</a>
                                            @endif
                                            
                                            @if($nextSeries)
                                                <a href="{{ route('member.mycourse.course.show', [$course->id, $nextSeries->id]) }}?series_checked={{ $seriesDetail->id }}" class="btn btn-success float-right">Selesai & Lanjutkan <i class="fa fa-chevron-right"></i></a>
                                            @else
                                                <a href="{{ route('member.mycourse.course.show', [$course->id, $seriesDetail->id]) }}?series_checked={{ $seriesDetail->id }}" class="btn btn-danger float-right"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Selesai</a>
                                            @endif
                                        </div>
                                    @endif
                                    <!-- /.card-body -->
                                </div>
                            @endif

                            @if ($seriesDetail->description)
                                <div class="card">
                                    <div class="card-header">
                                        <h3 style="font-family:Comic Sans MS">Bahasan</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body line-numbers">
                                        @if($seriesDetail->content_type == 'text')
                                            {!! $seriesDetail->text_content !!}
                                        @else
                                            {!! $seriesDetail->description !!}
                                        @endif
                                    </div>
                                    <div class="card-footer">
                                        @if($prevSeries)
                                            <a href="{{ route('member.mycourse.course.show', [$course->id, $prevSeries->id]) }}" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Sebelumnya</a>
                                        @endif
                                        
                                        @if($nextSeries)
                                            <a href="{{ route('member.mycourse.course.show', [$course->id, $nextSeries->id]) }}?series_checked={{ $seriesDetail->id }}" class="btn btn-success float-right">Selesai & Lanjutkan <i class="fa fa-chevron-right"></i></a>
                                        @else
                                            <a href="{{ route('member.mycourse.course.show', [$course->id, $seriesDetail->id]) }}?series_checked={{ $seriesDetail->id }}" class="btn btn-danger float-right"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Selesai</a>
                                        @endif
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            @endif
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        @include('sweetalert::alert')

        @include('layouts.backend.partials.footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/prism/prism.js') }}"></script>

    <script type="text/javascript">
        var id = "{{ $seriesDetail->id }}";
        document.getElementById(id).scrollIntoView();
    </script>
</body>

</html>