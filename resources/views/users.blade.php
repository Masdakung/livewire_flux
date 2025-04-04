<x-layouts.app :title="__('Users')">
    
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">User</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('User in system') }}</flux:subheading>

    </div>

    @livewire('user-manage.users')
</x-layouts.app>