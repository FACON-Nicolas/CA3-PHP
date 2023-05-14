<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostModal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public \App\Models\Post $post)
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
        return view('components.post-modal');
    }
}
