<?php

namespace App\View\Components\Partial;

use Illuminate\View\Component;

class Title extends Component
{
    public $title;
    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = '',
        $description = ''
    )
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.partial.title');
    }
}
