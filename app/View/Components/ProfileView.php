<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class ProfileView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public User $user)
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
        return view('components.profile-view');
    }
}
