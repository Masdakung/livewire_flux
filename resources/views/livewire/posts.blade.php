<div>
    <fieldset class="border-2 rounded-[10px] p-[10px]">
        <legend class="p-[10px]">livewire.post.posts.blade</legend>
        <div class="mb-[15px] text-right">
            <flux:modal.trigger name="create-post">
                <flux:button>Create Post</flux:button>
            </flux:modal.trigger>
        </div>

        @livewire('posts-create')

        @livewire('post-edit')
        
        <table class="w-full table-auto border-collapse text-sm">
            <thead>
                <tr>
                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 pl-8 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">Title</th>
                    <th class="border-b border-gray-200 p-4 pt-0 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">Detail</th>
                    <th class="border-b border-gray-200 p-4 pt-0 pr-8 pb-3 text-left font-medium text-gray-400 dark:border-gray-600 dark:text-gray-200">Manage</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800">
                @foreach($posts as $post)
                <tr>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">{{ $post->post_title }}</td>
                    <td class="border-b border-gray-100 p-4 text-gray-500 dark:border-gray-700 dark:text-gray-400">{{ $post->post_detail }}</td>
                    <td class="border-b border-gray-100 p-4 pr-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        <flux:button variant="primary" wire:click="edit({{ $post->id }})">แก้ไข</flux:button>
                        <flux:button variant="danger">ลบ</flux:button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
    <br>
</div>
