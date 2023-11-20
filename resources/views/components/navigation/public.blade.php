@props(['pages'])


<nav x-data="{ open: false }">
    <div class="fixed top-0 left-0 right-0 backdrop-blur-lg backdrop-saturate-150 bg-white/50 h-16 z-40">
        <div class="py-1 px-6 md:px-8 max-w-7xl mx-auto flex justify-between items-center h-full">
            {{-- Left side --}}
            <div class="flex items-center gap-4">
                {{-- Main link --}}
                <a href="{{ url('/') }}">
                    <x-application-logo class="h-8 w-auto fill-current text-slate-500" />
                </a>
    
                @if (isset($pages))
                    {{-- Navigation links --}}
                    <div class="hidden lg:flex items-center">
                        @foreach ($pages as $page)
                            <a href="{{ route($page['route']) }}" class="font-semibold py-4 px-6 text-black no-underline relative
                                    after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                    hover:after:scale-50 hover:after:opacity-50
                                    focus:after:scale-50 focus:after:opacity-50
                                    active:after:scale-75 active:after:opacity-100">
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
                                    <x-dropdown-link href="{{ route($page['route']) }}">
                                        {{ $page['text'] }}
                                    </x-dropdown-link>
                                @endforeach
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif
    
            </div>
    
            {{-- Right side --}}
            <div class="flex items-center gap-4">
                {{-- Sign in and sign up --}}
                <div class="hidden md:flex items-center gap-2">
                    <a href="" class="transition group gap-2 inline-flex items-center justify-center rounded-md bg-transparent px-5 py-2 h-12 text-base font-semibold text-black shadow-sm border-slate-200 border-2  hover:border-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        Sign in
                        <svg class="transition -translate-x-0 group-hover:translate-x-1 group-focus:translate-x-1"
                            width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"
                            focusable="false" data-testid="Button-expandable-arrow">
                            <path fill="currentColor"
                                d="M7.28033 3.21967C6.98744 2.92678 6.51256 2.92678 6.21967 3.21967C5.92678 3.51256 5.92678 3.98744 6.21967 4.28033L7.28033 3.21967ZM11 8L11.5303 8.53033C11.8232 8.23744 11.8232 7.76256 11.5303 7.46967L11 8ZM6.21967 11.7197C5.92678 12.0126 5.92678 12.4874 6.21967 12.7803C6.51256 13.0732 6.98744 13.0732 7.28033 12.7803L6.21967 11.7197ZM6.21967 4.28033L10.4697 8.53033L11.5303 7.46967L7.28033 3.21967L6.21967 4.28033ZM10.4697 7.46967L6.21967 11.7197L7.28033 12.7803L11.5303 8.53033L10.4697 7.46967Z">
                            </path>
                            <path
                                class="origin-center scale-0 group-hover:scale-100 group-focus:scale-100 transition"
                                stroke="currentColor" d="M1.75 8H11" stroke-width="1.5" stroke-linecap="round">
                            </path>
                        </svg>
                    </a>
    
                    <a href="" class="group gap-2 inline-flex items-center justify-center rounded-md bg-black px-5 py-2 h-12 text-base font-semibold text-white shadow-sm hover:bg-slate-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        Sign up
                        <svg class="transition -translate-x-0 group-hover:translate-x-1 group-focus:translate-x-1"
                            width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"
                            focusable="false" data-testid="Button-expandable-arrow">
                            <path fill="currentColor"
                                d="M7.28033 3.21967C6.98744 2.92678 6.51256 2.92678 6.21967 3.21967C5.92678 3.51256 5.92678 3.98744 6.21967 4.28033L7.28033 3.21967ZM11 8L11.5303 8.53033C11.8232 8.23744 11.8232 7.76256 11.5303 7.46967L11 8ZM6.21967 11.7197C5.92678 12.0126 5.92678 12.4874 6.21967 12.7803C6.51256 13.0732 6.98744 13.0732 7.28033 12.7803L6.21967 11.7197ZM6.21967 4.28033L10.4697 8.53033L11.5303 7.46967L7.28033 3.21967L6.21967 4.28033ZM10.4697 7.46967L6.21967 11.7197L7.28033 12.7803L11.5303 8.53033L10.4697 7.46967Z">
                            </path>
                            <path
                                class="origin-center scale-0 group-hover:scale-100 group-focus:scale-100 transition"
                                stroke="currentColor" d="M1.75 8H11" stroke-width="1.5" stroke-linecap="round">
                            </path>
                        </svg>
                    </a>
                </div>
                {{-- Responsive nav menu --}}
                <div class="flex md:hidden items-center">
                    <button @click="open = ! open"
                    class="inline-block self-center cursor-pointer appearance-none bg-transparent
                    border-2 border-transparent rounded-md
                    w-12 h-12"
                    id="hamburger">
                        <div :class="{'tham-active': open }" class="tham tham-e-slider tham-w-5 mx-auto">
                            <div class="tham-box">
                                <div class="tham-inner bg-black !h-0.5 before:!h-0.5 after:!h-0.5"></div>
                            </div>
                        </div>
                    </button>

                    @if (isset($pages))
                        <ul x-show="open"
                                class="block m-0 p-0 absolute top-16 inset-x-0 z-30 bg-white w-screen h-[calc(100dvh-64px)] list-none
                                text-black font-semibold text-xl leading-5 transition"
                                x-transition:enter-start="opacity-0 -translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4">
                            @foreach ($pages as $page)
                                <li x-show="open"
                                        x-transition:enter="duration-300 delay-{{$loop->index * 100}}"
                                        x-transition:enter-start="opacity-0 translate-x-24"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave-end="opacity-0 translate-x-24"
                                        class="transition ease-out">
                                    <a href="{{ route($page['route']) }}" class="pt-6 relative block px-7 pb-4">{{ $page['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
    
        </div>
    </div>
    <div class="h-16 bg-white"></div>
</nav>