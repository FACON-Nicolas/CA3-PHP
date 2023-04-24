<?php

namespace App\View\Components\Profile;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Posts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public Collection $posts)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile.posts');
    }
}
