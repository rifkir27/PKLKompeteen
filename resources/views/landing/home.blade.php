@extends('layouts.frontend.app', ['title' => 'Homepage'])

@section('content')
    @include('layouts.frontend.partials.hero')
    {{-- <section
        class="p-8 text-center bg-slate-800 font-semibold text-white text-lg md:text-2xl">
        <span class="text-red-500">{{ $user->count() }}</span> Orang Telah Belajar di Eduthings
    </section> --}}
    <section class="bg-slate-300 w-full p-10 2xl:px-36">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-2xl font-bold mb-5 text-gray-600">E-BOOK
            <h3 class="text-sm md:text-xl mb-5 font-light">Kami menyediakan berbagai macam pembahasan dengan studi kasus yang dapat membantu menjadi seorang Developer Profesional.</h3>
            <div class="text-center mb-10">
                <span class="inline-block w-1 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-40 h-1 rounded-full bg-sky-800"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-1 h-1 rounded-full bg-sky-800 ml-1"></span>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 container mx-auto my-5 items-start">
            @foreach ($courses as $course)
                <x-landing.course-item :course="$course" />
            @endforeach
        </div>
        <div class="flex justify-center text-center mt-14">
            <a href="{{ route('course.index') }}"
                class="px-4 py-2 rounded-lg bg-sky-700 text-white hover:bg-sky-900 hover:duration-200 flex items-center gap-2 text-lg border border-slate-500 hover:border-sky-900 hover:transition-colors">
                Lihat Semua Course
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
    </section>
    {{-- <section class="w-full max-w-6xl mx-auto bg-white mt-10 mb-10 my-5">
        <div class="text-center max-w-xl mx-auto">
            <h1 class="text-2xl font-bold mb-5 text-gray-600">Testimoni
            <h3 class="text-sm md:text-xl mb-5 font-light mx-5">Testimoni dari peserta yang telah belajar di Eduthings</h3>
            <div class="text-center mb-10">
                <span class="inline-block w-1 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-40 h-1 rounded-full bg-sky-800"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-sky-800 ml-1"></span>
                <span class="inline-block w-1 h-1 rounded-full bg-sky-800 ml-1"></span>
            </div>
        </div>
        <div class="mx-3 md:flex items-start">
            <div class="px-3 md:w-1/3">
                <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                    <div class="w-full flex mb-4 items-center">
                        <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                            <img src="https://i.pravatar.cc/100?img=1" alt="">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-bold text-sm uppercase text-gray-600">Kenzie Edgar.</h6>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi dicta error deleniti sequi.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                    </div>
                </div>
                <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                    <div class="w-full flex mb-4 items-center">
                        <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                            <img src="https://i.pravatar.cc/100?img=2" alt="">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-bold text-sm uppercase text-gray-600">Stevie Tifft.</h6>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi dicta error deleniti sequi.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                    </div>
                </div>
            </div>
            <div class="px-3 md:w-1/3">
                <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                    <div class="w-full flex mb-4 items-center">
                        <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                            <img src="https://i.pravatar.cc/100?img=3" alt="">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-bold text-sm uppercase text-gray-600">Tommie Ewart.</h6>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi dicta error deleniti sequi.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                    </div>
                </div>
                <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                    <div class="w-full flex mb-4 items-center">
                        <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                            <img src="https://i.pravatar.cc/100?img=4" alt="">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-bold text-sm uppercase text-gray-600">Charlie Howse.</h6>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi dicta error deleniti sequi.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                    </div>
                </div>
            </div>
            <div class="px-3 md:w-1/3">
                <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                    <div class="w-full flex mb-4 items-center">
                        <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                            <img src="https://i.pravatar.cc/100?img=5" alt="">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-bold text-sm uppercase text-gray-600">Nevada Herbertson.</h6>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi dicta error deleniti sequi.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                    </div>
                </div>
                <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                    <div class="w-full flex mb-4 items-center">
                        <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                            <img src="https://i.pravatar.cc/100?img=6" alt="">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-bold text-sm uppercase text-gray-600">Kris Stanton.</h6>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi dicta error deleniti sequi.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                    </div>
                </div>
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
    <section class="w-full p-6 bg-sky-800">
        <div class="flex flex-col items-center justify-center p-4 space-y-8 md:p-10 md:px-24 xl:px-48">
            <h1 class="text-2xl md:text-3xl font-bold leading-none text-center text-white">
                TUNGGU APA LAGI ?
            </h1>
            <p class="text-sm md:text-base font-medium text-center text-gray-100">
                Belajar lebih terarah dan sistematis dengan materi berkualitas
                tinggi beserta pendampingan mentoring secara intensif.
            </p>
            @if (!Auth::user())
              <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-8">
                  <a href="{{ route('register') }}"
                      class="px-4 py-2 rounded-lg bg-slate-700 text-white text-base flex items-center gap-2 hover:scale-110 hover:duration-200 border border-slate-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24"
                          height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <circle cx="9" cy="7" r="4"></circle>
                          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                          <path d="M16 11h6m-3 -3v6"></path>
                      </svg>
                      Daftar Gratis
                  </a>
              </div>
            @endif
        </div>
    </section>
@endsection