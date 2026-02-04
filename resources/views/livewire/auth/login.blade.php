<div class="card bg-base-200 shadow-xl w-96">
    <div class="card-body">
        <h3 class="card-title">Halaman Login</h3>
        <div class="py-4 space-y-2">
            <label for="username" class="input input-bordered flex items-center gap-2">
                <x-tabler-user class="size-5"></x-tabler-user>
                <input type="text" class="grow" id="username" placeholder="Username" />
            </label>
            <label for="password" class="input input-berdered flex items center gap-2">
                <x-tabler-key class="size-5"></x-tabler-key>
                <input type="password" class="grow" id="password" placeholder="Password" />
            </label>
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-login class="size-5"></x-tabler-login>
                <span>Login</span>
            </button>
        </div>
    </div>
</div>
