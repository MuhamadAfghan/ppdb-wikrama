@props([
    'dropdown-id' => '',
    'header' => '',
    'footer' => '',
])


<div
    {{ $attributes->merge(['class' => 'z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 :bg-gray-700 :divide-gray-600']) }}>
    @if ($header)
        <div class="px-4 py-3 text-sm text-gray-900 :text-white">
            {{ $header }}
        </div>
    @endif
    <ul class="py-2 text-sm text-gray-700 :text-gray-200">
        {{ $slot }}
    </ul>
    @if ($footer)
        <div class="py-2">
            {{ $footer }}
        </div>
    @endif
</div>
