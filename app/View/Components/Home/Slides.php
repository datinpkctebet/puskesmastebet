<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Slides extends Component
{
    public $galleries;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $galleries
    )
    {
        $this->galleries = $galleries;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.slides');
    }
}
