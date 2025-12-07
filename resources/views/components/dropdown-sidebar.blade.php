@props([
    'title' => '',
    'icon' => '',
    'id' => 'dropdown-' . Str::random(10),
    'active' => false,
])

@php
    $classes =
        $active ?? false
            ? 'flex items-center w-full gap-5 px-5 py-3 mb-1 transition duration-500 ease-in-out rounded-md hover:bg-blue-50 bg-blue-900 hover:text-blue-950 text-white'
            : 'flex items-center w-full gap-5 px-5 py-3 mb-1 transition duration-500 ease-in-out rounded-md hover:bg-blue-50 active:bg-blue-950  active:text-white';
@endphp

<li>
    <button type="button" class="{{ $classes }}" aria-controls="{{ $id }}"
        data-collapse-toggle="{{ $id }}">
        {{ $icon }}
        <span class="flex-1 text-left ms-3 rtl:text-right whitespace-nowrap">{{ $title }}</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>
    <ul id="{{ $id }}" class="{{ $active ? 'block' : 'hidden' }} py-2 space-y-2 rounded-md ">
        {{ $slot }}
    </ul>
</li>
