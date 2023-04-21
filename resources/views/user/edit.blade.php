@extends('layouts.app')

@section('content')
    <form action="{{route('profile.update', $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$user->name}}">
        </div>
        <div>
            <label for="image">New Profile Picture</label>
            <input type="file" name="image">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
