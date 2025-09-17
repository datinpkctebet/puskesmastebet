<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Blog extends Component
{
    public $blogs;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $blogs
    )
    {
        $this->blogs = $blogs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.blog');
    }
}
