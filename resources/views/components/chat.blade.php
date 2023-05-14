<style>
    #pp-user-{{ $user->id }} {
        background-image: url('{{ asset($user->picturePath) }}');
        background-size: cover;
        background-position: center;
        width: 5rem;
        height: 5rem;
        border-radius: 9999px;
    }
</style>
<div class="flex flex-row my-5 w-1/2 mx-auto">
    <div id="pp-user-{{ $user->id }}"></div>
    <div>
        <strong>{{ $user->name }}</strong>
        <p>{{ $content }}</p>
    </div>
</div>
<hr class="w-1/2 mx-auto">

