@extends('layouts.app')

@section('main')
    @foreach($users as $user)
        <h1>$user->name</h1>
    @endforeach
@endsection
