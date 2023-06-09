<div class="mb-2">
    <button class="text-center hover:text-gray-500 pr-5" id="btn-posts">
        <p><b>Posts</b></p>
        <p>{{$posts->count()}}</p>
    </button>
    <div id="posts" class="modal">
        <div class="modal-content bg-gray-500">
            <span class="close text-white text-right block">❌</span>
            @if($posts->count() == 0)
                <div class="flex w-full h-full justify-center items-center">
                    <p class="text-center font-bold text-xl">No post found</p>
                </div>
            @endif
            @foreach($posts as $post)
                <a href="#{{ $post->id }}" onclick="">
                    <x-post-modal :post="$post"></x-post-modal>
                </a>
                <!--<a class=" hover:text-gray-100" href="/blog/{{$post->slug}}">
                    <div class=" border-b border-gray-300 pt-5 pb-4 w-3/5 m-auto">
                        <h3 class="text-3xl">{{$post->title}}</h3>
                        <p class="text-base">{{$post->description}}</p>
                        <div class="text-xs text-right">
                            Created on {{ date('jS M Y', strtotime($post->updated_at))}}
                        </div>
                    </div>
                </a>-->
            @endforeach
        </div>
    </div>
</div>
