@props(['pages'])

<nav x-data="{ open: false }">
    <div class="fixed top-0 left-0 right-0 backdrop-blur-lg backdrop-saturate-150 bg-white/50 h-16 z-40">
        <div class="py-1 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto flex justify-between items-center h-full">
            {{-- Left side --}}
            <div class="flex items-center gap-6">
                {{-- Main link --}}
                <a href="{{ url('/') }}">
                    <x-application-logo class="h-8 w-auto fill-current text-slate-500" />
                </a>
    
                @isset($pages)
                    {{-- Navigation links --}}
                    <div class="hidden lg:flex items-center">
                        @foreach ($pages as $page)
                            <a href="{{ route($page['route']) }}" class="font-semibold py-4 px-6 text-black no-underline relative
                                    after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                    hover:after:scale-50 hover:after:opacity-50
                                    focus:after:scale-50 focus:after:opacity-50
                                    active:after:scale-75 active:after:opacity-100
                                    {{ request()->routeIs($page['route']) ? ' after:bg-indigo-400 after:scale-75 after:opacity-75': ''}}">
                                {{ $page['text'] }}
                            </a>
                        @endforeach
                    </div>
                
                    {{-- Responsive Navigation Links --}}
                    <div class="hidden md:flex lg:hidden items-center">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button class="font-semibold py-4 px-6 text-black no-underline relative items-center inline-flex lg:hidden
                                after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                hover:after:scale-50 hover:after:opacity-50
                                focus:after:scale-50 focus:after:opacity-50
                                active:after:scale-75 active:after:opacity-100">
                                    <div>More</div>
        
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
        
                            <x-slot name="content">
                                @foreach ($pages as $page)
                                    <x-dropdown-link href="{{ route($page['route']) }}" class="{{ request()->routeIs($page['route']) ? 'bg-indigo-50 border-l-4 border-indigo-400': ''}}">
                                        {{ $page['text'] }}
                                    </x-dropdown-link>
                                @endforeach
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endisset
    
            </div>
    
            {{-- Right side --}}
            <div class="flex items-center gap-4">
                @isset($right)
                    {{ $right }}
                @endisset

                {{-- Responsive nav menu --}}
                <div class="flex md:hidden items-center">
                    <button @click="open = ! open"
                    class="inline-block self-center cursor-pointer appearance-none bg-transparent
                    border-2 border-transparent rounded-md
                    w-12 h-12 hover:bg-gray-100"
                    id="hamburger">
                        <div :class="{'tham-active': open }" class="tham tham-e-slider tham-w-5 mx-auto">
                            <div class="tham-box">
                                <div class="tham-inner bg-black !h-0.5 before:!h-0.5 after:!h-0.5"></div>
                            </div>
                        </div>
                    </button>

                    <div class="block m-0 p-0 absolute top-16 inset-x-0 z-30 bg-white w-screen h-[calc(100dvh-64px)] transition"
                            x-show="open" 
                            x-transition:enter-start="opacity-0 -translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-4">
                        @isset($pages)
                            <ul class="list-none text-black font-semibold text-xl leading-5">
                                <div x-transition:enter="delay-100 delay-200 delay-300 delay-400 delay-500" class="hidden"></div>
                                @foreach ($pages as $page)
                                    <li class="transition ease-out"
                                            x-show="open"
                                            x-transition:enter="duration-300 delay-{{$loop->index * 100}}"
                                            x-transition:enter-start="opacity-0 translate-x-24"
                                            x-transition:enter-end="opacity-100 translate-x-0"
                                            x-transition:leave-start="opacity-100 translate-x-0"
                                            x-transition:leave-end="opacity-0 translate-x-24">
                                        <a href="{{ route($page['route']) }}" class="mt-3 py-4 relative block px-7 hover:bg-gray-50 {{ request()->routeIs($page['route']) ? 'underline underline-offset-4 decoration-indigo-400': ''}}">{{ $page['text'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endisset

                        @isset($bottom)
                            <div class="absolute w-screen inset-x-0 bottom-0 transition ease-out"
                                    x-show="open"
                                    x-transition:enter="duration-300 delay-{{ isset($pages) ? count($pages) * 100 : 0}}"
                                    x-transition:enter-start="opacity-0 scale-75"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-75">
                                {{ $bottom }}
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    <div class="h-16 bg-white"></div>
</nav>