@extends('layouts.app')

@section('content')
    <div class="w-full flex border-b">
        <a href="{{ route('my') }}" class="inline">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.2426 6.34317L14.8284 4.92896L7.75739 12L14.8285 19.0711L16.2427 17.6569L10.5858 12L16.2426 6.34317Z" fill="currentColor" /></svg>
        </a>
        <h1 class="text-center mx-auto my-3 text-xl font-bold">Edit Profile</h1>
    </div>

    <div class="mx-auto w-3/5 mt-28 h-screen">
        <form action="{{route('profile.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="default-input" class="block mb-2 text-sm font-medium text-white">Name</label>
                <input type="text" name="name" value="{{$user->name}}" class="bg-black border border-white text-white dark:text-green-400 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div>
                <label for="image" class="block mb-2 text-sm font-medium text-white">New Profile Picture</label>
                <input type="file" name="image" class="block w-full text-sm text-white p-2.5 border border-white rounded-lg cursor-pointer bg-black dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
            </div>
            <div class="pt-5">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Update</button>
            </div>
        </form>
    </div>
@endsection
