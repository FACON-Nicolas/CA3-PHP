<div class="mb-2">
    <p class="text-4xl text-right hover:text-gray-500 pr-5" id="btn-followed">
        Followed {{$followed->count()}}</p>
    <div id="followed" class="modal">
        <div class="modal-content  bg-gray-500">
            <span class="close text-white text-right">X</span>
            @if($followed->count() == 0)
                <p>No followed users found</p>
            @endif
            @foreach($followed as $user)
                <div>
                    <a class=" hover:text-gray-100"
                       href="{{route('profile',[$user->id])}}">{{$user->name}}</a>
                </div>
            @endforeach
            <div>

            </div>
        </div>
    </div>
</div>
