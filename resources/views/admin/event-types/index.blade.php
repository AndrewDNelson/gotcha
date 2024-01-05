<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Types') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if(count($eventTypes) == 0)
                <x-empty-state route="admin.event-types.create">
                    Event Type
                </x-empty-state>
            @else
                <x-primary-link route="admin.event-types.create" class="w-full">
                    Create New Rule
                </x-primary-link>
            @endif

            @foreach ($eventTypes as $eventType)
                        <div class="flex justify-between items-center mb-4 p-4 bg-white shadow rounded-lg">
                            <div>
                                <div class="flex items-end gap-3">
                                    <p class="text-xl font-medium text-black">{{$eventType->name}}</p>
                                </div>
                            </div>
                            <div>
                                <form action="{{ route('admin.event-types.destroy', $eventType) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-neutral-500 rounded hover:underline text-sm font-medium tracking-wide transition mx-4"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">Delete</button>
                                </form>

                                <x-secondary-link route="admin.event-types.edit" :itemId="$eventType">
                                    Update
                                </x-secondary-link>

                            </div>
                        </div>
            @endforeach
        </div>
    </div>
    
</x-admin-layout>
