@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex text-left px-4 pt-1 text-sm font-medium leading-5 text-baby-500 focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex text-left px-4 pt-1 text-sm font-medium leading-5 text-white hover:text-baby-300 focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
