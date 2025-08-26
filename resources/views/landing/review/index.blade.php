@extends('layouts.frontend.app', ['title' => 'Reviews'])

@section('content')
    <x-landing.hero-section 
        title="Review" 
        subtitle="Kumpulan review dari para member yang sudah membeli premium disini"
        details="Disini review yang diberikan kami tampilkan secara menyeluruh tanpa adanya perubahan review agar kami semakin baik dalam menyajikan konten - konten premium maupun gratis."
        :data="$reviews" 
        cardtitle="Review">
    </x-landing.hero-section>

    <div class="w-full bg-custom-purple2 p-10 2xl:px-36">
        <div class="container mx-auto">
            
            <x-landing.search-section :url="route('review')" />

            <div class="my-5 flex flex-row overflow-x-auto md:grid md:grid-cols-3 gap-6 items-start">
                @foreach ($reviews as $review)
                    <div class="min-w-full bg-white shadow-lg rounded-xl border border-slate-200 hover:shadow-xl transition duration-300">
                        
                        <div class="flex justify-between p-5">
                            <div class="flex space-x-4 items-center">
                                <img src="{{ $review->user->avatar }}" 
                                    alt="Avatar {{ $review->user->name }}"
                                    class="object-cover w-12 h-12 rounded-full border-2 border-custom-orange shadow-sm">
                                <div>
                                    <h4 class="font-semibold text-gray-800">{{ $review->user->name }}</h4>
                                    <span class="text-xs text-gray-500">
                                        {{ Carbon\Carbon::parse($review->created_at)->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-star fill-yellow-500 w-6 h-6" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                    </path>
                                </svg>
                                <span class="text-xl font-bold text-gray-800">
                                    {{ $review->rating }}
                                </span>
                            </div>
                        </div>

                        <!-- Isi review -->
                        <div class="px-5 pb-4 space-y-3 text-lg text-black font-base border-t border-dashed border-slate-200">
                            <p class="text-left min-h-[64px] leading-relaxed">
                                "{{ $review->review }}"
                            </p>
                        </div>

                        <!-- Info course -->
                        <div class="p-5 border-t border-dashed border-slate-200 text-gray-700 text-sm flex flex-col gap-2">
                            <p class="flex items-center gap-2 font-medium text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-message-2 w-5 h-5 text-purple-600" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                                    </path>
                                    <line x1="8" y1="9" x2="16" y2="9"></line>
                                    <line x1="8" y1="13" x2="14" y2="13"></line>
                                </svg>
                                Review Course :
                            </p>
                            <a href="{{ route('course.show', $review->course->slug) }}"
                                class="underline underline-offset-2 font-semibold text-purple-700 hover:text-purple-900 transition">
                                {{ $review->course->name }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
