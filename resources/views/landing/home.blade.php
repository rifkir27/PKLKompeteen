@extends('layouts.frontend.app', ['title' => 'Homepage'])

@section('content')
    {{-- Hero --}}
    @include('layouts.frontend.partials.hero')
<<<<<<< main
    {{-- <section
        class="p-8 text-center bg-slate-800 font-semibold text-white text-lg md:text-2xl">
        <span class="text-red-500">{{ $user->count() }}</span> Orang Telah Belajar di Eduthings
    </section> --}}
    <section class="bg-slate-300 w-full p-10 2xl:px-36">
        <div class="text-center max-w-4xl mx-auto">
            <h3 class="text-sm md:text-xl mb-5 font-light">Kami menyediakan berbagai macam pembahasan dengan studi kasus yang dapat membantu menjadi seorang Developer Profesional.</h3>
            <div class="text-center mb-10">
                <span class="inline-block w-1 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-40 h-1 rounded-full bg-sky-800"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-1 h-1 rounded-full bg-sky-800 ml-1"></span>
=======

    
            <div class="flex justify-center space-x-1 mb-12">
                <span class="w-1 h-1 bg-sky-800 rounded-full"></span>
                <span class="w-3 h-1 bg-sky-800 rounded-full"></span>
                <span class="w-40 h-1 bg-sky-800 rounded-full"></span>
                <span class="w-3 h-1 bg-sky-800 rounded-full"></span>
                <span class="w-1 h-1 bg-sky-800 rounded-full"></span>
>>>>>>> main
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
<<<<<<< main
            </div>
        </div>
    </section>
    <section class="bg-slate-300 w-full py-10 px-10">
        <div class="text-center max-w-xl mx-auto">
            <h3 class="text-2xl mb-5 font-bold">Telah Dipercaya & Bekerjasama</h3>
            <div class="text-center mb-10">
                <span class="inline-block w-1 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-40 h-1 rounded-full bg-sky-800"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-1 h-1 rounded-full bg-sky-800 ml-1"></span>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 container mx-auto items-start">
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl ">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/187/187902.png"
                  alt="Chanel" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/3845/3845877.png"
                  alt="Nike" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/732/732242.png"
                  alt="Toyota" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/187/187868.png"
                  alt="Toyota" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/685/685680.png"
                  alt="Toyota" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/685/685680.png"
                  alt="Toyota" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/685/685680.png"
                  alt="Toyota" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/685/685680.png"
                  alt="Toyota" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/187/187868.png"
                  alt="Toyota" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/3845/3845877.png"
                  alt="Nike" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/3845/3845877.png"
                  alt="Nike" role="img" />
            </div>
            <div
                class="bg-white w-full h-max rounded-lg flex justify-center xl:p-5 items-center inset-0 transform  hover:scale-75 transition duration-300 hover:contrast-75 drop-shadow-xl ">
                <img class="focus:outline-none w-12 sm:w-12 xs:w-12 my-2" src="https://cdn-icons-png.flaticon.com/128/187/187902.png"
                  alt="Chanel" role="img" />
            </div>
        </div>
        <div class="flex justify-center text-center mt-14">
            <a href="#"
                class="px-4 py-2 rounded-lg bg-sky-700 text-white hover:bg-sky-900 hover:duration-200 flex items-center gap-2 text-lg border border-slate-500 hover:border-sky-900 hover:transition-colors">
                Lihat Semuanya
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right w-5 h-5"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <line x1="15" y1="16" x2="19" y2="12"></line>
                    <line x1="15" y1="8" x2="19" y2="12"></line>
                </svg>
            </a>
        </div>
    </section> --}}
@endsection
=======
            @endguest
        </div>
    </section>
@endsection
>>>>>>> main
