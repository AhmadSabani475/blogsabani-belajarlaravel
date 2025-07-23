@props([
    'href',
    'current' => false,
    'activeClass' => 'text-blue-700 font-medium',
    'inactiveClass' => 'text-gray-900 hover:text-gray-600',
])

@php
    $baseClasses = 'block py-2 px-3 rounded-sm transition-all duration-200';
    $stateClasses = $current ? $activeClass : $inactiveClass;
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "$baseClasses $stateClasses",
        'aria-current' => $current ? 'page' : false,
    ]) }}>
    {{ $slot }}
</a>
