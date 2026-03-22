<!-- Modern Multi-Tier Header (Inspired by Motos Illimitées style) -->
<header x-data="{ mobileMenuOpen: false }" class="bg-[#0b0c10] text-white lg:relative sticky top-0 z-50 shadow-2xl">

    <!-- 1. Top Bar (Information & Socials) - Hidden on mobile, shown on lg -->
    <div class="hidden lg:block bg-black/40 border-b border-white/5">
        <div
            class="max-w-[1400px] mx-auto px-6 h-12 flex items-center justify-between font-inter text-[11px] font-medium tracking-wider uppercase">

            <!-- Left Side Badges -->
            <div class="flex items-center space-x-3">
                <span class="bg-[#004791] px-3 py-1 rounded-full text-white font-bold">DP PERFORMANCE PLUS</span>
                <span class="bg-[#004791] px-3 py-1 rounded-full text-white font-bold">MEC-EURO</span>
            </div>

            <!-- Right Side Info -->
            <div class="flex items-center space-x-6">
                <!-- Phone -->
                <a href="tel:4383403707" class="flex items-center gap-2 hover:text-blue-400 transition-colors">
                    <svg class="w-4 h-4 text-[#004791]" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 005.516 5.516l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C10.077 18 2 9.923 2 2z">
                        </path>
                    </svg>
                    <span class="text-base font-bold text-gray-200 tracking-tighter">438 340-3707</span>
                </a>

                <!-- Address -->
                <div class="h-6 w-px bg-white/20"></div>
                <div class="flex items-center gap-2 text-gray-400">
                    <span class="leading-none text-[10px] py-1 text-center">Terrebonne (QC)<br>Sur rendez-vous</span>
                </div>

                <!-- Socials -->
                <div class="h-6 w-px bg-white/20"></div>
                <div class="flex items-center space-x-3 text-white">
                    <a href="#" class="hover:text-red-600 transition-colors"><svg class="w-4 h-4 fill-current"
                            viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg></a>
                    <a href="#" class="hover:text-red-600 transition-colors"><svg class="w-4 h-4 fill-current"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c.796 0 1.441.645 1.441 1.44s-.645 1.44-1.441 1.44c-.795 0-1.439-.645-1.439-1.44s.644-1.44 1.439-1.44z" />
                        </svg></a>
                    <a href="#" class="hover:text-red-600 transition-colors"><svg class="w-4 h-4 fill-current"
                            viewBox="0 0 24 24">
                            <path
                                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                        </svg></a>
                </div>

                <!-- Language -->
                <div class="h-6 w-px bg-white/20"></div>
                <a href="#" class="hover:text-blue-400 transition-colors">ENGLISH</a>
            </div>
        </div>
    </div>

    <!-- 2. Main Middle Bar (Logo & Search) -->
    <div class="max-w-[1400px] mx-auto px-6 h-20 lg:h-32 flex items-center justify-between">

        <!-- Logo -->
        <a href="/" class="flex-shrink-0 group">
            <img class="h-10 lg:h-20 w-auto object-contain brightness-0 invert group-hover:scale-105 transition-transform duration-500"
                src="{{ asset('assets/img/logo.avif') }}" alt="DP Performance Plus">
        </a>

        <!-- Search Bar (Desktop) -->
        <div class="hidden lg:block flex-1 max-w-sm ml-auto">
            <div class="relative group">
                <span
                    class="absolute inset-y-0 left-4 flex items-center text-gray-400 group-hover:text-blue-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </span>
                <input type="text" placeholder="Recherche inventaire..."
                    class="w-full bg-[#f4f4f4] text-black pl-12 pr-6 py-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#004791] font-inter text-sm shadow-inner transition-all">
            </div>
        </div>

        <!-- Mobile Toggle (Burger) -->
        <div class="lg:hidden flex items-center">
            <button type="button" @click="mobileMenuOpen = true" class="text-white p-2">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- 3. Bottom Navigation Bar (Red High-contrast) - Hidden on mobile -->
    <div class="hidden lg:block pb-6">
        <div class="max-w-[1400px] mx-auto px-4">
            <nav class="bg-[#004791] rounded-2xl flex items-center justify-center h-16 shadow-2xl relative">
                <div
                    class="flex items-center h-full w-full justify-around px-8 font-inter text-sm font-bold italic tracking-wide">
                    <a href="#"
                        class="px-6 h-full flex items-center hover:bg-black/10 transition-colors uppercase tracking-widest border-r border-white/10 last:border-0 border-dashed">À
                        PROPOS DE NOUS</a>
                    <a href="#"
                        class="px-6 h-full flex items-center hover:bg-black/10 transition-colors uppercase tracking-widest border-r border-white/10 last:border-0 border-dashed">NOS
                        SERVICES</a>
                    <a href="#"
                        class="px-6 h-full flex items-center hover:bg-black/10 transition-colors uppercase tracking-widest border-r border-white/10 last:border-0 border-dashed">FAQ</a>
                    <a href="#"
                        class="px-6 h-full flex items-center bg-black/20 hover:bg-black/40 text-white rounded-r-2xl transition-all uppercase tracking-widest font-extrabold group">
                        PRENDRE UN RENDEZ VOUS
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- 4. Mobile Menu Drawer (Full-screen Overlay) -->
    <template x-teleport="body">
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed inset-0 bg-[#0b0c10] z-[100] flex flex-col text-white font-inter" style="display: none;">

            <!-- Drawer Header -->
            <div class="flex items-center justify-between p-6">
                <img class="h-10 w-auto brightness-0 invert" src="{{ asset('assets/img/logo.avif') }}"
                    alt="DP Performance Plus">
                <button @click="mobileMenuOpen = false" class="text-[#004791] focus:outline-none">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Navigation Links -->
            <nav class="flex-1 px-8 py-4 space-y-2 overflow-y-auto">
                <a href="/"
                    class="flex items-center justify-between py-5 border-b border-white/10 text-xl font-bold uppercase tracking-widest hover:text-blue-400 group transition-colors">
                    ACCUEIL
                    <svg class="w-6 h-6 text-gray-800 group-hover:text-[#004791] transition-colors" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="#"
                    class="flex items-center justify-between py-5 border-b border-white/10 text-xl font-bold uppercase tracking-widest hover:text-blue-400 group transition-colors">
                    À PROPOS DE NOUS
                    <svg class="w-6 h-6 text-[#004791] group-hover:translate-x-2 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="#"
                    class="flex items-center justify-between py-5 border-b border-white/10 text-xl font-bold uppercase tracking-widest hover:text-blue-400 group transition-colors">
                    NOS SERVICES
                    <svg class="w-6 h-6 text-[#004791] group-hover:translate-x-2 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="#"
                    class="flex items-center justify-between py-5 border-b border-white/10 text-xl font-bold uppercase tracking-widest hover:text-blue-400 group transition-colors">
                    FAQ
                    <svg class="w-6 h-6 text-[#004791] group-hover:translate-x-2 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="#"
                    class="flex items-center justify-between py-5 border-b border-white/10 text-xl font-bold uppercase tracking-widest hover:text-blue-400 group transition-colors">
                    CONTACTEZ-NOUS
                    <svg class="w-6 h-6 text-[#004791] group-hover:translate-x-2 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </nav>

            <!-- Drawer Footer -->
            <div class="p-8 space-y-6 flex flex-col items-center border-t border-white/5 bg-black/20">
                <div class="flex flex-col w-full space-y-3">
                    <span
                        class="bg-white text-black text-center py-4 rounded-full font-bold uppercase text-[10px] tracking-widest shadow-lg">DP
                        PERFORMANCE PLUS MONTRÉAL</span>
                    <span
                        class="bg-white text-black text-center py-4 rounded-full font-bold uppercase text-[10px] tracking-widest shadow-lg">MEC-EURO
                        TERREBONNE</span>
                </div>

                <div class="flex items-center justify-center space-x-4 w-full">
                    <!-- Phone Button -->
                    <a href="tel:4383403707"
                        class="bg-[#004791] p-5 rounded-2xl flex items-center justify-center flex-1 hover:bg-[#00356b] transition-colors shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 005.516 5.516l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C10.077 18 2 9.923 2 2z">
                            </path>
                        </svg>
                    </a>
                    <!-- Map Button -->
                    <a href="#"
                        class="bg-[#004791] p-5 rounded-2xl flex items-center justify-center flex-1 hover:bg-[#00356b] transition-colors shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </a>
                    <!-- Language Button -->
                    <a href="#"
                        class="bg-[#004791] p-5 rounded-2xl flex items-center justify-center flex-1 font-extrabold text-white text-2xl hover:bg-[#00356b] transition-colors shadow-lg">
                        EN
                    </a>
                </div>
            </div>
        </div>
    </template>
</header>