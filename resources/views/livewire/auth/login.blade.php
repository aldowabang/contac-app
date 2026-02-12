<div class="card bg-base-200 shadow-xl w-96">
    <form wire:submit="login" class="card-body">
        <h3 class="card-title">Halaman Login</h3>
        <div class="py-4 space-y-2">
            <fieldset class="fieldset flex items-center gap-2">
                <x-tabler-user class="size-5"></x-tabler-user>
                <input type="email" @class(['input input-bordered grow', 'input-error'=> $errors->first('email')]) id="email" placeholder="email" wire:model="email" />
            </fieldset>
            @error('email')
            <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror

            <fieldset class="fieldset flex items-center gap-2">
                <x-tabler-key class="size-5"></x-tabler-key>
                <input type="password" @class(['input input-bordered grow', 'input-error'=> $errors->first('password')]) id="password" placeholder="Password" wire:model="password" />
            </fieldset>
            @error('password')
            <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-login class="size-5"></x-tabler-login>
                <button>Login</button>
            </button>
        </div>
    </form>
</div>
