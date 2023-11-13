@props([
    'name',
    'label' => null,
    'value' => "false",
])

<div>
    {{-- Label --}}
    @if ($label)
        <x-input-label :for="$name" :value="$label"/>
    @endif

    {{-- Input Field --}}
    <div {!! $attributes->merge(['class' => 'flex wrap']) !!}>
        <div class="w-1/2 basis-1/2">
            <input type="radio" id="{{ $name . '1'}}" name="{{ $name }}" value="0" class="hidden peer" required @if(old($name, $value) == "false") checked @endif>
            <label for="{{ $name . '1'}}" class="flex flex-col items-center justify-center w-full h-full p-3 bg-white border border-black rounded-l-xl cursor-pointer peer-checked:border-blue-600 peer-checked:border-2 hover:text-gray-600 hover:bg-gray-50">                           
                <div class="text-base font-semibold">No, thanks</div>
                <div class="">Some description you are</div>
            </label>
        </div>
        <div class="w-1/2 basis-1/2">
            <input type="radio" id="{{ $name . '2'}}" name="{{ $name }}" value="1" class="hidden peer" required @if(old($name, $value) == "true") checked @endif>
            <label for="{{ $name . '2'}}" class="flex flex-col items-center justify-center w-full h-full p-3 bg-white border border-black rounded-r-xl cursor-pointer peer-checked:border-blue-600 peer-checked:border-2 hover:text-gray-600 hover:bg-gray-50">                           
                <div class="text-base font-semibold">Yeppers</div>
                <div class="">Some description</div>
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