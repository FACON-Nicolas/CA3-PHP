@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center">
        <div class="grid grid-cols-3">
            <div><!--Do Nothing --></div>
            <div>
                <h1 class="text-5xl">Your Profile</h1>
                <div class="mt-10 mb-10">
                    <div>
                        <img class="m-auto w-auto h-12 rounded-full" src="{{$user->picturePath}}">
                    </div>
                    <h4 class="text-4xl mb-2">{{$user->name}}</h4> <a class="hover:text-green-400"
                                                                      href="{{route("profile.edit")}}">Edit</a>
                    <h5 class="text-1xl mb-2">Member since {{date_format($user->created_at,"j F Y")}}</h5>
                    <div class="text-2xl">{{$user->email}}</div>

                    @if(isset($user->email_verified_at))
                        <span class="font-semibold text-green-400">Verified</span>
                    @else
                        <span class="font-semibold text-red-400">Non-verified</span>
                    @endif
                </div>
            </div>
            <div>
                <x-profile.follower :follower="$user->follower"></x-profile.follower>
                <x-profile.followed :followed="$user->followed"></x-profile.followed>
                <x-profile.posts :posts="$posts"></x-profile.posts>
            </div>
        </div>
    </div>

@endsection
