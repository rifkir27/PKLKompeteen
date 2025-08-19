@extends('layouts.frontend.app', ['title' => 'Homepage'])

@section('content')
    {{-- Hero --}}
    @include('layouts.frontend.partials.hero')

    
            <div class="flex justify-center space-x-1 mb-12">
                <span class="w-1 h-1 bg-sky-800 rounded-full"></span>
                <span class="w-3 h-1 bg-sky-800 rounded-full"></span>
                <span class="w-40 h-1 bg-sky-800 rounded-full"></span>
                <span class="w-3 h-1 bg-sky-800 rounded-full"></span>
                <span class="w-1 h-1 bg-sky-800 rounded-full"></span>
            </div>
        </div>

        {{-- Grid Courses --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 container mx-auto">
            @foreach ($courses as $course)
                <div class="transition-transform transform hover:-translate-y-2 hover:shadow-xl">
                    <x-landing.course-item :course="$course" />
                </div>
            @endforeach
        </div>

        {{-- Button --}}
        <div class="flex justify-center mt-14">
            <a href="{{ route('course.index') }}"
                class="px-6 py-3 rounded-xl bg-sky-700 text-white font-semibold flex items-center gap-2 text-lg shadow-lg hover:bg-sky-900 hover:scale-105 transition">
                Lihat Semua Course
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </section>

    

            @guest
                <div>
                    <a href="{{ route('register') }}"
                        class="px-6 py-3 rounded-xl bg-white text-sky-800 font-bold text-lg flex items-center gap-2 hover:bg-slate-200 hover:scale-105 transition shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        Daftar Gratis
                    </a>
                </div>
            @endguest
        </div>
    </section>
@endsection
