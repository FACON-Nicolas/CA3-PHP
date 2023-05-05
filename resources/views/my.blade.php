@extends('layouts.app')

@section('content')
    <style>
        .pp {
            background-image: url({{ asset($user->picturePath) }});
            background-size: cover;
            width: 15vw;
            height: 15vw;
        }
    </style>
    <div class="container">
        <div>
            <div>
                <div class="mt-10 mb-10">
                    <div class="flex flex-row gap-5 px-5">
                        <div class="rounded-full pp"></div>
                        <h4 class="text-2xl mb-2">{{$user->name}}</h4>
                    </div>
                     <a class="hover:text-green-400"
                                                                      href="{{route("profile.edit")}}">Edit</a>
                    <h5 class="text-1xl mb-2">Member since {{date_format($user->created_at,"j F Y")}}</h5>
                    <div class="text-2xl">{{$user->email}}</div>
                </div>
            </div>
            <div>
                <x-profile.follower :follower="$user->follower"></x-profile.follower>
                <x-profile.followed :followed="$user->followed"></x-profile.followed>
                <x-profile.posts :posts="$posts"></x-profile.posts>
            </div>
        </div>
    </div>
    <div style="width: 35rem; margin:auto;"><x-liste-post :posts="$posts"></x-liste-post></div>


@endsection
