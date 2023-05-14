<div>
    <p @if($message->sender->id == Auth::user()->id)
      class="bg-blue-700 p-5 rounded-lg w-1/3 ml-auto mr-5 mt-3"
    @else
        class="bg-gray-400 p-5 rounded-lg w-1/3 ml-5 mt-3"
    @endif>{{ $message->message }}</p>
</div>
