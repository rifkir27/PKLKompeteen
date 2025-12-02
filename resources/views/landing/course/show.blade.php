@extends('layouts.frontend.app', ['title' => $course->name])

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

                    <div class="prose max-w-none mb-6">
                        {!! $course->description !!}
                    </div>

                    <!-- Course Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">{{ $series->count() }}</div>
                            <div class="text-sm text-gray-600">Series</div>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-green-600">{{ $enrolled }}</div>
                            <div class="text-sm text-gray-600">Students</div>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-yellow-600">{{ $avgRating ? number_format($avgRating, 1) : 'N/A' }}</div>
                            <div class="text-sm text-gray-600">Rating</div>
                        </div>
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-purple-600">{{ $ratingCount }}</div>
                            <div class="text-sm text-gray-600">Reviews</div>
                        </div>
                    </div>
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
                    </div>
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
            @endif

            <!-- Reviews -->
            @if($reviews->count() > 0)
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Student Reviews</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($reviews as $review)
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <div class="flex items-center mb-4">
                                    <img src="{{ $review->user->avatar }}" alt="{{ $review->user->name }}" class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-semibold text-gray-900">{{ $review->user->name }}</p>
                                        <div class="flex items-center">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }} text-sm"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <p class="text-gray-700">{{ $review->comment }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
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
