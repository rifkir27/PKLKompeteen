@extends('layouts.frontend.app', ['title' => 'Infrastructure'])

@section('content')
<!-- hero section -->
<x-landing.hero-section title="Infrastructure" subtitle="Kumpulan infrastructure project dari para member yang mengisi di platform eduthings"
    details="Disini project para member yang sudah belajar kami tampilkan agar mampu meningkatkan motivasi belajar para member untuk saling sharing project dan menjadi inspirasi dalam membangun sebuah project."
    :data="$infrastructures" cardtitle="Infrastructure">
</x-landing.hero-section>

<div class="w-full bg-slate-300 p-10 2xl:px-36">
    <div class="container mx-auto">

    <x-landing.search-section :url="route('infrastructure')" />

        <div class="my-5 flex flex-row overflow-x-auto md:grid md:grid-cols-3 gap-4 items-start">
            @foreach ($infrastructures as $infrastructure)
                <div class="min-w-full bg-white rounded-lg">
                    <div>
                        <img src="{{ $infrastructure->image }}" class="rounded-t-lg" />
                    </div>
                    <div class="p-4 space-y-2 text-sm text-gray-800 border-t border-dashed">
                        <h1 class="text-center font-semibold h-12 min-h-full">
                            {{ $infrastructure->name }}
                        </h1>
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
                            Deskripsi :
                        </p>
                        <p class="h-5 max-h-full">{!! $infrastructure->description !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
