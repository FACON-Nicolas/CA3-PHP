@extends('layouts.app')

@section('content')
    <div class=" container mx-auto text-center">
        <h1 class="text-5xl">{{$user->name}}'s Profile</h1>
        @auth
            @if($user->id != Auth::id())
                @if(!$followed)
                    <form id="follow" action="{{route('follow',[$user->id])}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="{{route('follow',[$user->id])}}"
                       onclick="event.preventDefault();document.getElementById('follow').submit();">Follow</a>
                @else
                    <form id="unfollow" action="{{route('unfollow',[$user->id])}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="{{route('unfollow',[$user->id])}}"
                       onclick="event.preventDefault();document.getElementById('unfollow').submit();">Unfollow</a>
                @endif
            @endif
        @endauth
        <div class="mt-10 mb-10">
            <div>
                <img class="m-auto w-auto h-12 rounded-full" src="../{{$user->picturePath}}">
            </div>
            <h5 class="text-1xl mb-2">Member since {{date_format($user->created_at,"j F Y")}}</h5>
            @if(isset($user->email_verified_at))
                <span class="font-semibold text-green-400">Verified</span>
            @else
                <span class="font-semibold text-red-400">Non-verified</span>
            @endif
        </div>
        <div class="container mx-auto border-t border-gray-350 w-3/5 m-auto">
            <h2 class="text-5xl">Posts</h2>

            @foreach($posts as $post)
                <a class="hover:text-gray-500" href="/blog/{{$post->slug}}">
                    <div class=" border-b border-gray-300 pt-5 pb-4 w-3/5 m-auto">
                        <h3 class="text-3xl">{{$post->title}}</h3>
                        <p class="text-base">{{$post->description}}</p>
                        <div class="text-xs text-right">
                            Created on {{ date('jS M Y', strtotime($post->updated_at))}}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection
