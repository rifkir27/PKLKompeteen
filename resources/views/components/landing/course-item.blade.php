@props(['course'])
<a href="{{ route('course.show', $course->slug) }}">
    <div class="relative overflow-hidden bg-white rounded-lg shadow-custom">
        
        @if ($course->price_after_discount <= 0)
            <div class="absolute right-0 top-0 h-16 w-16 animate-pulse">
                <div
                    class="absolute transform rotate-45 bg-red-500 text-center text-white font-semibold py-1 left-[-70px] top-[32px] w-[170px]">
                    Gratis
                </div>
            </div>
        @endif
        <img class="rounded-t-lg" src="{{ $course->image }}" alt="product image">
        <div class="p-4 md:p-5 text-center">
            <div class="h-16 min-h-full font-medium">
                {{ $course->name }}
            </div>
            <div class="flex flex-row gap-3 text-sm justify-center my-4 font-semibold">
                <div class="text-slate-600 flex items-center gap-1 align-bottom">
                    <i class="fa fa-users"></i>
                    {{ $course->enrolled }} Member
                </div>
                <div class="text-slate-600 flex items-center gap-1 align-bottom">
                    <i class="fa fa-comment"></i>
                    {{ $course->reviews_count }} Review
                </div>
            </div>
            <div class="flex justify-between items-center mt-2">               
                @if ($course->price_before_discount != $course->price_after_discount)
                    <div class="w-24 p-1 rounded bg-sky-900 text-center text-white text-sm font-semibold">
                        Disc {{discount($course->price_before_discount, $course->price_after_discount) }}%
                    </div>
                @else 
                    &nbsp;
                @endif
                <div class="flex flex-col">
                        @if($course->price_before_discount != $course->price_after_discount)
                            <span class="line-through text-red-500 font-bold text-right text-sm">
                                Rp {{ moneyFormat($course->price_before_discount) }}
                            </span>
                        @else 
                            &nbsp;
                        @endif
                    <span class="text-slate-600 font-bold text-right text-base">
                        Rp {{ moneyFormat($course->price_after_discount) }}
                    </span>
                </div>
            </div>
        </div>
        <div class="border-t border-slate-300 border-solid p-4">
            <div class="flex items-center gap-1">
                <div class="text-slate-600 font-semibold text-sm">{{ $course->user->name }}</div>
            </div>
        </div>
    </div>
</a>