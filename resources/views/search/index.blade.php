@extends('layouts.app')

@section('content')
    <div>
        <div class="flex flex-row justify-items-center border-b font-bold">
            <form class="w-1/2 text-center py-5 font-bold border-r hover:text-blue-500" action="{{ route('search.search',['search' => $content, 'type' => 'posts']) }}" method="GET">
                @csrf
                <button>Posts</button>
            </form>
            <form class="w-1/2 text-center py-5 font-bold hover:text-blue-500" action="{{ route('search.search',['search' => $content, 'type' => 'users']) }}" method="GET">
                @csrf
                <button>Users</button>
            </form>
        </div>
    </div>
    @if($type == "posts")
        <div style="width: 35rem; margin:auto;"><x-liste-post :posts="$posts"></x-liste-post></div>
    @else
        @foreach($users as $user)
            <a href="{{ route('profile', $user->id) }}">
                <x-search-user :user="$user"></x-search-user>
            </a>
        @endforeach
    @endif
@endsection
