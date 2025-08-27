@props(['course'])

<div class="relative bg-white rounded-xl shadow-md overflow-hidden flex flex-col h-full min-h-[550px]">

    {{-- Diskon --}}
    @if($course->price_before_discount > $course->price_after_discount)
        <div class="absolute top-0 right-0 bg-orange-500 text-white px-2 py-1 rounded-bl-lg text-sm font-bold">
            {{ discount($course->price_before_discount, $course->price_after_discount) }}% OFF
        </div>
    @endif

    <div class="w-full aspect-[4/3] bg-gray-200 overflow-hidden">
        <img class="w-full h-full object-contain" 
             src="{{ $course->image ?? asset('images/default.png') }}" 
             alt="{{ $course->name }}"
             onerror="this.src='{{ asset('images/default.png') }}'">
    </div>

    {{-- Isi card --}}
    <div class="bg-custom-purple text-white p-4 flex flex-col flex-1">
        <h3 class="text-lg font-semibold mb-2 line-clamp-2">
            {{ $course->name }}
        </h3>

        <div class="flex flex-col gap-3 flex-1">
            {{-- Mentor --}}
            <div class="flex items-center gap-2 text-sm">
                <img class="w-8 h-8 rounded-full border" src="{{ asset('images/default.png') }}" alt="Mentor">
                <div class="flex-1 min-w-0">
                    <p class="font-semibold truncate">{{ $course->user->name }}</p>
                    <p class="text-xs opacity-80">Mobile Developer</p>
                </div>
            </div>

            {{-- Rating --}}
            @if($course->avg_rating > 0)
            <div class="flex items-center gap-2 text-sm">
                <x-star-rating 
                    :rating="$course->avg_rating" 
                    :showNumber="true"
                    :showCount="true"
                    :ratingCount="$course->reviews_count"
                    size="sm" />
            </div>
            @endif

            {{-- Harga & Enrolled --}}
            <div class="flex justify-between items-center text-sm">
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
        </div>

        <div class="flex gap-2 mt-4">
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
