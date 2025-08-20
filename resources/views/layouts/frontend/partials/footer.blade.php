<footer class="bg-custom-purple">
    <div class="container px-10 py-10 mx-auto 2xl:px-36">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 justify-items-center md:justify-items-start">
            <div class="text-center sm:text-start col-span-2">
                <a href="/" class="font-bold text-2xl text-white">
                    {{ env('APP_NAME') }}
                </a>
                <p class="max-w-md mt-2 text-sm text-center md:text-start text-gray-100">
                    Website Belajar Seputar Coding Lengkap. Ada pertanyaan lebih lanjut ? silakan hubungi 082140405444
                </p>
            </div>
            <div>
                <div>
                    <h3 class="text-white uppercase">Informasi</h3>
                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">
                        Tentang Kami
                    </a>
                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">FAQ</a>
                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Tim Kami</a>
                </div>
            </div>
            <div>
                <div>
                    <h3 class="text-white uppercase">Komunitas</h3>
                    <a href="{{ route('review') }}" class="block mt-2 text-sm text-gray-400 hover:underline">Ulasan Member</a>
                    <a href="{{ route('showcase') }}" class="block mt-2 text-sm text-gray-400 hover:underline">Showcase Member</a>

                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Grup Telegram</a>
                </div>
            </div>
        </div>
        <hr class="h-px my-6 bg-white border-none">
        <div>
            <p class="text-center text-gray-300">
                © 2023 {{ env('APP_NAME') }}
            </p>
        </div>
    </div>
</footer>