@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <a href="{{route("profile", $post->user->id)}}" class="font-bold italic text-gray-800">{{ $post->user->name }}</a>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
    @auth
        @if(!$post->likes->find(Auth::user()))
        <form id="like" action="{{route('like',['blog'=>$post->slug])}}" method="post" style="display:none;"> @csrf</form>
            <a href="{{route('like',[$post->id])}}"
               onclick="event.preventDefault();document.getElementById('like').submit();">♡</a>
        @else
            <form id="unlike" action="{{route('unlike',['blog'=>$post->slug])}}" method="post" style="display:none;"> @csrf</form>
            <a href="{{route('unlike',[$post->id])}}"
               onclick="event.preventDefault();document.getElementById('unlike').submit();">♥</a>
        @endif
    @endauth
    @guest
        <span>♡</span>
    @endguest
    <span>{{$post->likes->count()}}</span>
</div>

@endsection
