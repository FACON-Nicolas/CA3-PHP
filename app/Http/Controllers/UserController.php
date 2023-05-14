<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function home(){
        $user = Auth::user();
        $posts = $user->post;
        return view('my',['user' => $user, 'posts' => $posts]);
    }

    public function show($id){
        $user = User::find($id);
        if(!isset($user))
            return view('404');

        $followed = false;
        if(Auth::check()){
            foreach(Auth::user()->followed as $f){
                if($f->id == $id){
                    $followed = true;
                    break;
                }
            }
        }
        $posts = $user->post;
        return view('user.show',['user' => $user, 'posts' => $posts, 'followed'=>$followed]);
    }

    public function edit(){
        $user = Auth::user();
        if(Gate::allows('update_profile',$user)){
            return view('user.edit', ['user'=>$user]);
        }
        return redirect()->route('home');
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        if(Gate::denies('update_profile',$user)){
            return redirect()->route('home');
        }
        $this->validate(
            $request,[
                'image' => 'required',
            ]
        );
        if(isset($request->name)) {
            $user->name = htmlspecialchars($request->name);
        }

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $image = $request->file('image');
            $extension = $image->extension();
            if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'){
                $nameImage = uniqid().preg_replace('/\s/','_',$user->name).'.'.$extension;
                $image->move(public_path('images/profiles'),$nameImage);
                if($user->picturePath != "images/profiles/defaultPicture.png"){
                    File::delete(public_path($user->picturePath));
                }
                $user->picturePath = 'images/profiles/'.$nameImage;
            }
            $user->save();
            return redirect()->route('my');
        }
    }

    public function delete(){
        $user = Auth::user();
        if(Gate::allows('update_profile',$user)){
            $user->delete();
            Auth::logout();
        }
        return redirect()->route('home');
    }
}
