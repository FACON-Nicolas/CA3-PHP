@extends('layouts.app')

@section('content')
    <style>
        .main-index {
            padding-top: 2rem;
            width: 35rem;
        }

        @media only screen and (max-width: 700px) {
            .main-index {
                width: 100vw;
            }
        }
    </style>
    <main class="main-index mx-auto">
        <x-liste-post :posts="$posts"></x-liste-post>
    </main>

@endsection
