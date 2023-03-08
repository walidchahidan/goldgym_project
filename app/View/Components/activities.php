<?php

namespace App\View\Components;

use Illuminate\View\Component;

class activities extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $classes;
    public function __construct($classes)
    {
        //
        $this->classes = $classes;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.activities');
    }
}
