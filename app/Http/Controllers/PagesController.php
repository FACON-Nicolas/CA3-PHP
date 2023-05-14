<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $followed = Auth::user()->followed()->pluck('id')->toArray();
        return view('index', ['title' => 'Tumblr', 'posts' => Post::query()->whereIn('user_id', $followed)->orderBy('created_at', 'DESC')->get()]);
    }

    public function explorer() {
        return view('index', ['title' => 'explorer', 'posts' => Post::all()->sortByDesc('created_at')]);
    }
}
