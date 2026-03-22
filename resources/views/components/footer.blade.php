<footer class="bg-[#001026] text-white pt-20 pb-10 relative overflow-hidden">
    <!-- Background Gradient (Subtle Glow) -->
    <div
        class="absolute bottom-0 right-0 w-96 h-96 bg-blue-600/5 rounded-full blur-[100px] translate-x-1/2 translate-y-1/2">
    </div>
    <div
        class="absolute top-0 left-0 w-64 h-64 bg-[#004791]/5 rounded-full blur-[80px] -translate-x-1/2 -translate-y-1/2">
    </div>

    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16 mb-20">

            <!-- 1. Presentation & Logo -->
            <div class="flex flex-col space-y-6">
                <a href="#" class="inline-block transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/img/logo.avif') }}" alt="DP Performance Plus"
                        class="h-16 lg:h-20 w-auto brightness-0 invert" />
                </a>
                <p class="text-blue-100/60 text-[15px] leading-relaxed font-light mt-4">
                    Expert en réparation de VTT, côte-à-côte (SxS), scooter et mécanique automobile européenne à
                    Terrebonne, Québec. Service professionnel sur rendez-vous pour une performance sans compromis.
                </p>
                <div class="flex items-center gap-4 pt-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#004791] transition-colors duration-300">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c.796 0 1.441.645 1.441 1.44s-.645 1.44-1.441 1.44c-.795 0-1.439-.645-1.439-1.44s.644-1.44 1.439-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- 2. Nos Services -->
            <div>
                <h4 class="font-teko text-2xl font-bold uppercase tracking-wider mb-8 flex items-center gap-3">
                    <span class="w-6 h-0.5 bg-[#004791]"></span>
                    Nos Services
                </h4>
                <ul class="space-y-4 font-light text-blue-100/60 text-[15px]">
                    <li><a href="#"
                            class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">Réparation VTT &
                            ATV</a></li>
                    <li><a href="#"
                            class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">Mécanique
                            Côte-à-côte</a></li>
                    <li><a href="#" class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">Service
                            Scooter</a></li>
                    <li><a href="#" class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">MEC-EURO
                            Automobile</a></li>
                    <li><a href="#" class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">Vente &
                            Achat Usagé</a></li>
                </ul>
            </div>

            <!-- 3. Navigation -->
            <div>
                <h4 class="font-teko text-2xl font-bold uppercase tracking-wider mb-8 flex items-center gap-3">
                    <span class="w-6 h-0.5 bg-orange-600"></span>
                    Navigation
                </h4>
                <ul class="space-y-4 font-light text-blue-100/60 text-[15px]">
                    <li><a href="#" class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">À propos
                            de nous</a></li>
                    <li><a href="#" class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">Nos
                            Spécialités</a></li>
                    <li><a href="#"
                            class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">Processus</a>
                    </li>
                    <li><a href="#" class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">FAQ</a>
                    </li>
                    <li><a href="#"
                            class="hover:text-blue-400 hover:translate-x-1 transition-all inline-block">Contactez-nous</a>
                    </li>
                </ul>
            </div>

            <!-- 4. Contact -->
            <div class="flex flex-col space-y-6">
                <h4 class="font-teko text-2xl font-bold uppercase tracking-wider mb-2 flex items-center gap-3">
                    <span class="w-6 h-0.5 bg-[#004791]"></span>
                    Contact Info
                </h4>
                <div class="space-y-5">
                    <a href="tel:4383403707" class="flex items-center gap-4 group">
                        <div
                            class="w-10 h-10 rounded-lg bg-[#004791]/10 flex items-center justify-center group-hover:bg-[#004791] transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-400 group-hover:text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <span class="text-white font-bold tracking-widest text-lg">438-340-3707</span>
                    </a>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div class="font-light text-blue-100/60 leading-tight">
                            <p>Terrebonne, QC</p>
                            <p
                                class="text-[#004791] font-medium uppercase text-xs mt-1 tracking-wider whitespace-nowrap">
                                Sur rendez-vous
                                uniquement</p>
                        </div>
                    </div>

                    <a href="mailto:info@dpperformanceplus.ca" class="flex items-center gap-4 group">
                        <div
                            class="w-10 h-10 rounded-lg bg-[#004791]/10 flex items-center justify-center group-hover:bg-[#004791] transition-colors duration-300">
                            <svg class="w-5 h-5 text-blue-400 group-hover:text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <span
                            class="text-blue-100/60 hover:text-white transition-colors text-sm">info@dpperformanceplus.ca</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Footer Bottom: Divider + Copyright -->
        <div
            class="pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
            <p class="text-gray-500 text-xs tracking-wider">
                &copy; {{ date('Y') }} <span class="text-gray-400 font-bold">DP PERFORMANCE PLUS INC.</span> TOUS DROITS
                RÉSERVÉS.
            </p>
            <div class="flex items-center gap-6 text-[11px] text-gray-500 uppercase tracking-widest">
                <a href="#" class="hover:text-white transition-colors">Politique de confidentialité</a>
                <a href="#" class="hover:text-white transition-colors">Conditions d'utilisation</a>
            </div>
        </div>

    </div>
</footer>