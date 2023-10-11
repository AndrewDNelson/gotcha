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
