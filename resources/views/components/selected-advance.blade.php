@props([
    'placeholder' => 'Pilih',
])

<div class="mt-2">
    <select {!! $attributes->merge([
        'class' =>
            'border select2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
    ]) !!}>
        <option selected disabled>-- {{ $placeholder }} --</option>
        {{ $slot }}
    </select>
</div>
