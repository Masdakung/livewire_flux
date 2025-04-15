<div>
    <flux:modal name="create-users" class="w-[50%]">
        <form wire:submit="save">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">User</flux:heading>
                    <flux:text class="mt-2">Create New User</flux:text>
                </div>

                <flux:input type="file" wire:model="picture" label="Avatar"/>
                <flux:input type="text" wire:model='name' label="Name" placeholder="Name" autocomplete="off" />
                <flux:input type="email" wire:model='email' label="E-mail Address" placeholder="E-mail Address" autocomplete="off" />
                <flux:input type="password" wire:model='password' label="Password" placeholder="Password" autocomplete="off" />
                <flux:input type="password" wire:model='password_confirmation' label="Confirm Password" placeholder="Confirm Password" autocomplete="off" />

                <div class="text-center">
                    <flux:button type="submit" class="btn_eme_700">Save User</flux:button>
                </div>
            </div>
        </form>
    </flux:modal>
</div>
