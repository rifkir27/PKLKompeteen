@extends('layouts.frontend.app', ['title' => 'Article'])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Artikel"
        subtitle="Kumpulan artikel dari para member yang memberikan pengalaman dari platform eduthings"
        details="Disini artikel yang kami tampilkan berasal langsung dari para member yang telah bergabung dengan kami."
        :data="$articles" cardtitle="article">
    </x-landing.hero-section>

    <div class="w-full bg-slate-300 p-10 2xl:px-36">
        <div class="container mx-auto">

            <x-landing.search-section :url="route('article')" />

            <div class="my-5 flex flex-row overflow-x-auto md:grid md:grid-cols-3 gap-4 items-start">
                @foreach ($articles as $article)
                    <div class="min-w-full bg-white rounded-lg">
                        <div class="p-4 space-y-2 text-sm text-gray-800 border-t border-dashed">
                            <h1 class="text-center font-semibold h-12 min-h-full">
                                {{ $article->title }}
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
                                Tentang Artikel :
                            </p>
                            <p class="content">{!! $article->content !!}</p>
                        </div>
                        <div class="flex p-4 space-x-4 border-t border-dashed border-slate-300">
                            <div>
                                <h4 class="font-bold text-gray-800">{{ $article->user }}</h4>
                                <span class="text-xs text-gray-800">
                                    {{ $article->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
