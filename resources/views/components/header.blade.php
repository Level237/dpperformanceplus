<!-- Polaris Header Style (Blue background, slash separated) -->
<header x-data="{ mobileMenuOpen: false }" class="bg-[#004791] text-white sticky top-0 z-50 shadow-md">
    <!-- Top thin bar (optional for localization, dealer, etc.) - we'll skip to match request simplicity or add a small one -->

    <div class="max-w-[1400px] mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between lg:justify-start h-20 lg:h-24">

            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center h-full mr-8">
                <a href="/" class="flex items-center  px-4 py-2 rounded">
                    <!-- Utilisation du logo fourni -->
                    <img class="h-8 lg:h-12 w-auto object-contain brightness-0 invert"
                        src="{{ asset('assets/img/logo.avif') }}" alt="DP Performance Plus">
                </a>
            </div>

            <!-- Desktop Navigation using Slants/Slashes -->
            <nav class="hidden lg:flex items-center flex-1 h-full font-teko text-xl tracking-wide pt-2">
                <a href="#" class="hover:text-blue-200 transition-colors uppercase h-full flex items-center">A PROPOS DE
                    NOUS</a>
                <span class="text-white/30 mx-3 italic text-2xl font-light">/</span>

                <a href="#" class="hover:text-blue-200 transition-colors uppercase h-full flex items-center">NOS
                    SERVICES</a>
                <span class="text-white/30 mx-3 italic text-2xl font-light">/</span>

                <a href="#" class="hover:text-blue-200 transition-colors uppercase h-full flex items-center">FAQ</a>
                <span class="text-white/30 mx-3 italic text-2xl font-light">/</span>

                <a href="#"
                    class="hover:text-blue-200 transition-colors uppercase h-full flex items-center font-bold">PRENDRE
                    UN RENDEZ VOUS</a>
            </nav>

            <!-- Search or Icons (Optional right side) -->
            <div class="hidden lg:flex items-center space-x-6 ml-auto">
                <button class="text-white hover:text-blue-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden items-center">
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                    class="inline-flex items-center justify-center p-2 rounded-md hover:bg-white/10 focus:outline-none transition-colors"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon closed -->
                    <svg x-show="!mobileMenuOpen" class="block h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon open -->
                    <svg x-show="mobileMenuOpen" style="display: none;" class="block h-8 w-8" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2" style="display: none;"
        class="lg:hidden bg-[#003B73] border-t border-white/10 absolute w-full left-0 font-teko text-2xl tracking-wide shadow-xl">
        <div class="px-4 py-4 space-y-2">
            <a href="#" class="block px-3 py-3 text-white hover:bg-white/10 uppercase transition-colors">A PROPOS DE
                NOUS</a>
            <a href="#" class="block px-3 py-3 text-white hover:bg-white/10 uppercase transition-colors">NOS
                SERVICES</a>
            <a href="#" class="block px-3 py-3 text-white hover:bg-white/10 uppercase transition-colors">FAQ</a>
            <a href="#"
                class="block px-3 py-3 text-white font-bold bg-[#004791] text-center border border-white/20 uppercase mt-4">
                PRENDRE UN RENDEZ VOUS
            </a>
        </div>
    </div>
</header>