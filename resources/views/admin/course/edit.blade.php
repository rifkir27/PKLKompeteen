@extends('layouts.backend.app', ['title' => 'Edit Course'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endpush

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Course</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Course</li>
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
                            <a href="{{ route('admin.courses.index') }}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Back</a>
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ route('admin.courses.update', $course->id) }}" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name', $course->name) }}">
                                    @error('name')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Category</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected($errors->any() ? ($category->id == old('category_id')) : ($category->id == $course->category_id))>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label class="col-form-label">Mentor</label>
                                <select class="form-control @error('mentor_id') is-invalid @enderror" name="mentor_id">
                                    <option value="">[ Select Mentor ]</option>
                                    @foreach ($mentors as $mentor)
                                        <option value="{{ $mentor->id }}"
                                            @selected($errors->any() ? (old('mentor_id') == $mentor->id) : ($course->mentor_id == $mentor->id))>
                                            {{ $mentor->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('mentor_id')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>


                                <div class="form-group">
                                    <label class="col-form-label">demo</label>
                                    <input type="text" class="form-control @error('demo') is-invalid @enderror" placeholder="demo" name="demo" value="{{ old('demo', $course->demo) }}">
                                    @error('demo')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Price Before Discount</label>
                                    <input type="number" class="form-control @error('price_before_discount') is-invalid @enderror" placeholder="Price Before Discount" name="price_before_discount" value="{{ old('price_before_discount', $course->price_before_discount) }}">
                                    @error('price_before_discount')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Price After Discount</label>
                                    <input type="number" class="form-control @error('price_after_discount') is-invalid @enderror" placeholder="Price After Discount" name="price_after_discount" value="{{ old('price_after_discount', $course->price_after_discount) }}">
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
                                    <label class="col-form-label">Description</label>
                                    <select class="select2 form-control @error('description') is-invalid @enderror" multiple="multiple" name="benefits[]" data-placeholder="Select Benefit">
                                        <option value="">[ Select ]</option>
                                        @foreach ($benefits as $benefit)
                                            <option value="{{ $benefit->id }}" @if (in_array($benefit->id, $benefitSelected)){{'selected'}}
                                                @endif>{{ $benefit->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('benefits')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Sort Description</label>
                                    <textarea rows="10" name="sort_description" class="form-control @error('sort_description') is-invalid @enderror">{{ old('sort_description', $course->sort_description) }}</textarea>
                                    @error('sort_description')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $course->description) }}</textarea>
                                    @error('description')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Course Materials Section -->
                                <div class="form-group">
                                    <label class="col-form-label"><h5><i class="fas fa-book"></i> Course Materials (Materi Kursus)</h5></label>
                                    <div class="card">
                                        <div class="card-header">
                                            <button type="button" class="btn btn-primary btn-sm" id="add-material">
                                                <i class="fas fa-plus"></i> Add Material
                                            </button>
                                        </div>
                                        <div class="card-body" id="materials-container">
                                            <!-- Existing materials will be loaded here -->
                                            @if($course->series->count() > 0)
                                                @foreach($course->series as $index => $series)
                                                    <div class="material-item card mb-3" data-material="{{ $index }}">
                                                        <div class="card-header d-flex justify-content-between align-items-center">
                                                            <h6 class="mb-0">Material #{{ $index + 1 }}</h6>
                                                            <button type="button" class="btn btn-danger btn-sm remove-material">
                                                                <i class="fas fa-trash"></i> Remove
                                                            </button>
                                                        </div>
                                                        <div class="card-body">
                                                            <input type="hidden" name="series[{{ $index }}][id]" value="{{ $series->id }}">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Title *</label>
                                                                        <input type="text" class="form-control" name="series[{{ $index }}][title]" value="{{ $series->title }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Series Number *</label>
                                                                        <input type="number" class="form-control" name="series[{{ $index }}][number_of_series]" value="{{ $series->number_of_series }}" min="1" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Type *</label>
                                                                        <select class="form-control content-type-select" name="series[{{ $index }}][intro]" required>
                                                                            <option value="">Select Type</option>
                                                                            <option value="0" {{ $series->intro == 0 ? 'selected' : '' }}>Free</option>
                                                                            <option value="1" {{ $series->intro == 1 ? 'selected' : '' }}>Premium</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Content Type *</label>
                                                                        <select class="form-control material-content-type" name="series[{{ $index }}][content_type]" required>
                                                                            <option value="">Select Content Type</option>
                                                                            <option value="video" {{ $series->content_type == 'video' ? 'selected' : '' }}>Video</option>
                                                                            <option value="text" {{ $series->content_type == 'text' ? 'selected' : '' }}>Text</option>
                                                                            <option value="quiz" {{ $series->content_type == 'quiz' ? 'selected' : '' }}>Quiz</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group video-content-group" style="display: {{ $series->content_type == 'video' ? 'block' : 'none' }};">
                                                                        <label class="col-form-label">Video URL *</label>
                                                                        <input type="text" class="form-control" name="series[{{ $index }}][video_code]" value="{{ $series->video_code }}" placeholder="https://www.youtube.com/... or https://drive.google.com/...">
                                                                        <small class="form-text text-muted">Masukkan URL YouTube atau Google Drive</small>
                                                                    </div>
                                                                    <div class="form-group text-content-group" style="display: {{ $series->content_type == 'text' ? 'block' : 'none' }};">
                                                                        <label class="col-form-label">Text Content</label>
                                                                        <textarea class="form-control" name="series[{{ $index }}][text_content]" rows="3" placeholder="Enter text content here...">{{ $series->text_content }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-form-label">Description</label>
                                                                <textarea class="form-control" name="series[{{ $index }}][description]" rows="2" placeholder="Material description (optional)">{{ $series->description }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Add course materials/series. You can add multiple materials with different content types.</small>
                                </div>



                                <div class="form-group">
                                    <label class="col-form-label">Link Telegram</label>
                                    <input type="text" class="form-control @error('link_telegram') is-invalid @enderror" placeholder="Link Telegram" name="link_telegram" value="{{ old('link_telegram', $course->link_telegram) }}">
                                    @error('link_telegram')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Link Whatsapp</label>
                                    <input type="text" class="form-control @error('link_whatsapp') is-invalid @enderror" placeholder="Link Whatsapp" name="link_whatsapp" value="{{ old('link_whatsapp', $course->link_whatsapp) }}">
                                    @error('link_whatsapp')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Is Published</label>
                                    <select class="form-control @error('is_published') is-invalid @enderror" name="is_published">
                                        <option value="">[ Select ]</option>
                                        <option value="1" @selected($errors->any() ? (old('is_published') == "1") : ($course->is_published == "1"))>Published</option>
                                        <option value="0" @selected($errors->any() ? (old('is_published') == "0") : ($course->is_published == "0"))>Not Published</option>
                                    </select>
                                    @error('is_published')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Certificate Google Drive Link</label>
                                    <input type="url" class="form-control @error('certificate_drive_link') is-invalid @enderror" placeholder="https://drive.google.com/..." name="certificate_drive_link" value="{{ old('certificate_drive_link', $course->certificate_drive_link) }}">
                                    @error('certificate_drive_link')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <small class="form-text text-muted">Link Google Drive untuk file sertifikat kursus (opsional)</small>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Tools</label>
                                    <select class="select2 form-control @error('tools') is-invalid @enderror" multiple="multiple" name="tools[]" data-placeholder="Select Tools">
                                        <option value="">[ Select ]</option>
                                        @foreach ($tools as $tool)
                                            <option value="{{ $tool->id }}" @if (in_array($tool->id, $toolSelected)){{'selected'}}
                                                @endif>{{ $tool->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tools')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <small class="form-text text-muted">Pilih tools yang dibutuhkan untuk kursus ini (opsional)</small>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>

                            </div>
                            <!-- /.card-body -->
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

        // Handle certificate checkbox
        document.getElementById('has_certificate').addEventListener('change', function() {
            const certificateLinkGroup = document.getElementById('certificate-link-group');
            if (this.checked) {
                certificateLinkGroup.style.display = 'block';
            } else {
                certificateLinkGroup.style.display = 'none';
            }
        });

        // Initialize certificate link group visibility on page load
        document.addEventListener('DOMContentLoaded', function() {
            const hasCertificateCheckbox = document.getElementById('has_certificate');
            const certificateLinkGroup = document.getElementById('certificate-link-group');
            if (hasCertificateCheckbox && certificateLinkGroup) {
                if (hasCertificateCheckbox.checked) {
                    certificateLinkGroup.style.display = 'block';
                } else {
                    certificateLinkGroup.style.display = 'none';
                }
            }
        });

        // Fetch tools data from tools get-tools endpoint and pre-select current tools
        $(document).ready(function() {
            $.ajax({
                url: '{{ route("admin.tools.get-tools") }}',
                type: 'GET',
                success: function(tools) {
                    const toolsSelect = $('#tools-select');
                    toolsSelect.empty();
                    toolsSelect.append('<option value="">[ Select ]</option>');

                    const selectedTools = @json($toolSelected ?? []);

                    if (tools && tools.length > 0) {
                        tools.forEach(function(tool) {
                            const isSelected = selectedTools.includes(parseInt(tool.id));
                            toolsSelect.append('<option value="' + tool.id + '" ' + (isSelected ? 'selected' : '') + '>' + tool.name + '</option>');
                        });
                    }

                    // Reinitialize select2 after populating options
                    toolsSelect.trigger('change.select2');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching tools:', error);
                }
            });
        });
    </script>

    <!-- Materials Form JavaScript -->
    <script>
        // Ensure TinyMCE content is saved before form submit
        document.querySelector('form').addEventListener('submit', function() {
            tinymce.triggerSave();
        });

        try {
        let materialCount = {{ $course->series->count() }};

        // Material form template
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Title *</label>
                                    <input type="text" class="form-control" name="series[${index}][title]" placeholder="Material title" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Series Number *</label>
                                    <input type="number" class="form-control" name="series[${index}][number_of_series]" placeholder="1" min="1" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="col-form-label">Type *</label>
                                    <select class="form-control content-type-select" name="series[${index}][intro]" required>
                                        <option value="">Select Type</option>
                                        <option value="0">Free</option>
                                        <option value="1">Premium</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Content Type *</label>
                                    <select class="form-control material-content-type" name="series[${index}][content_type]" required>
                                        <option value="">Select Content Type</option>
                                        <option value="video">Video</option>
                                        <option value="text">Text</option>
                                        <option value="quiz">Quiz</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group video-content-group" style="display: none;">
                                    <label class="col-form-label">Video URL *</label>
                                    <input type="text" class="form-control" name="series[${index}][video_code]" placeholder="https://www.youtube.com/... or https://drive.google.com/...">
                                    <small class="form-text text-muted">Masukkan URL YouTube atau Google Drive</small>
                                </div>
                                <div class="form-group text-content-group" style="display: none;">
                                    <label class="col-form-label">Text Content</label>
                                    <textarea class="form-control" name="series[${index}][text_content]" rows="3" placeholder="Enter text content here..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" name="series[${index}][description]" rows="2" placeholder="Material description (optional)"></textarea>
                        </div>
                    </div>
                </div>
            `;
        }

        // Add new material
        document.getElementById('add-material').addEventListener('click', function() {
            const container = document.getElementById('materials-container');
            container.insertAdjacentHTML('beforeend', getMaterialTemplate(materialCount));
            materialCount++;
        });

        // Remove material
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-material') || e.target.closest('.remove-material')) {
                e.target.closest('.material-item').remove();
                reIndexMaterials();
            }
        });

        // Function to re-index materials after removal
        function reIndexMaterials() {
            const materials = document.querySelectorAll('.material-item');
            materials.forEach((item, index) => {
                item.setAttribute('data-material', index);
                item.querySelector('h6').textContent = `Material #${index + 1}`;
                // Update all input names
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

        // Handle content type change
        document.addEventListener('change', function(e) {
            if (e.target.classList.contains('material-content-type')) {
                const cardBody = e.target.closest('.card-body');
                const videoGroup = cardBody.querySelector('.video-content-group');
                const textGroup = cardBody.querySelector('.text-content-group');

                // Hide all content groups first
                videoGroup.style.display = 'none';
                textGroup.style.display = 'none';

                // Show relevant group based on content type
                if (e.target.value === 'video') {
                    videoGroup.style.display = 'block';
                } else if (e.target.value === 'text') {
                    textGroup.style.display = 'block';
                }
            }
        });

        } catch (error) {
            console.error('Error in materials JavaScript:', error);
        }
    </script>

    <script src="https://cdn.tiny.cloud/1/p3bgwt3k7550en3tmyd4pd3xrdk6sjx2j0j1ywb7zxgiejix/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss fullscreen',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | fullscreen',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Eduthings',
            height: '360',
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
