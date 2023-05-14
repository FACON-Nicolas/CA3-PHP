@extends('layouts.app')

@section('content')
    <div>
    @foreach($users as $user)
            <div class="flex-row-reverse">
                <div>
                    <img src="{{ $user->picturePath }}" class="h-8 w-8 rounded-full">
                </div>
            </div>
    @endforeach

    @foreach(Auth::user()->messages as $message)
        <p>{{ $message }}</p>
    @endforeach
        {{ Auth::user()->messages->count() }}
    </div>
@endsection
