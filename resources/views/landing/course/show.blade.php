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
            <a href="{{ route('landing.course.index') }}" class="mt-4 inline-block px-6 py-2 bg-purple-600 text-white rounded-lg">
                Kembali ke Daftar Kelas
            </a>
        </div>
    @else
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Bagian Kiri -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Header -->
            <div>
                <h1 class="text-3xl font-bold mb-2">{{ $course->name }}</h1>
                <p class="text-gray-600">{{ $course->sort_description ?? 'Deskripsi singkat tidak tersedia' }}</p>
                <div class="flex flex-wrap gap-4 mt-3 text-sm text-gray-500">
                    <span class="font-semibold">{{ $course->mentor->name ?? 'Mentor' }}</span>
                    <span>⭐ {{ number_format($avgRating ?? 0, 1) }} ({{ $ratingCount ?? 0 }} ulasan)</span>
                    <span>{{ $enrolled ?? 0 }} siswa</span>
                </div>
            </div>

            <!-- Apa yang akan dipelajari -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Apa yang akan kamu pelajari</h2>
                @if($course->benefits && count($course->benefits) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    @foreach ($course->benefits as $benefit)
                        <div class="flex items-center gap-2 text-gray-700">
                            <i class="fa fa-check text-green-500"></i> {{ $benefit->name }}
                        </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray-500">Informasi manfaat belajar sedang dalam pengembangan.</p>
                @endif
            </div>

            <!-- Tentang Course -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Tentang E-Course</h2>
                <div class="text-gray-700 leading-relaxed">
                    {!! $course->description ?? '<p class="text-gray-500">Deskripsi lengkap kelas sedang dalam pengembangan.</p>' !!}
                </div>
            </div>

            <!-- Kurikulum -->
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

            <!-- Tools -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Kebutuhan Tools</h2>
                <ul class="flex flex-wrap gap-4 text-gray-700">
                    <li>🌐 Web Browser</li>
                    <li>📝 Text Editor</li>
                    <li>📶 Koneksi Internet</li>
                </ul>
            </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="space-y-6">
            <!-- Card Gambar + Harga -->
            <div class="border rounded-lg overflow-hidden bg-white shadow">
                <img src="{{ $course->image ?? asset('images/course.jpg') }}" 
                     alt="{{ $course->name ?? 'Gambar Kelas' }}" 
                     class="w-full h-48 object-cover"
                     onerror="this.src='{{ asset('images/course.jpg') }}'">
                <div class="p-4">
                    @if($course->price_before_discount != $course->price_after_discount && $course->price_before_discount > 0)
                        <p class="line-through text-red-500 text-sm">
                            Rp {{ moneyFormat($course->price_before_discount) }}
                        </p>
                    @endif
                    <h3 class="text-2xl font-bold text-purple-700">
                        @if ($course->price_after_discount == 0)
                            Gratis
                        @else
                            Rp {{ moneyFormat($course->price_after_discount) }}
                        @endif
                    </h3>

                    <div class="mt-4 flex flex-col gap-2">
                        @if ($alreadyBought)
                            <a href="{{ route('member.mycourse.course', $course->id) }}" 
                               class="px-4 py-2 rounded-lg bg-red-600 text-white text-center hover:bg-red-700 transition-colors">
                                Lanjutkan Belajar
                            </a>
                        @else
                            <form action="{{ route('cart.store', $course->id) }}" method="POST">
                                @csrf
                                <button type="submit" 
                                    class="w-full px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition-colors">
                                    Beli Sekarang
                                </button>
                            </form>
                            <button class="w-full px-4 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors">
                                Simpan ke Favorit
                            </button>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Mentor -->
            <div class="border rounded-lg p-4 bg-white shadow">
                <h3 class="text-lg font-semibold mb-2">Mentor</h3>
                @if($course->mentor)
                <div class="flex items-center gap-3">
                    <img src="{{ $course->mentor->avatar ?? 'https://via.placeholder.com/80' }}" 
                         alt="{{ $course->mentor->name }}"
                         class="w-14 h-14 rounded-full object-cover"
                         onerror="this.src='https://via.placeholder.com/80'">
                    <div>
                        <p class="font-bold">{{ $course->mentor->name }}</p>
                        <p class="text-sm text-gray-500">⭐ {{ $course->mentor->rating ?? '4.8' }} rating</p>
                    </div>
                </div>
                <p class="mt-3 text-gray-600 text-sm">
                    {{ $course->mentor->bio ?? 'Mentor berpengalaman dengan keahlian di bidang ini.' }}
                </p>
                @else
                <p class="text-gray-500">Informasi mentor tidak tersedia.</p>
                @endif
            </div>

            <!-- Testimoni -->
            <div class="border rounded-lg p-4 bg-white shadow">
                <h3 class="text-lg font-semibold mb-2">Testimoni Alumni</h3>
                @if($reviews && count($reviews) > 0)
                    @foreach ($reviews as $review)
                        <div class="border-b pb-3 mb-3 last:border-b-0">
                            <p class="font-bold">{{ $review->user->name ?? 'User' }}</p>
                            <p class="text-sm text-gray-600">⭐ {{ $review->rating }}</p>
                            <p class="text-sm mt-1">{{ $review->review }}</p>
                        </div>
                    @endforeach
                @else
                    <p class="text-gray-500">Belum ada testimoni untuk kelas ini.</p>
                @endif
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
