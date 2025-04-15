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
                <th class="w-[50px]">Avatar</th>
                <th>E-mail</th>
                <th>Name</th>
                <th>Manage</th>
                <th>Data Create</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($listUser as $user)
                <tr>
                    <td>
                        @if($user->picture)
                            <flux:avatar src="{{ asset('storage/'.$user->picture) }}" size="lg" />
                        @else
                            <flux:avatar name="{{ $user->name }}" color="auto" color:seed="{{ $user->id }}" size="lg" />
                        @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <flux:dropdown>
                            <flux:navbar.item icon:trailing="chevron-down" >Manage</flux:navbar.item>
                            <flux:navmenu>
                                <flux:text color="green" class="flex items-center p-2 gap-1">
                                    <flux:icon.pencil-square class="size-5" />
                                    Test
                                </flux:text>
                                <flux:navmenu.item href="#" icon="pencil-square" >Edit</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="check-circle" >Active</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="no-symbol" >Not Acitve</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="trash" variant="danger" >Delete</flux:navmenu.item>
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
