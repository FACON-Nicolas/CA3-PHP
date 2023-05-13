<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function store(Request $request, $user_id){
        $followed = User::find($user_id);
        $follower = Auth::user();
        $follower->followed()->attach($followed);
        return redirect()->back();
    }

    public function destroy(Request $request, $user_id){
        $followed = User::find($user_id);
        $follower = Auth::user();
        $follower->followed()->detach($followed);
        return redirect()->back();
    }
}
