<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IconButton extends Component
{
    public $icon;
    public $title;
    public $link;
    public $classes;

    public function __construct($icon, $title, $link, $classes)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->link = $link;
        $this->classes = $classes;
    }

    // ...

    public function render()
    {
        return view('components.icon-button');
    }


}


