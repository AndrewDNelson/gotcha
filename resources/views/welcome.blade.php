<x-shared-layout>

<body class="font-sans antialiased bg-white opacity-0 transition-opacity ease-in-out duration-300 delay-100">
    <div class="pt-[75px]">


        <header class="fixed top-0 left-0 right-0 backdrop-blur-lg backdrop-saturate-150 bg-white/50 h-[75px] z-40">

            <nav x-data="{ open: false }" class="py-1 px-8 max-w-7xl mx-auto flex justify-between items-center h-full">
                {{-- Left side --}}
                <div class="flex items-center">
                    {{-- Main link --}}
                    <a href="{{ url('/')}}">
                        <ol class="inline-flex list-none items-center gap-3">
                            <li>
                                <svg class="h-8 fill-current" viewBox="0 0 87 126" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="text-orange-600" d="M67.8678 27C65.7255 31.5817 62.6206 38.3059 59.5278 45.1551C54.9778 55.2313 50.4542 65.5781 49.0609 69.7721C46.1354 78.5781 43.6278 94.5128 44.0457 100.803C44.4637 107.093 44.8816 118.415 52.4044 123.027C59.9271 127.64 69.5395 127.64 79.5699 117.576C89.6002 107.512 87.5105 87.3841 84.585 73.1267C81.6595 58.8694 79.9878 54.676 74.5547 41.6767C70.2082 31.2772 68.2857 27.5591 67.8678 27Z M59.5278 45.1551C62.6206 38.3059 65.7255 31.5817 67.8678 27H60L59.5278 45.1551Z" fill="#F55139"/>
                                    <path class="text-orange-600" d="M21.4273 0C19.6836 3.33214 17.1563 8.22245 14.6389 13.2037C10.9354 20.5318 7.25343 28.0568 6.11934 31.107C3.73811 37.5113 1.69705 49.1002 2.03723 53.6748C2.3774 58.2493 2.7176 66.4835 8.84077 69.8382C14.9639 73.1928 22.788 73.1928 30.9522 65.8736C39.1164 58.5543 37.4155 43.9157 35.0343 33.5467C32.6531 23.1777 31.2924 20.128 26.8701 10.674C23.3323 3.1107 21.7674 0.406627 21.4273 0Z M14.6389 13.2037C17.1563 8.22245 19.6836 3.33214 21.4273 0H17L14.6389 13.2037Z" fill="#F55139"/>
                                    <path class="text-black" d="M60 27C54.8293 38.322 44.2292 62.7273 41.9432 69.7721C39.0857 78.5781 36.6365 94.5128 37.0447 100.803C37.4529 107.093 37.8611 118.415 45.2089 123.027C52.5567 127.64 61.9456 127.64 71.7426 117.576C81.5397 107.512 79.4987 87.3841 76.6412 73.1267C73.7837 58.8694 72.1509 54.676 66.8441 41.6767C62.5987 31.2772 60.4082 27.5591 60 27Z"/>
                                    <path class="text-black" d="M17 0C13.3067 8.23419 5.16371 25.9835 3.53086 31.107C1.48981 37.5113 -0.25967 49.1002 0.0319094 53.6748C0.323489 58.2493 0.615086 66.4835 5.86352 69.8382C11.1119 73.1928 17.8183 73.1928 24.8162 65.8736C31.8141 58.5543 30.3562 43.9157 28.3151 33.5467C26.2741 23.1777 25.1078 20.128 21.3172 10.674C18.2848 3.1107 17.2916 0.406627 17 0Z"/>
                                </svg>
                            </li>
                            <li class="text-gray-500 font-semibold text-3xl">/</li>
                            <li>
                                <svg class="h-8 fill-current pr-4" viewBox="0 0 580 156" xmlns="http://www.w3.org/2000/svg">
                                    <path class="text-orange-600" d="M51.816 125.536C42.7707 125.536 34.92 123.915 28.264 120.672C21.6933 117.344 16.5733 112.779 12.904 106.976C9.32 101.088 7.528 94.304 7.528 86.624C7.528 79.0293 8.85067 71.9467 11.496 65.376C14.2267 58.8053 18.0667 53.1307 23.016 48.352C27.9653 43.488 33.896 39.6907 40.808 36.96C47.72 34.2293 55.4 32.864 63.848 32.864C72.3813 32.864 79.7627 34.2293 85.992 36.96C92.3067 39.6053 97.384 43.4453 101.224 48.48L86.376 60.512C83.3893 56.928 79.976 54.368 76.136 52.832C72.3813 51.296 67.9867 50.528 62.952 50.528C57.6613 50.528 52.8827 51.424 48.616 53.216C44.4347 54.9227 40.8507 57.3547 37.864 60.512C34.8773 63.6693 32.5733 67.3813 30.952 71.648C29.3307 75.8293 28.52 80.3947 28.52 85.344C28.52 89.8667 29.5013 93.8347 31.464 97.248C33.4267 100.576 36.328 103.179 40.168 105.056C44.0933 106.933 48.872 107.872 54.504 107.872C58.7707 107.872 62.8667 107.147 66.792 105.696C70.7173 104.245 74.5147 101.984 78.184 98.912L86.12 114.656C81.5973 118.155 76.3493 120.843 70.376 122.72C64.488 124.597 58.3013 125.536 51.816 125.536ZM67.944 111.456L74.6 77.792H93.544L86.12 114.656L67.944 111.456ZM149.926 125.536C140.881 125.536 133.073 123.915 126.502 120.672C120.017 117.344 115.025 112.779 111.526 106.976C108.027 101.088 106.278 94.304 106.278 86.624C106.278 78.944 107.601 71.8613 110.246 65.376C112.891 58.8053 116.646 53.1307 121.51 48.352C126.459 43.488 132.305 39.6907 139.046 36.96C145.873 34.2293 153.425 32.864 161.702 32.864C170.747 32.864 178.513 34.528 184.998 37.856C191.569 41.0987 196.603 45.664 200.102 51.552C203.601 57.3547 205.35 64.096 205.35 71.776C205.35 79.456 204.027 86.5813 201.382 93.152C198.737 99.6373 194.939 105.312 189.99 110.176C185.126 114.955 179.281 118.709 172.454 121.44C165.713 124.171 158.203 125.536 149.926 125.536ZM151.718 107.872C156.753 107.872 161.275 106.976 165.286 105.184C169.382 103.307 172.838 100.747 175.654 97.504C178.47 94.2613 180.603 90.5493 182.054 86.368C183.59 82.1013 184.358 77.6213 184.358 72.928C184.358 68.4907 183.419 64.608 181.542 61.28C179.665 57.8667 176.891 55.2213 173.222 53.344C169.638 51.4667 165.201 50.528 159.91 50.528C154.875 50.528 150.353 51.4667 146.342 53.344C142.331 55.136 138.875 57.6533 135.974 60.896C133.158 64.1387 130.982 67.8933 129.446 72.16C127.995 76.3413 127.27 80.7787 127.27 85.472C127.27 89.9093 128.209 93.8347 130.086 97.248C132.049 100.576 134.822 103.179 138.406 105.056C142.075 106.933 146.513 107.872 151.718 107.872ZM228.772 124L243.236 51.296H214.564L218.02 34.4H296.1L292.644 51.296H264.1L249.508 124H228.772ZM335.191 125.536C326.06 125.536 318.167 123.915 311.511 120.672C304.94 117.344 299.863 112.779 296.279 106.976C292.695 101.088 290.903 94.304 290.903 86.624C290.903 79.0293 292.226 71.9467 294.871 65.376C297.602 58.8053 301.399 53.1307 306.263 48.352C311.212 43.488 317.058 39.6907 323.799 36.96C330.626 34.2293 338.22 32.864 346.583 32.864C354.604 32.864 361.687 34.2293 367.831 36.96C373.975 39.6907 378.626 43.616 381.783 48.736L366.807 61.024C364.503 57.6107 361.559 55.008 357.975 53.216C354.391 51.424 350.124 50.528 345.175 50.528C340.14 50.528 335.575 51.424 331.479 53.216C327.383 54.9227 323.842 57.3973 320.855 60.64C317.954 63.7973 315.735 67.5093 314.199 71.776C312.663 76.0427 311.895 80.5653 311.895 85.344C311.895 89.8667 312.876 93.8347 314.839 97.248C316.802 100.576 319.66 103.179 323.415 105.056C327.17 106.933 331.692 107.872 336.983 107.872C341.591 107.872 345.9 107.061 349.911 105.44C353.922 103.733 357.548 101.088 360.791 97.504L373.079 110.048C368.386 115.509 362.796 119.477 356.311 121.952C349.911 124.341 342.871 125.536 335.191 125.536ZM461.322 34.4H482.058L464.138 124H443.402L461.322 34.4ZM402.826 124H381.962L399.882 34.4H420.746L402.826 124ZM452.362 87.264H408.714L412.17 69.728H455.818L452.362 87.264ZM473.561 124L531.417 34.4H552.025L574.041 124H553.305L535.897 44.64H544.089L495.705 124H473.561ZM497.497 104.8L505.945 89.056H552.153L554.585 104.8H497.497Z"/>
                                    <path class="text-black" d="M53.888 125.536C46.8053 125.536 40.2773 124.427 34.304 122.208C28.416 119.904 23.2533 116.661 18.816 112.48C14.464 108.299 11.0507 103.392 8.576 97.76C6.18667 92.128 4.992 85.9413 4.992 79.2C4.992 72.4587 6.18667 66.272 8.576 60.64C11.0507 55.008 14.5067 50.1013 18.944 45.92C23.3813 41.7387 28.5867 38.5387 34.56 36.32C40.5333 34.016 47.104 32.864 54.272 32.864C62.208 32.864 69.3333 34.1867 75.648 36.832C82.048 39.4773 87.424 43.3173 91.776 48.352L78.464 60.64C75.2213 57.2267 71.68 54.7093 67.84 53.088C64 51.3813 59.8187 50.528 55.296 50.528C50.944 50.528 46.976 51.2107 43.392 52.576C39.808 53.9413 36.6933 55.904 34.048 58.464C31.488 61.024 29.4827 64.0533 28.032 67.552C26.6667 71.0507 25.984 74.9333 25.984 79.2C25.984 83.3813 26.6667 87.2213 28.032 90.72C29.4827 94.2187 31.488 97.2907 34.048 99.936C36.6933 102.496 39.7653 104.459 43.264 105.824C46.848 107.189 50.7733 107.872 55.04 107.872C59.136 107.872 63.104 107.232 66.944 105.952C70.8693 104.587 74.6667 102.325 78.336 99.168L90.112 114.144C85.248 117.813 79.5733 120.629 73.088 122.592C66.688 124.555 60.288 125.536 53.888 125.536ZM71.168 111.456V77.792H90.112V114.144L71.168 111.456ZM152.894 125.536C145.811 125.536 139.241 124.384 133.182 122.08C127.209 119.776 122.003 116.533 117.566 112.352C113.214 108.171 109.801 103.264 107.326 97.632C104.937 92 103.742 85.856 103.742 79.2C103.742 72.544 104.937 66.4 107.326 60.768C109.801 55.136 113.257 50.2293 117.694 46.048C122.131 41.8667 127.337 38.624 133.31 36.32C139.283 34.016 145.769 32.864 152.766 32.864C159.849 32.864 166.334 34.016 172.222 36.32C178.195 38.624 183.358 41.8667 187.71 46.048C192.147 50.2293 195.603 55.136 198.078 60.768C200.553 66.3147 201.79 72.4587 201.79 79.2C201.79 85.856 200.553 92.0427 198.078 97.76C195.603 103.392 192.147 108.299 187.71 112.48C183.358 116.576 178.195 119.776 172.222 122.08C166.334 124.384 159.891 125.536 152.894 125.536ZM152.766 107.872C156.777 107.872 160.446 107.189 163.774 105.824C167.187 104.459 170.174 102.496 172.734 99.936C175.294 97.376 177.257 94.3467 178.622 90.848C180.073 87.3493 180.798 83.4667 180.798 79.2C180.798 74.9333 180.073 71.0507 178.622 67.552C177.257 64.0533 175.294 61.024 172.734 58.464C170.259 55.904 167.315 53.9413 163.902 52.576C160.489 51.2107 156.777 50.528 152.766 50.528C148.755 50.528 145.043 51.2107 141.63 52.576C138.302 53.9413 135.358 55.904 132.798 58.464C130.238 61.024 128.233 64.0533 126.782 67.552C125.417 71.0507 124.734 74.9333 124.734 79.2C124.734 83.3813 125.417 87.264 126.782 90.848C128.233 94.3467 130.195 97.376 132.67 99.936C135.23 102.496 138.217 104.459 141.63 105.824C145.043 107.189 148.755 107.872 152.766 107.872ZM234.684 124V51.296H206.012V34.4H284.092V51.296H255.42V124H234.684ZM336.879 125.536C329.967 125.536 323.524 124.427 317.551 122.208C311.663 119.904 306.543 116.661 302.191 112.48C297.839 108.299 294.426 103.392 291.951 97.76C289.562 92.128 288.367 85.9413 288.367 79.2C288.367 72.4587 289.562 66.272 291.951 60.64C294.426 55.008 297.839 50.1013 302.191 45.92C306.628 41.7387 311.791 38.5387 317.679 36.32C323.567 34.016 330.01 32.864 337.007 32.864C344.772 32.864 351.77 34.2293 357.999 36.96C364.314 39.6053 369.604 43.5307 373.871 48.736L360.559 61.024C357.487 57.5253 354.074 54.9227 350.319 53.216C346.564 51.424 342.468 50.528 338.031 50.528C333.85 50.528 330.01 51.2107 326.511 52.576C323.012 53.9413 319.983 55.904 317.423 58.464C314.863 61.024 312.858 64.0533 311.407 67.552C310.042 71.0507 309.359 74.9333 309.359 79.2C309.359 83.4667 310.042 87.3493 311.407 90.848C312.858 94.3467 314.863 97.376 317.423 99.936C319.983 102.496 323.012 104.459 326.511 105.824C330.01 107.189 333.85 107.872 338.031 107.872C342.468 107.872 346.564 107.019 350.319 105.312C354.074 103.52 357.487 100.832 360.559 97.248L373.871 109.536C369.604 114.741 364.314 118.709 357.999 121.44C351.77 124.171 344.73 125.536 336.879 125.536ZM449.314 34.4H470.05V124H449.314V34.4ZM408.61 124H387.874V34.4H408.61V124ZM450.85 87.264H407.074V69.728H450.85V87.264ZM479.473 124L519.409 34.4H539.889L579.953 124H558.193L525.425 44.896H533.617L500.721 124H479.473ZM499.441 104.8L504.945 89.056H551.025L556.657 104.8H499.441Z"/>
                                </svg>
                            </li>
                        </ol>
                    </a>

                    {{-- Navigation links --}}
                    <div class="hidden lg:flex items-center">
                        <a href="" class="font-semibold py-4 px-6 text-black no-underline relative 
                                after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                hover:after:scale-50 hover:after:opacity-50
                                focus:after:scale-50 focus:after:opacity-50
                                active:after:scale-75 active:after:opacity-100
                                ">Sessions</a>
                        <a href="" class="font-semibold py-4 px-6 text-black no-underline relative 
                                after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                hover:after:scale-50 hover:after:opacity-50
                                focus:after:scale-50 focus:after:opacity-50
                                active:after:scale-75 active:after:opacity-100
                                ">Speakers</a>
                        <a href="" class="font-semibold py-4 px-6 text-black no-underline relative 
                                after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                hover:after:scale-50 hover:after:opacity-50
                                focus:after:scale-50 focus:after:opacity-50
                                active:after:scale-75 active:after:opacity-100
                                ">Why attend</a>
                        <a href="" class="font-semibold py-4 px-6 text-black no-underline relative 
                                after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                hover:after:scale-50 hover:after:opacity-50
                                focus:after:scale-50 focus:after:opacity-50
                                active:after:scale-75 active:after:opacity-100
                                ">FAQ</a>
                    </div>
                    
                    {{-- Responsive Navigation Links --}}
                    <div @click.outside="open = false" class="hidden md:block lg:hidden">

                        <button @click="open = ! open" type="button" class="font-semibold py-4 px-6 text-black no-underline relative items-center inline-flex lg:hidden
                                after:content-[''] after:absolute after:left-0 after:bottom-2.5 after:w-full after:h-0.5 after:bg-black after:opacity-0 after:scale-0 after:origin-center after:transition
                                hover:after:scale-50 hover:after:opacity-50
                                focus:after:scale-50 focus:after:opacity-50
                                active:after:scale-75 active:after:opacity-100">
                            <span>More</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="open"
                                x-transition:enter-start="-translate-x-1/2 -translate-y-10 opacity-0"
                                x-transition:enter-end="-translate-x-1/2 opacity-100"
                                x-transition:leave-start="-translate-x-1/2 opacity-100"
                                x-transition:leave-end="-translate-x-1/2 -translate-y-10 opacity-0"
                                class="absolute left-1/2 z-10 mt-5 w-screen max-w-max -translate-x-1/2 px-4 transition"
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
                    </div>
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
                    <ul x-show="open"
                            class="block m-0 p-0 absolute top-[75px] inset-x-0 z-30 bg-white w-screen h-[calc(100vh-75px)] list-none 
                            text-black font-semibold text-xl leading-5 transition"
                            x-transition:enter-start="opacity-0 -translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-4">
                        <li x-show="open" 
                                x-transition:enter="duration-300"
                                x-transition:enter-start="opacity-0 translate-x-24"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 translate-x-24"
                                class="transition ease-out">
                            <a href="" class="pt-6 relative block px-7 pb-4">Sessions</a>
                        </li>
                        <li x-show="open" 
                                x-transition:enter="duration-300 delay-100"
                                x-transition:enter-start="opacity-0 translate-x-24"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 translate-x-24"
                                class="transition ease-out">
                            <a href="" class="pt-6 relative block px-7 pb-4">Sponsors</a>
                        </li>
                        <li x-show="open" 
                                x-transition:enter="duration-300 delay-200"
                                x-transition:enter-start="opacity-0 translate-x-24"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 translate-x-24"
                                class="transition ease-out">
                            <a href="" class="pt-6 relative block px-7 pb-4">Why attend</a>
                        </li>
                        <li x-show="open" 
                                x-transition:enter="duration-300 delay-300"
                                x-transition:enter-start="opacity-0 translate-x-24"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 translate-x-24"
                                class="transition ease-out">
                            <a href="" class="pt-6 relative block px-7 pb-4">FAQ</a>
                        </li>
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
                            Your favourite event is back.
                            <br class="hidden md:block">
                            Join us for an unforgettable week.
                        </p>

                        <a href="" class="group relative rounded-lg p-0.5
                        text-xl lg:text-2xl font-semibold text-black
                        bg-gradient-to-tr to-yellow-500 via-orange-400 from-rose-400 hover:from-black hover:to-black focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                            <span class="relative px-8 py-2.5 bg-white rounded-md inline-flex items-center justify-center gap-3">
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
                            </span>
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

    </script>
</body>

</x-shared-layout>

