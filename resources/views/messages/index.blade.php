@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('messages.showName') }}">
        @csrf
        <label>
            <input placeholder="people (full name)" type="text" name="name" class="my-2 block mx-auto bg-black border border-white text-white dark:text-green-400 w-1/2 text-sm rounded-lg py-2.5 mx-auto">
        </label>
    </form>
    @foreach($users as $user)
        @if ($user != null)
            <div>
                <ul>
                    @php
                        $message = Auth::user()->sent->where('receiver_id', $user->id)->merge($user->sent->where('receiver_id', Auth::user()->id))->sortByDesc('created_at')->first();
                        $content = substr($message->message, 0, min(20, strlen($message->message)));
                        if ($message->message != $content) $content.='...';
                    @endphp
                    <a>
                        <x-chat :user="$user" :content="$content"></x-chat>
                    </a>
                </ul>
            </div>
        @endif
    @endforeach
@endsection
