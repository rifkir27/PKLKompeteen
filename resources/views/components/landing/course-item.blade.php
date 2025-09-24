@props(['course'])

<div class="relative bg-white rounded-2xl overflow-hidden flex flex-col h-full min-h-[600px] border-8 border-gray-400 shadow-sm">
    @if($course->avg_rating > 0)
        <div class="absolute top-0 left-0 bg-custom-orange text-white px-2 py-1 rounded-br-lg text-sm font-bold">
            ⭐ {{ number_format($course->avg_rating, 1) }}
        </div>
    @endif

    @if($course->price_before_discount > $course->price_after_discount)
        <div class="absolute top-0 right-0 bg-custom-orange text-white px-2 py-1 rounded-bl-lg text-sm font-bold">
            {{ discount($course->price_before_discount, $course->price_after_discount) }}% OFF
        </div>
    @endif

    <div class="w-full aspect-[4/3] overflow-hidden relative">
        <img class="w-full h-full object-cover object-center"
             src="{{ $course->image ?? asset('images/default.png') }}"
             alt="{{ $course->name }}"
             onerror="this.src='{{ asset('images/default.png') }}'">
    </div>

    <div class="bg-custom-purple text-white p-4 flex flex-col flex-1">
        <div class="min-h-[100px] flex flex-col justify-between mb-3">
            <h3 class="text-lg font-semibold line-clamp-2">
                {{ $course->name }}
            </h3>
            <div class="flex items-center gap-2 text-sm mt-2">
                <img class="w-8 h-8 rounded-full flex-shrink-0"
                     src="{{ $course->mentor?->image ?? asset('images/default.png') }}"
                     alt="{{ $course->mentor?->name ?? 'Mentor' }}">
                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">
                        {{ $course->mentor?->name ?? 'Tanpa Mentor' }}
                    </p>
                    <p class="text-xs opacity-80">Mentor</p>
                </div>
            </div>
        </div>

        @if($course->reviews_count > 0)
            <div class="flex items-center justify-end text-sm opacity-80 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 8h10M7 12h6m-6 4h10m-2 4l4-4H7a4 4 0 01-4-4V7a4 4 0 014-4h10a4 4 0 014 4v5" />
                </svg>
                <span>{{ $course->reviews_count }} Review</span>
            </div>
        @endif

        <div class="flex justify-between items-center text-sm mb-4">
            <div>
                {{ $course->enrolled }} Siswa
            </div>
            <div class="text-right">
                @if($course->price_before_discount > $course->price_after_discount)
                    <p class="line-through text-gray-300 text-xs">
                        Rp {{ moneyFormat($course->price_before_discount) }}
                    </p>
                @endif
                <p class="text-xl font-bold">Rp {{ moneyFormat($course->price_after_discount) }}</p>
            </div>
        </div>

        <div class="flex gap-4 mt-auto">
            <form action="{{ route('cart.store', $course->id) }}" method="POST" class="flex-1">
                @csrf
                <button type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg font-semibold">
                    Gabung Kelas
                </button>
            </form>

            <a href="{{ route('course.show', $course->slug) }}"
               class="flex-1 border border-white py-2 rounded-lg text-center font-semibold">
                Detail Kelas
            </a>
        </div>
    </div>
</div>
