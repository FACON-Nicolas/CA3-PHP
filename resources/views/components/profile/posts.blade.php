<div class="mb-2">
    <p class="text-4xl hover:text-gray-500 text-right pr-5" id="btn-posts">Posts {{$posts->count()}}</p>
    <div id="posts" class="modal">
        <div class="modal-content  bg-gray-500">
            <span class="close text-white text-right">X</span>
            @if($posts->count() == 0)
                <p>No post found</p>
            @endif
            @foreach($posts as $post)
                <x-post-modal :post="$post"></x-post-modal>
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
