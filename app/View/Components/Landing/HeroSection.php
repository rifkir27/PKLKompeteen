<?php

namespace App\View\Components\Landing;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSection extends Component
{
    public $title, $subtitle, $details, $cardtitle;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $subtitle, $details, $cardtitle)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->details = $details;
        $this->cardtitle = $cardtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.landing.hero-section');
    }
}
