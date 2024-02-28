@extends('layouts.frontend.app', ['title' => 'Course'])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="{{ str()->upper($category->name) }}"
        subtitle="Kumpulan tutorial dengan kategori {{ str()->lower($category->name) }}"
        details="Disini kita akan mempelajarinya semua dari awal, jangan terlalu lama berfikir! karena disini tidak hanya mengajarkan tentang fundamental tetapi dengan studi kasus didalamnya."
        :data="$courses" cardtitle="Course">
    </x-landing.hero-section>

    <div class="w-full bg-slate-300 p-10 2xl:px-36">
        <div class="container mx-auto">
            <x-landing.search-section :url="route('category', $category->slug)" />

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 container mx-auto my-5 items-start">
                @forelse ($courses as $course)
                    <x-landing.course-item :course="$course" />   
                @empty
                    <h1 class="text-center">Course Belum Tersedia.</h1>
                @endforelse
            </div>
        </div>
    </div>
@endsection