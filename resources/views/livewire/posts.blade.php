<div>
    <fieldset class="border-2 rounded-[10px] p-[10px]">
        <legend class="p-[10px]">livewire.post.posts.blade</legend>
        <div class="mb-[15px] text-right">
            <flux:modal.trigger name="create-post">
                <flux:button icon="plus-circle" variant="success">Create Post</flux:button>
            </flux:modal.trigger>
        </div>

        @livewire('posts-create')

        @livewire('post-edit')
        
        <table class="tb_default">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Detail</th>
                    <th>Date</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->post_title }}</td>
                    <td>{{ $post->post_detail }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <flux:button variant="primary" wire:click="edit({{ $post->id }})">แก้ไข</flux:button>
                        <flux:button variant="danger" wire:click="deleteConfirm({{ $post->id }})">ลบ</flux:button>
                    </td>
                </tr>
                @endforeach
                @if($posts)
                <tr>
                    <td colspan="4" class="text-center !text-red-700 text-xl font-bold">No Data</td>
                </tr>
                @endif
            </tbody>
        </table>
    </fieldset>

    <flux:modal name="delete-post" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete Post?</flux:heading>

                <flux:text class="mt-2">
                    <p>Confirm Delete Post.</p>
                </flux:text>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="danger" wire:click="delete()">Delete</flux:button>
            </div>
        </div>
    </flux:modal>

    @if(session()->has('success'))
        @include('.alert.success', ['message' => session('success')])
    @elseif(session()->has('error'))
        @include('.alert.error', ['message' => session('error')])
    @endif
        
    <br>
</div>
