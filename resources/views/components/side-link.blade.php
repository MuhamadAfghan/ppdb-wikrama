@props([
    'active' => false,
    'icon' => '',
    'href' => '#',
    'wire' => false,
])

@php
    $classes =
        $active ?? false
            ? 'flex gap-5 px-5 py-4 mb-1 text-blue-900 font-semibold transition duration-500 ease-in-out bg-gray-50 hover:bg-gray-50 hover:text-blue-900'
            : 'flex gap-5 px-5 py-4 mb-1 transition duration-500 ease-in-out rounded-md hover:bg-gray-50 hover:text-blue-900';
@endphp

<a class="mb-1" href="{{ $href }}">
    <li {{ $attributes->merge(['class' => $classes]) }}>
        <div id="sidebar-icon">
            {{ $icon }}
        </div>
        {{ $slot }}
    </li>
</a>
