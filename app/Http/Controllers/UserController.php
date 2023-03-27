<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(){
        $user = Auth::user();
        $posts = $user->post;
        return view('home',['user' => $user, 'posts' => $posts]);
    }

    public function show($id){
        $user = User::find($id);
        if(!isset($user))
            return view('404', ["error"=>"User not found"]);
        $posts = $user->post;
        return view('user.show',['user' => $user, 'posts' => $posts]);
    }
}
