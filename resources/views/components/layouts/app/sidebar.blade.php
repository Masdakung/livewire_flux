<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

                <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Banlai Sys." class="px-2 dark:hidden" />

                <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." class="px-2 hidden dark:flex" />
                
                <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

                <flux:navlist variant="outline">
                    <flux:navlist.item icon="home" href="{{ route('home') }}" >Home</flux:navlist.item>

                    <flux:navlist.item icon="user"
                        :href="route('users')" 
                        :current="request()->isRoute('users', 'bg-menu')" 
                        wire:navigate>
                            {{ __('Users') }}
                    </flux:navlist.item>

                    <flux:navlist.item icon="inbox" badge="12" badgeColor="green" href="#">Inbox</flux:navlist.item>

                    <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>

                    <flux:navlist.item icon="clipboard-document-list" 
                        :href="route('posts')" 
                        :current="request()->isRoute('posts', 'bg-menu')" 
                        wire:navigate>
                            {{ __('Posts') }}
                    </flux:navlist.item> 

                    <flux:navlist.group expandable heading="Artisan" class="hidden lg:grid">
                        <flux:navlist.item href="#">Migrate</flux:navlist.item>
                        <flux:navlist.item href="#">Seed</flux:navlist.item>
                    </flux:navlist.group>

                </flux:navlist>
            <flux:spacer />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="cog-6-tooth" 
                    wire:navigate
                    :href="route('settings.profile')" 
                    :current="request()->isRoute('settings.*', 'bg-menu')" 
                    >
                    Settings
                </flux:navlist.item>
                <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
            </flux:navlist>

            <flux:dropdown position="top" align="start" class="max-lg:hidden">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevrons-up-down"
                />
                <flux:menu>
                    <flux:menu.radio.group>
                        <flux:menu.radio checked>{{ auth()->user()->name }}</flux:menu.radio>
                        <flux:menu.radio>Truly Delta</flux:menu.radio>
                    </flux:menu.radio.group>
                    <flux:menu.separator />
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                           {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <flux:header class="block! bg-white lg:bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
            
            <flux:navbar class="lg:hidden w-full">
                <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
                <flux:spacer />
                <flux:dropdown position="top" align="start">
                    <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />
                    <flux:menu>
                        <flux:menu.radio.group>
                            <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                            <flux:menu.radio>Truly Delta</flux:menu.radio>
                        </flux:menu.radio.group>
                        <flux:menu.separator />
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                                {{ __('Log Out') }}
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
            </flux:navbar>

            <flux:navbar scrollable>
                <flux:navbar.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navbar.item>
                
                <flux:navbar.item badge="32" href="#">Orders</flux:navbar.item>
                <flux:navbar.item href="#">Catalog</flux:navbar.item>
                <flux:navbar.item href="#">Configuration</flux:navbar.item>
            </flux:navbar>

        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
