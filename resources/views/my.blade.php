@extends('layouts.app')

@section('content')
    <style>
        .pp {
            background-image: url({{ asset($user->picturePath) }});
            background-size: cover;
        }
    </style>
    <div>
        <div>
            <div>
                <div class="py-10 mx-auto">
                    <div class="flex flex-row gap-5 px-5 mx-auto lg:w-1/2 md:w-3/5 w-5/6">
                        <div class="rounded-full pp lg:w-40 lg:h-40 md:w-32 md:h-32 w-20 h-20"></div>
                        <div>
                            <div class="ml-10 flex flex-row gap-5 mx-auto">
                                <h4 class="text-2xl mt-2">{{$user->name}}</h4>
                                <div class="bg-white text-black h-10 px-4 flex items-center justify-center rounded-xl">
                                    <a class="hover:text-green-400" href="{{route("profile.edit")}}"><b>Edit Profile</b></a>
                                </div>
                            </div>
                            <div class="mt-5 flex flex-row ml-10 gap-10">
                                <x-profile.followed :followed="$user->followed"></x-profile.followed>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 35rem; margin:auto;"><x-liste-post :posts="$posts"></x-liste-post></div>


@endsection
