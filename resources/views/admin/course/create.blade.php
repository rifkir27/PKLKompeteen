@extends('layouts.backend.app', ['title' => 'Add Course'])

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
                    <h1>Add Course</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Add Course</li>
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
                                    <label class="col-form-label">Meta Keywords</label>
                                    <textarea rows="10" name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror">{{ old('meta_keywords') }}</textarea>
                                    @error('meta_keywords')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Meta Description</label>
                                    <textarea rows="10" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
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

    <script src="https://cdn.tiny.cloud/1/p3bgwt3k7550en3tmyd4pd3xrdk6sjx2j0j1ywb7zxgiejix/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
    </script>

@endpush
