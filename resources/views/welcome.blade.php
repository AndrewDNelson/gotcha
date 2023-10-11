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

<body class="font-sans antialiased bg-slate-950">
    
    <div class="pt-[75px]">
      <header class="fixed top-0 left-0 right-0 backdrop-blur-lg backdrop-saturate-150 bg-slate-950/50 h-[75px] z-50">

      </header>


      <main class="px-8 max-w-7xl mx-auto">
        <div class="flex flex-col gap-12">

          <section class="flex flex-col md:gap-8 gap-6">
            {{-- Hero Image --}}
            <div class="relative mx-auto overflow-hidden cursor-pointer rounded-3xl md:h-[465px] h-72">
              <img class="object-cover h-full transition ease-out duration-300 hover:scale-105" src="/images/hero-video@2x.jpg" alt="">
            </div>


          </section>


        </div>
      </main>
    </div>


</body>

</html>
