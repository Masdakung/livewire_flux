<div>
    <flux:modal name="create-post" class="md:w-96">
        <fieldset class="border-2 rounded-[10px] p-[10px]">
            <legend class="p-[10px]">livewire.post.posts-create.blade</legend>  
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Post</flux:heading>
                    <flux:text class="mt-2">Create New Post</flux:text>
                </div>

                <flux:input wire:model='post_title' label="title" placeholder="Post title" autocomplete="off" />

                <flux:textarea wire:model='post_detail' label="body" placeholder="Post Detail" autocomplete="off" />

                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary" wire:click="create">Save Post</flux:button>
                </div>
            </div>
        </fieldset>
    </flux:modal>
    

    @if(session()->has('success'))
        @include('.alert.success', ['message' => session('success')])
    @elseif(session()->has('error'))
        @include('.alert.error', ['message' => session('error')])
    @endif

</div>
