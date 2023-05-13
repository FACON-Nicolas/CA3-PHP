@extends('layouts.app')

@section('content')
    <style>
        .pp {
            background-image: url({{ asset($user->picturePath) }});
            background-size: cover;
        }
    </style>
    <div class="absolute right-10 top-24 lg:flex-row gap-2 hidden lg:flex ">
        <form method="post" action="{{route('logout')}}">
            @csrf
            <button class="drop-shadow-md bg-red-500 p-3 hover:bg-red-400 rounded" type="submit">Logout</button>
        </form>
        <form method="post" action="{{route('profile.delete')}}">
            @method('DELETE')
            @csrf
            <button class="drop-shadow-md bg-red-700 p-3 hover:bg-red-600 rounded" type="submit">Delete profile</button>
        </form>
    </div>
    <div>
        <div>
   <!-- <div class="container mx-auto text-center">
        <div class="grid grid-cols-3">
            <div>
                <div class="mt-3">
                    <form method="post" action="{{route('logout')}}">
                        @csrf
                        <button class="drop-shadow-md bg-red-500 p-3 hover:bg-red-400 rounded" type="submit">Logout</button>
                    </form>
                </div>

                <div class="mt-3">
                    <form method="post" action="{{route('profile.delete')}}">
                        @method('DELETE')
                        @csrf
                        <button class="drop-shadow-md bg-red-700 p-3 hover:bg-red-600 rounded" type="submit">Delete profile</button>
                    </form>
                </div>
            </div>-->
            <div>
                <div class="py-10 mx-auto">
                    <div class="flex flex-row gap-5 mx-auto lg:w-1/2 md:w-3/5 w-5/6">
                        <div class="rounded-full pp lg:w-40 lg:h-40 md:w-32 md:h-32 w-20 h-20"></div>
                        <div>
                            <div class="ml-5 flex flex-row gap-5 mx-auto">
                                <h4 class="text-2xl mt-2">{{$user->name}}</h4>
                                @if(Auth::user()->id === $user->id)
                                    <div class="bg-white text-black hover:text-white hover:bg-black h-10 px-4 flex items-center justify-center rounded-xl">
                                        <a href="{{route("profile.edit")}}"><b>Edit</b></a>
                                    </div>
                                    <div class="flex-row gap-2 lg:hidden flex">
                                        <form method="post" action="{{route('logout')}}">
                                            @csrf
                                            <button class="drop-shadow-md bg-red-500 p-3 hover:bg-red-400 rounded" type="submit">Logout</button>
                                        </form>
                                        <form method="post" action="{{route('profile.delete')}}">
                                            @method('DELETE')
                                            @csrf
                                            <button class="drop-shadow-md bg-red-700 p-3 hover:bg-red-600 rounded" type="submit">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                            <div class="mt-5 flex flex-row ml-5 gap-10">
                                <x-profile.follower :follower="$user->follower"></x-profile.follower>
                                <x-profile.followed :followed="$user->followed"></x-profile.followed>
                                <x-profile.posts :posts="$posts"></x-profile.posts>
                                <script src="{{ asset('js/profile.js') }}"></script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 35rem; margin:auto;"><x-liste-post :posts="$posts"></x-liste-post></div>


@endsection
