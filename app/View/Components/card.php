<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     */
    public $name,$link,$modal,$bginfo;
    public function __construct($name,$link,$modal,$bginfo)
    {
        $this->name = $name;
        $this->link = $link;
        $this->modal = $modal;
        $this->bginfo = $bginfo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
