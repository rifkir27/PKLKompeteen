@extends('layouts.frontend.app', ['title' => 'Testimoni'])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Testimoni"
        subtitle="Kumpulan testimoni dari para member yang sudah menggunakan plaftrom kami"
        details="Disini testimoni yang kami tampilkan berasal langsung dari para member yang telah bergabung dengan kami."
        :data="$testimonials" cardtitle="testimonial">
    </x-landing.hero-section>

    <div class="w-full bg-slate-300 p-10 2xl:px-36">
        <div class="container mx-auto">

            <x-landing.search-section :url="route('testimonial')" />

            <div class="my-5 flex flex-row overflow-x-auto md:grid md:grid-cols-3 gap-4 items-start">
                @foreach ($testimonials as $testimonial)
                    <div class="min-w-full bg-white rounded-lg">
                        <div class="p-4 space-y-2 text-sm text-gray-800 border-t border-dashed">
                            <h1 class="text-center font-semibold h-12 min-h-full">
                                {{ $testimonial->name }}
                            </h1>
                        </div>
                        <div class="flex p-4 space-x-4 border-t border-dashed border-slate-300">
                            <div>
                                <h4 class="font-bold text-gray-800">{{ $testimonial->position }}</h4>
                            </div>
                        </div>
                        <div class="p-4 border-t border-dashed border-slate-300 text-gray-800 text-sm flex flex-col gap-2">
                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-info-circl w-5 h-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    <polyline points="11 12 12 12 12 16 13 16"></polyline>
                                </svg>
                                Deskripsi Testimoni :
                            </p>
                            <p class="description">{!! $testimonial->description !!}</p>
                        </div>
                        <div class="flex p-4 space-x-4 border-t border-dashed border-slate-300">
                            <div>
                                <span class="text-xs text-gray-800">
                                    {{ $testimonial->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection