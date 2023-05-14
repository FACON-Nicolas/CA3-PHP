@extends('layouts.app')

@section('content')
    @php
        $messages = Auth::user()->sent->where('receiver_id', $user->id)->merge($user->sent->where('receiver_id', Auth::user()->id))->sortBy('created_at');
    @endphp
    @foreach($messages as $message)
        <x-message-view :message="$message"></x-message-view>
    @endforeach

    <div class="absolute bottom-1 w-full">
        <form method="post" action="{{ route('messages.store', $user->id) }}">
            @csrf
            <div class="m-6 ">
                <input placeholder="message..." type="text" name="message" class="bg-black border border-white text-white dark:text-green-400 w-10/12 text-sm rounded-lg p-2.5">
                <button class="bg-blue-700 p-2 rounded-full"><svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M10.5858 13.4142L7.75735 10.5858L6.34314 12L10.5858 16.2427L17.6568 9.1716L16.2426 7.75739L10.5858 13.4142Z"
                            fill="currentColor"
                        />
                    </svg>
                </button>
            </div>
        </form>
    </div>
@endsection
