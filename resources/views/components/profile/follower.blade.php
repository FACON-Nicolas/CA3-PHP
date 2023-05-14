<div class="mb-2">
    <button class="text-center hover:text-gray-500 pr-5" id="btn-follower">
        <p><b>Follower</b></p>
        <p>{{$follower->count()}}</p>
    </button>
    <div id="follower" class="modal">
        <div class="modal-content bg-gray-900 rounded-sm">
            <span class="close text-white text-right block">❌</span>
            @if($follower->count() == 0)
                <div class="flex w-full h-full justify-center items-center">
                    <p class="text-center font-bold text-xl">No follower</p>
                </div>
            @endif
            @foreach($follower as $user)
                <a href="{{ route('profile', $user->id) }}">
                    <x-user-modal :user="$user"></x-user-modal>
                </a>
            @endforeach
        </div>
    </div>
</div>
