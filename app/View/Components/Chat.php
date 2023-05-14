<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class Chat extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public User $user, public string $content)
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
        return view('components.chat');
    }
}
