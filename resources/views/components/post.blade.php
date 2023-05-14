<div class="w-full pb-20">
    <style>
        .post-bg {
            background-color: #444;
            color: white;
        }
    </style>
    <div class="flex flex-row w-full post-bg" id="{{ $post->id }}">
        <a href="{{ route('profile', $post->user->id) }}">
            <div class="flex flex-row rounded-t-sm">
                <div class="flex flex-col my-auto items-center"><img class="w-8 h-8 ml-3" src="{{ $post->user->picturePath }}" alt="user picture"></div>
                <div class="m-5">{{ $post->user->name }}</div>
            </div>
        </a>
        @if(Auth::user()->id === $post->user->id)
        <div class="ml-auto mr-5 my-5">
            <form action="{{ route('blog.destroy', $post->slug) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="red"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M17 5V4C17 2.89543 16.1046 2 15 2H9C7.89543 2 7 2.89543 7 4V5H4C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H5V18C5 19.6569 6.34315 21 8 21H16C17.6569 21 19 19.6569 19 18V7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H17ZM15 4H9V5H15V4ZM17 7H7V18C7 18.5523 7.44772 19 8 19H16C16.5523 19 17 18.5523 17 18V7Z"
                            fill="red"/>
                        <path d="M9 9H11V17H9V9Z" fill="red" />
                        <path d="M13 9H15V17H13V9Z" fill="red" />
                    </svg>
                </button>
            </form>
        </div>
        @endif
    </div>
    <hr>
    <section class="w-full "><img class="w-full post-bg" src="{{ asset('images/'.$post->image_path) }}" alt=""></section>
    <hr>
    <div class="post-bg px-5 py-2 text-3xl">
        <form method="post" action="@if(Auth::user()->likes->contains($post)) {{ route('unlike', $post->slug) }} @else {{ route('like', $post->slug) }} @endif">
            @csrf
            <button @if(Auth::user()->likes->contains($post)) class="text-red-600" @endif>@if(Auth::user()->likes->contains($post)) ♥ @else ♡ @endif</button>
        </form>
        <p class="text-xl mt-2">{{ $post->likes->count() }} likes</p>
    </div>
    <div class="post-bg">
        <p class="pb-5 px-5"><b>{{ $post->user->name }}</b>&nbsp; {{ $post->description }}</p>
    </div>
</div>
