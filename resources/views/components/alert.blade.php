@props([
    'type' => 'warning',
])

@php
    $types = [
        'warning' => 'text-yellow-800 bg-yellow-200/70 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800',
        'success' => 'text-green-800 bg-green-200/70 dark:bg-gray-800 dark:text-green-300 dark:border-green-800',
        'danger' => 'text-red-800 bg-red-200/70 dark:bg-gray-800 dark:text-red-300 dark:border-red-800',
        'info' => 'text-blue-800 bg-blue-200/70 dark:bg-gray-800 dark:text-blue-300 dark:border-blue-800',
        // 'primary' => 'text-blue-800 bg-blue-20 dark:bg-gray-800 dark:text-blue-300 dark:border-blue-800',
    ];
    $type = $types[$type] ?? $types['warning'];
@endphp

<div class="flex rounded-md shadow items-center p-4 mb-4 text-sm {{ $type }} role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div>
        {{ $slot }}
    </div>
</div>
