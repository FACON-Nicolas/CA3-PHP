<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Collection;

class ListePost extends Component
{
    /**
     * The collection of users to display.
     *
     * @var Collection
     */
    public $posts;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Collection $posts)
    {
        $this->posts = $posts;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.liste-post');
    }
}
