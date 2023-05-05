<div class="mb-2">
    <p id="btn-follower" class="text-4xl hover:text-gray-500 text-right pr-5">
        Followers {{$follower->count()}}</p>
    <div id="follower" class="modal">
        <div class="modal-content bg-gray-900 rounded-sm">
            <span class="close text-white text-right">❌</span>
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
