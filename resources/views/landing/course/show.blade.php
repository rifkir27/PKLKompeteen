@extends('layouts.frontend.app', [
    'title' => $course->name,
    'meta_keywords' => $course->meta_keywords,
    'meta_description' => $course->meta_description,
    'meta_image' =>  $course->image
])

@push('css')
    <link rel="stylesheet" href="https://rawcdn.githack.com/nextapps-de/spotlight/0.7.8/dist/css/spotlight.min.css">
@endpush

@push('js')
    <script src="https://rawcdn.githack.com/nextapps-de/spotlight/0.7.8/dist/js/spotlight.min.js"></script>
@endpush

@section('content')
    <div class="w-full bg-sky-700 p-5 md:p-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4 md:gap-20 mt-16">
                <div
                    class="flex text-center justify-center items-center row-start-1 md:row-auto mx-auto sm:mx-0 md:col-span-1">
                    <img src={{ $course->image }} alt="{{ $course->title }}" class="md:w-3/4 rounded-lg" />
                </div>
                <div class="md:col-span-2">
                    <h1 class="text-lg font-semibold lg:text-2xl pb-4 text-white text-center md:text-start">
                        {{ $course->name }}
                    </h1>
                    
                    <p class="text-sm text-center md:text-base md:text-justify text-white">{!! $course->sort_description !!}</p>
                    <div class="flex flex-row gap-4 text-xs justify-center md:justify-start mt-4">
                        <div class="text-slate-100 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list w-5 h-5"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="9" y1="6" x2="20" y2="6"></line>
                                <line x1="9" y1="12" x2="20" y2="12"></line>
                                <line x1="9" y1="18" x2="20" y2="18"></line>
                                <line x1="5" y1="6" x2="5" y2="6.01"></line>
                                <line x1="5" y1="12" x2="5" y2="12.01"></line>
                                <line x1="5" y1="18" x2="5" y2="18.01"></line>
                            </svg>
                            {{ $course->series()->count() }} Lessons
                        </div>
                        <div class="text-slate-100 flex items-center gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users w-5 h-5"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                            {{ $enrolled }} Member
                        </div>
                        <div class="text-slate-100 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star w-5 h-5"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                </path>
                            </svg>
                            <span>{{ number_format($avgRating ?? 0, 1) }} ({{ $ratingCount }} ulasan)</span>
                        </div>
                    </div>
                    <div class="mt-5">
                        @if($course->price_before_discount != $course->price_after_discount)
                        <h1 class="text-2xl md:text-3xl line-through text-red-500 text-center md:text-start font-semibold my-2">
                                Rp {{ moneyFormat($course->price_before_discount) }}
                            </h1>
                        @endif 

                        <h1 class="text-3xl md:text-5xl text-white text-center md:text-start font-semibold mt-1 mb-10">
                            @if ($course->price_after_discount == 0)
                                Gratis
                            @else
                                Rp {{ moneyFormat($course->price_after_discount) }}     
                            @endif
                        </h1>
                            
                        <div class="flex flex-row gap-4 items-center my-6 justify-center md:justify-start">
                            @if ($alreadyBought)
                                <div
                                    class="px-4 py-2 rounded-lg bg-sky-800 text-white flex items-center gap-2 text-sm border border-sky-600 cursor-not-allowed">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-discount-check w-5 h-5" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1">
                                        </path>
                                        <path d="M9 12l2 2l4 -4"></path>
                                    </svg>
                                    Premium Akses
                                </div>

                                <a href="{{ route('member.mycourse.course', $course->id) }}"
                                    class="px-4 py-2 rounded-lg bg-red-800 text-white hover:scale-110 hover:duration-200 flex items-center gap-2 text-sm border border-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-brand-youtube h-5 w-5" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="3" y="5" width="18" height="14" rx="4">
                                        </rect>
                                        <path d="M10 9l5 3l-5 3z"></path>
                                    </svg>
                                    Lanjutkan Belajar
                                </a>
                            @else
                                <form action="{{ route('cart.store', $course->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="px-4 py-2 rounded-lg bg-green-800 text-white hover:scale-110 hover:duration-200 flex items-center gap-2 text-sm border border-green-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-basket w-5 h-5" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="7 10 12 4 17 10"></polyline>
                                            <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                            <circle cx="12" cy="15" r="2"></circle>
                                        </svg>

                                        @if ($course->price_after_discount == 0)
                                            Ikuti Kelas Sekarang
                                        @else
                                            Beli Sekarang
                                        @endif
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <section class="w-full bg-slate-300 py-8 2xl:py-10 2xl:px-36">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-8">
                    <div class="border rounded-lg">
                        <div class="bg-white border-b px-4 py-3 text-gray-800 font-bold flex items-center gap-1">
                            Tentang Course
                        </div>
                        <div class="p-4 bg-white">
                            <div class="flex flex-col gap-4">
                                {!! $course->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="border rounded-lg">
                        <div class="bg-white border-b px-4 py-3 text-gray-700 flex items-center gap-1 font-bold">
                            Daftar Isi
                        </div>
                        <div class="p-4 bg-white">
                            <div class="flex flex-col gap-4">
                                <div class="h-96 overflow-auto scrollbar-thumb-gray-300 scrollbar-track-gray-100 scrollbar-thin">
                                    @foreach ($series as $i => $item)
                                        {{-- <h3 class="font-extrabold px-2">Testing</h3> --}}
                                        <div class="rounded bg-slate-100 text-grey-800 font-semibold text-sm m-2 p-4">
                                            {{ $item->title }} 
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-lg mt-5">
                        <div class="bg-white border-b px-4 py-3 text-gray-700 flex items-center gap-1 font-bold">
                            Benefit
                        </div>
                        <div class="p-4 bg-white">
                            <div class="flex flex-col gap-4">
                                <div class="overflow-auto scrollbar-thumb-gray-300 scrollbar-track-gray-100 scrollbar-thin">
                                    @foreach ($course->benefits as $benefit)
                                        <div class="rounded bg-slate-100 text-grey-800 font-semibold text-sm m-2 p-3">
                                            <i class="fa fa-check" style="color:#4dc771;"></i> {{ $benefit->name }}
                                        </div>       
                                    @endforeach                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (count($course->photo) > 0)
            <div class="flex flex-col gap-2 text-center items-center my-10 mx-4">
                <h1 class="text-2xl font-semibold">Photo Aplikasi</h1>
                <p class="text-sm">
                    Beberapa kumpulan Photo dari aplikasi yang akan dikembangkan.
                </p>
                <div class="w-60 bg-slate-500 h-1 mt-2"></div>
            </div>

            <div class="container mx-auto lg:grid lg:grid-cols-3 lg:gap-2">
                @foreach ($course->photo as $photo)
                <div class="max-w-sm rounded overflow-hidden shadow-lg m-2 bg-white p-2">
                    <a class="spotlight" href="{{ asset('storage/photos/'.$photo->photo) }}">
                        <img src="{{ asset('storage/photos/'.$photo->photo) }}">
                    </a>
                    <div class="px-6 py-4">
                        <p class="text-gray-700 text-center font-semibold text-sm">{{ $photo->name }}</p>
                    </div>
                </div>                
                @endforeach
            </div>
        @endif
     
        @if (count($reviews) > 0)
            <div class="flex flex-col gap-2 text-center items-center my-10 mx-4">
                <h1 class="text-2xl font-semibold">Rating & Reviews</h1>
                <p class="text-sm">
                    Penilaian dan ulasan dari member yang telah mengikuti kelas ini.
                </p>
                <div class="w-60 bg-slate-500 h-1 mt-2"></div>
            </div>

            <div class="container mx-auto">
                <!-- Rating Summary -->
                <div class="bg-white rounded-lg border border-slate-300 p-6 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Overall Rating -->
                        <div class="text-center">
                            <div class="text-4xl font-bold text-yellow-500">{{ number_format($avgRating ?? 0, 1) }}</div>
                            <div class="flex justify-center my-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-star {{ $i <= round($avgRating ?? 0) ? 'fill-yellow-500' : 'fill-gray-300' }} w-6 h-6"
                                        viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                    </svg>
                                @endfor
                            </div>
                            <div class="text-sm text-gray-600">{{ $ratingCount }} ulasan</div>
                        </div>

                        <!-- Rating Distribution -->
                        <div class="col-span-2">
                            @for ($rating = 5; $rating >= 1; $rating--)
                                @php
                                    $count = $ratingStats->where('rating', $rating)->first()->count ?? 0;
                                    $percentage = $ratingCount > 0 ? ($count / $ratingCount) * 100 : 0;
                                @endphp
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="text-sm w-8">{{ $rating }} star</div>
                                    <div class="flex-1 bg-gray-200 rounded-full h-2">
                                        <div class="bg-yellow-500 h-2 rounded-full" style="width: {{ $percentage }}%"></div>
                                    </div>
                                    <div class="text-sm text-gray-600 w-12">{{ $count }}</div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Reviews -->
                <div class="my-5 mx-5 flex flex-row overflow-x-auto md:grid md:grid-cols-3 gap-4 items-start">
                    @foreach ($reviews as $review)
                        <div class="min-w-full bg-white rounded-lg border border-slate-300">
                            <div class="flex justify-between p-4">
                                <div class="flex space-x-4">
                                    <div>
                                        <img src="{{ $review->user->avatar }}" alt=""
                                            class="object-cover w-12 h-12 rounded-full border">
                                    </div>
                                    <div>
                                        <h4 class="font-bold">{{ $review->user->name }}</h4>
                                        <span class="text-xs">
                                            {{ Carbon\Carbon::parse($review->created_at)->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-1 text-yellow-500">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-star {{ $i <= $review->rating ? 'fill-yellow-500' : 'fill-gray-300' }} w-4 h-4"
                                            viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            <div class="p-4 space-y-2 text-sm text-gray-800 border-t border-dashed border-slate-300">
                                <p class="text-left">
                                    {{ $review->review }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </section>
@endsection