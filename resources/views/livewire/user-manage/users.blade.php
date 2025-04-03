<div>
    <fieldset class="border-2 rounded-[10px] p-[10px]">
        <legend class="p-[10px]">livewire.user-manage.users.blade</legend>
        <div class="mb-[15px] text-right">
            <flux:modal.trigger name="create-users">
                <flux:button>Create User</flux:button>
            </flux:modal.trigger>
        </div>

        @livewire('user-manage.usersCreate')
        
        <table class="w-full table-auto border-collapse text-sm">
            <thead>
                <tr>
                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 pl-8 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">User</th>
                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">E-mail</th>
                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">Date</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800">
                <tr>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                    <td class="border-b border-gray-100 p-4 text-gray-500 dark:border-gray-700 dark:text-gray-400">Malcolm Lockyer</td>
                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">1961</td>
                </tr>
                <tr>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">Witchy Woman</td>
                    <td class="border-b border-gray-100 p-4 text-gray-500 dark:border-gray-700 dark:text-gray-400">The Eagles</td>
                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">1972</td>
                </tr>
                <tr>
                    <td class="border-b border-gray-200 p-4 pl-8 text-gray-500 dark:border-gray-600 dark:text-gray-400">Shining Star</td>
                    <td class="border-b border-gray-200 p-4 text-gray-500 dark:border-gray-600 dark:text-gray-400">Earth, Wind, and Fire</td>
                    <td class="border-b border-gray-200 p-4 pr-8 text-gray-500 dark:border-gray-600 dark:text-gray-400">1975</td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <br>
</div>
