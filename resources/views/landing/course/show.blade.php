@extends('layouts.frontend.app', [
    'title' => $course->name ?? 'Detail Kelas',
    'meta_keywords' => $course->meta_keywords ?? 'kursus, belajar online, e-learning',
    'meta_description' => $course->meta_description ?? 'Temukan kelas online terbaik untuk meningkatkan skill Anda',
    'meta_image' =>  $course->image ?? asset('images/course.jpg')
])

@section('content')
<div class="container mx-auto pt-20 pb-10 px-4 lg:px-0">
    @if(!$course)
        <div class="text-center py-20">
            <h1 class="text-2xl font-bold text-gray-600">Kelas tidak ditemukan</h1>
            <p class="text-gray-500 mt-2">Maaf, kelas yang Anda cari tidak tersedia.</p>
            <a href="{{ route('landing.course.index') }}" class="mt-4 inline-block px-6 py-2 bg-custom-purple text-white rounded-lg">
                Kembali ke Daftar Kelas
            </a>
        </div>
    @else

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <h1 class="text-3xl font-bold mb-2">{{ $course->name }}</h1>
            <p class="text-gray-600">{{ $course->sort_description ?? 'Deskripsi singkat tidak tersedia' }}</p>

            <!-- Mentor + Rating + Alumni -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mt-4 gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ $course->mentor?->image ?? asset('images/default.png') }}" 
                         alt="{{ $course->mentor?->name ?? 'Mentor' }}"
                         class="w-14 h-14 rounded-full object-cover"
                         onerror="this.src='{{ asset('images/default.png') }}'">
                    <div>
                        <p class="font-bold text-gray-800">{{ $course->mentor->name ?? 'Mentor' }}</p>
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
            @endif
        </div>

        <div class="rounded-lg bg-custom-purple shadow p-4">

            {{-- Gambar --}}
            <div class="max-w-md mx-auto aspect-[4/3] relative rounded-xl overflow-hidden shadow-lg mt-2">
                <img src="{{ $course->image ?? asset('images/course.jpg') }}"
                    alt="{{ $course->name ?? 'Gambar Kelas' }}"
                    class="absolute inset-0 w-full h-full object-cover"
                    onerror="this.src='{{ asset('images/course.jpg') }}'">
            </div>

            {{-- Harga --}}
            <div class="mt-4">
                                @if($course->price_before_discount != $course->price_after_discount && $course->price_before_discount > 0)
                    <p class="line-through text-red-500 text-sm">
                        Rp {{ moneyFormat($course->price_before_discount) }}
                    </p>
                @endif

                {{-- Harga final + diskon sejajar --}}
                <div class="flex items-center gap-2">

                    {{-- Harga final --}}
                    <h3 class="text-2xl font-bold text-white">
                        @if ($course->price_after_discount == 0)
                            Gratis
                        @else
                            Rp {{ moneyFormat($course->price_after_discount) }}
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
                    @php $hasCertificate = !empty($course->certificate_drive_link); @endphp
                    @if($hasCertificate)
                        <a href="{{ $course->certificate_drive_link }}" target="_blank" class="flex items-center gap-2 text-white hover:underline">
                            <i class="fas fa-certificate"></i>
                            <span>Ada Sertifikat</span>
                        </a>
                    @else
                        <div class="flex items-center gap-2">
                            <i class="fas fa-certificate"></i>
                            <span>Tanpa Sertifikat</span>
                        </div>
                    @endif

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

                        <button class="favorite-btn flex-1 border border-white py-2 rounded-lg text-center font-semibold text-white"
                                data-course-id="{{ $course->id }}"
                                data-url="{{ route('course.favorite', $course) }}">
                            <i class="fas fa-heart {{ $isFavorited ? 'text-red-500' : 'text-gray-400' }}"></i>
                            @if($isFavorited) Favorited @else Add to Favorite @endif
                        </button>
                    @endif
                </div>
            </div>

        </div>
    </div>



    <div class="my-10 border-t border-gray-300"></div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-8">
            @if($series && count($series) > 0)
            <div x-data="{ showAll: false }">
                <h2 class="text-xl font-semibold mb-4">Apa yang Akan Dipelajari</h2>

                <ul class="text-gray-700 leading-relaxed space-y-3">
                    @foreach($series as $index => $item)
                        <li 
                            class="flex items-start gap-2"
                            @if($index >= 4) x-show="showAll" x-cloak @endif
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                class="lucide lucide-list-checks">
                                <path d="M13 5h8"/>
                                <path d="M13 12h8"/>
                                <path d="M13 19h8"/>
                                <path d="m3 17 2 2 4-4"/>
                                <path d="m3 7 2 2 4-4"/>
                            </svg>
                            <span>{{ $item->title }}</span>
                        </li>
                    @endforeach
                </ul>

                @if(count($series) > 4)
                    <button 
                        @click="showAll = !showAll"
                        class="mt-3 text-custom-orange font-semibold hover:underline"
                    >
                        <span x-show="!showAll">Lihat Semua</span>
                        <span x-show="showAll">Sembunyikan</span>
                    </button>
                @endif
            </div>
            @endif

            <div>
                <h2 class="text-xl font-semibold mb-4">Tentang E-Course</h2>
                <div class="text-gray-700 leading-relaxed">
                    {!! $course->description ?? '<p class="text-gray-500">Deskripsi lengkap kelas sedang dalam pengembangan.</p>' !!}
                </div>
            </div>

            <div>
                <h2 class="text-xl font-semibold mb-4">Kurikulum E-Course</h2>

                @if($series && count($series) > 0)
                <div class="rounded-lg border-2 border-custom-purple2 divide-y"> 
                    @foreach ($series as $item)
                        <div class="px-4 py-3 flex justify-between items-center hover:bg-gray-50 transition-colors">
                            <span class="font-medium">{{ $item->title }}</span>
                            <span class="text-sm text-gray-500">{{ $item->lessons_count ?? 0 }} video</span>
                        </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray-500">Kurikulum sedang dalam pengembangan.</p>
                @endif
            </div>
        </div>

        <div class="space-y-6">

            <div class="border-2 rounded-lg p-4 bg-white border-custom-purple2">
                <h3 class="text-lg font-semibold mb-2">Mentor</h3>

                @if($course->mentor)
                <div class="flex items-center gap-3">
                    <img src="{{ $course->mentor?->image ?? asset('images/default.png') }}" 
                        alt="{{ $course->mentor?->name ?? 'Mentor' }}"
                        class="w-14 h-14 rounded-full object-cover"
                        onerror="this.src='{{ asset('images/default.png') }}'">

                    <div>
                        <p class="font-bold">{{ $course->mentor->name }}</p>

                        @php
                            $mentorRating = $reviews->avg('rating') ?? 0;
                        @endphp

                        <x-star-rating 
                            :rating="$mentorRating"
                            :showNumber="true"
                            :showHalfStars="true"
                            size="md" />
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

    @endif
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

        $.ajax({
            url: url,
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.is_favorited) {
                    btn.html('<i class="fas fa-heart text-red-500"></i> Favorited');
                } else {
                    btn.html('<i class="fas fa-heart text-gray-400"></i> Add to Favorite');
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
