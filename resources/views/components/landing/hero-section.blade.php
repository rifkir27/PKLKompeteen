@props(['data'])
<div class="w-full bg-custom-orange pt-28 pb-16">
    <div class="container mx-auto">
        <div class="flex flex-col gap-2 text-center items-center">
            <h1 class="text-3xl font-semibold lg:text-5xl text-white text-center">
                {{ $slot }}
                {{ $title }}
            </h1>
            <p class="mt-1 text-sm leading-relaxed md:text-xl text-center text-gray-100">
                {{ $subtitle }}
            </p>    
            {{-- <p class="py-2 leading-relaxed text-xs md:text-sm text-gray-100 max-w-4xl text-center">
                {{ $details }}
            </p> --}}
            {{-- <div
                class="hidden md:flex md:text-center md:justify-center md:items-center md:row-auto mx-auto sm:mx-0 md:col-span-1">
                <div
                    class="border p-2 rounded-3xl border-slate-600 h-96 w-80 flex flex-col justify-center bg-slate-800 shadow-lg shadow-slate-900">
                    <div class="flex flex-col gap-2">
                        <span class="text-8xl text-gray-200 font-semibold">{{ $data->count() }}</span>
                        <span class="text-6xl text-gray-300 font-semibold">{{ $cardtitle }}</span>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>