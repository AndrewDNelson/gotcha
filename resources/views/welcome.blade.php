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
                <li><svg aria-hidden="true" focusable="false" role="img" class="text-white" viewBox="0 0 16 16" width="24" height="24" fill="currentColor" style="display:inline-block;user-select:none;vertical-align:text-bottom;overflow:visible"><path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"></path></svg></li>
                <li class="text-gray-500 font-semibold text-2xl">/</li>
                <li>
                  <a href="https://githubuniverse.com/" class="text-white font-bold text-2xl pr-4 whitespace-nowrap">GitHub Universe</a>
                </li>
              </ol>
            </nav>

            <nav class="inline-flex list-none items-center">
              <ul class="list-none mr-4 flex items-center">
                <li class="whitespace-nowrap"><a href="" class="font-semibold py-4 px-6 text-white no-underline relative hidden md:block
                  after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-white after:opacity-0 after:scale-0 after:origin-center after:transition 
                  hover:after:scale-50 hover:after:opacity-50
                  focus:after:scale-50 focus:after:opacity-50
                  active:after:scale-75 active:after:opacity-100
                  ">Sessions</a>
                </li>
                <li class="whitespace-nowrap"><a href="" class="font-semibold py-4 px-6 text-white no-underline relative hidden lg:block
                  after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-white after:opacity-0 after:scale-0 after:origin-center after:transition 
                  hover:after:scale-50 hover:after:opacity-50
                  focus:after:scale-50 focus:after:opacity-50
                  active:after:scale-75 active:after:opacity-100
                  ">Speakers</a></li>
                <li class="whitespace-nowrap"><a href="" class="font-semibold py-4 px-6 text-white no-underline relative hidden xl:block
                  after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-white after:opacity-0 after:scale-0 after:origin-center after:transition 
                  hover:after:scale-50 hover:after:opacity-50
                  focus:after:scale-50 focus:after:opacity-50
                  active:after:scale-75 active:after:opacity-100
                  ">Why attend</a></li>
                <li class="whitespace-nowrap"><a href="" class="font-semibold py-4 px-6 text-white no-underline relative hidden sm:block
                  after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-white after:opacity-0 after:scale-0 after:origin-center after:transition 
                  hover:after:scale-50 hover:after:opacity-50
                  focus:after:scale-50 focus:after:opacity-50
                  active:after:scale-75 active:after:opacity-100
                  ">More</a></li>
              </ul>
            </nav>
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
                      Our global developer conference is back. <br class="hidden xl:block">Join us as we build the future together.
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
    </script>
</body>

</html>
