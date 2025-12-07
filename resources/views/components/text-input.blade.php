@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 text-sm focus:border-blue-900 focus:ring-blue-900 rounded-lg shadow-sm',
]) !!}>
