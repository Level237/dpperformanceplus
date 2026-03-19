<section x-data="{
    activeTab: 0,
    scrollTo(index) {
        this.activeTab = index;
        const el = this.$refs['card_' + index];
        if (el) {
            el.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }
    }
}" class="py-24 bg-[#f8fafc] relative overflow-hidden border-t border-gray-200">
    <!-- Decorative background element -->
    <div class="absolute right-0 top-0 w-1/3 h-full bg-gradient-to-l from-gray-100 to-transparent pointer-events-none">
    </div>

    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div
            class="mb-12 lg:mb-16 text-center lg:text-left flex flex-col lg:flex-row justify-between items-center lg:items-end">
            <div class="max-w-2xl">
                <h2
                    class="font-teko text-5xl lg:text-[80px] font-bold uppercase text-[#003B73] leading-none tracking-tight">
                    Nos Spécialités</h2>
                <div class="w-24 h-1.5 bg-orange-600 mt-6 mx-auto lg:mx-0"></div>
                <p class="mt-8 text-lg lg:text-xl text-gray-600 font-medium leading-relaxed">
                    Une expertise technique de pointe sur tous les terrains et toutes les mécaniques.
                </p>
            </div>

            <div class="mt-8 lg:mt-0 hidden md:block">
                <a href="#"
                    class="inline-flex items-center text-[#004791] font-bold uppercase tracking-widest hover:text-orange-600 transition-colors">
                    VOIR TOUS NOS SERVICES
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Bento Grid / Mobile Slider -->
        <!-- On mobile: scrollable container. On desktop: standard grid. -->
        <div class="relative">
            <div class="flex lg:grid lg:grid-cols-3 gap-6 lg:gap-8 overflow-x-auto lg:overflow-x-visible pb-8 lg:pb-0 hide-scrollbar snap-x snap-mandatory"
                @scroll.debounce.100ms="
                    const container = $el;
                    const scrollLeft = container.scrollLeft;
                    const width = container.offsetWidth;
                    activeTab = Math.round(scrollLeft / width);
                 ">

                <!-- 01: VTT & ATV -->
                <div x-ref="card_0"
                    class="min-w-[85vw] md:min-w-[45vw] lg:min-w-0 col-span-1 bg-[#001633] text-white p-8 lg:p-10 relative overflow-hidden group hover:-translate-y-2 transition-transform duration-300 shadow-xl border border-[#002B54] snap-center">
                    <span
                        class="absolute -right-6 -top-12 font-teko text-[14rem] font-bold text-white/[0.02] select-none group-hover:text-white/[0.03] transition-colors duration-500">01</span>

                    <div class="relative z-10 h-full flex flex-col">
                        <div
                            class="w-14 h-14 bg-[#003B73] rounded shadow-inner flex items-center justify-center mb-8 border border-white/10 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                </path>
                            </svg>
                        </div>

                        <h3
                            class="font-teko text-3xl lg:text-4xl font-bold uppercase mb-4 tracking-wide group-hover:text-orange-400 transition-colors">
                            Réparation VTT & ATV</h3>
                        <p class="text-blue-100/60 text-sm lg:text-base leading-relaxed mb-10 flex-grow">
                            Mécanique générale, révision moteur, carburation, freins, suspension. Toutes marques.
                        </p>

                        <a href="#"
                            class="inline-flex items-center text-xs lg:text-sm font-bold uppercase tracking-widest text-[#4fa0ff] hover:text-white mt-auto w-max">
                            DÉCOUVRIR <span class="ml-2 transition-transform group-hover:translate-x-2">→</span>
                        </a>
                    </div>
                </div>

                <!-- 02: RZR -->
                <div x-ref="card_1"
                    class="min-w-[85vw] md:min-w-[45vw] lg:min-w-0 col-span-1 bg-[#001D4A] text-white p-8 lg:p-10 relative overflow-hidden group hover:-translate-y-2 transition-transform duration-300 shadow-xl border border-[#003B73] snap-center">
                    <span
                        class="absolute -right-6 -top-12 font-teko text-[14rem] font-bold text-white/[0.02] select-none group-hover:text-white/[0.03] transition-colors duration-500">02</span>

                    <div class="relative z-10 h-full flex flex-col">
                        <div
                            class="w-14 h-14 bg-[#004791] rounded shadow-inner flex items-center justify-center mb-8 border border-white/10 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                        </div>

                        <h3
                            class="font-teko text-3xl lg:text-4xl font-bold uppercase mb-4 tracking-wide group-hover:text-orange-400 transition-colors">
                            CÔTE-À-CÔTE & RZR</h3>
                        <p class="text-blue-100/60 text-sm lg:text-base leading-relaxed mb-10 flex-grow">
                            Entretien complet, réparation et programme exclusif de rachat de véhicules défectueux.
                        </p>

                        <a href="#"
                            class="inline-flex items-center text-xs lg:text-sm font-bold uppercase tracking-widest text-[#4fa0ff] hover:text-white mt-auto w-max">
                            DÉCOUVRIR <span class="ml-2 transition-transform group-hover:translate-x-2">→</span>
                        </a>
                    </div>
                </div>

                <!-- 03: SCOOTER -->
                <div x-ref="card_2"
                    class="min-w-[85vw] md:min-w-[45vw] lg:min-w-0 col-span-1 bg-[#00265C] text-white p-8 lg:p-10 relative overflow-hidden group hover:-translate-y-2 transition-transform duration-300 shadow-xl border border-[#004791] snap-center">
                    <span
                        class="absolute -right-6 -top-12 font-teko text-[14rem] font-bold text-white/[0.02] select-none group-hover:text-white/[0.03] transition-colors duration-500">03</span>

                    <div class="relative z-10 h-full flex flex-col">
                        <div
                            class="w-14 h-14 bg-[#005BBE] rounded shadow-inner flex items-center justify-center mb-8 border border-white/10 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>

                        <h3
                            class="font-teko text-3xl lg:text-4xl font-bold uppercase mb-4 tracking-wide group-hover:text-orange-400 transition-colors">
                            SCOOTER & MOBILETTE</h3>
                        <p class="text-blue-100/60 text-sm lg:text-base leading-relaxed mb-10 flex-grow">
                            Entretien, réparation mécanique et électrique pour tous types de scooters.
                        </p>

                        <a href="#"
                            class="inline-flex items-center text-xs lg:text-sm font-bold uppercase tracking-widest text-[#4fa0ff] hover:text-white mt-auto w-max">
                            DÉCOUVRIR <span class="ml-2 transition-transform group-hover:translate-x-2">→</span>
                        </a>
                    </div>
                </div>

                <!-- MEU: MEC-EURO -->
                <div x-ref="card_3"
                    class="min-w-[85vw] md:min-w-[45vw] lg:min-w-0 lg:col-span-2 bg-neutral-900 text-white p-8 lg:p-12 relative overflow-hidden group hover:-translate-y-2 transition-transform duration-300 shadow-2xl border-t-4 border-orange-500 snap-center">
                    <span
                        class="absolute -right-4 -top-12 font-teko text-[18rem] font-bold text-white/[0.02] select-none group-hover:text-white/[0.03] transition-colors duration-500">MEU</span>
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-orange-600/10 to-transparent pointer-events-none">
                    </div>

                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div>
                            <div
                                class="w-14 h-14 bg-orange-600 rounded shadow-lg flex items-center justify-center mb-8 border border-white/10 group-hover:rotate-12 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>

                            <h3
                                class="font-teko text-3xl lg:text-5xl font-bold uppercase mb-4 tracking-wide text-white group-hover:text-orange-400 transition-colors">
                                MEC-EURO – MÉCANIQUE EUROPÉENNE
                            </h3>
                            <p class="text-gray-400 text-sm lg:text-base leading-relaxed mb-6 max-w-2xl">
                                Spécialiste véhicules européens. Diagnostic électronique propriétaire, fabrication
                                d'exhaust sur mesure.
                            </p>
                        </div>
                        <a href="#"
                            class="inline-flex items-center text-xs lg:text-sm font-bold uppercase tracking-widest text-orange-500 hover:text-white w-max mt-6">
                            VOIR MEC-EURO <span class="ml-2 transition-transform group-hover:translate-x-2">→</span>
                        </a>
                    </div>
                </div>

                <!-- 05: PIÈCES -->
                <div x-ref="card_4"
                    class="min-w-[85vw] md:min-w-[45vw] lg:min-w-0 col-span-1 bg-[#001D4A] text-white p-8 lg:p-10 relative overflow-hidden group hover:-translate-y-2 transition-transform duration-300 shadow-xl border border-[#003B73] snap-center">
                    <span
                        class="absolute -right-6 -top-12 font-teko text-[14rem] font-bold text-white/[0.02] select-none group-hover:text-white/[0.03] transition-colors duration-500">05</span>

                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div>
                            <div
                                class="w-14 h-14 bg-[#004791] rounded shadow-inner flex items-center justify-center mb-8 border border-white/10 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>

                            <h3
                                class="font-teko text-3xl lg:text-4xl font-bold uppercase mb-4 tracking-wide group-hover:text-orange-400 transition-colors">
                                VENTE DE PIÈCES</h3>
                            <p class="text-blue-100/60 text-sm lg:text-base leading-relaxed mb-10">
                                Pièces spécialisées VTT et côte-à-côté via notre réseau de partenaires officiels.
                            </p>
                        </div>

                        <a href="#"
                            class="inline-flex items-center text-xs lg:text-sm font-bold uppercase tracking-widest text-[#4fa0ff] hover:text-white w-max mt-auto">
                            COMMANDER <span class="ml-2 transition-transform group-hover:translate-x-2">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Pagination Dots -->
            <div class="flex lg:hidden justify-center space-x-2 mt-4">
                <template x-for="i in 5">
                    <button @click="scrollTo(i-1)" class="w-3 h-1.5 transition-all duration-300"
                        :class="activeTab === (i-1) ? 'bg-orange-600 w-6' : 'bg-gray-300'"></button>
                </template>
            </div>
        </div>
    </div>
</section>

<style>
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>