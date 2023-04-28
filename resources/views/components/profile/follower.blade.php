<div class="mb-2">
    <button id="btn-follower" class="text-4xl hover:text-gray-500">
        Followers {{$follower->count()}}</button>
    <div id="follower" class="modal">
        <div class="modal-content  bg-gray-500">
            <span class="close text-white text-right">X</span>
            @if($follower->count() == 0)
                <p>No follower found</p>
            @endif
            @foreach($follower as $user)
                <div>
                    <a class="hover:text-gray-100"
                       href="{{route('profile',[$user->id])}}">{{$user->name}}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
