<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $request, $slug){
        $user = Auth::user();
        $post = Post::where('slug',$slug)->first();
        $post->likes()->attach($user);
        return redirect()->back();
    }

    public function destroy(Request $request, $slug){
        $user = Auth::user();
        $post = Post::where('slug',$slug)->first();
        $post->likes()->detach($user);
        return redirect()->back();
    }


}
