<script src="{{ asset('js/likes.js') }}" defer></script>
<button class="hover:text-gray-500" id="btn-likes">{{$likes->count()}}</button>
<div id="likes" class="modal">
    <div class="modal-content  bg-gray-500">
        <span class="close text-white text-right">X</span>
        @if($likes->count() == 0)
            <p>No Likes</p>
        @endif
        @foreach($likes as $user)
            <div>
                <a class=" hover:text-gray-100"
                   href="{{route('profile',[$user->id])}}">{{$user->name}}</a>
                <x-user.follow :user="$user"></x-user.follow>
            </div>
        @endforeach
    </div>
</div>
