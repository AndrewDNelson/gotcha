<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- Local fonts found in app.css --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-slate-950 opacity-0 transition-opacity ease-in-out duration-300 delay-100">
    <div class="pt-[75px]">


        <header class="fixed top-0 left-0 right-0 backdrop-blur-lg backdrop-saturate-150 bg-slate-950/50 h-[75px] z-50">

            <div class="py-1 px-8 max-w-7xl mx-auto flex">
                <nav>
                    <ol class="inline-flex list-none items-center gap-4 max-w-sm py-4">
                        <li><svg aria-hidden="true" focusable="false" role="img" class="text-white"
                                viewBox="0 0 16 16" width="24" height="24" fill="currentColor"
                                style="display:inline-block;user-select:none;vertical-align:text-bottom;overflow:visible">
                                <path
                                    d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z">
                                </path>
                            </svg></li>
                        <li class="text-gray-500 font-semibold text-2xl">/</li>
                        <li>
                            <a href="https://githubuniverse.com/"
                                class="text-white font-bold text-2xl pr-4 whitespace-nowrap">GitHub Universe</a>
                        </li>
                    </ol>
                </nav>

                <nav class="inline-flex list-none items-center">
                    <ul class="list-none mr-4 flex items-center">
                        <li class="whitespace-nowrap"><a href=""
                                class="font-semibold py-4 px-6 text-white no-underline relative hidden md:block
                  after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-white after:opacity-0 after:scale-0 after:origin-center after:transition 
                  hover:after:scale-50 hover:after:opacity-50
                  focus:after:scale-50 focus:after:opacity-50
                  active:after:scale-75 active:after:opacity-100
                  ">Sessions</a>
                        </li>
                        <li class="whitespace-nowrap"><a href=""
                                class="font-semibold py-4 px-6 text-white no-underline relative hidden lg:block
                  after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-white after:opacity-0 after:scale-0 after:origin-center after:transition 
                  hover:after:scale-50 hover:after:opacity-50
                  focus:after:scale-50 focus:after:opacity-50
                  active:after:scale-75 active:after:opacity-100
                  ">Speakers</a>
                        </li>
                        <li class="whitespace-nowrap"><a href=""
                                class="font-semibold py-4 px-6 text-white no-underline relative hidden lg:block
                  after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-white after:opacity-0 after:scale-0 after:origin-center after:transition 
                  hover:after:scale-50 hover:after:opacity-50
                  focus:after:scale-50 focus:after:opacity-50
                  active:after:scale-75 active:after:opacity-100
                  ">Why attend</a></li>
                        <li class="whitespace-nowrap relative">
                            <button type="button"
                                class="font-semibold py-4 px-6 text-white no-underline relative inline-flex block lg:hidden
                  after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-white after:opacity-0 after:scale-0 after:origin-center after:transition 
                  hover:after:scale-50 hover:after:opacity-50
                  focus:after:scale-50 focus:after:opacity-50
                  active:after:scale-75 active:after:opacity-100"
                                aria-expanded="false" id="toggle-list">
                                <span>More</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div class="absolute left-1/2 z-10 mt-5 w-screen max-w-max -translate-x-1/2 px-4 hidden opacity-0 translate-y-1 transition"
                                id="more-list">
                                <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
                                  <div class="p-4">
                                      <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                          <a href="#" class="font-semibold text-gray-900">
                                              Sessions
                                              <span class="absolute inset-0"></span>
                                          </a>
                                      </div>
                                      <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                          <a href="#" class="font-semibold text-gray-900">
                                              Speakers
                                              <span class="absolute inset-0"></span>
                                          </a>
                                      </div>
                                      <div class="relative rounded-lg p-4 hover:bg-gray-50">
                                        <a href="#" class="font-semibold text-gray-900">
                                            Why attend
                                            <span class="absolute inset-0"></span>
                                        </a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="flex items-center ml-auto">
                    <div class="flex gap-2">
                        <span class="">
                            <button type="button"
                                class="transition group gap-2 inline-flex items-center justify-center rounded-md bg-transparent px-5 py-2 h-12 text-sm font-semibold text-white shadow-sm hover:bg-white/25 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
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
                            </button>
                        </span>

                        <span class="">
                            <button type="button"
                                class="group gap-2 inline-flex items-center justify-center rounded-md bg-white px-5 py-2 h-12 text-sm font-semibold text-black shadow-sm hover:bg-cyan-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
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
                            </button>
                        </span>

                    </div>
                </div>

            </div>


        </header>


        <main class="px-8 max-w-7xl mx-auto">
            <div class="flex flex-col gap-12">
                <section class="flex flex-col md:gap-8 gap-6">
                    {{-- Hero Image --}}
                    <div class="relative mx-auto overflow-hidden cursor-pointer rounded-3xl md:h-[465px] h-72">
                        <img class="object-cover h-full transition ease-out duration-300 hover:scale-105 animate-scale_in"
                            src="/images/hero-video@2x.jpg" alt="">
                    </div>

                    {{-- 3 section words --}}
                    <div class="flex flex-wrap xl:justify-between justify-evenly gap-x-6 gap-y-2">
                        <span class="uppercase font-medium text-xl lg:text-2xl text-white font-mono">November 8-9</span>
                        <span class="uppercase font-medium text-xl lg:text-2xl text-white font-mono">Live &
                            Virtual</span>
                        <span
                            class="uppercase font-medium text-xl lg:text-2xl text-white font-mono xl:block hidden">YERBA
                            BUENA CENTER FOR THE ARTS, SAN FRANCISCO</span>
                        <span class="uppercase font-medium text-xl lg:text-2xl text-white font-mono xl:hidden">YBCA, SAN
                            FRANCISCO</span>
                    </div>

                    {{-- Attention grabbing Text --}}
                    <h1 class="relative text-white font-black text-4xl tracking-tight ">
                        <img alt="" class="" src="images/hero-logo.svg">
                    </h1>

                    {{-- Longer text and sign up --}}
                    <div class="flex justify-between flex-col xl:flex-row gap-4 content-center">
                        <p class="text-center xl:text-left font-bold text-xl lg:text-3xl text-gray-500">
                            Our global developer conference is back. <br class="hidden xl:block">Join us as we build
                            the future together.
                        </p>

                    </div>

                </section>
            </div>
        </main>
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let body = document.body;
            body.classList.replace('opacity-0', 'opacity-100')
        });

        // Opens the more dropdown
        const toggleButton = document.getElementById('toggle-list');
        const moreList = document.getElementById('more-list');

        toggleButton.addEventListener('click', function() {
            // Toggle the class on the element
            moreList.classList.toggle('opacity-0');
            moreList.classList.toggle('opacity-100');
            moreList.classList.toggle('translate-y-1');
            moreList.classList.toggle('translate-y-0');
            moreList.classList.toggle('flex');
            moreList.classList.toggle('hidden');
        });
    </script>
</body>

</html>
