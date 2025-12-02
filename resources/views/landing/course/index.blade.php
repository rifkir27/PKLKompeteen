@extends('layouts.frontend.app', ['title' => 'Courses'])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Course"
        subtitle="Kumpulan tutorial yang dapat membantu proses belajar anda secara sistematis"
        details="Disini kita akan mempelajarinya semua dari awal, jangan terlalu lama berfikir! karena disini tidak hanya mengajarkan tentang fundamental tetapi dengan studi kasus didalamnya."
        :data="$courses" cardtitle="Course">
    </x-landing.hero-section>
    
    <div class="w-full bg-white p-10 2xl:px-36">
        <div class="container mx-auto">
            <x-landing.search-section :url="route('course.index')" />

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 container mx-auto my-5 items-start">
                @foreach ($courses as $course)
                    <x-landing.course-item :course="$course" />
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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
                if (response.is_favorited) {
                    icon.removeClass('text-gray-400').addClass('text-red-500');
                } else {
                    icon.removeClass('text-red-500').addClass('text-gray-400');
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
@endsection
