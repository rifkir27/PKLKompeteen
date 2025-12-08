<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - {{ $title }}</title>
    <link rel="icon" href="{{ asset('assets/dist/img/logo-icon.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/dist/img/logo-icon.png') }}" type="image/png">

    <meta name="description" content="{{ empty($meta_description) ? env('META_DESCRIPTION') : $meta_description }}">
    <meta name="keywords" content="{{ empty($meta_keywords) ? env('META_KEYWORDS') : $meta_keywords }}">

    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ empty($meta_description) ? env('META_DESCRIPTION') : $meta_description }}">
    <meta property="og:image" content="{{ empty($meta_image) ? asset('assets/dist/img/logo-logo-eduthings.png.png') : $meta_image }}">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ empty($meta_description) ? env('META_DESCRIPTION') : $meta_description }}">
    <meta name="twitter:image" content="{{ empty($meta_image) ? asset('assets/dist/img/logo-logo-eduthings.png.png') : $meta_image }}">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('css')

    <style>
        .float{
            position:fixed;
            width:50px;
            height:50px;
            bottom:20px;
            right:20px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 2px #ccc;
            z-index:100;
        }

        .my-float{
            margin-top:10px;
        }
    </style>
</head>

<body style="font-family: 'Open Sans', sans-serif;">
    <!-- navbar -->
    @include('layouts.frontend.partials.navbar')

    <!-- content -->
    @yield('content')

    <!-- toastr -->
    @include('sweetalert::alert')

    <!-- footer -->
    @include('layouts.frontend.partials.footer')

    <a href="https://wa.me/6281212126043?text=Hallo%2C%20Admin%20saya%20ingin%20bertanya...." class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function deleteData(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            })

            swalWithBootstrapButtons.fire({
                title: 'Apakah anda ingin mengeluarkan item ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Nope!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Data kamu aman !',
                        '',
                        'error'
                    )
                }
            })
        }
    </script>
    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.favorite-btn').on('click', function(e) {
            e.preventDefault();
            const btn = $(this);
            const courseId = btn.data('course-id');
            const url = btn.data('url');
            const icon = btn.find('i');

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (btn.find('i').next().length > 0) {
                        // Button has text, update html
                        if (response.is_favorited) {
                            btn.html('<i class="fas fa-heart text-red-500"></i> Favorited');
                        } else {
                            btn.html('<i class="fas fa-heart text-gray-400"></i> Add to Favorite');
                        }
                    } else {
                        // Button has no text, update icon class
                        if (response.is_favorited) {
                            icon.removeClass('text-gray-400').addClass('text-red-500');
                        } else {
                            icon.removeClass('text-red-500').addClass('text-gray-400');
                        }
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 401) {
                        alert('Please login to favorite courses.');
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                }
            });
        });
    });
    </script>
    @stack('js')
</body>

</html>