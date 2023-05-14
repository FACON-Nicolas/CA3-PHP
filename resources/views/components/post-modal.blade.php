    <div class="flex h-24 items-center hover:text-white">
        <img src="{{ asset('images/'.$post->image_path) }}" class="w-20 h-20 rounded-sm ml-5 mt-2">
        <h1 class="text-2xl pl-5">{{ $post->slug }}</h1><br/>&nbsp;
        <p>{{ $post->description }}</p>
    </div>

