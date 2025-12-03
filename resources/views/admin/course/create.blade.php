@extends('layouts.backend.app', ['title' => 'Add Course'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endpush

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Course</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Add Course</li>
                    </ol>
                </div>
            </div>
        </div>
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
                            <a href="{{ route('admin.courses.index') }}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Back</a>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Category</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected($category->id == old('category_id'))>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">demo</label>
                                    <input type="text" class="form-control @error('demo') is-invalid @enderror" placeholder="demo" name="demo" value="{{ old('demo') }}">
                                    @error('demo')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Price Before Discount</label>
                                    <input type="number" class="form-control @error('price_before_discount') is-invalid @enderror" placeholder="Price Before Discount" name="price_before_discount" value="{{ old('price_before_discount') }}">
                                    @error('price_before_discount')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Price After Discount</label>
                                    <input type="number" class="form-control @error('price_after_discount') is-invalid @enderror" placeholder="Price After Discount" name="price_after_discount" value="{{ old('price_after_discount') }}">
                                    @error('price_after_discount')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" placeholder="image" name="image" value="{{ old('image') }}">
                                    @error('image')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Benefit</label>
                                    <select class="select2 form-control @error('description') is-invalid @enderror" multiple="multiple" name="benefits[]" data-placeholder="Select Benefit">
                                        <option value="">[ Select ]</option>
                                        @foreach ($benefits as $benefit)
                                            <option value="{{ $benefit->id }}">{{ $benefit->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('benefits')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Sort Description</label>
                                    <textarea rows="10" name="sort_description" class="form-control @error('sort_description') is-invalid @enderror">{{ old('sort_description') }}</textarea>
                                    @error('sort_description')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label"><h5><i class="fas fa-book"></i> Course Materials</h5></label>
                                    <div class="card">
                                        <div class="card-header">
                                            <button type="button" class="btn btn-primary btn-sm" id="add-material">
                                                <i class="fas fa-plus"></i> Add Material
                                            </button>
                                        </div>
                                        <div class="card-body" id="materials-container">
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Add course materials/series. You can add multiple materials with different content types.</small>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Link Telegram</label>
                                    <input type="text" class="form-control @error('link_telegram') is-invalid @enderror" placeholder="Link Telegram" name="link_telegram" value="{{ old('link_telegram') }}">
                                    @error('link_telegram')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Link Whatsapp</label>
                                    <input type="text" class="form-control @error('link_whatsapp') is-invalid @enderror" placeholder="Link Whatsapp" name="link_whatsapp" value="{{ old('link_whatsapp') }}">
                                    @error('link_whatsapp')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label class="col-form-label">Mentor</label>
                                <select class="form-control @error('mentor_id') is-invalid @enderror" name="mentor_id">
                                    <option value="">[ Select Mentor ]</option>
                                    @foreach ($mentors as $mentor)
                                        <option value="{{ $mentor->id }}" @selected($mentor->id == old('mentor_id'))>
                                            {{ $mentor->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('mentor_id')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                                <div class="form-group">
                                    <label class="col-form-label">Tools</label>
                                    <select class="select2 form-control @error('tools') is-invalid @enderror" multiple="multiple" name="tools[]" data-placeholder="Select Tools">
                                        <option value="">[ Select ]</option>
                                        @foreach ($tools as $tool)
                                            <option value="{{ $tool->id }}">{{ $tool->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tools')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <small class="form-text text-muted">Pilih tools yang dibutuhkan untuk kursus ini</small>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Is Published</label>
                                    <select class="form-control @error('is_published') is-invalid @enderror" name="is_published">
                                        <option value="">[ Select ]</option>
                                        <option value="1" @selected(old('is_published') == "1")>Published</option>
                                        <option value="0" @selected(old('is_published') == "0")>Not Published</option>
                                    </select>
                                    @error('is_published')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Certificate Google Drive Link</label>
                                    <input type="url" class="form-control @error('certificate_drive_link') is-invalid @enderror" placeholder="https://drive.google.com/..." name="certificate_drive_link" value="{{ old('certificate_drive_link') }}">
                                    @error('certificate_drive_link')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <small class="form-text text-muted">Link Google Drive untuk file sertifikat kursus (opsional)</small>
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
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $('.select2').select2()
    </script>

<script>
    let materialCount = 0;

function getMaterialTemplate(index) {
    return `
        <div class="material-item card mb-3" data-material="${index}">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="mb-0">Material #${index + 1}</h6>
                <button type="button" class="btn btn-danger btn-sm remove-material">
                    <i class="fas fa-trash"></i> Remove
                </button>
            </div>

            <div class="card-body">

                <!-- TITLE (FULL WIDTH) -->
                <div class="form-group mb-3">
                    <label>Title *</label>
                    <input type="text" class="form-control" name="series[${index}][title]" required>
                </div>

                <!-- CONTENT TYPE + VIDEO SOURCE + TYPE + SERIES NUMBER (4 COLUMNS) -->
                <div class="row mb-3">

                    <!-- Content Type -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Content Type *</label>
                            <select class="form-control material-content-type" name="series[${index}][content_type]" required>
                                <option value="">Select</option>
                                <option value="video">Video</option>
                                <option value="text">Text</option>
                                <option value="quiz">Quiz</option>
                            </select>
                        </div>
                    </div>

                    <!-- Video Source -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Video Source</label>
                            <select class="form-control material-video-source" name="series[${index}][video_source]">
                                <option value="">Select</option>
-                                <option value="youtube">YouTube</option>
                                <option value="drive">Google Drive</option>
                            </select>
                        </div>
                    </div>

                    <!-- Type -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Type *</label>
                            <select class="form-control" name="series[${index}][intro]" required>
                                <option value="">Select</option>
                                <option value="0">Free</option>
                                <option value="1">Premium</option>
                            </select>
                        </div>
                    </div>

                    <!-- Series Number -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Series Number *</label>
                            <input type="number" class="form-control" name="series[${index}][number_of_series]" min="1" required>
                        </div>
                    </div>

                </div>

                <!-- VIDEO FILE INPUT (for file source) -->
                <div class="form-group video-file-group" style="display:none;">
                    <label>Upload Video File *</label>
                    <input type="file" class="form-control" name="series[${index}][video_file]" accept="video/*">
                </div>

                <!-- VIDEO URL INPUT (for youtube or drive) -->
                <div class="form-group video-url-group" style="display:none;">
                    <label>Video URL *</label>
                    <input type="text" class="form-control" name="series[${index}][video_code]" placeholder="https://www.youtube.com/... or Google Drive Link">
                </div>

                <!-- TEXT CONTENT INPUT -->
                <div class="form-group text-content-group" style="display:none;">
                    <label>Text Content *</label>
                    <textarea class="form-control" name="series[${index}][text_content]" rows="3"></textarea>
                </div>

                <!-- DESCRIPTION -->
                <div class="form-group mt-3">
                    <label>Description</label>
                    <textarea class="form-control" name="series[${index}][description]" rows="2"></textarea>
                </div>

            </div>
        </div>
    `;
}

    document.getElementById('add-material').addEventListener('click', function() {
        const container = document.getElementById('materials-container');
        container.insertAdjacentHTML('beforeend', getMaterialTemplate(materialCount));
        materialCount++;
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-material') || e.target.closest('.remove-material')) {
            e.target.closest('.material-item').remove();
            reIndexMaterials();
        }
    });

    function reIndexMaterials() {
        const materials = document.querySelectorAll('.material-item');
        materials.forEach((item, index) => {
            item.setAttribute('data-material', index);
            item.querySelector('h6').textContent = `Material #${index + 1}`;
            const inputs = item.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                const name = input.name;
                if (name && name.startsWith('series[')) {
                    const newName = name.replace(/series\[\d+\]/, `series[${index}]`);
                    input.name = newName;
                }
            });
        });
        materialCount = materials.length;
    }

document.addEventListener('change', function(e) {
    if (e.target.classList.contains('material-content-type') || e.target.classList.contains('material-video-source')) {
        const cardBody = e.target.closest('.card-body');
        const contentType = cardBody.querySelector('.material-content-type').value;
        const videoSource = cardBody.querySelector('.material-video-source').value;

        const videoFileGroup = cardBody.querySelector('.video-file-group');
        const videoUrlGroup = cardBody.querySelector('.video-url-group');
        const textContentGroup = cardBody.querySelector('.text-content-group');

        // Reset all groups
        videoFileGroup.style.display = 'none';
        videoUrlGroup.style.display = 'none';
        textContentGroup.style.display = 'none';

        if (contentType === 'video') {
            // Show video file input or video URL input based on video source
            if (videoSource === 'file') {
                videoFileGroup.style.display = 'block';
            } else if (videoSource === 'youtube' || videoSource === 'drive') {
                videoUrlGroup.style.display = 'block';
            }
        } else if (contentType === 'text') {
            textContentGroup.style.display = 'block';
        }
    }
});

    document.addEventListener('DOMContentLoaded', function() {
        if (document.querySelectorAll('.material-item').length === 0) {
            document.getElementById('add-material').click();
        }
    });
</script>

    <!-- <script src="https://cdn.tiny.cloud/1/p3bgwt3k7550en3tmyd4pd3xrdk6sjx2j0j1ywb7zxgiejix/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description',
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
    </script> -->

@endpush
