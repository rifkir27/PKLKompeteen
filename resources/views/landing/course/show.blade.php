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

        <div>
            <div class="rounded-lg overflow-hidden bg-custom-purple shadow aspect-w-4 aspect-h-3">
                <img src="{{ $course->image ?? asset('images/course.jpg') }}" 
                    alt="{{ $course->name ?? 'Gambar Kelas' }}" 
                    class="w-full h-full object-cover"
                    onerror="this.src='{{ asset('images/course.jpg') }}'">

                <div class="p-4">
                    @if($course->price_before_discount != $course->price_after_discount && $course->price_before_discount > 0)
                        <p class="line-through text-red-500 text-sm">
                            Rp {{ moneyFormat($course->price_before_discount) }}
                        </p>
                    @endif
                    <h3 class="text-2xl font-bold text-white">
                        @if ($course->price_after_discount == 0)
                            Gratis
                        @else
                            Rp {{ moneyFormat($course->price_after_discount) }}
                        @endif
                    </h3>

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
            </div>
        </div>
    </div>

    <div class="my-10 border-t border-gray-300"></div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-8">
            <div>
                <h2 class="text-xl font-semibold mb-4">Tentang E-Course</h2>
                <div class="text-gray-700 leading-relaxed">
                    {!! $course->description ?? '<p class="text-gray-500">Deskripsi lengkap kelas sedang dalam pengembangan.</p>' !!}
                </div>
            </div>

            <div>
                <h2 class="text-xl font-semibold mb-4">Kurikulum E-Course</h2>
                @if($series && count($series) > 0)
                <div class="border rounded-lg divide-y">
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

            <div>
                <h2 class="text-xl font-semibold mb-4">Kebutuhan Tools</h2>
                <ul class="flex flex-wrap gap-4 text-gray-700">
                    <li>🌐 Web Browser</li>
                    <li>📝 Text Editor</li>
                    <li>📶 Koneksi Internet</li>
                </ul>
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
                        <x-star-rating 
                            :rating="$course->mentor->rating ?? 5.0" 
                            :showNumber="true"
                            size="sm" />
                    </div>
                </div>
                <p class="mt-3 text-black text-sm">
                    {{ $course->mentor->bio ?? 'Mentor berpengalaman dengan keahlian di bidang ini.' }}
                </p>
                @else
                <p class="text-black">Informasi mentor tidak tersedia.</p>
                @endif
            </div>

            <!-- Testimoni -->
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
