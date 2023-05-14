<style>
    #modal-user-{{$user->id}} {
        background-image: url('{{ asset($user->picturePath) }}');
        background-size: cover;
        background-position: center;
    }
</style>

<div class="flex flex-row py-5 gap-3">
    <div class="h-10 w-10 rounded-full" id="modal-user-{{$user->id}}"></div>
    <div class="flex flex-col items-center">
        <p class="my-auto"><b>{{ $user->name }}</b></p>
    </div>
</div>
