@extends('layouts.backend.app', ['title' => 'Add Articles'])

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
                        <h1>Add Articles</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Add Articles</li>
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
                                <a href="{{ route('admin.articles.index') }}" class="btn btn-success"><i
                                        class="fa fa-chevron-left"></i> Back</a>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="POST" action="{{ route('admin.articles.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Content</label>
                                            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                                            @error('content')
                                                <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="user_id" class="form-label">User ID</label>
                                            <input type="number" class="form-control" id="user_id" name="user_id"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="published_at" class="form-label">Pulished at</label>
                                            <input type="datetime-local" class="form-control" id="published_at"
                                                name="published_at">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
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

@push('scripts')
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $('.select2').select2()
    </script>

    <script src="https://cdn.tiny.cloud/1/p3bgwt3k7550en3tmyd4pd3xrdk6sjx2j0j1ywb7zxgiejix/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss fullscreen',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | fullscreen',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Eduthings',
            height: '720',
            image_advtab: true,
            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            },
            codesample_languages: [
                { text: 'Bash', value: 'bash'},
                { text: 'HTML/XML', value: 'markup'},
                { text: 'JavaScript', value: 'javascript'},
                { text: 'CSS', value: 'css'},
                { text: 'PHP', value: 'php'},
                { text: 'Ruby', value: 'ruby'},
                { text: 'Python', value: 'python'},
                { text: 'Java', value: 'java'},
                { text: 'C', value: 'c'},
                { text: 'C#', value: 'csharp'},
                { text: 'C++', value: 'cpp'}
            ],
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script>

@endpush