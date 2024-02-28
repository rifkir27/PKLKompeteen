@extends('layouts.backend.app', ['title' => 'Course'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-button-create title="ADD NEW COURSE" :url="route('admin.course.create')" />
            <x-card title="LIST COURSE">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <td>Image</td>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Enrolled</th>
                            <th>Series</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $i => $course)
                            <tr>
                                <td>{{ $courses->firstItem() + $i }}</td>
                                <td><img class="img-fluid" src="{{ $course->image }}" alt="cover" width="100px"></td>
                                <td>{{ $course->name }}</td>
                                <td>
                                    <sup>Rp</sup> {{ moneyFormat($course->price_after_discount) }}
                                </td>
                                <td>{{ $course->enrolled }}</td>
                                <td>{{ $course->series }}</td>
                                <td>
                                    <a href="{{ Route('admin.series.index', $course->slug) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-list"></i>
                                    </a>
                                    <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" onclick="deleteData({{ $course->id }})" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <form id="delete-form-{{ $course->id }}"
                                        action="{{ route('admin.course.destroy', $course->id) }}" method="POST" style="display:none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card>
            <div class="d-flex justify-content-end">{{ $courses->links() }}</div>
        </div>
    </div>
@endsection
