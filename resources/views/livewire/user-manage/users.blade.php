<div>
    <div class="flex">
        <div class="w-[80%]">
            <flux:input 
            wire:model.live.debounce.300ms="search_key" 
            label="Search:" />
        </div>

        <div class="w-[20%] flex justify-end items-end">
            <flux:modal.trigger name="create-users">
                <flux:button icon="user-plus" variant="success">Create User</flux:button>
            </flux:modal.trigger>
        </div>
    </div>
    

    @livewire('user-manage.usersCreate')
    
    

    <br>
    
    <table class="tb_default">
        <thead>
            <tr>
                <th class="w-[50px]">Avatar</th>
                <th>E-mail</th>
                <th>Name</th>
                <th>Date Created</th>
                <th>Manage</th>
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
                                <flux:text class="blck_green flex items-center p-2 gap-1 font-bold">
                                    <flux:icon.pencil-square class="size-5" />
                                    Edit
                                </flux:text>
                                <flux:navmenu.item href="#" icon="pencil-square" variant="cyan" >Edit</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="check-circle" variant="green" >Active</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="no-symbol" variant="yellow" >Not Acitve</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="trash" variant="red" >Delete</flux:navmenu.item>
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
