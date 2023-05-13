<div class="mb-2">
    <button class="text-center hover:text-gray-500 pr-5" id="btn-follower">
        <p><b>Follower</b></p>
        <p>{{$follower->count()}}</p>
    </button>
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
