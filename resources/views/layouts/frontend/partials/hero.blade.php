<div class="w-full bg-white pt-32 pb-20">
    <div class="container mx-auto">
        <div class="flex flex-col gap-2 text-center items-center">
            <p class="text-3xl md:text-5xl leading-relaxed text-center text-black m-5">
                Platform Belajar Pemrograman dan Ilmu Teknologi Lainnya Secara Lengkap dan Mendasar.
            </p>

            <div class="flex flex-row gap-4 items-center justify-center md:center-start mt-5">
                <a href="{{ route('course.index') }}"
                    class="px-4 py-2 rounded-lg bg-white-800 text-white hover:scale-110 hover:duration-200 flex items-center gap-2 text-sm border border-cyan-600">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-device-laptop w-5 h-5" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="3" y1="19" x2="21" y2="19"></line>
                        <rect x="5" y="6" width="14" height="10" rx="1"></rect>
                    </svg>
                    Gabung Kelas
                </a>
                <a href="{{ route('showcase') }}"
                    class="px-4 py-2 rounded-lg bg-red-800 text-white hover:scale-110 hover:duration-200 flex items-center gap-2 text-sm border border-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-source-code w-5 h-5"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5"></path>
                        <path d="M6 5l-2 2l2 2"></path>
                        <path d="M10 9l2 -2l-2 -2"></path>
                    </svg>
                    Lihat Showcase
                </a>
            </div>
        </div>
    </div>
</div>