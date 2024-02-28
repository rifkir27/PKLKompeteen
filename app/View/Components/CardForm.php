<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardForm extends Component
{
    public $title, $url, $titleBtn;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $url, $titleBtn)
    {
        $this->title = $title;
        $this->url = $url;
        $this->titleBtn = $titleBtn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-form');
    }
}
