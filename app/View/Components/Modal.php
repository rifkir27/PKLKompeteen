<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $id, $url, $title, $titleBtn;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $url, $title, $titleBtn)
    {
        $this->id = $id;
        $this->url = $url;
        $this->title = $title;
        $this->titleBtn = $titleBtn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
