<div>
    <div class="mb-[15px] text-right">
        <flux:modal.trigger name="create-users">
            <flux:button>Create User</flux:button>
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
                <th>User</th>
                <th>E-mail</th>
                <th>Permission</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($listUser as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>1961</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $listUser->links() }}
    </div>

    <br>
</div>
