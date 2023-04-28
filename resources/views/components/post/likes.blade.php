@auth
    @if(!$post->likes->find(Auth::user()))
        <form id="like" action="{{route('like',['blog'=>$post->slug])}}" method="post" style="display:none;"> @csrf</form>
        <a href="{{route('like',[$post->id])}}"
           onclick="event.preventDefault();document.getElementById('like').submit();">♡</a>
    @else
        <form id="unlike" action="{{route('unlike',['blog'=>$post->slug])}}" method="post" style="display:none;"> @csrf</form>
        <a href="{{route('unlike',[$post->id])}}"
           onclick="event.preventDefault();document.getElementById('unlike').submit();">♥</a>
    @endif
@endauth
@guest
    <span>♡</span>
@endguest
<script src="{{ asset('js/likes.js') }}" defer></script>
<button class="hover:text-gray-500" id="btn-likes">{{$post->likes->count()}}</button>
<div id="likes" class="modal">
    <div class="modal-content  bg-gray-500">
        <span class="close text-white text-right">X</span>
        @if($post->likes->count() == 0)
            <p>No Likes</p>
        @endif
        @foreach($post->likes as $user)
            <div>
                <a class=" hover:text-gray-100"
                   href="{{route('profile',[$user->id])}}">{{$user->name}}</a>
                <x-user.follow :user="$user"></x-user.follow>
            </div>
        @endforeach
    </div>
</div>
