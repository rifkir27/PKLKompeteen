<div class="w-full bg-white pt-32 pb-20">
    <div class="container mx-auto">
        <div class="flex flex-col gap-2 text-center items-center">

            <p class="text-3xl md:text-5xl leading-relaxed text-black m-5 font-nunito font-semibold">
                Platform Belajar Pemrograman dan Ilmu Teknologi Lainnya Secara Lengkap dan Mendasar.
            </p>

            <p class="text-xl md:text-lg text-black mb-5 font-semibold font-nunito">
                Belajar, berkolaborasi, dan kembangkan skill anda bersama kami di KOMPETEEN
            </p>

            <div class="flex flex-row gap-4 items-center justify-center mt-5">
                <a href="{{ route('course.index') }}"
                   class="px-3 py-2 rounded-xl bg-orange-600 font-base text-white text-lg flex items-center gap-2
                          transition-transform duration-300 hover:scale-110">
                    Gabung Kelas
                </a>
                <a href="{{ route('showcase') }}"
                   class="px-4 py-2 rounded-xl text-black font-base text-base transition-transform duration-300 hover:scale-110"
                   style="border: 3px solid #ea580c;">
                    Lihat Showcase
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10 items-center">

                <!-- Course -->
                <div class="relative w-64 h-96 mx-auto">
                    <img src="{{ asset('images/learn.jpg') }}" 
                         alt="Gambar 1"
                         class="w-full h-full object-cover rounded-xl shadow-lg rotate-[-2deg]">

                    <div class="absolute bottom-2 left-4 bg-white rounded-lg shadow-md px-2 py-2 
                                rotate-[-2deg] flex flex-col items-center justify-center w-16 h-16">
                        <p class="text-base font-base text-black">30+</p>
                        <p class="text-xs text-black text-center">E-Course</p>
                    </div>
                </div>

                <div class="relative w-64 h-96 mx-auto -mt-4">
                    <img src="{{ asset('images/img.png') }}" 
                         alt="Gambar 2"
                         class="w-full h-full object-cover rounded-xl shadow-lg">

                    <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 
                                bg-white shadow-md rounded-lg px-6 py-2 w-[80%]">
                        <p class="text-lg font-base text-black text-center">100+ peserta didik</p>
                    </div>
                </div>

                <div class="relative w-64 h-96 mx-auto">
                    <img src="{{ asset('images/mentoring.jpg') }}" 
                         alt="Gambar 3"
                         class="w-full h-full object-cover rounded-xl shadow-lg rotate-[2deg]">

                    <div class="absolute top-2 right-2 bg-white rounded-lg shadow-md px-2 py-2 
                                rotate-[2deg] flex flex-col items-center justify-center w-16 h-16">
                        <p class="text-base font-base text-black">10+</p>
                        <p class="text-xs text-black text-center">Mentor</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
