@props([
    'route',
    'itemId' => null,
])

<a href="{{ route($route, $itemId) }} " {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide transition-colors duration-200 bg-white border rounded-md text-neutral-500 hover:text-neutral-700 border-neutral-200/70 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline']) }} >
    {{ $slot }}
</a>