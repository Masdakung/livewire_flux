<div>
    <div class="mb-[15px] text-right">
        <flux:modal.trigger name="create-users">
            <flux:button icon="user-plus" variant="success">Create User</flux:button>
        </flux:modal.trigger>
    </div>

    @livewire('user-manage.usersCreate')
    
    <flux:input 
        wire:model.live.debounce.300ms="search_key" 
        label="Search:" />

    <br>
    
    <table class="tb_default">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>E-mail</th>
                <th>User</th>
                <th>Manage</th>
                <th>Data Create</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($listUser as $user)
                <tr>
                    <td></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <flux:dropdown>
                            <flux:navbar.item icon:trailing="chevron-down">Manage</flux:navbar.item>
                            <flux:navmenu>
                                <flux:navmenu.item href="#">Edit</flux:navmenu.item>
                                <flux:navmenu.item href="#">Active</flux:navmenu.item>
                                <flux:navmenu.item href="#">Not Acitve</flux:navmenu.item>
                                <flux:navmenu.item href="#">Delete</flux:navmenu.item>
                            </flux:navmenu>
                        </flux:dropdown>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $listUser->links() }}
    </div>

    <br>
</div>
