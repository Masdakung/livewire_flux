@php $iconTrailing = $iconTrailing ??= $attributes->pluck('icon:trailing'); @endphp
@php $iconVariant = $iconVariant ??= $attributes->pluck('icon:variant'); @endphp

@props([
    'iconVariant' => 'mini',
    'iconTrailing' => null,
    'variant' => 'default',
    'disabled' => false,
    'indent' => false,
    'suffix' => null,
    'value' => null,
    'icon' => null,
    'iconColor' => null,
    'kbd' => null,
    'color' => null,
])

@php
if ($kbd) $suffix = $kbd;

$iconClasses = Flux::classes()
    ->add('me-2')
    ->add($iconColor)
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : null)
    ;

$trailingIconClasses = Flux::classes()
    ->add('ms-auto')
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : null)
    ;

$classes = Flux::classes()
    ->add('group flex items-center px-2 py-2 lg:py-1.5 w-full')
    ->add('rounded-md')
    ->add('text-start text-sm font-medium')
    ->add(match ($variant) {
        'success' => [
            'hover:bg-green-100 text-zinc-800 hover:text-emerald-800 ',
            'dark:hover:bg-green-200/20 dark:text-white dark:hover:text-green-400',
            '**:data-navmenu-icon:text-zinc-400 dark:**:data-navmenu-icon:text-white/60 [&:hover_[data-navmenu-icon]]:text-current',
        ],

        'info' => [
            'hover:bg-cyan-100 text-zinc-800 hover:text-sky-800 ',
            'dark:hover:bg-cyan-200/20 dark:text-white dark:hover:text-sky-500',
            '**:data-navmenu-icon:text-zinc-400 dark:**:data-navmenu-icon:text-white/60 [&:hover_[data-navmenu-icon]]:text-current',
        ],

        'warning' => [
            'hover:bg-yellow-100 text-zinc-800 hover:text-amber-800 ',
            'dark:hover:bg-yellow-200/20 dark:text-white dark:hover:text-yellow-500',
            '**:data-navmenu-icon:text-zinc-400 dark:**:data-navmenu-icon:text-white/60 [&:hover_[data-navmenu-icon]]:text-current',
        ],

        'danger' => [
            'hover:bg-red-100 text-zinc-800 hover:text-red-800',
            'dark:hover:bg-red-400/20 dark:text-white dark:hover:text-red-400',
            '**:data-navmenu-icon:text-zinc-400 dark:**:data-navmenu-icon:text-white/60 [&:hover_[data-navmenu-icon]]:text-current',
        ],

        'green' => [
            'hover:bg-green-100 text-emerald-500 hover:text-emerald-800 ',
            'dark:hover:bg-green-200/20 dark:text-green-300 dark:hover:text-green-400',
            '**:data-navmenu-icon:text-emerald-500 dark:**:data-navmenu-icon:text-green-300 [&:hover_[data-navmenu-icon]]:text-current',
        ],

        'cyan' => [
            'hover:bg-cyan-100 text-sky-400 hover:text-sky-800 ',
            'dark:hover:bg-cyan-200/20 dark:text-cyan-300 dark:hover:text-cyan-500',
            '**:data-navmenu-icon:text-cyan-500 dark:**:data-navmenu-icon:text-cyan-300 [&:hover_[data-navmenu-icon]]:text-current',
        ],

        'yellow' => [
            'hover:bg-yellow-100 text-amber-400 hover:text-amber-800 ',
            'dark:hover:bg-yellow-200/20 dark:text-yellow-300 dark:hover:text-yellow-500',
            '**:data-navmenu-icon:text-yellow-500 dark:**:data-navmenu-icon:text-yellow-300 [&:hover_[data-navmenu-icon]]:text-current',
        ],

        'red' => [
            'hover:bg-red-100 text-red-400 hover:text-red-800 ',
            'dark:hover:bg-red-200/20 dark:text-red-400 dark:hover:text-red-600',
            '**:data-navmenu-icon:text-red-500 dark:**:data-navmenu-icon:text-red-400 [&:hover_[data-navmenu-icon]]:text-current',
        ],
        
        'default' => [
            'text-zinc-800 hover:bg-zinc-50 dark:text-white dark:hover:bg-zinc-600',
            '**:data-navmenu-icon:text-zinc-400 dark:**:data-navmenu-icon:text-white/60 [&:hover_[data-navmenu-icon]]:text-current',
        ]
    })
    ->add($color)
    ->add($disabled ? 'text-zinc-400' : '')
    ;
@endphp

<flux:button-or-link :attributes="$attributes->class($classes)" data-flux-navmenu-item>
    <?php if ($indent): ?>
        <div class="w-7"></div>
    <?php endif; ?>

    <?php if (is_string($icon) && $icon !== ''): ?>
        <flux:icon :$icon :variant="$iconVariant" :class="$iconClasses" data-navmenu-icon />
    <?php elseif ($icon): ?>
        {{ $icon }}
    <?php endif; ?>

    {{ $slot }}

    <?php if ($suffix): ?>
        <?php if (is_string($suffix)): ?>
            <div class="ms-auto opacity-50 text-xs">
                {{ $suffix }}
            </div>
        <?php else: ?>
            {{ $suffix }}
        <?php endif; ?>
    <?php endif; ?>

    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
        <flux:icon :icon="$iconTrailing" :variant="$iconVariant" :class="$trailingIconClasses" />
    <?php elseif ($iconTrailing): ?>
        {{ $iconTrailing }}
    <?php endif; ?>
</flux:button-or-link>
