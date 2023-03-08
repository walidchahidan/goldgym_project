<?php

namespace App\View\Components;

use Illuminate\View\Component;

class clubslider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $clubs;
    public function __construct($clubs)
    {
        //
        $this->clubs = $clubs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.clubslider');
    }
}
