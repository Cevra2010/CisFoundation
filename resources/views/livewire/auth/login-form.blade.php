<div class="bg-slate-50 p-5 border-slate-500">
    <div>
        <label for="username">{{ __('auth.username') }}</label>
        <input type="text" name="username" wire:model='username'>
    </div>

    <div>
        <label for="password">{{ __('auth.password') }}</label>
        <input type="password" name="password" wire:model='password'>
    </div>
</div>
