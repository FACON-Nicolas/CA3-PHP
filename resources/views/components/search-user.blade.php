<style>
    #search-user-{{$user->id}} {
        background-image: url('{{ asset($user->picturePath) }}');
        background-size: cover;
        background-position: center;
    }
</style>

<div class="flex flex-row py-5  gap-20 lg:gap-40 lg:w-1/4 w-1/2 mx-auto md:1/3">
    <div class="h-24 w-24 rounded-full" id="search-user-{{$user->id}}"></div>
    <div class="flex flex-col items-center">
        <p class="my-auto"><b>{{ $user->name }}</b></p>
    </div>
</div>
