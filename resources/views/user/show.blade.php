@extends('layouts.app')

@section('content')
    <div class=" container mx-auto text-center">
        <div class="grid grid-cols-3">
            <div><!--Do Nothing --></div>
            <div>
                <h1 class="text-5xl">{{$user->name}}'s Profile</h1>
                <x-user.follow :user="$user"></x-user.follow>
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
            </div>
            <div>
                <x-profile.follower :follower="$user->follower"></x-profile.follower>
                <x-profile.followed :followed="$user->followed"></x-profile.followed>
                <x-profile.posts :posts="$posts"></x-profile.posts>
                <script src="{{ asset('js/profile.js') }}"></script>
            </div>
        </div>
    </div>

@endsection
