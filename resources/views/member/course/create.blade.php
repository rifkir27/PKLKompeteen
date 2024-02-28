@extends('layouts.backend.app', ['title' => 'Course'])

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-12">
            <form action="{{ route('member.course.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card-form title="CREATE NEW COURSE" url="{{ route('member.course.index') }}" titleBtn="Create Course">
                    <div class="card-body">
                        <x-input title="Title" type="text" name="name" placeholder="Enter course title"
                            value="{{ old('name') }}" />
                        <div class="row">
                            <div class="col-6">
                                <x-select title="Category" name="category_id">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </x-select>
                            </div>
                            <div class="col-6">
                                <x-input title="Demo" type="text" name="demo" placeholder="Enter course demo url" :value="old('demo')" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <x-input title="Price Before Discount" type="number" name="price_before_discount" placeholder="Enter course Price Before Discount" value="{{ old('price_before_discount') }}" />
                            </div>
                            <div class="col-6">
                                <x-input title="Price After Discount" type="number" name="price_after_discount" placeholder="Enter course Price After Discount" value="{{ old('price_after_discount') }}" />
                            </div>
                        </div>
                        <x-upload-file title="Cover" name="image" value="{{ old('image') }}" />
                        <x-textarea title="Sort Description" name="sort_description" placeholder="Enter course sort description" :value="old('sort_description')" />
                        <x-textarea title="Description" name="description" placeholder="Enter course description" :value="old('description')" />
                    </div>
                </x-card-form>
            </form>
        </div>
    </div>
@endsection