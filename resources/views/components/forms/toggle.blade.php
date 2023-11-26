@props([
    'name',
    'label' => null,
    'value' => false,
])

<div>
    {{-- Label --}}
    @if ($label)
        <x-input-label :for="$name" :value="$label"/>
    @endif

    {{-- Input Field --}}
    <div {!! $attributes->merge(['class' => 'grid gap-6 sm:grid-cols-2']) !!}>
        <div>
            <input type="radio" id="{{ $name . '1'}}" name="{{ $name }}" value="0" class="hidden peer" required @if(old($name, $value) == false) checked @endif>
            <label for="{{ $name . '1'}}" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                <div class="block">
                    <div class="text-base font-semibold">No, thanks</div>
                    <div class="">Players do not have to attend</div>
                </div>
            </label>
        </div>
        <div>
            <input type="radio" id="{{ $name . '2'}}" name="{{ $name }}" value="1" class="hidden peer" required @if(old($name, $value) == true) checked @endif>
            <label for="{{ $name . '2'}}" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                <div class="block">
                    <div class="text-base font-semibold">Yeppers</div>
                    <div class="">Players are removed if they miss it</div>
                </div>
            </label>
        </div>
    </div>

    {{-- Automatic Error Message Fetching --}}
    @error($name)
        <ul class="text-sm text-red-600 space-y-1">
            <li>{{ $message }}</li>
        </ul>
    @enderror
</div>