@extends('layouts.app')

@section('content')
    <x-profile-view :user="$user"></x-profile-view>
@endsection
