<x-shared-layout>

    <body class="font-sans antialiased bg-white">
        <main class="px-8 max-w-7xl mx-auto">
            <form method="POST" action="{{ route('admin.event-types.store') }}" >
                @method('POST')
                @csrf
        
                <x-forms.input name="name" label="Name" class="" />

                <x-forms.toggle name="required" label="Required" class="w-[490px]"/>
                <x-forms.toggle name="shuffle" label="Shuffle" class="w-[490px]"/>
                <x-forms.toggle name="instant" label="Instant" class="w-[490px]"/>

                <x-primary-button class="ml-3">
                    {{ __('Submit') }}
                </x-primary-button>
            </form>
        </main>
    </body>
    
</x-shared-layout>
