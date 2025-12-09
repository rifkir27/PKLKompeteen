@props([
    'rating' => 0,
    'showNumber' => false,
    'size' => 'md'
])

@php
    $rating = $rating ?? 0;
    $fullStars = floor($rating);
    $halfStar = ($rating - $fullStars) >= 0.5;
    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

    $sizeClass = [
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-xl',
    ][$size] ?? 'text-base';
@endphp

<div class="flex items-center gap-1">
    {{-- FULL STAR --}}
    @for ($i = 0; $i < $fullStars; $i++)
        <span class="text-yellow-400 {{ $sizeClass }}">★</span>
    @endfor

    {{-- HALF STAR --}}
    @if ($halfStar)
        <span class="text-yellow-400 {{ $sizeClass }}">★</span>
    @endif

    {{-- EMPTY STAR --}}
    @for ($i = 0; $i < $emptyStars; $i++)
        <span class="text-yellow-400 {{ $sizeClass }}">☆</span>
    @endfor

    {{-- Number beside stars --}}
    @if ($showNumber)
        <span class="ml-1 text-gray-700 text-sm">
            {{ number_format($rating, 1) }}
        </span>
    @endif
</div>
