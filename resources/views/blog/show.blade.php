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
    <img class="w-full post-bg" src="{{ asset('images/'.$post->image_path) }}" alt="">
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
    <x-post.likes :post="$post"></x-post.likes>
</div>

@endsection
