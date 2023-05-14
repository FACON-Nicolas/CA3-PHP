<div class="mb-2">
    <button class="text-center hover:text-gray-500 pr-5" id="btn-followed">
        <p><b>Followed</b></p>
        <p>{{$followed->count()}}</p>
    </button>
    <div id="followed" class="modal">
        <div class="modal-content  bg-gray-500">
            <span class="close text-white text-right block">❌</span>
            @if($followed->count() == 0)
                <div class="flex w-full h-full justify-center items-center">
                    <p class="text-center font-bold text-xl">No followed users found</p>
                </div>
            @endif
            @foreach($followed as $user)
                <a href="{{ route('profile', $user->id) }}">
                    <x-user-modal :user="$user"></x-user-modal>
                </a>
            @endforeach
        </div>
    </div>
</div>
