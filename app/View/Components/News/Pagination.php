<?php

namespace App\View\Components\News;

use Illuminate\View\Component;

class Pagination extends Component
{
    public $meta;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $meta
    )
    {
        $this->meta = $meta;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.news.pagination');
    }
}
