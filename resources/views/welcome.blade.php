<x-shared-layout>

<body class="font-sans antialiased bg-white opacity-0 transition-opacity ease-in-out duration-300 delay-100">
    <div class="pt-[75px]">


        <header class="fixed top-0 left-0 right-0 backdrop-blur-lg backdrop-saturate-150 bg-white/50 h-[75px] z-40">

            
            <nav x-data="{ open: false }" class="py-1 px-8 max-w-7xl mx-auto flex justify-between items-center h-full">
                {{-- Left side --}}
                <div class="flex items-center">
                    {{-- Main link --}}
                    <ol class="inline-flex list-none items-center gap-4">
                        <li><svg aria-hidden="true" focusable="false" role="img" class="text-black"
                                viewBox="0 0 16 16" width="32" height="32" fill="currentColor"
                                style="display:inline-block;user-select:none;vertical-align:text-bottom;overflow:visible">
                                <path
                                    d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z">
                                </path>
                            </svg></li>
                        <li class="text-gray-500 font-semibold text-3xl">/</li>
                        <li>
                            <a href="https://githubuniverse.com/"
                                class="text-black font-bold text-base xs:text-2xl pr-4 whitespace-nowrap">GitHub Universe</a>
                        </li>
                    </ol>
                    {{-- Link options --}}
                    <ul class="list-none hidden md:flex items-center">
                        <li class="whitespace-nowrap">
                        <a href="" class="font-semibold py-4 px-6 text-black no-underline relative hidden lg:block
                                        after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                        hover:after:scale-50 hover:after:opacity-50
                                        focus:after:scale-50 focus:after:opacity-50
                                        active:after:scale-75 active:after:opacity-100
                                        ">Sessions</a>
                        </li>
                        <li class="whitespace-nowrap">
                        <a href="" class="font-semibold py-4 px-6 text-black no-underline relative hidden lg:block
                                        after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                        hover:after:scale-50 hover:after:opacity-50
                                        focus:after:scale-50 focus:after:opacity-50
                                        active:after:scale-75 active:after:opacity-100
                                        ">Speakers</a>
                        </li>
                        <li class="whitespace-nowrap">
                            <a href="" class="font-semibold py-4 px-6 text-black no-underline relative hidden lg:block
                                        after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                        hover:after:scale-50 hover:after:opacity-50
                                        focus:after:scale-50 focus:after:opacity-50
                                        active:after:scale-75 active:after:opacity-100
                                        ">Why attend</a>
                        </li>
                        <li class="whitespace-nowrap relative">
                            <button type="button" class="font-semibold py-4 px-6 text-black no-underline relative inline-flex lg:hidden
                                        after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
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
                            <div class="absolute left-1/2 z-10 mt-5 w-screen max-w-max -translate-x-1/2 px-4 hidden"
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
                </div>

                {{-- Sign in and sign up --}}
                <div class="hidden md:flex items-center gap-2">
                    <a href="" class="transition group gap-2 inline-flex items-center justify-center rounded-md bg-transparent px-5 py-2 h-12 text-sm font-semibold text-black shadow-sm border-slate-200	border-2  hover:border-slate-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
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
                        
                    <a href="" class="group gap-2 inline-flex items-center justify-center rounded-md bg-black px-5 py-2 h-12 text-sm font-semibold text-white shadow-sm hover:bg-slate-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
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
                    <ul x-show="open" @click.outside="open = false"
                    class="block m-0 p-0 absolute top-[75px] inset-x-0 z-30 bg-slate-100 w-screen h-[calc(100vh-75px)] list-none 
                    text-black font-semibold text-xl leading-5"
                    x-transition:enter="transition"
                    x-transition:enter-start="opacity-0 -translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-4">
                        <li class="ease-out duration-300 translate-x-24 opacity-0"><a href="" class="pt-6 relative block px-7 pb-4">Sessions</a></li>
                        <li class="ease-out duration-300 translate-x-24 opacity-0"><a href="" class="pt-6 relative block px-7 pb-4">Sponsors</a></li>
                        <li class="ease-out duration-300 translate-x-24 opacity-0"><a href="" class="pt-6 relative block px-7 pb-4">Why attend</a></li>
                        <li class="ease-out duration-300 translate-x-24 opacity-0"><a href="" class="pt-6 relative block px-7 pb-4">FAQ</a></li>
                    </ul>
                </div>

            </nav>
        </header>


        <main class="px-8 max-w-7xl mx-auto">
            <div class="flex flex-col gap-12">
                <section class="flex flex-col md:gap-8 gap-6">
                    {{-- Hero Image --}}
                    <div class="relative mx-auto overflow-hidden rounded-3xl md:h-[465px] h-72">
                        <img class="object-cover h-full transition ease-out duration-300 hover:scale-105"
                            id="hero-image"
                            src="/images/gotcha-hero@2x.png" alt="">
                    </div>

                    {{-- 3 section words --}}
                    <div class="flex flex-wrap xl:justify-between justify-evenly gap-x-6 gap-y-2">
                        <span class="uppercase font-medium text-xl lg:text-2xl text-black font-mono">November 8-9</span>
                        <span class="uppercase font-medium text-xl lg:text-2xl text-black font-mono">Live &
                            Virtual</span>
                        <span
                            class="uppercase font-medium text-xl lg:text-2xl text-black font-mono xl:block hidden">YERBA
                            BUENA CENTER FOR THE ARTS, SAN FRANCISCO</span>
                        <span class="uppercase font-medium text-xl lg:text-2xl text-black font-mono xl:hidden">YBCA, SAN
                            FRANCISCO</span>
                    </div>

                    {{-- Attention grabbing Text --}}
                    <svg class="w-full fill-current text-black" viewBox="0 0 691 97" xmlns="http://www.w3.org/2000/svg" id="hero-text">
                        <path d="M47.688 96.28C40.264 96.28 33.6507 95.128 27.848 92.824C22.0453 90.52 17.1387 87.2773 13.128 83.096C9.20267 78.8293 6.17333 73.752 4.04 67.864C1.992 61.976 0.968 55.448 0.968 48.28C0.968 40.5147 2.07733 33.688 4.296 27.8C6.6 21.8267 9.84267 16.8347 14.024 12.824C18.2907 8.72799 23.368 5.65599 29.256 3.60799C35.144 1.47466 41.672 0.407997 48.84 0.407997C57.6293 0.407997 65.1813 1.816 71.496 4.632C77.896 7.36266 82.9307 11.2027 86.6 16.152C90.2693 21.1013 92.4027 26.904 93 33.56H66.248C65.736 31.256 64.712 29.2933 63.176 27.672C61.64 25.9653 59.6773 24.6853 57.288 23.832C54.8987 22.8933 52.0827 22.424 48.84 22.424C44.5733 22.424 40.8187 23.32 37.576 25.112C34.4187 26.8187 31.944 29.592 30.152 33.432C28.4453 37.1867 27.592 42.136 27.592 48.28C27.592 52.888 28.0613 56.8987 29 60.312C29.9387 63.64 31.304 66.3707 33.096 68.504C34.888 70.6373 37.064 72.216 39.624 73.24C42.184 74.264 45.0427 74.776 48.2 74.776C52.4667 74.776 56.0933 74.0933 59.08 72.728C62.0667 71.3627 64.328 69.4427 65.864 66.968C67.4853 64.408 68.296 61.464 68.296 58.136V54.296L74.824 62.104H46.664V44.056H94.408V55.32C94.408 61.464 93.2987 67.0533 91.08 72.088C88.8613 77.1227 85.704 81.432 81.608 85.016C77.512 88.6 72.6053 91.3733 66.888 93.336C61.1707 95.2987 54.7707 96.28 47.688 96.28Z"/>
                        <path d="M144.809 96.28C137.641 96.28 131.156 95.256 125.353 93.208C119.55 91.0747 114.516 88.0027 110.249 83.992C106.068 79.896 102.825 74.8613 100.521 68.888C98.3023 62.9147 97.193 56.0453 97.193 48.28C97.193 40.5147 98.3023 33.688 100.521 27.8C102.825 21.8267 106.068 16.8347 110.249 12.824C114.516 8.72799 119.55 5.65599 125.353 3.60799C131.156 1.47466 137.641 0.407997 144.809 0.407997C151.977 0.407997 158.462 1.47466 164.265 3.60799C170.153 5.65599 175.188 8.72799 179.369 12.824C183.636 16.8347 186.878 21.8267 189.097 27.8C191.401 33.688 192.553 40.5147 192.553 48.28C192.553 56.0453 191.401 62.9147 189.097 68.888C186.878 74.8613 183.636 79.896 179.369 83.992C175.188 88.0027 170.153 91.0747 164.265 93.208C158.462 95.256 151.977 96.28 144.809 96.28Z M144.809 74.264C149.076 74.264 152.788 73.368 155.945 71.576C159.102 69.784 161.534 67.0107 163.241 63.256C165.033 59.416 165.929 54.424 165.929 48.28C165.929 43.672 165.417 39.7467 164.393 36.504C163.369 33.2613 161.918 30.616 160.041 28.568C158.249 26.4347 156.03 24.8987 153.385 23.96C150.825 22.936 147.966 22.424 144.809 22.424C140.628 22.424 136.958 23.32 133.801 25.112C130.644 26.8187 128.169 29.592 126.377 33.432C124.67 37.1867 123.817 42.136 123.817 48.28C123.817 52.888 124.329 56.856 125.353 60.184C126.377 63.512 127.785 66.2 129.577 68.248C131.454 70.296 133.673 71.832 136.233 72.856C138.793 73.7947 141.652 74.264 144.809 74.264Z"/>
                        <path d="M216.827 95V23.96H191.099V1.688H269.307V23.96H242.811V95H216.827Z"/>
                        <path d="M317.045 96.28C309.877 96.28 303.349 95.256 297.461 93.208C291.658 91.0747 286.624 88.0027 282.357 83.992C278.09 79.896 274.805 74.8613 272.501 68.888C270.282 62.9147 269.173 56.0453 269.173 48.28C269.173 40.5147 270.282 33.688 272.501 27.8C274.805 21.8267 278.09 16.8347 282.357 12.824C286.624 8.72799 291.658 5.65599 297.461 3.60799C303.349 1.47466 309.877 0.407997 317.045 0.407997C325.322 0.407997 332.661 1.85866 339.061 4.75999C345.546 7.57599 350.752 11.544 354.677 16.664C358.602 21.784 360.906 27.7573 361.589 34.584H335.349C334.666 32.1947 333.472 30.104 331.765 28.312C330.058 26.4347 327.968 24.984 325.493 23.96C323.018 22.936 320.202 22.424 317.045 22.424C312.778 22.424 309.024 23.32 305.781 25.112C302.624 26.8187 300.149 29.592 298.357 33.432C296.65 37.1867 295.797 42.136 295.797 48.28C295.797 52.888 296.309 56.856 297.333 60.184C298.357 63.512 299.765 66.2 301.557 68.248C303.434 70.296 305.696 71.832 308.341 72.856C310.986 73.7947 313.888 74.264 317.045 74.264C320.032 74.264 322.762 73.752 325.237 72.728C327.797 71.704 329.973 70.296 331.765 68.504C333.557 66.6267 334.752 64.4507 335.349 61.976H361.589C360.906 68.8027 358.56 74.8187 354.549 80.024C350.538 85.144 345.29 89.1547 338.805 92.056C332.405 94.872 325.152 96.28 317.045 96.28Z"/>
                        <path d="M365.327 95V1.688H391.311V39.576L388.495 36.76H429.711L426.895 39.576V1.688H452.879V95H426.895V55.96L429.711 58.776H388.495L391.311 55.96V95H365.327Z"/>
                        <path d="M453.809 95L482.865 1.688H519.857L548.913 95H521.905L517.041 78.36H485.681L480.817 95H453.809Z M491.441 58.648H511.281L505.777 39.832L501.809 24.984H500.913L496.945 39.832L491.441 58.648Z"/>
                        <path fill="url(#paint0_linear_5_2)" d="M554.066 95V92.568C554.066 87.192 554.877 82.4987 556.498 78.488C558.205 74.392 560.423 70.7653 563.154 67.608C565.885 64.4507 568.871 61.592 572.114 59.032C575.442 56.472 578.727 54.0827 581.97 51.864C585.298 49.6453 588.327 47.4267 591.058 45.208C593.789 42.904 595.965 40.5147 597.586 38.04C599.293 35.48 600.146 32.664 600.146 29.592C600.146 26.6053 599.506 24.0453 598.226 21.912C597.031 19.7787 595.325 18.1573 593.106 17.048C590.887 15.9387 588.242 15.384 585.17 15.384C582.098 15.384 579.367 16.024 576.978 17.304C574.589 18.584 572.754 20.504 571.474 23.064C570.279 25.5387 569.81 28.5253 570.066 32.024H554.322C554.151 25.88 555.346 20.5467 557.906 16.024C560.551 11.416 564.306 7.87466 569.17 5.39999C574.034 2.84 579.709 1.56 586.194 1.56C592.338 1.56 597.671 2.66933 602.194 4.88799C606.802 7.10666 610.343 10.264 612.818 14.36C615.378 18.3707 616.658 23.1493 616.658 28.696C616.658 32.7067 615.975 36.2907 614.61 39.448C613.33 42.6053 611.581 45.5067 609.362 48.152C607.143 50.712 604.626 53.1013 601.81 55.32C599.079 57.5387 596.263 59.672 593.362 61.72C590.546 63.6827 587.815 65.688 585.17 67.736C582.61 69.6987 580.349 71.7467 578.386 73.88C576.423 76.0133 575.015 78.36 574.162 80.92H617.682V95H554.066Z"/>
                        <path fill="url(#paint1_linear_5_2)" d="M662.608 95L662.48 73.112H618.32V60.952L658.256 2.712H678.608V59.928H690.896L690.768 73.112H678.608V95H662.608Z M634.448 59.928H662.608V19.48L634.448 59.928Z"/>
                        <defs>
                            <linearGradient id="paint0_linear_5_2" x1="677.294" y1="1.50002" x2="549.08" y2="94.0013" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFE03C"/>
                                <stop offset="0.477557" stop-color="#FF953C"/>
                                <stop offset="1" stop-color="#FF563A"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_5_2" x1="696" y1="-29" x2="544.98" y2="123.709" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFE03C"/>
                                <stop offset="0.364583" stop-color="#FF953C"/>
                                <stop offset="1" stop-color="#F86048"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    
                    
                    {{-- Longer text and sign up --}}
                    <div class="flex justify-between flex-col xl:flex-row gap-4 items-center content-center">
                        <p class="text-center xl:text-left font-bold text-xl lg:text-3xl text-gray-500">
                            Our global developer conference is back.
                            <br class="hidden md:block">
                            Join us as we build the future together.
                        </p>
                        <a href="" class="transition group gap-2 inline-flex items-center justify-center rounded-md 
                        bg-transparent 
                        px-8 py-5 h-14 md:w-56 w-full
                        text-xl lg:text-2xl font-semibold text-black shadow-sm 
                        border-slate-200 border-2  hover:border-slate-900 
                        focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                            Get started
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

                </section>
            </div>
        </main>
    </div>

    <script>
        // Document fade in
        window.addEventListener("load", function() {
            const body = document.body;
            body.classList.replace('opacity-0', 'opacity-100');

            const img = document.querySelector('img#hero-image');
            img.classList.add('animate-scale-in');

            const svg = document.querySelector('svg#hero-text');

            const pathClasses = [
                "animate-[280ms_240ms_cubic-bezier(0,.5,0,1)_slide-down_backwards]",
                "animate-[360ms_280ms_cubic-bezier(0,.5,0,1)_slide-up_backwards]",
                "animate-[440ms_320ms_cubic-bezier(0,.5,0,1)_slide-down_backwards]",
                "animate-[520ms_360ms_cubic-bezier(0,.5,0,1)_slide-up_backwards]",
                "animate-[600ms_400ms_cubic-bezier(0,.5,0,1)_slide-down_backwards]",
                "animate-[680ms_440ms_cubic-bezier(0,.5,0,1)_slide-up_backwards]",
                "animate-[760ms_480ms_cubic-bezier(0,.5,0,1)_slide-down_backwards]",
                "animate-[820ms_520ms_cubic-bezier(0,.5,0,1)_slide-up_backwards]",
            ];

            // Get all path elements from the SVG
            const paths = svg.querySelectorAll('path');

            // Loop through each path and add the appropriate class from the array
            paths.forEach((path, index) => {
                if (pathClasses[index]) {
                    path.classList.add(pathClasses[index]);
                }
            });
        });

        // Opens the more dropdown
        const toggleButton = document.getElementById('toggle-list');
        const moreList = document.getElementById('more-list');

        toggleButton.addEventListener('click', function() {
            event.stopPropagation()

            // Toggle the class on the element
            moreList.classList.toggle('hidden');
            moreList.classList.toggle('flex');
        });

        document.addEventListener('click', function(event) {
            // Closes the more dropdown
            if(event.target !== toggleButton && !moreList.contains(event.target) && moreList.classList.contains('flex')) {
                moreList.classList.toggle('hidden');
                moreList.classList.toggle('flex');
            }
        });

        // Small nav hamburger
        const hamburger = document.getElementById('hamburger');
        const ul = hamburger.nextElementSibling;

        hamburger.addEventListener('click', function() {
            let children = Array.from(ul.children);

            children.forEach((child, index) => {
                setTimeout(() => {
                    child.classList.toggle('opacity-0'); 
                    child.classList.toggle('opacity-100'); 
                    child.classList.toggle('translate-x-24'); 
                    child.classList.toggle('translate-x-0'); 
                }, index * 100);
            });
        });
    </script>
</body>

</x-shared-layout>

