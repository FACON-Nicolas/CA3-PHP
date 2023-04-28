<div class="w-full pb-20">
    <style>
        .post-bg {
            background-color: #444;
            color: white;
        }
    </style>
    <div class="flex flex-row post-bg rounded-t-sm">
        <div class="flex flex-col my-auto items-center"><img class="w-8 h-8 ml-3" src="{{ $post->user->picturePath }}" alt="user picture"></div>
        <div class="m-5">{{ $post->user->name }}</div>
    </div>
    <hr>
    <section class="w-full "><img class="w-full post-bg" src="{{ asset('images/'.$post->image_path) }}" alt=""></section>
    <hr>
    <div class="post-bg rounded-b-sm">
        <p class="p-5"><b>{{ $post->user->name }}</b>&nbsp; {{ $post->description }}</p>
    </div>
</div>
