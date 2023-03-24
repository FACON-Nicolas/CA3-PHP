<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(){
        $user = Auth::user();
        $posts = $user->post;
        return view('home',['user' => $user, 'posts' => $posts]);
    }
}
