@extends('layouts.frontend.app', ['title' => 'Showcase'])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Showcase" subtitle="Kumpulan showcase project dari para member yang sudah belajar di platform eduthings"
        details="Disini project para member yang sudah belajar kami tampilkan agar mampu meningkatkan motivasi belajar para member untuk saling sharing project dan menjadi inspirasi dalam membangun sebuah project."
        :data="$showcases" cardtitle="Showcase">
    </x-landing.hero-section>

    <div class="w-full bg-white p-10 2xl:px-36">
        <div class="container mx-auto">

        <x-landing.search-section :url="route('showcase')" />

            <div class="my-5 flex flex-row overflow-x-auto md:grid md:grid-cols-3 gap-4 items-start">
                @foreach ($showcases as $showcase)
                    <div class="min-w-full border-2 border-custom-purple2 rounded-lg">
                        <div>
                            <img src="{{ $showcase->cover }}" class="rounded-t-lg" />
                        </div>
                        <div class="p-4 space-y-2 text-sm text-gray-800 border-t border-dashed border-custom-purple2">
                            <h1 class="text-center font-semibold h-12 min-h-full">
                                {{ $showcase->title }}
                            </h1>
                        </div>
                        <div class="p-4 border-t border-dashed border-custom-purple2 text-gray-800 text-sm flex flex-col gap-2">
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
                                Tentang Showcase :
                            </p>
                            <p class="h-20 min-h-full">{{ $showcase->description }}</p>
                        </div>
                        <div class="p-4 border-t border-dashed border-custom-purple2 text-gray-800 text-sm flex flex-col gap-2">
                            <p class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-device-laptop w-5 h-5" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="3" y1="19" x2="21" y2="19"></line>
                                    <rect x="5" y="6" width="14" height="10" rx="1">
                                    </rect>
                                </svg>
                                Hasil Belajar :
                            </p>
                            <a href="{{ route('course.show', $showcase->course->slug) }}"
                                class="underline underline-offset-1 font-semibold">
                                {{ $showcase->course->name }}
                            </a>
                        </div>
                        <div class="flex p-4 space-x-4 border-t border-dashed border-custom-purple2">
                            <div>
                                <img src="{{ $showcase->user->avatar }}" alt=""
                                    class="object-cover w-12 h-12 rounded-full border">
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">{{ $showcase->user->name }}</h4>
                                <span class="text-xs text-gray-800">
                                    {{ $showcase->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection