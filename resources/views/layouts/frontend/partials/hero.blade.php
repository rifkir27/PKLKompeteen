<div class="w-full bg-white pt-32 pb-20">
    <div class="container mx-auto">
        <div class="flex flex-col gap-2 text-center items-center">

            <p class="text-3xl md:text-5xl leading-relaxed text-center text-black m-5 font-nunito font-semibold">
                Platform Belajar Pemrograman dan Ilmu Teknologi Lainnya Secara Lengkap dan Mendasar.
            </p>


            <p class="text-xl md:text-lg text-black mb-5 font-semibold font-nunito">
                Belajar, berkolaborasi, dan kembangkan skill anda bersama kami di KOMPETEEN
            </p>

            <div class="flex flex-row gap-4 items-center justify-center mt-5">
                <a href="{{ route('course.index') }}"
                    class="px-3 py-2 rounded-xl bg-orange-600 font-medium text-white text-lg flex items-center gap-2
                        transition-transform duration-300 hover:scale-110">
                    Gabung Kelas
                </a>
                <a href="{{ route('showcase') }}"
                    class="px-4 py-2 rounded-xl text-black font-medium text-base transition-transform duration-300 hover:scale-110"
                    style="border: 3px solid #ea580c;">
                    Lihat Showcase
                </a>
            </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10 items-center">
                    <img src="{{ asset('images/img.png') }}" alt="Gambar 1"
                        class="w-64 h-96 object-cover rounded-xl shadow-lg rotate-[-2deg] mx-auto">

                   <img src="{{ asset('images/img.png') }}" alt="Gambar 1"
                        class="w-64 h-96 object-cover rounded-xl shadow-lg mx-auto -mt-4">

                   <img src="{{ asset('images/img.png') }}" alt="Gambar 1"
                        class="w-64 h-96 object-cover rounded-xl shadow-lg rotate-[2deg] mx-auto">
                </div>



        </div>
    </div>
</div>
