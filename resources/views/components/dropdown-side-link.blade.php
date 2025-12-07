@props([
    'active' => false,
])

@php
    $classes =
        $active ?? false
            ? 'flex items-center w-full gap-5 px-5 py-3 mb-1 transition duration-500 ease-in-out rounded-md bg-blue-50 text-blue-950'
            : 'flex items-center w-full gap-5 px-5 py-3 mb-1 transition duration-500 ease-in-out rounded-md hover:bg-blue-50 active:bg-blue-950  active:text-white';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>

        {{ $slot }}
    </a>
</li>
