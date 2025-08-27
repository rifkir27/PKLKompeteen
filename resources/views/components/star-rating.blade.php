@props([
    'rating' => 0,
    'showNumber' => false,
    'showCount' => false,
    'ratingCount' => 0,
    'size' => 'sm', // sm, md, lg
    'showHalfStars' => true,
    'interactive' => true, // Enable interactivity by default
    'animated' => true, // Enable animations by default
    'emptyStarColor' => '#e5e7eb', // Default empty star color
    'filledStarColor' => '#fbbf24', // Default filled star color
    'halfStarColor' => '#fbbf24', // Default half star color
    'showTooltip' => false, // Show tooltip on hover
    'tooltipText' => 'Rating: {rating} out of 5 stars' // Tooltip text template
])

@php
    // Map size to component classes
    $componentClasses = [
        'sm' => 'star-rating-component sm',
        'md' => 'star-rating-component md', 
        'lg' => 'star-rating-component lg'
    ];
    
    $componentClass = $componentClasses[$size] ?? $componentClasses['sm'];
    
    // Add interactive class if needed
    if ($interactive) {
        $componentClass .= ' interactive';
    }
    
    // Add animated class if needed
    if ($animated) {
        $componentClass .= ' animated';
    }
    
    // Add tooltip class if needed
    if ($showTooltip) {
        $componentClass .= ' has-tooltip';
    }
    
    // Format tooltip text
    $formattedTooltip = str_replace('{rating}', number_format($rating, 1), $tooltipText);
@endphp

<div class="{{ $componentClass }}" 
     role="rating" 
     aria-label="Rating: {{ $rating }} out of 5 stars"
     @if($showTooltip) title="{{ $formattedTooltip }}" @endif>
    
    <div class="stars-container" aria-hidden="true">
        @for ($i = 1; $i <= 5; $i++)
            @if ($showHalfStars && $i - 0.5 <= $rating && $rating < $i)
                <span class="star-wrapper" data-rating="{{ $i }}">
                    <i class="fas fa-star-half-alt half-star" 
                       style="color: {{ $halfStarColor }};"
                       aria-hidden="true"></i>
                    <span class="sr-only">{{ $i - 0.5 }} stars</span>
                </span>
            @elseif ($i <= $rating)
                <span class="star-wrapper" data-rating="{{ $i }}">
                    <i class="fas fa-star full-star" 
                       style="color: {{ $filledStarColor }};"
                       aria-hidden="true"></i>
                    <span class="sr-only">{{ $i }} stars</span>
                </span>
            @else
                <span class="star-wrapper" data-rating="{{ $i }}">
                    <i class="far fa-star empty-star" 
                       style="color: {{ $emptyStarColor }};"
                       aria-hidden="true"></i>
                    <span class="sr-only">{{ $i }} stars</span>
                </span>
            @endif
        @endfor
    </div>
    
    @if($showNumber || $showCount)
        <div class="rating-info">
            @if($showNumber)
                <span class="rating-number">{{ number_format($rating, 1) }}</span>
            @endif
            
            @if($showCount && $ratingCount > 0)
                <span class="rating-count">({{ $ratingCount }})</span>
            @endif
        </div>
    @endif
    
    <!-- Loading indicator for async operations -->
    <div class="rating-loading" style="display: none;">
        <div class="loading-spinner"></div>
    </div>
</div>

@if($interactive)
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ratingComponents = document.querySelectorAll('.star-rating-component.interactive');
    
    ratingComponents.forEach(component => {
        const stars = component.querySelectorAll('.star-wrapper');
        
        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = this.getAttribute('data-rating');
                // Handle rating submission logic here
                console.log('Rating submitted:', rating);
                
                // Show loading state
                const loading = component.querySelector('.rating-loading');
                loading.style.display = 'block';
                
                // Simulate API call
                setTimeout(() => {
                    loading.style.display = 'none';
                    component.classList.add('success');
                    setTimeout(() => component.classList.remove('success'), 2000);
                }, 1000);
            });
            
            star.addEventListener('mouseenter', function() {
                const rating = this.getAttribute('data-rating');
                const stars = component.querySelectorAll('.star-wrapper');
                
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.add('hover');
                    } else {
                        s.classList.remove('hover');
                    }
                });
            });
            
            star.addEventListener('mouseleave', function() {
                const stars = component.querySelectorAll('.star-wrapper');
                stars.forEach(s => s.classList.remove('hover'));
            });
        });
    });
});
</script>
@endif
