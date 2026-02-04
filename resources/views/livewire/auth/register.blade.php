<div class="card bg-base-200 shadow-xl w-96">
    <form class="card-body" wire:submit="register">
        <h3 class="card-title">Halaman Register</h3>
        <div class="py-4 space-y-2">
            <label for="FullName" class="input input-bordered flex items-center gap-2">
                <x-tabler-user class="size-5"></x-tabler-user>
                <input type="text" @class(['input grow', 'input-error'=> $errors->first('naame')]) id="FullName" placeholder="Full Name" wire:model="name" />
            </label>
            @error('name')
            <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
            <label for="email" class="input input-bordered flex items-center gap-2">
                <x-tabler-mail class="size-5"></x-tabler-mail>
                <input type="email" @class(['input grow', 'input-error'=> $errors->first('email')]) id="email" placeholder="Email" wire:model="email" />

            </label>
            @error('email')
            <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
            <label for="password" class="input input-berdered flex items center gap-2">
                <x-tabler-key class="size-5"></x-tabler-key>
                <input type="password" @class(['input grow', 'input-error'=> $errors->first('Password')]) id="password" placeholder="Password" wire:model="password" />

            </label>
            @error('password')
            <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-user-plus class="size-5"></x-tabler-user-plus>
                <span>Register</span>
            </button>
        </div>
    </form>
</div>
