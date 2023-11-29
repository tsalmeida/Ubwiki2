<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhiteBoard extends Component
{
    public $classes;

    public function __construct($classes = '')
    {
        $this->classes = $classes;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.white-board');
    }
}
