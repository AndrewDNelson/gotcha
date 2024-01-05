
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Types') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            New Event Type
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            Generate a template for events.
                        </p>
                    </header>

                    <form method="POST" action="{{ route('admin.event-types.store') }}" class="mt-6 space-y-6" >
                        @method('POST')
                        @csrf
                
                        <x-forms.input name="name" label="Name" class="mt-1 block w-full" />
        
                        <x-forms.toggle name="required" label="Required" class="mt-1 block w-full">
                            <x-slot name="one">
                                <div class="text-base font-semibold">No, thanks</div>
                                <div class="">Players do not have to attend</div>
                            </x-slot>
                            <x-slot name="two">
                                <div class="text-base font-semibold">Yes</div>
                                <div class="">Players are removed if they miss it</div>
                            </x-slot>
                        </x-forms.toggle>

                        <x-forms.toggle name="shuffle" label="Shuffle" class="mt-1 block w-full">
                            <x-slot name="one">
                                <div class="text-base font-semibold">No, thanks</div>
                                <div class="">Kill order will stay the same</div>
                            </x-slot>
                            <x-slot name="two">
                                <div class="text-base font-semibold">Yes</div>
                                <div class="">Once event ends, targets will be shuffled</div>
                            </x-slot>
                        </x-forms.toggle>
                        <x-forms.toggle name="instant" label="Instant" class="mt-1 block w-full">
                            <x-slot name="one">
                                <div class="text-base font-semibold">No, thanks</div>
                                <div class="">The event is a window of time</div>
                            </x-slot>
                            <x-slot name="two">
                                <div class="text-base font-semibold">Yes</div>
                                <div class="">Event will immidiately happen. Ex. Game start, Kill cutoff</div>
                            </x-slot>
                        </x-forms.toggle>
        
                        <x-primary-button class="">
                            Submit
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
