<x-shared-layout>

    <body {{ $attributes->merge(['class' => 'font-sans antialiased bg-white transition-opacity ease-in-out duration-300 delay-100']) }}>
        
        <x-navigation-layout :pages="[
                ['route' => 'dashboard', 'text' => 'Sessions'],
                ['route' => 'dashboard', 'text' => 'Speakers'],
                ['route' => 'dashboard', 'text' => 'Why attend'],
                ['route' => 'dashboard', 'text' => 'FAQ'],
            ]">
            <x-slot:right>
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
            </x-slot:right>

            <x-slot:bottom>
                {{-- Sign in and sign up --}}
                <div class="p-6 flex flex-col gap-4">
                    <a href="" class="px-5 py-2 h-12 transition group gap-2 flex items-center justify-center rounded-md bg-transparent text-base font-semibold text-black shadow-sm border-slate-200 border-2  hover:border-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
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
                    <a href="" class="px-5 py-2 h-12 group gap-2 flex items-center justify-center rounded-md bg-black text-base font-semibold text-white shadow-sm hover:bg-slate-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
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
            </x-slot:bottom>

        </x-navigation-layout>

        {{ $slot }}

    </body>

</x-shared-layout>
