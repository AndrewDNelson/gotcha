@props([
    'name',
    'label' => null,
    'value' => null,
    'disabled' => false,
    'type' => 'text'
])

<div>
    {{-- Label --}}
    @if ($label)
        <x-input-label :for="$name" :value="$label"/>
    @endif

    {{-- Input Field --}}
    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
           value="{{ old($name, $value) }}"
           {{ $disabled ? 'disabled' : '' }}
           {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>

    {{-- Automatic Error Message Fetching --}}
    @error($name)
        <ul class="text-sm text-red-600 space-y-1">
            <li>{{ $message }}</li>
        </ul>
    @enderror
</div>