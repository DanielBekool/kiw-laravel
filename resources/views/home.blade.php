<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="./resources/css/output.css" rel="stylesheet">


    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Tippy.js -->
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light.css" />
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5"></script>

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Swiper CSS -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Kawasan Industri Wijayakusuma</title>
  </head>
 
  <body>

    <!--Opening Animation  
        <div id="splash-screen">
            <div class="logo-sequence min-w-[100vw] min-h-[100vh] flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat" style="background-image: url(./img/background.webp);">
            <div class="absolute inset-0 bg-white opacity-90 z-10"></div>
            
            <img id="logo-image" class="relative z-20 min-h-18 max-h-18  object-contain" src="./img/kic.png" alt="Logo">
            <div id="year-text" class="custom-shadow z-30 lg:text-[15em] sm:text-[20em] text-[10em] lg:py-0 py-4 font-bold text-transparent bg-[url('./img/background.webp')] bg-cover bg-center bg-no-repeat bg-clip-text bg-fixed pointer-events-none lg:-mt-15 sm:-mt-25 -mt-16">
                    1988
            </div>
            
            

              
            </div>
        </div>

        <div id="logo-sequence" class="hidden" >
            <img class="logo-item" data-year="1998" src="./img/kiw-removebg-preview.png" alt="Logo tahun 1998">
            <img class="logo-item" data-year="2018" src="./img/logo-pwskiw-ok.png" alt="Logo tahun 2018">
            <img class="logo-item" data-year="2020" src="./img/grand_batang_city_3.png" alt="Logo tahun 2020">
            <img class="logo-item" data-year="2022" src="./img/Danareksa (1).png" alt="Logo tahun 2022">
            <img class="logo-item" data-year="2022" src="./img/kiw danareksa.png" alt="Logo tahun 2022">
            <img class="logo-item" data-year="2024" src="./img/kiw danareksa.png" alt="Logo tahun 2024">
           
        
            
        </div >

    -->

    <!-- Video Modal Overlay -->
    <div id="videoModal"
        class="modal-overlay fixed inset-0 flex items-center justify-center z-50 hidden"
        onclick="closeVideoModalOnOverlay(event)">
        
        <!-- Modal Content -->
        <div class="relative w-full max-w-2xl aspect-video" onclick="event.stopPropagation()">
            <iframe
            id="youtubeIframe"
            class="w-full h-full rounded"
            src=""
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
            ></iframe>

            <!-- Close Button -->
            <button
            class="absolute -top-10 -right-10 text-white text-2xl font-bold cursor-pointer"
            onclick="closeVideoModal()"
            >
            ×
            </button>
        </div>
    </div>
    
    <!-- Main Content -->
    <div id="main-content-" class="hidden-">

        <!--Start Header Menu-->
        <div x-data="{ open: false, openSubMenu: null }" > 
            <header x-data="{ open: false }" class=" absolute top-0 left-1/2 -translate-x-1/2 lg:w-[1200px] z-99999">
                <div class="lg:max-w-[1200px] mx-auto  flex pt-5 justify-between">
            
                    <!--Logo-->
                    <div class=" flex items-center ">
                            <a href="#"><img class="w-20 filter brightness-0 invert" src="{{ asset('images/logo.png') }}" alt="logo"></a>
                    </div>

                    <!--Main Menu-->
                    <nav class="hidden sm:ml-6 sm:flex">
                        <ul class="flex gap-5 items-center">

                            <!-- Item -->
                            <li>
                                <a href="#" class="inline-flex items-center px-1 pt-1 font-medium text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                    Home
                                </a>
                            </li>

                            <!-- Item w sub -->
                            <li class="relative group">
                                <a href="#" class="inline-flex items-center px-1 pt-1 font-medium text-[var(--color-heading)] hover:text-[var(--color-blue)] focus:outline-none">
                                    About
                                    <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 011.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0l-4.25-4.65a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </a>

                                <!-- Submenu -->
                                <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md  opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Management</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Corporate Secretary</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Item -->
                            <li>
                                <a href="#" class="inline-flex items-center px-1 pt-1 font-medium text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                    Business
                                </a>
                            </li>
                        
                            <!-- Item -->
                            <li>
                            <a href="#" class="inline-flex items-center px-1 pt-1 font-medium text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                Products
                            </a>
                            </li>
                        
                           <!-- Item w sub -->
                            <li class="relative group">
                                <a href="#" class="inline-flex items-center px-1 pt-1 font-medium text-[var(--color-heading)] hover:text-[var(--color-blue)] focus:outline-none">
                                    Investor Relation
                                    <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 011.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0l-4.25-4.65a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                
                                <!-- Submenu -->
                                <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Annual Report</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">GMS</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Item w sub -->
                            <li class="relative group">
                                <a href="#" class="inline-flex items-center px-1 pt-1 text-gray-700 font-medium hover:text-blue-600 focus:outline-none">
                                    Media
                                    <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 011.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0l-4.25-4.65a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                
                                <!-- Submenu -->
                                <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">News Update</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Gallery</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Item -->
                            <li>
                            <a href="#" class="inline-flex items-center px-1 pt-1 font-medium text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                Career
                            </a>
                            </li>

                            <!-- Item -->
                            <li>
                                <a href="#" class="inline-flex items-center px-1 pt-1 font-medium text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                    Contact
                                </a>
                                </li>

                        </ul>
                    </nav>

                    <!--Button-->
                    <div class="self-center hidden lg:block sm:block">
                        <a href="#" class="text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-md">
                            Unduh Brosur
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="sm:hidden">
                        <button @click="open = !open" class="text-gray-700 focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>



                    
                <!-- Off-canvas Mobile Menu -->
                <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-40 sm:hidden" @click="open = false"></div>

                <div x-show="open"
                    class="fixed top-0 right-0 w-[90%] h-full bg-cover shadow-lg z-50 transform transition-transform duration-300 ease-in-out sm:hidden"
                    style="background-image: linear-gradient(90deg, rgba(255, 255, 255, 0.95) 10%, rgba(255, 255, 255, 0.45) 100%), url({{ asset('images/top-view-of-a-truck-driving-along-a-highway-road-i-2023-11-27-05-27-13-utc-111-scaled.jpg') }});"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full">

                    <div class="px-6 mt-5">
                        <button @click="open = false" class="text-gray-700 float-right">
                            ✕
                        </button>

                        <div class="pt-10">

                            <!--Logo-->
                            <div class=" flex items-center ">
                                <a href="#"><img class="w-25" src="./img/logo.png" alt="logo"></a>
                            </div>

                            <ul class="mt-10 space-y-4">

                                <!-- Item -->
                                <li><a href="#" class="block text-[var(--color-heading)] hover:text-[var(--color-blue)]">Home</a></li>

                                <!-- Item w sub -->
                                <li x-data="{ openSubMenu: null }"
                                     @click="if (!$event.target.closest('a')) { openSubMenu === 'about' ? openSubMenu = null : openSubMenu = 'about' }" 
                                     class="cursor-pointer select-none" 
                                >
                                    <div class="flex flex-row  justify-between items-start w-full">
                                        <a href="#" class="block text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                            About
                                        </a>

                                        <div class="ml-2 text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                            <svg class="w-4 h-4 transform" 
                                                :class="{ 'rotate-180': openSubMenu === 'about' }" 
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" 
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 011.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0l-4.25-4.65a.75.75 0 01.02-1.06z" 
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Submenu -->
                                    <ul x-show="openSubMenu === 'about'" class="ml-4 mt-2 space-y-2 text-sm text-[var(--color-text)]" x-cloak>
                                        <li><a href="#" class="block hover:text-[var(--color-blue)]">Profile</a></li>
                                        <li><a href="#" class="block hover:text-[var(--color-blue)]">Management</a></li>
                                        <li><a href="#" class="block hover:text-[var(--color-blue)]">Corporate Secretary</a></li>
                                    </ul>

                                </li>

                                <!-- Item -->
                                <li><a href="#" class="block text-[var(--color-heading)] hover:text-[var(--color-blue)]">Contact</a></li>

                                <!-- Item -->
                                <li><a href="#" class="block text-[var(--color-heading)] hover:text-[var(--color-blue)]">Business</a></li>

                                <!-- Item -->
                                <li><a href="#" class="block text-[var(--color-heading)] hover:text-[var(--color-blue)]">Products</a></li>

                                <!-- Item w sub -->
                                <li x-data="{ openSubMenu: null }"
                                     @click="if (!$event.target.closest('a')) { openSubMenu === 'investor' ? openSubMenu = null : openSubMenu = 'investor' }" 
                                     class="cursor-pointer select-none" 
                                >
                                    <div class="flex flex-row justify-between items-start w-full">
                                        <a href="#" class="block text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                            Investor Relation
                                        </a>

                                        <div class="ml-2 text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                            <svg class="w-4 h-4 transform" 
                                                :class="{ 'rotate-180': openSubMenu === 'investor' }" 
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" 
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 011.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0l-4.25-4.65a.75.75 0 01.02-1.06z" 
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                
                                    <!-- Submenu -->
                                    <ul x-show="openSubMenu === 'investor'" class="ml-4 mt-2 space-y-2 text-sm text-[var(--color-text)]" x-cloak>
                                        <li><a href="#" class="block hover:text-[var(--color-blue)]">Annual Report</a></li>
                                        <li><a href="#" class="block hover:text-[var(--color-blue)]">GMS</a></li>
                                    </ul>
                                </li>

                                <!-- Item w sub -->
                                <li x-data="{ openSubMenu: null }"
                                     @click="if (!$event.target.closest('a')) { openSubMenu === 'media' ? openSubMenu = null : openSubMenu = 'media' }" 
                                     class="cursor-pointer select-none" 
                                >
                                    <div class="flex flex-row justify-between items-start w-full">
                                        <a href="#" class="block text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                            Media
                                        </a>

                                        <div class="ml-2 text-[var(--color-heading)] hover:text-[var(--color-blue)]">
                                            <svg class="w-4 h-4 transform" 
                                                :class="{ 'rotate-180': openSubMenu === 'media' }" 
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" 
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 011.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0l-4.25-4.65a.75.75 0 01.02-1.06z" 
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                            
                                <!-- Submenu -->
                                <ul x-show="openSubMenu === 'media'" class="ml-4 mt-2 space-y-2 text-sm text-[var(--color-text)]" x-cloak>
                                    <li><a href="#" class="block hover:text-[var(--color-blue)]">News Update</a></li>
                                    <li><a href="#" class="block hover:text-[var(--color-blue)]">Gallery</a></li>
                                </ul>
                            </li>

                            <!-- Item -->
                            <li><a href="#" class="block text-[var(--color-heading)] hover:text-[var(--color-blue)]">Career</a></li>

                            <!-- Item -->
                            <li><a href="#" class="block text-[var(--color-heading)] hover:text-[var(--color-blue)]">Contact</a></li>
                                
                                
                            </ul>

                            <!--Button-->
                            <div class="flex items-center lg:block sm:block mt-7">
                                <a href="#" class="text-sm font-medium text-white bg-[var(--color-blue)] hover:bg-blue-700 px-4 py-2 rounded-md">
                                    Sign In
                                </a>
                            </div>

                            <!-- Icon -->
                            <div class="flex flex-col gap-4 mt-10 ">
                                <a href="#" class="flex flex-row gap-2 ">
                                    <i aria-hidden="true" class="fas fa-phone-alt text-[var(--color-blue)]"></i>
                                    <p class="!text-[var(--color-heading)]">Telephone : +62 21 227 831 98</p>
                                </a>

                                <a href="#" class="flex flex-row gap-2">
                                    <i aria-hidden="true" class="fab fa-whatsapp text-[var(--color-blue)]"></i>
                                    <p class="!text-[var(--color-heading)]">Whatsapp : +62 8521 1881 421</p>
                                </a>
                            </div>    

                        </div>
                    </div>
                </div>
            </header>
        </div>   
        <!--End Header Menu-->


        <!--Start Hero Banner-->
        <section id="hero-banner" class="relative bg-cover bg-center overflow-hidden"  >
            

            <!-- Video Background -->
            <div class="absolute inset-0 z-0 pointer-events-none">

                <img id="video-fallback" src="./img/background-home.jpg" alt="Banner Image" class="w-full h-full object-cover absolute inset-0 z-0" />


                <iframe id="video-frame" class="w-full h-full object-cover transform scale-120"
                    src="https://www.youtube.com/embed/1t_z7FMcsOw?autoplay=1&loop=1&mute=1&controls=0&playlist=1t_z7FMcsOw&modestbranding=1&showinfo=0"
                    title="YouTube video background" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
                
                   
              
            </div>


            <!-- overlay -->
            <div class="bg-[var(--color-overlayblack)] z-10 bg-opacity-60 relative">
                <div class="flex flex-col justify-between items-start lg:pt-13 lg:pb-7 lg:h-[100vh] sm:h-[560px] h-[420px] gradient-black">

        
                    <!-- content -->
                    <div class="flex flex-col items-start gap-6 lg:w-[1200px] mx-auto lg:px-0 sm:px-6 px-4 mt-40 z-20">
                        <h1 data-aos="fade-up" class="text-left !text-white lg:max-w-[600px] lg:!text-[2.8rem] sm:!text-[2.2rem] !text-[1.5rem]">
                            Kawasan Industri Strategis untuk Pertumbuhan Bisnis
                        </h1>
                        <p class="!text-white lg:max-w-[700px] sm:max-w-[550px] text-left">
                            Fasilitas lengkap, aksesibilitas tinggi, dan dukungan profesional bagi investor.
                        </p>

                        <!--Button-->
                        <a class="w-fit btn2 mt-5" data-aos="fade-down" href="#">
                            <span class="gradient-text">Lihat Layanan</span>
                            <span class="gradient-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                    <g clip-path="url(#clip0_145_484)">
                                        <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1F77D3"/>
                                            <stop offset="1" stop-color="#321B71"/>
                                        </linearGradient>
                                        <clipPath id="clip0_145_484">
                                            <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </a>
                        
                    </div>
            

                    <!-- counter -->
                    <div class="flex row justify-between lg:w-[1200px] mx-auto  gap-0 ">

                        <div class="w-1/5 self-center w-[150px] ">
                            <h5 class="!text-white">Luas Area Tersedia</h5>
                        </div>

                        <!-- item counter -->
                        <div class="w-1/5 p-5 flex flex-col justify-between border-l border-r border-[var(--color-bordertransparent)]">
                            <div class="flex flex-row justify-center items-start gap-1 mb-2">
                                <div class="flex flex-col gap-2 w-fit">
                                    <div class="flex flex-row gap-2">
                                        <h3 class="counter !font-medium lg:!text-4xl sm:!text-4xl !text-4xl !text-white"  data-target="36">0</h3>
                                        <h3 class="plus !font-medium lg:!text-[1em] self-end !text-white">Ha</h3>
                                    </div>
                                    <div>
                                        <p class="!text-white">Lahan Industri</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item counter -->
                        <div class="w-1/5 p-5 flex flex-col justify-between border-r border-[var(--color-bordertransparent)]">
                            <div class="flex flex-row justify-center items-start gap-1 mb-2">
                                <div class="flex flex-col gap-2 w-fit">
                                    <div class="flex flex-row gap-2">
                                        <h3 class="counter !font-medium lg:!text-4xl sm:!text-4xl !text-4xl !text-white"  data-target="1000">0</h3>
                                        <h3 class="plus !font-medium lg:!text-[1em] self-end !text-white">Unit</h3>
                                    </div>
                                    <div>
                                        <p class="!text-white">BPSP</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item counter -->
                        <div class="w-1/5 p-5 flex flex-col justify-between border-r border-[var(--color-bordertransparent)]">
                            <div class="flex flex-row justify-center items-start gap-1 mb-2">
                                <div class="flex flex-col gap-2 w-fit">
                                    <div class="flex flex-row gap-2">
                                        <h3 class="counter !font-medium lg:!text-4xl sm:!text-4xl !text-4xl !text-white"  data-target="200">0</h3>
                                        <h3 class="plus !font-medium lg:!text-[1em] self-end !text-white">Unit</h3>
                                    </div>
                                    <div>
                                        <p class="!text-white">Food Court</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item counter -->
                        <div class="w-1/5 p-5 flex flex-col justify-between">
                            <div class="flex flex-row justify-center items-start gap-1 mb-2">
                                <div class="flex flex-col gap-2 w-fit">
                                    <div class="flex flex-row gap-2">
                                        <h3 class="counter !font-medium lg:!text-4xl sm:!text-4xl !text-4xl !text-white"  data-target="50">0</h3>
                                        <h3 class="plus !font-medium lg:!text-[1em] self-end !text-white">Unit</h3>
                                    </div>
                                    <div>
                                        <p class="!text-white">Commercial Area</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    
        </section>
        <!--End Hero Banner-->

        <!-- Start About Home -->
        <section id="about-home" class="bg-[var(--color-transit)] lg:py-30 py-18">
            <div class="flex lg:flex-col sm:flex-row overflow-hidden relative flex-col-reverse lg:gap-0 sm:gap-10 gap-10  lg:px-0 lg:max-w-[1200px] mx-auto sm:px-6 px-4">
                <!--top content-->
                <div class="flex flex-row justify-between !gap-15 items-start -mb-10">
                    <!--content left-->
                    <div class="flex flex-col justify-start gap-5 !w-[55%]">
                        <h6 class="bullet-1">tentang kiw</h6>
                        <h2>Pilar Industri Jawa Tengah</h2>
                        <p>
                            PT Kawasan Industri Wijayakusuma (KIW) merupakan perusahaan yang bergerak di bidang pengembangan dan pengelolaan kawasan industri. Pemegang saham KIW antara lain; Kementerian BUMN, PT Danareksa (Persero), Pemerintah Provinsi Jawa Tengah, dan Pemerintah Kabupaten Cilacap.
                        </p>
                        <!--ISO-->
                        <div class="flex flex-row items-center gap-5 mt-4">
                            <img src="{{ asset('images/iso-1.png') }}" alt="iso">
                            <img src="{{ asset('images/iso-2.png') }}" alt="iso">
                            <img src="{{ asset('images/iso-3.png') }}" alt="iso">
                            <p class="!text-[var(--color-heading)] !text-[1.3em] w-[60px]">ISO Certificate</p>
                        </div>
                        <!--button-->
                        <a class="w-fit btn1 mt-5"data-aos="fade-down" href="#">selengkapnya
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </span>
                        </a>
                    </div>

                    <!--image top right-->
                    <div class="!w-[45%]">
                        <img class="rounded-2xl !h-[550px]" src="{{ asset('images/construction-site-with-cranes-construction-worker.jpg') }}" alt="about">
                    </div>
                </div>
 

                <!--bottom content-->
                <div class="flex flex-row justify-start items-center gap-10">
                    <!--content left-->
                    <div class="w-[48%]">
                        <img class="rounded-2xl h-[340px] object-cover" src="{{ asset('images/pointing-sketch.jpg') }}">
                    </div>

                    <!--content right-->
                    <div class="grid grid-cols-2 gap-8">
                        <!--counter-->
                        <div class="p-8 px-11 flex flex-col justify-between items-start bg-white rounded-2xl">
                            <div class="flex flex-row justify-start gap-1 mb-2">
                                <h3 class="counter gradient-text !font-medium lg:!text-5xl sm:!text-4xl !text-4xl" data-target="36">0</h3>
                                <h3 class="plus gradient-text !font-medium lg:!text-5xl sm:!text-4xl !text-4xl">+</h3>
                            </div>
                            <div>
                                <p class="!text-[var(--color-heading)]">Tahun Pengalaman</p>
                            </div>
                        </div>

                        <!--counter-->
                        <div class="p-8 px-11 flex flex-col justify-between bg-white rounded-2xl">
                            <div class="flex flex-row justify-start gap-1 mb-2">
                                <h3 class="counter gradient-text !font-medium lg:!text-5xl sm:!text-4xl !text-4xl" data-target="100">0</h3>
                                <h3 class="plus gradient-text !font-medium lg:!text-5xl sm:!text-4xl !text-4xl">+</h3>
                            </div>
                            <div>
                                <p class="!text-[var(--color-heading)]">Tenant Bekerjasama</p>
                            </div>
                        </div>

                        <!--counter-->
                        <div class="p-8 px-11 flex flex-col justify-between bg-white rounded-2xl">
                            <div class="flex flex-row justify-start gap-1 mb-2">
                                <h3 class="counter gradient-text !font-medium lg:!text-5xl sm:!text-4xl !text-4xl" data-target="5">0</h3>
                                <h3 class="plus gradient-text !font-medium lg:!text-5xl sm:!text-4xl !text-4xl">+</h3>
                            </div>
                            <div>
                                <p class="!text-[var(--color-heading)]">Penghargaan</p>
                            </div>
                        </div>

                        
                        <!--counter-->
                        <div class="p-8 px-11 flex flex-col justify-between bg-white rounded-2xl">
                            <div class="flex flex-row justify-start gap-1 mb-2">
                                <h3 class="counter gradient-text !font-medium lg:!text-5xl sm:!text-4xl !text-4xl" data-target="4">0</h3>
                                <h3 class="plus gradient-text !font-medium lg:!text-5xl sm:!text-4xl !text-4xl">+</h3>
                            </div>
                            <div>
                                <p class="!text-[var(--color-heading)]">Sertifikasi</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End About Home -->

        <!-- Start Layanan Home -->
        <section id="layanan-home" class="lg:py-30 py-18 bg-cover " style="background-image: url('{{ asset('images/bg-grad.jpg') }}');">
            <div class="flex lg:flex-col sm:flex-row overflow-hidden relative flex-col-reverse lg:gap-20 sm:gap-10 gap-10  lg:px-0 lg:max-w-[1200px] mx-auto sm:px-6 px-4">
                <!--Content Heading-->
                <div class="flex flex-row justify-between items-end">
                    <!--Heading-->
                    <div class="flex flex-col justify-start gap-5 w-[60%]">
                        <h6 class="bullet-2 !text-white">layanan kami</h6>
                        <h2 class="!text-white">Solusi Komprehensif untuk Kebutuhan Industri</h2>
                    </div>
                    <!--Button-->
                    <div class="w-[40%] flex flex-row justify-end">
                        <a class="w-fit btn2 mt-5" data-aos="fade-down" href="#">
                            <span class="gradient-text">Lihat Layanan</span>
                            <span class="gradient-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                    <g clip-path="url(#clip0_145_484)">
                                        <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1F77D3"/>
                                            <stop offset="1" stop-color="#321B71"/>
                                        </linearGradient>
                                        <clipPath id="clip0_145_484">
                                            <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!--Content-->
                <div class="flex flex-row gap-7">

                    <!--Item-->
                    <div class="group transition-all duration-[500ms]  relative flex flex-col bg-[var(--color-transparent)] rounded-2xl overflow-hidden w-1/3">
                        
                        <!--front-->
                        <div class="flex flex-col justify-between grow gap-15 px-6 pt-6">
                            <div class="flex flex-col gap-3">
                                <h6 class="!text-white">01.</h6>
                                <h3 class="!text-white">Lahan Industri Siap Bangun</h3>
                            </div>
                            <div>
                                <img class="rounded-2xl rounded-b-none h-[250px]  object-cover" src="{{ asset('images/aerial-view-warehouse-industrial-plant-logistics-center-from-view-from.jpg') }}">
                            </div>
                            
                        </div>

                        <!--back-->
                        <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white rounded-2xl gap-15 px-6 pt-6 h-full">
                            <h6>01.</h6>
                            <div class="flex flex-col gap-5">
                                <h3>Lahan Industri Siap Bangun</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-3">
                                    <a class="w-full btn3" href="#">
                                        <span class="gradient-text">Lihat Layanan</span>
                                        <span class="gradient-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                <g clip-path="url(#clip0_145_484)">
                                                    <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#1F77D3"/>
                                                        <stop offset="1" stop-color="#321B71"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_145_484">
                                                        <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Item-->
                    <div class="group transition-all duration-[500ms]  relative flex flex-col bg-[var(--color-transparent)] rounded-2xl overflow-hidden w-1/3">
                        
                        <!--front-->
                        <div class="flex flex-col justify-between grow gap-15 px-6 pt-6">
                            <div class="flex flex-col gap-3">
                                <h6 class="!text-white">02.</h6>
                                <h3 class="!text-white">Bangunan Pabrik Siap Pakai (BPSP)</h3>
                            </div>
                            <div>
                                <img class="rounded-2xl rounded-b-none h-[250px]  object-cover" src="{{ asset('images/exterior-view-modern-industrial-building.jpg') }}">
                            </div>
                            
                        </div>

                        <!--back-->
                        <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white rounded-2xl gap-15 px-6 pt-6 h-full">
                            <h6>02.</h6>
                            <div class="flex flex-col gap-5">
                                <h3>Bangunan Pabrik Siap Pakai (BPSP)</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-3">
                                    <a class="w-full btn3" href="#">
                                        <span class="gradient-text">Lihat Layanan</span>
                                        <span class="gradient-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                <g clip-path="url(#clip0_145_484)">
                                                    <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#1F77D3"/>
                                                        <stop offset="1" stop-color="#321B71"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_145_484">
                                                        <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                     <!--Item-->
                     <div class="group transition-all duration-[500ms]  relative flex flex-col bg-[var(--color-transparent)] rounded-2xl overflow-hidden w-1/3">
                        
                        <!--front-->
                        <div class="flex flex-col justify-between grow gap-15 px-6 pt-6">
                            <div class="flex flex-col gap-3">
                                <h6 class="!text-white">03.</h6>
                                <h3 class="!text-white">Kerjasama Komersial Kawasan Industri</h3>
                            </div>
                            <div>
                                <img class="rounded-2xl rounded-b-none h-[250px]  object-cover" src="{{ asset('images/exterior-view-modern-industrial-building.jpg') }}">
                            </div>
                            
                        </div>

                        <!--back-->
                        <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white rounded-2xl gap-15 px-6 pt-6 h-full">
                            <h6>03.</h6>
                            <div class="flex flex-col gap-5">
                                <h3>Kerjasama Komersial Kawasan Industri</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-3">
                                    <a class="w-full btn3" href="#">
                                        <span class="gradient-text">Lihat Layanan</span>
                                        <span class="gradient-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                <g clip-path="url(#clip0_145_484)">
                                                    <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#1F77D3"/>
                                                        <stop offset="1" stop-color="#321B71"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_145_484">
                                                        <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Layanan Home -->

        <!--Start Keunggulan-->
        <section id="keunggulan-home" class="bg-no-repeat bg-cover" style="background-image: url('{{ asset('images/back-keunggulan.jpg') }}')">
            <!--Overlay-->
            <div class="gradient-overlay-keunggulan pt-30 flex flex-col gap-10">

                <!--Title-->
                <div class="flex flex-col gap-5">
                    <h6 class="text-center !text-white">Keunggulan</h6>
                    <h2 class="text-center !text-white">Alasan Memilih KIW?</h2>
                </div>
                
                <!--Content-->
                <div class="flex flex-row">

                    <!--Item-->
                    <div class="keunggulan-item group transition-all duration-[500ms] relative flex flex-col overflow-hidden w-1/6 hover:w-1/3 !min-h-100 border-r border-[var(--color-bordertransparent)]">
                        <!--front-->
                        <div class="flex flex-col justify-end grow gap-15 px-6 py-6 pt-60">
                            <h6 class="!text-white">01.</h6>
                            <h5 class="!text-white">Pelayanan Satu Atap</h5>
                        </div>
                        <!--back-->
                        <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white gap-15 px-6 pt-6 h-full">
                            <h6>01.</h6>
                            <div class="flex flex-col gap-5">
                                <h5>Pelayanan Satu Atap</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-3">
                                    <a class="w-full btn3" href="#">
                                        <span class="gradient-text">Selengkapnya</span>
                                        <span class="gradient-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                <g clip-path="url(#clip0_145_484)">
                                                    <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#1F77D3"/>
                                                        <stop offset="1" stop-color="#321B71"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_145_484">
                                                        <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Item-->
                    <div class="keunggulan-item group transition-all duration-[500ms] relative flex flex-col overflow-hidden w-1/6 hover:w-1/3 !min-h-100 border-r border-[var(--color-bordertransparent)]">
                        <!--front-->
                        <div class="flex flex-col justify-end grow gap-15 px-6 py-6 pt-60">
                            <h6 class="!text-white">02.</h6>
                            <h5 class="!text-white">Infrastruktur & Fasilitas</h5>
                        </div>
                        <!--back-->
                        <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white gap-15 px-6 pt-6 h-full">
                            <h6>02.</h6>
                            <div class="flex flex-col gap-5">
                                <h5>Infrastruktur & Fasilitas</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-3">
                                    <a class="w-full btn3" href="#">
                                        <span class="gradient-text">Selengkapnya</span>
                                        <span class="gradient-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                <g clip-path="url(#clip0_145_484)">
                                                    <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#1F77D3"/>
                                                        <stop offset="1" stop-color="#321B71"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_145_484">
                                                        <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Item-->
                    <div class="keunggulan-item group transition-all duration-[500ms] relative flex flex-col overflow-hidden w-1/6 hover:w-1/3 !min-h-100 border-r border-[var(--color-bordertransparent)]">
                        <!--front-->
                        <div class="flex flex-col justify-between grow gap-15 px-6 py-6 pt-60">
                            <h6 class="!text-white">03.</h6>
                            <h5 class="!text-white">Lokasi Strategis</h5>
                        </div>
                        <!--back-->
                        <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white gap-15 px-6 pt-6 h-full">
                            <h6>03.</h6>
                            <div class="flex flex-col gap-5">
                                <h5>Lokasi Strategis</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-3">
                                    <a class="w-full btn3" href="#">
                                        <span class="gradient-text">Selengkapnya</span>
                                        <span class="gradient-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                <g clip-path="url(#clip0_145_484)">
                                                    <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#1F77D3"/>
                                                        <stop offset="1" stop-color="#321B71"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_145_484">
                                                        <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Item-->
                    <div class="keunggulan-item group transition-all duration-[500ms] relative flex flex-col overflow-hidden w-1/6 hover:w-1/3 !min-h-100 border-r border-[var(--color-bordertransparent)]">
                        <!--front-->
                        <div class="flex flex-col justify-end grow gap-15 px-6 py-6 pt-60">
                            <h6 class="!text-white">04.</h6>
                            <h5 class="!text-white">Berbasis Ekosistem</h5>
                        </div>
                        <!--back-->
                        <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white gap-15 px-6 pt-6 h-full">
                            <h6>04.</h6>
                            <div class="flex flex-col gap-5">
                                <h5>Berbasis Ekosistem</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-3">
                                    <a class="w-full btn3" href="#">
                                        <span class="gradient-text">Selengkapnya</span>
                                        <span class="gradient-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                <g clip-path="url(#clip0_145_484)">
                                                    <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#1F77D3"/>
                                                        <stop offset="1" stop-color="#321B71"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_145_484">
                                                        <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Item-->
                    <div class="keunggulan-item group transition-all duration-[500ms] relative flex flex-col overflow-hidden w-1/6 hover:w-1/3 !min-h-100 border-r border-[var(--color-bordertransparent)]">
                        <!--front-->
                        <div class="flex flex-col justify-end grow gap-15 px-6 py-6 pt-60">
                            <h6 class="!text-white">05.</h6>
                            <h5 class="!text-white">Upah Minimum Kompetitif</h5>
                        </div>
                        <!--back-->
                        <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white gap-15 px-6 pt-6 h-full">
                            <h6>05.</h6>
                            <div class="flex flex-col gap-5">
                                <h5>Upah Minimum Kompetitif</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-3">
                                    <a class="w-full btn3" href="#">
                                        <span class="gradient-text">Selengkapnya</span>
                                        <span class="gradient-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                <g clip-path="url(#clip0_145_484)">
                                                    <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#1F77D3"/>
                                                        <stop offset="1" stop-color="#321B71"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_145_484">
                                                        <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Item-->
                    <div class="keunggulan-item group transition-all duration-[500ms] relative flex flex-col overflow-hidden w-1/6 hover:w-1/3 !min-h-100">
                        <!--front-->
                        <div class="flex flex-col justify-end grow gap-15 px-6 py-6 pt-60">
                            <h6 class="!text-white">06.</h6>
                            <h5 class="!text-white">Sumber Daya Manusia</h5>
                        </div>
                        <!--back-->
                        <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white gap-15 px-6 pt-6 h-full">
                            <h6>06.</h6>
                            <div class="flex flex-col gap-5">
                                <h5>Sumber Daya Manusia</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-3">
                                    <a class="w-full btn3" href="#">
                                        <span class="gradient-text">Selengkapnya</span>
                                        <span class="gradient-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                <g clip-path="url(#clip0_145_484)">
                                                    <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#1F77D3"/>
                                                        <stop offset="1" stop-color="#321B71"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_145_484">
                                                        <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </section>
        <!--End Keunggulan-->

        <!--Start Fasilitas Home-->
        <section id="fasilitas-home" class="overflow-hidden">
            <div class="flex flex-row lg:px-0 lg:max-w-[1200px] mx-auto gap-10 lg:my-30 sm:px-6 px-4">
                <!--title-->
                <div class="flex flex-col justify-between gap-5 !w-[40%]">
                    <div class="flex flex-col justify-between gap-5" >
                        <h6 class="bullet-1">fasilitas lengkap</h6>
                        <h2>Lingkungan Industri yang Lengkap</h2>
                    </div>  
                    
                    <!--button-->
                    <a class="w-fit btn1 mt-5"data-aos="fade-down" href="#">semua fasilitas
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                </div>

                <!--carousel-->
                <div class="!w-[55%] relative fasilitas-home">
                    <div class="swiper swiper-1">
                        <div class="swiper-wrapper">
                            <!--Item-->
                            <div class="swiper-slide !flex flex-col justify-between bg-[var(--color-transit)] overflow-hidden rounded-2xl p-6 pb-0">
                                <div class="mb-10 flex flex-col gap-3">
                                    <h6>01.</h6>
                                    <h4>Masjid</h4>
                                </div>
                            
                                <img class="rounded-2xl rounded-b-none h-[180px] object-cover self-end w-full" src="{{ asset('images/morning-view-malacca-straits-mosque-masjid-selat-melaka-it-is-mosque-located-man-made-malacca-island-near-malacca-town-malaysia (1).jpg') }}">
                            </div>

                            <!--Item-->
                            <div class="swiper-slide !flex flex-col justify-between bg-[var(--color-transit)] overflow-hidden rounded-2xl p-6 pb-0">
                                <div class="mb-10 flex flex-col gap-3">
                                    <h6>02.</h6>
                                    <h4>Foodcourt</h4>
                                </div>
                                <img class="rounded-2xl rounded-b-none h-[180px] object-cover w-full" src="{{ asset('images/chafing-dish-heaters-display-banquet-table-with-ch-2025-03-31-18-10-54-utc.jpg') }}">
                            </div>

                            <!--Item-->
                            <div class="swiper-slide !flex flex-col justify-between bg-[var(--color-transit)] overflow-hidden rounded-2xl p-6 pb-0">
                                <div class="mb-10 flex flex-col gap-3">
                                    <h6>03.</h6>
                                    <h4>Pemadam Kebakaran</h4>
                                </div>
                                <img class="rounded-2xl rounded-b-none h-[180px] object-cover w-full" src="{{ asset('images/firefighter-training-with-protective-wear-spraying-high-pressure-water-fire.jpg') }}">
                            </div>

                            <!--Item-->
                            <div class="swiper-slide !flex flex-col justify-between bg-[var(--color-transit)] overflow-hidden rounded-2xl p-6 pb-0">
                                <div class="mb-10 flex flex-col gap-3">
                                    <h6>04.</h6>
                                    <h4>Ambulan</h4>
                                </div>
                                <img class="rounded-2xl rounded-b-none h-[180px] object-cover w-full" src="{{ asset('images/ambulan.jpg') }}">
                            </div>
                        </div>

                    </div>

                    
                    <!-- Custom Arrow Left -->
                    <div class="swiper-button-prev gradient-blue rounded-[100%] !h-[30px] !w-[30px] p-1 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" transform="rotate(180)">
                        <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <!-- Custom Arrow Right -->
                    <div class="swiper-button-next gradient-blue  rounded-[100%] !h-[30px] !w-[30px] p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                
                </div>

            </div>
        </section>

        <!--End Fasilitas Home-->
 

        <!--Start Video Home-->
        <section id="video-home" class="relative w-full aspect-[16/9] rounded-2xl overflow-hidden max-w-[1200px] mx-auto">

            <!-- Custom Thumbnail -->
            <div
              class="absolute inset-0 bg-cover bg-center cursor-pointer"
              style="background-image: url('{{ asset('images/back-video.jpg') }} ') ;"
              onclick="loadVideo(this)"
            >
              <!-- Custom Play Button -->
              <div class="flex items-center justify-center w-full h-full bg-black/10">
                <svg class="max-w-30 hover:max-w-40 transition duration-1000"  xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 124.9 124.9">
                    <defs>
                      <style>
                        .cls-1, .cls-2 {
                          fill: #fff;
                        }
                  
                        .cls-3 {
                          fill: none;
                        }
                  
                        .cls-2 {
                          opacity: .2;
                        }
                      </style>
                      <clipPath id="clippath">
                        <circle class="cls-3" cx="62.4" cy="62.4" r="62.4"/>
                      </clipPath>
                      <clipPath id="clippath-3">
                        <circle class="cls-3" cx="62.4" cy="62.4" r="48.8"/>
                      </clipPath>
                      <clipPath id="clippath-6">
                        <circle class="cls-3" cx="62.4" cy="62.4" r="35.6"/>
                      </clipPath>
                    </defs>
                    <!-- Generator: Adobe Illustrator 28.6.0, SVG Export Plug-In . SVG Version: 1.2.0 Build 709)  -->
                    <g>
                      <g id="Layer_1">
                        <g>
                          <circle class="cls-2" cx="62.4" cy="62.4" r="62.4"/>
                          <circle class="cls-2" cx="62.4" cy="62.4" r="48.8"/>
                          <circle class="cls-2" cx="62.4" cy="62.4" r="35.6"/>
                          <path class="cls-1" d="M81.2,61.6l-27.8-16.8c-.7-.4-1.5,0-1.5.9v33.6c0,.8.9,1.3,1.5.9l27.8-16.8c.6-.4.6-1.3,0-1.7Z"/>
                        </g>
                      </g>
                    </g>
                  </svg>
                    
              </div>
            </div>
          
            <!-- Hidden iframe initially -->
            <iframe
              class="w-full h-full hidden"
              data-src="https://www.youtube.com/embed/-jK-qj3ZNLI?autoplay=1&rel=0"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
       
        </section>
        <!--End Video Home-->


        <!--Start Artikel Berita-->
        <section class="max-w-[1200px] mx-auto flex flex-col my-30">
            <!--Title-->
            <div class="flex flex-row justify-between items-end">
                <div class="flex flex-col gap-5">
                    <h6 class="bullet-1">Artikel & Berita</h6>
                    <h2>Dapatkan Informasi Terbaru</h2>
                </div>
                <!--button-->
                <a class="w-fit btn1 mt-5"data-aos="fade-down" href="#">Berita Lainnya
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 5L19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
            </div>

            <!--Content-->
            <div class="flex flex-row justify-baseline gap-5">

                <!--Item-->
                <div class="keunggulan-item group transition-all duration-[500ms] relative flex flex-col overflow-hidden w-1/4　!min-h-100">
                    <!--front-->
                    <div class="flex flex-col justify-end grow gap-2 px-6 py-6 pt-60 bg-cover" style="background-image:url('{{ asset('images/langkah-nyata-kawasan-industri-wijayakusuma.jpeg') }}');">
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-row items-center gap-2">
                                <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                    <path class="icon-path" d="M1.33334 7.62679L6.89334 2.06012C7.18155 1.77121 7.5345 1.55518 7.92291 1.42996C8.31132 1.30475 8.72398 1.27395 9.12667 1.34012L13.92 2.13346C14.0236 2.15028 14.1192 2.19925 14.1934 2.27343C14.2675 2.34761 14.3165 2.44324 14.3333 2.54679L15.1267 7.34013C15.1928 7.74282 15.1621 8.15548 15.0368 8.54389C14.9116 8.93229 14.6956 9.28524 14.4067 9.57346L8.84001 15.1668C8.66529 15.3426 8.45754 15.482 8.22872 15.5772C7.99989 15.6724 7.75451 15.7214 7.50667 15.7214C7.25884 15.7214 7.01345 15.6724 6.78463 15.5772C6.55581 15.482 6.34806 15.3426 6.17334 15.1668L1.33334 10.2801C1.15595 10.1063 1.01503 9.89887 0.918825 9.66992C0.82262 9.44098 0.773067 9.19513 0.773067 8.94679C0.773067 8.69845 0.82262 8.45261 0.918825 8.22366C1.01503 7.99471 1.15595 7.78726 1.33334 7.61346V7.62679ZM2.00001 9.57346L6.89334 14.4335C7.05983 14.594 7.28208 14.6836 7.51334 14.6836C7.7446 14.6836 7.96685 14.594 8.13334 14.4335L13.7 8.86679C13.8756 8.68962 14.007 8.47353 14.0834 8.23607C14.1599 7.99862 14.1793 7.74648 14.14 7.50012L13.4 3.06012L8.96001 2.32679C8.71888 2.2924 8.47307 2.31422 8.24178 2.39055C8.01049 2.46688 7.79997 2.59564 7.62667 2.76679L2.00001 8.33346C1.91736 8.41418 1.85168 8.51062 1.80684 8.61709C1.762 8.72356 1.73891 8.83793 1.73891 8.95346C1.73891 9.06899 1.762 9.18335 1.80684 9.28983C1.85168 9.3963 1.91736 9.49273 2.00001 9.57346Z"/>
                                    <path class="icon-path" d="M11.6068 5.63358C11.1797 5.63358 10.8335 5.28735 10.8335 4.86025C10.8335 4.43315 11.1797 4.08691 11.6068 4.08691C12.0339 4.08691 12.3801 4.43315 12.3801 4.86025C12.3801 5.28735 12.0339 5.63358 11.6068 5.63358Z"/>
                                    <path class="icon-path" d="M5.79345 6.28002C5.8872 6.18638 6.01428 6.13379 6.14678 6.13379C6.27928 6.13379 6.40636 6.18638 6.50011 6.28002L10.1868 9.96668C10.2804 10.0604 10.333 10.1875 10.333 10.32C10.333 10.4525 10.2804 10.5796 10.1868 10.6733C10.0916 10.7648 9.96545 10.8171 9.83345 10.82C9.70117 10.8185 9.57459 10.7659 9.48011 10.6733L5.79345 6.98668C5.69981 6.89293 5.64722 6.76585 5.64722 6.63335C5.64722 6.50085 5.69981 6.37377 5.79345 6.28002ZM4.71345 8.06668L8.40011 11.7533C8.49375 11.8471 8.54634 11.9742 8.54634 12.1067C8.54634 12.2392 8.49375 12.3663 8.40011 12.46C8.35395 12.5068 8.29892 12.5438 8.23824 12.569C8.17757 12.5942 8.11247 12.607 8.04678 12.6067C7.98092 12.6082 7.91548 12.5959 7.85464 12.5706C7.79379 12.5454 7.73889 12.5077 7.69345 12.46L4.00011 8.77335C3.95099 8.72757 3.91159 8.67237 3.88426 8.61104C3.85693 8.54971 3.84224 8.4835 3.84105 8.41636C3.83987 8.34923 3.85222 8.28254 3.87737 8.22028C3.90251 8.15803 3.93994 8.10147 3.98742 8.05399C4.0349 8.00651 4.09146 7.96908 4.15372 7.94393C4.21597 7.91879 4.28266 7.90644 4.3498 7.90762C4.41693 7.90881 4.48314 7.9235 4.54447 7.95083C4.60581 7.97816 4.66101 8.01756 4.70678 8.06668H4.71345Z"/>
                                </svg>
                                <p>Informasi</p>
                            </div>

                            <div class="flex flex-row items-center gap-2">
                               <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.2978 2.59007H11.4024V2.05285C11.4024 1.91037 11.3458 1.77372 11.2451 1.67297C11.1443 1.57223 11.0077 1.51562 10.8652 1.51562C10.7227 1.51562 10.5861 1.57223 10.4853 1.67297C10.3846 1.77372 10.328 1.91037 10.328 2.05285V2.59007H5.67205V2.05285C5.67205 1.91037 5.61545 1.77372 5.5147 1.67297C5.41395 1.57223 5.27731 1.51562 5.13483 1.51562C4.99235 1.51562 4.8557 1.57223 4.75495 1.67297C4.6542 1.77372 4.5976 1.91037 4.5976 2.05285V2.59007H3.70223C3.33931 2.54801 2.97158 2.58855 2.62654 2.70867C2.2815 2.82878 1.96809 3.02537 1.70975 3.28371C1.45141 3.54205 1.25483 3.85546 1.13471 4.2005C1.01459 4.54554 0.974051 4.91327 1.01611 5.27619V12.7973C0.974051 13.1602 1.01459 13.528 1.13471 13.873C1.25483 14.218 1.45141 14.5315 1.70975 14.7898C1.96809 15.0481 2.2815 15.2447 2.62654 15.3648C2.97158 15.4849 3.33931 15.5255 3.70223 15.4834H12.2978C12.6607 15.5255 13.0285 15.4849 13.3735 15.3648C13.7185 15.2447 14.0319 15.0481 14.2903 14.7898C14.5486 14.5315 14.7452 14.218 14.8653 13.873C14.9854 13.528 15.026 13.1602 14.9839 12.7973V5.27619C15.026 4.91327 14.9854 4.54554 14.8653 4.2005C14.7452 3.85546 14.5486 3.54205 14.2903 3.28371C14.0319 3.02537 13.7185 2.82878 13.3735 2.70867C13.0285 2.58855 12.6607 2.54801 12.2978 2.59007ZM3.70223 3.66452H4.5976V4.20174C4.5976 4.34422 4.6542 4.48087 4.75495 4.58161C4.8557 4.68236 4.99235 4.73896 5.13483 4.73896C5.27731 4.73896 5.41395 4.68236 5.5147 4.58161C5.61545 4.48087 5.67205 4.34422 5.67205 4.20174V3.66452H10.328V4.20174C10.328 4.34422 10.3846 4.48087 10.4853 4.58161C10.5861 4.68236 10.7227 4.73896 10.8652 4.73896C11.0077 4.73896 11.1443 4.68236 11.2451 4.58161C11.3458 4.48087 11.4024 4.34422 11.4024 4.20174V3.66452H12.2978C13.4274 3.66452 13.9095 4.14659 13.9095 5.27619V5.81341H2.09056V5.27619C2.09056 4.14659 2.57263 3.66452 3.70223 3.66452ZM12.2978 14.409H3.70223C2.57263 14.409 2.09056 13.9269 2.09056 12.7973V6.88786H13.9095V12.7973C13.9095 13.9269 13.4274 14.409 12.2978 14.409ZM5.86545 9.21582C5.86544 9.35719 5.82361 9.49539 5.74521 9.61302C5.66682 9.73066 5.55537 9.82246 5.4249 9.87688C5.29443 9.9313 5.15077 9.9459 5.01202 9.91884C4.87327 9.89177 4.74563 9.82426 4.64518 9.7248C4.54472 9.62534 4.47594 9.49838 4.4475 9.35991C4.41906 9.22143 4.43223 9.07764 4.48534 8.94664C4.53846 8.81563 4.62916 8.70327 4.74601 8.62371C4.86285 8.54415 5.00063 8.50094 5.14199 8.49953H5.14915C5.33913 8.49953 5.52132 8.57499 5.65565 8.70932C5.78998 8.84366 5.86545 9.02585 5.86545 9.21582ZM8.73064 9.21582C8.73063 9.35719 8.6888 9.49539 8.6104 9.61302C8.53201 9.73066 8.42056 9.82246 8.29009 9.87688C8.15962 9.9313 8.01596 9.9459 7.87721 9.91884C7.73846 9.89177 7.61082 9.82426 7.51037 9.7248C7.40991 9.62534 7.34113 9.49838 7.31269 9.35991C7.28425 9.22143 7.29742 9.07764 7.35054 8.94664C7.40365 8.81563 7.49435 8.70327 7.6112 8.62371C7.72804 8.54415 7.86582 8.50094 8.00718 8.49953H8.01434C8.20432 8.49953 8.38651 8.57499 8.52084 8.70932C8.65517 8.84366 8.73064 9.02585 8.73064 9.21582ZM11.5958 9.21582C11.5958 9.35719 11.554 9.49539 11.4756 9.61302C11.3972 9.73066 11.2857 9.82246 11.1553 9.87688C11.0248 9.9313 10.8812 9.9459 10.7424 9.91884C10.6037 9.89177 10.476 9.82426 10.3756 9.7248C10.2751 9.62534 10.2063 9.49838 10.1779 9.35991C10.1494 9.22143 10.1626 9.07764 10.2157 8.94664C10.2688 8.81563 10.3595 8.70327 10.4764 8.62371C10.5932 8.54415 10.731 8.50094 10.8724 8.49953H10.8795C11.0695 8.49953 11.2517 8.57499 11.386 8.70932C11.5204 8.84366 11.5958 9.02585 11.5958 9.21582ZM5.86545 12.081C5.86544 12.2224 5.82361 12.3606 5.74521 12.4782C5.66682 12.5958 5.55537 12.6877 5.4249 12.7421C5.29443 12.7965 5.15077 12.8111 5.01202 12.784C4.87327 12.757 4.74563 12.6895 4.64518 12.59C4.54472 12.4905 4.47594 12.3636 4.4475 12.2251C4.41906 12.0866 4.43223 11.9428 4.48534 11.8118C4.53846 11.6808 4.62916 11.5685 4.74601 11.4889C4.86285 11.4093 5.00063 11.3661 5.14199 11.3647H5.14915C5.33913 11.3647 5.52132 11.4402 5.65565 11.5745C5.78998 11.7088 5.86545 11.891 5.86545 12.081ZM8.73064 12.081C8.73063 12.2224 8.6888 12.3606 8.6104 12.4782C8.53201 12.5958 8.42056 12.6877 8.29009 12.7421C8.15962 12.7965 8.01596 12.8111 7.87721 12.784C7.73846 12.757 7.61082 12.6895 7.51037 12.59C7.40991 12.4905 7.34113 12.3636 7.31269 12.2251C7.28425 12.0866 7.29742 11.9428 7.35054 11.8118C7.40365 11.6808 7.49435 11.5685 7.6112 11.4889C7.72804 11.4093 7.86582 11.3661 8.00718 11.3647H8.01434C8.20432 11.3647 8.38651 11.4402 8.52084 11.5745C8.65517 11.7088 8.73064 11.891 8.73064 12.081ZM11.5958 12.081C11.5958 12.2224 11.554 12.3606 11.4756 12.4782C11.3972 12.5958 11.2857 12.6877 11.1553 12.7421C11.0248 12.7965 10.8812 12.8111 10.7424 12.784C10.6037 12.757 10.476 12.6895 10.3756 12.59C10.2751 12.4905 10.2063 12.3636 10.1779 12.2251C10.1494 12.0866 10.1626 11.9428 10.2157 11.8118C10.2688 11.6808 10.3595 11.5685 10.4764 11.4889C10.5932 11.4093 10.731 11.3661 10.8724 11.3647H10.8795C11.0695 11.3647 11.2517 11.4402 11.386 11.5745C11.5204 11.7088 11.5958 11.891 11.5958 12.081Z" fill="white"/>
                                </svg>

                                <p>16/01/2025</p>
                            </div>

                        </div>
                        <h5 class="">Langkah Nyata Kawasan Industri Wijayakusuma...</h5>
                    </div>
                    <!--back-->
                    <div class="absolute group-hover:top-[0%] top-[100%] transition-all duration-[500ms] flex flex-col justify-between bg-white gap-15 px-6 pt-6 h-full">
                        <h6>01.</h6>
                        <div class="flex flex-col gap-5">
                            <h5>Pelayanan Satu Atap</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="mt-3">
                                <a class="w-full btn3" href="#">
                                    <span class="gradient-text">Selengkapnya</span>
                                    <span class="gradient-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                            <g clip-path="url(#clip0_145_484)">
                                                <path class="arrow-path" d="M21.2356 11.0682C21.8172 10.4774 21.8172 9.5179 21.2356 8.92709L13.7914 1.36468C13.2098 0.77387 12.2653 0.77387 11.6837 1.36468C11.1022 1.9555 11.1022 2.91498 11.6837 3.50579L16.5923 8.48752L2.31795 8.48752C1.49443 8.48752 0.829101 9.16341 0.829101 10C0.829101 10.8366 1.49443 11.5125 2.31795 11.5125L16.5876 11.5125L11.6884 16.4942C11.1068 17.085 11.1068 18.0445 11.6884 18.6353C12.27 19.2261 13.2145 19.2261 13.796 18.6353L21.2403 11.0729L21.2356 11.0682Z" fill="url(#paint0_linear_145_484)"/>
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_145_484" x1="6.4406" y1="0.921573" x2="7.12695" y2="19.4465" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#1F77D3"/>
                                                    <stop offset="1" stop-color="#321B71"/>
                                                </linearGradient>
                                                <clipPath id="clip0_145_484">
                                                    <rect width="20" height="22.5" fill="white" transform="translate(0 20) rotate(-90)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </section>
        <!--End Artikel Berita-->

    
  </div>
    

 @vite('resources/js/app.js')
<script>AOS.init();</script>

</body>
</html>