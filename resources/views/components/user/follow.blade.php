@auth
    @if($user->id != Auth::id())
        @if(!Auth::user()->followed()->find($user))
            <form id="follow" action="{{route('follow',[$user->id])}}" method="POST"
                  style="display: none;">
                @csrf
            </form>
            <a href="{{route('follow',[$user->id])}}"
               onclick="event.preventDefault();document.getElementById('follow').submit();">Follow</a>
        @else
            <form id="unfollow" action="{{route('unfollow',[$user->id])}}" method="POST"
                  style="display: none;">
                @csrf
            </form>
            <a href="{{route('unfollow',[$user->id])}}"
               onclick="event.preventDefault();document.getElementById('unfollow').submit();">Unfollow</a>
        @endif
    @endif
@endauth
