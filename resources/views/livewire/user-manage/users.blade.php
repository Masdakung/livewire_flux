<div>
    <fieldset class="border-2 rounded-[10px] p-[10px]">
        <legend class="p-[10px]">livewire.user-manage.users.blade</legend>
        <div class="mb-[15px] text-right">
            <flux:modal.trigger name="create-users">
                <flux:button>Create User</flux:button>
            </flux:modal.trigger>
        </div>

        @livewire('user-manage.usersCreate')
        
        <table class="tb_default">
            <thead>
                <tr>
                    <th>User</th>
                    <th>E-mail</th>
                    <th>Permission</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ListUsr as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>1961</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
    <br>
</div>
