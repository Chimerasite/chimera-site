@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-base font-medium leading-5 text-baby-500 focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 text-base font-medium leading-5 hover:text-baby-300 focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
