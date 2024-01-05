@props([
    'route',
    'itemId' => null,
])

<a href="{{ route($route, $itemId) }}" {{ $attributes->merge(['class' => 'text-neutral-500 rounded hover:underline text-sm font-medium tracking-wide transition']) }}>
    {{ $slot }}
</a>
