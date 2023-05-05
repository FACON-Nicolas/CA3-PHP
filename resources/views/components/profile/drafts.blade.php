<div class="mb-2">
    <button class="text-4xl hover:text-gray-500" id="btn-drafts">Drafts {{$posts->count()}}</button>
    <div id="drafts" class="modal">
        <div class="modal-content  bg-gray-500">
            <span class="close text-white text-right">X</span>
        @if($posts->count() == 0)
                <p>No draft found</p>
            @endif
            @foreach($posts as $draft)
                <div class=" border-b border-gray-300 pt-5 pb-4 w-3/5 m-auto">
                <a class=" hover:text-gray-100" href="/blog/{{$draft->slug}}">
                    <div>
                        <h3 class="text-3xl">{{$draft->title}}</h3>
                        <p class="text-base">{{$draft->description}}</p>
                        <div class="text-xs text-right">
                            Created on {{ date('jS M Y', strtotime($draft->updated_at))}}
                        </div>
                    </div>
                </a>
                @if (isset(Auth::user()->id) && Auth::user()->id == $draft->user_id)
                    <span class="float-right">
                        <form method="post" action="{{route('publish',['blog'=>$draft->slug])}}">
                            @csrf
                            <button class="text-green-500 hover:text-blue-500 pl-3">Publish</button>
                        </form>
                    </span>
                @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
