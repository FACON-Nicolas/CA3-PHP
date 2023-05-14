<?php

namespace App\View\Components\Profile;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Posts extends Component
{
    public Collection $posts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Collection $posts)
    {
        $this->posts = $posts->where('draft',false);
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
