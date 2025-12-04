@extends('layouts.backend.app', ['title' => 'Edit Series'])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Series</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Series</li>
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
                            <a href="{{ route('admin.courses.series.index', $course->id) }}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Back</a>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="POST" action="{{ route('admin.courses.series.update', [$course->id, $series->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{ old('title', $series->title) }}">
                                    @error('title')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Number Of Series</label>
                                    <input type="number" class="form-control @error('number_of_series') is-invalid @enderror" placeholder="Number Of Series" name="number_of_series" value="{{ old('number_of_series', $series->number_of_series) }}">
                                    @error('number_of_series')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Intro</label>
                                    <select class="form-control @error('intro') is-invalid @enderror" name="intro">
                                        <option value="">[Choose Intro]</option>
                                        <option value="1" @selected($errors->any() ? (old('intro') == "1") : ($series->intro == "1"))>Premium</option>
                                        <option value="0" @selected($errors->any() ? (old('intro') == "0") : ($series->intro == "0"))>Free</option>
                                    </select>
                                    @error('intro')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Content Type</label>
                                    <select class="form-control @error('content_type') is-invalid @enderror" name="content_type" id="content_type">
                                        <option value="">[Choose Content Type]</option>
                                        <option value="video" @selected($errors->any() ? (old('content_type') == "video") : ($series->content_type == "video"))>Video</option>
                                        <option value="text" @selected($errors->any() ? (old('content_type') == "text") : ($series->content_type == "text"))>Text</option>
                                        <option value="quiz" @selected($errors->any() ? (old('content_type') == "quiz") : ($series->content_type == "quiz"))>Quiz</option>
                                    </select>
                                    @error('content_type')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="form-group" id="video_code_group" style="{{ ($errors->any() ? old('content_type', $series->content_type) : $series->content_type) != 'video' ? 'display: none;' : '' }}">
                                    <label class="col-form-label">Video Code/Link</label>
                                    <input type="text" class="form-control @error('video_code') is-invalid @enderror" name="video_code" id="video_code_input" placeholder="Enter YouTube URL, Google Drive link, or upload file below" value="{{ old('video_code', $series->video_code) }}">
                                    <small class="form-text text-muted" id="video_help_text">Enter YouTube URL, Google Drive link, or upload file</small>
                                    @error('video_code')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group" id="video_file_group" style="display: none;">
                                    <label class="col-form-label">Video File</label>
                                    <input type="file" class="form-control @error('video_code') is-invalid @enderror" name="video_file" accept="video/*">
                                    <small class="form-text text-muted">Upload video file (MP4, AVI, MOV, WMV, FLV, MKV - Max 100MB)</small>
                                    @if($series->video_source == 'file' && $series->video_code)
                                        <small class="form-text text-info">Current file: {{ basename($series->video_code) }}</small>
                                    @endif
                                    @error('video_code')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group" id="text_content_group" style="{{ ($errors->any() ? old('content_type', $series->content_type) : $series->content_type) != 'text' ? 'display: none;' : '' }}">
                                    <label class="col-form-label">Text Content</label>
                                    <textarea name="text_content" id="text_content" class="form-control @error('text_content') is-invalid @enderror">{{ old('text_content', $series->text_content) }}</textarea>
                                    @error('text_content')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Description</label>
                                    <textarea name="description" id="description" style="height: 200px" class="form-control @error('description') is-invalid @enderror">{{ old('description', $series->description) }}</textarea>
                                    @error('description')
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

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/p3bgwt3k7550en3tmyd4pd3xrdk6sjx2j0j1ywb7zxgiejix/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
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

        // Toggle content fields based on content type
        document.getElementById('content_type').addEventListener('change', function() {
            var contentType = this.value;
            var videoCodeGroup = document.getElementById('video_code_group');
            var videoFileGroup = document.getElementById('video_file_group');
            var textGroup = document.getElementById('text_content_group');

            if (contentType === 'video') {
                videoCodeGroup.style.display = 'block';
                textGroup.style.display = 'none';
            } else if (contentType === 'text') {
                videoCodeGroup.style.display = 'none';
                videoFileGroup.style.display = 'none';
                textGroup.style.display = 'block';
                // Clear video code when text is selected
                document.getElementById('video_code_input').value = '';
            } else {
                videoCodeGroup.style.display = 'none';
                videoFileGroup.style.display = 'none';
                textGroup.style.display = 'none';
            }
        });


  </script>
@endpush
