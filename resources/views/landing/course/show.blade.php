@extends('layouts.frontend.app', [
    'title' => $course->name ?? 'Detail Kelas',
    'meta_keywords' => $course->meta_keywords ?? 'kursus, belajar online, e-learning',
    'meta_description' => $course->meta_description ?? 'Temukan kelas online terbaik untuk meningkatkan skill Anda',
    'meta_image' =>  $course->image ?? asset('images/course.jpg')
])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Course Detail"
        subtitle="{{ $course->name }}"
        details="{{ $course->sort_description }}"
        :data="[$course]" cardtitle="Course Detail">
    </x-landing.hero-section>

    <div class="w-full bg-white p-10 2xl:px-36">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Course Image and Info -->
                <div class="lg:col-span-2">
                    <div class="relative">
                        <img src="{{ $course->image }}" alt="{{ $course->name }}" class="w-full h-64 object-cover rounded-lg mb-6">

                        {{-- Favorite Button --}}
                        @auth
                            <button class="favorite-btn absolute top-4 right-4 bg-white bg-opacity-90 hover:bg-opacity-100 rounded-full p-3 shadow-lg transition-all duration-200"
                                    data-course-id="{{ $course->id }}"
                                    data-url="{{ route('course.favorite', $course) }}">
                                <i class="fas fa-heart text-xl {{ Auth::user()->favoriteCourses()->where('course_id', $course->id)->exists() ? 'text-red-500' : 'text-gray-400' }}"></i>
                            </button>
                        @endauth
                    </div>

                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $course->name }}</h1>

                    <div class="flex items-center mb-4">
                        <img src="{{ $course->mentor?->image ?? asset('images/default.png') }}" alt="{{ $course->mentor?->name }}" class="w-12 h-12 rounded-full mr-3">
                        <div>
                            <p class="font-semibold text-gray-900">{{ $course->mentor?->name ?? 'No Mentor' }}</p>
                            <p class="text-sm text-gray-600">Mentor</p>
                        </div>
                    </div>

                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                    <div class="flex items-center gap-1">
                        <i class="fas fa-users"></i>
                        <span>{{ $enrolled ?? 0 }} Siswa</span>
                    </div>
                </div>
            </div>

            @if($course->benefits && count($course->benefits) > 0)
                <div class="flex flex-wrap gap-2 mt-4">
                    @foreach ($course->benefits as $benefit)
                        <span class="px-3 py-1 border border-custom-orange rounded-lg text-sm text-gray-700">
                            {{ $benefit->name }}
                        </span>
                    @endforeach
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 p-6 rounded-lg sticky top-4">
                        <div class="text-center mb-6">
                            @if($course->price_before_discount > $course->price_after_discount)
                                <p class="text-lg text-gray-500 line-through">Rp {{ moneyFormat($course->price_before_discount) }}</p>
                            @endif
                            <p class="text-3xl font-bold text-blue-600">Rp {{ moneyFormat($course->price_after_discount) }}</p>
                            @if($course->price_before_discount > $course->price_after_discount)
                                <p class="text-sm text-green-600 font-semibold">
                                    Save {{ discount($course->price_before_discount, $course->price_after_discount) }}%
                                </p>
                            @endif
                        </div>

                        @auth
                            @if($alreadyBought)
                                <a href="{{ route('course.series', [$course->slug, 1]) }}" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded-lg font-semibold text-center block mb-4">
                                    Continue Learning
                                </a>
                            @else
                                <form action="{{ route('cart.store', $course->id) }}" method="POST" class="mb-4">
                                    @csrf
                                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-lg font-semibold">
                                        Add to Cart
                                    </button>
                                </form>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-lg font-semibold text-center block mb-4">
                                Login to Enroll
                            </a>
                        @endauth

                        <!-- Course Benefits -->
                        @if($course->benefits->count() > 0)
                            <div class="border-t pt-4">
                                <h3 class="font-semibold text-gray-900 mb-3">What you'll learn</h3>
                                <ul class="space-y-2">
                                    @foreach($course->benefits as $benefit)
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                            <span class="text-sm text-gray-700">{{ $benefit->name }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </h3>

                    {{-- Diskon persen di kanan --}}
                    @if($course->price_before_discount > $course->price_after_discount && $course->price_before_discount > 0)
                        @php
                            $discount = round((($course->price_before_discount - $course->price_after_discount) 
                                / $course->price_before_discount) * 100);
                        @endphp

                        <span class="px-2 py-1 bg-custom-orange text-black text-xs rounded font-semibold">
                            {{ $discount }}% OFF
                        </span>
                    @endif
                </div>

                {{-- Materi, Sertifikat --}}
                <div class="mt-4 space-y-2 text-white text-base">

                    {{-- Materi --}}
                    @php $totalMaterials = $course->series->count(); @endphp
                    <div class="flex items-center gap-2">
                        <i class="fas fa-book-open"></i>
                        <span>{{ $totalMaterials }} Materi Pembelajaran</span>
                    </div>

                    {{-- Sertifikat --}}
                    @php $hasCertificate = $course->certificate ?? false; @endphp
                    <div class="flex items-center gap-2">
                        <i class="fas fa-certificate"></i>
                        <span>{{ $hasCertificate ? 'Sertifikat Kelulusan' : 'Tanpa Sertifikat' }}</span>
                    </div>

                </div>

                {{-- Tombol --}}
                <div class="mt-4 flex flex-col gap-2">
                    @if ($alreadyBought)
                        <a href="{{ route('member.mycourse.course', $course->id) }}" 
                        class="px-4 py-2 rounded-lg bg-custom-orange text-white text-center hover:bg-custom-orange2 transition-colors">
                            Lanjutkan Belajar
                        </a>
                    @else
                        <form action="{{ route('cart.store', $course->id) }}" method="POST">
                            @csrf
                            <button type="submit" 
                                class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg font-semibold">
                                Beli Sekarang
                            </button>
                        </form>

                        <button type="submit"
                            class="flex-1 border border-white py-2 rounded-lg text-center font-semibold text-white">
                            Simpan ke Favorit   
                        </button>
                    @endif
                </div>
            </div>

            <!-- Course Series -->
            @if($series->count() > 0)
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Course Content</h2>
                    <div class="space-y-2">
                        @foreach($series as $item)
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-semibold mr-4">
                                        {{ $item->number_of_series }}
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">{{ $item->title }}</h3>
                                        <p class="text-sm text-gray-600">{{ $item->description }}</p>
                                    </div>
                                </div>
                                <div class="text-sm text-gray-500">
                                    @if($item->video_path)
                                        <i class="fas fa-play-circle mr-1"></i> Video
                                    @else
                                        <i class="fas fa-file-alt mr-1"></i> Reading
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <p class="mt-3 text-black text-sm">
                    {{ $course->mentor->bio ?? 'Mentor berpengalaman dengan keahlian di bidang ini.' }}
                </p>
                @else
                    <p class="text-black">Informasi mentor tidak tersedia.</p>
                @endif
            </div>

            <div class="border-2 border-custom-purple2 rounded-lg p-4 bg-white shadow">
                <h3 class="text-lg font-semibold mb-4">Testimoni Alumni</h3>
                @if($reviews && count($reviews) > 0)
                    @foreach ($reviews->take(3) as $review)
                        <div class="border-b border-custom-orange pb-4 mb-4 last:border-b-0">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 rounded-full bg-purple-600 flex items-center justify-center text-white font-semibold text-sm">
                                        {{ substr($review->user->name ?? 'U', 0, 1) }}
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <p class="font-bold text-gray-800">{{ $review->user->name ?? 'User' }}</p>
                                        <x-star-rating 
                                            :rating="$review->rating" 
                                            :showHalfStars="false"
                                            size="sm" />                                    
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2 leading-relaxed">{{ $review->review }}</p>
                                    @if($review->created_at)
                                        <p class="text-xs text-gray-400 mt-2">
                                            {{ $review->created_at->format('d M Y') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center py-6">
                        <div class="w-16 h-16 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-3">
                            <i class="fas fa-comment text-gray-400 text-2xl"></i>
                        </div>
                        <p class="text-gray-500">Belum ada testimoni untuk kelas ini.</p>
                    </div>
                @endif
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
