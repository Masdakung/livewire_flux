<div>
    <flux:modal name="create-users" class="w-[50%]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">User</flux:heading>
                <flux:text class="mt-2">Create New User</flux:text>
            </div>

            <input wire:model='name' label="Name" placeholder="Name" autocomplete="off" />
            <flux:input type="email" wire:model='email' label="E-mail Address" placeholder="E-mail Address" autocomplete="off" />
            <flux:input type="password" wire:model='password' label="Password" placeholder="Password" autocomplete="off" />
            <flux:input type="password" wire:model='confirm_password' label="Confirm Password" placeholder="Confirm Password" autocomplete="off" />

            <div class="text-center">
                <button type="submit" class="btn_eme_700" wire:click="create">Save User</button>
            </div>
        </div>
    </flux:modal>
</div>
