
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            New Event
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            Create an event
                        </p>
                    </header>

                    <form method="POST" action="{{ route('admin.events.store') }}" class="mt-6 space-y-6" >
                        @method('POST')
                        @csrf
                
                        
                        
                        <x-primary-button class="">
                            Submit
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
