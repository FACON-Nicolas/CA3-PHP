@extends('layouts.app')

@section('content')
    <style>
        .main-index {
            padding-top: 2rem;
            width: 35rem;
        }

        .full {
            height: 85vh;
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
    @if ($posts->count() == 0)
        <div class="flex items-center justify-center full font-bold text-2xl">
            <p>you follow anyone...<br/>Please follow someone to see posts (check explorer to see more posts)</p>
        </div>
    @endif
@endsection
