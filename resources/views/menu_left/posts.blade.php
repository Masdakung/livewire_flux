<x-layouts.app :title="__('Post')">
    
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">POSTs</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Yout Have Posts...?') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    @livewire('posts')
</x-layouts.app>
