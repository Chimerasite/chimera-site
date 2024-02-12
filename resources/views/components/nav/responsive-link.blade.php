@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full py-1 text-start text-base font-medium text-baby-500 focus:outline-none transition duration-150 ease-in-out'
            : 'block w-full py-1 text-start text-base font-medium hover:text-baby-300 focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
