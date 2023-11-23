<x-shared-layout>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <x-navigation-layout :pages="[
                    ['route' => 'admin.dashboard', 'text' => 'Dashboard'],
                    ['route' => 'dashboard', 'text' => 'Hello'],
                    ['route' => 'dashboard', 'text' => 'Bye'],
                ]">
                <x-slot:right>
                    <!-- Settings Dropdown -->
                    <div class="hidden md:flex md:items-center">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('admin.profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('admin.logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </x-slot:right>

                <x-slot:bottom>
                    <div class="p-6 flex flex-col gap-4">
                        <div>
                            <div class="text-black">{{ Auth::user()->name }}</div>
                            <div class="text-slate-400">{{ Auth::user()->email }}</div>
                        </div>
                        <a href="{{ route('profile.edit')}}" class="px-5 py-2 h-12 transition group gap-2 flex items-center justify-center rounded-md bg-transparent text-base font-semibold text-black shadow-sm border-slate-200 border-2  hover:border-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <button class="px-5 py-2 h-12 w-full group gap-2 flex items-center justify-center rounded-md bg-black text-base font-semibold text-white shadow-sm hover:bg-slate-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                                    type="submit" :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </x-slot:bottom>
            </x-navigation-layout>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</x-shared-layout>
