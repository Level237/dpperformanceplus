<section x-data="{
    activeTab: 0,
    scrollTo(index) {
        this.activeTab = index;
        const el = this.$refs['testimonial_' + index];
        if (el) {
            el.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }
    }
}" class="py-24 bg-[#f8fafc] relative overflow-hidden border-y border-gray-200">
    <!-- Subtle Background Element -->
    <div
        class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03] pointer-events-none">
    </div>

    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Headers & Score -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-16 gap-8">
            <div class="max-w-2xl">
                <span class="text-[#004791] font-bold uppercase tracking-[0.2em] text-sm flex items-center gap-4 mb-4">
                    <span class="w-8 h-[2px] bg-orange-600"></span>
                    CLIENTS SATISFAITS
                </span>
                <h2
                    class="font-teko text-5xl lg:text-[70px] font-bold uppercase text-[#001026] leading-none tracking-tight">
                    CE QUE DISENT <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#004791] to-[#4fa0ff]">NOS
                        CLIENTS</span>
                </h2>
            </div>

            <!-- Google Ratings Pill -->
            <div
                class="bg-white border border-gray-200 shadow-sm rounded-full px-5 py-3 lg:px-6 lg:py-4 flex items-center justify-center gap-3 hover:shadow-md transition-all hover:-translate-y-1">
                <!-- Google G Logo inside circle -->
                <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center relative shadow-sm">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="#4285F4"
                            d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                        <path fill="#34A853"
                            d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                        <path fill="#FBBC05"
                            d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                        <path fill="#EA4335"
                            d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                    </svg>
                </div>
                <div class="text-sm border-l border-gray-200 pl-3">
                    <span class="font-bold text-gray-900">Note Google : 4.8/5</span>
                    <span class="text-yellow-400 tracking-widest mx-1 text-lg">★★★★★</span>
                    <span class="text-gray-500 hidden sm:inline">— 38 avis vérifiés</span>
                </div>
            </div>
        </div>

        <!-- Reviews Grid / Mobile Slider -->
        <div class="flex lg:grid lg:grid-cols-3 gap-6 lg:gap-8 overflow-x-auto lg:overflow-x-visible pb-8 lg:pb-0 hide-scrollbar snap-x snap-mandatory"
            @scroll.debounce.100ms="
                const container = $el;
                const scrollLeft = container.scrollLeft;
                const width = container.offsetWidth;
                activeTab = Math.round(scrollLeft / width);
             ">

            <!-- Review 1 -->
            <div x-ref="testimonial_0"
                class="min-w-[85vw] md:min-w-[45vw] lg:min-w-0 bg-white p-8 lg:p-10 rounded-xl shadow-[0_5px_15px_rgba(0,0,0,0.03)] border border-gray-100 hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all duration-300 relative group snap-center">
                <!-- Large Quote Icon -->
                <div
                    class="absolute top-6 right-6 text-blue-50 opacity-50 group-hover:text-blue-100 transition-colors font-serif text-8xl leading-none">
                    "</div>

                <div class="text-yellow-400 text-lg mb-4 tracking-widest relative z-10">★★★★★</div>
                <p class="text-gray-600 text-[15px] leading-relaxed mb-8 relative z-10 italic">
                    "Mon Can-Am Outlander était en panne depuis un mois. Diagnostic rapide, réparation en 48h. Prix
                    juste et équipe très pro. Je recommande à tous les riders de la Rive-Nord !"
                </p>

                <div class="flex items-center gap-4 mt-auto relative z-10">
                    <div
                        class="w-12 h-12 rounded-full bg-[#004791] text-white flex items-center justify-center font-bold text-sm shadow-md">
                        ML
                    </div>
                    <div>
                        <h4 class="font-bold text-[#001D4A] leading-tight">Marc-Luc Tremblay</h4>
                        <span class="text-xs text-gray-500">Terrebonne — Can-Am Outlander</span>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div x-ref="testimonial_1"
                class="min-w-[85vw] md:min-w-[45vw] lg:min-w-0 bg-white p-8 lg:p-10 rounded-xl shadow-[0_5px_15px_rgba(0,0,0,0.03)] border border-gray-100 hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all duration-300 relative group snap-center">
                <!-- Large Quote Icon -->
                <div
                    class="absolute top-6 right-6 text-blue-50 opacity-50 group-hover:text-blue-100 transition-colors font-serif text-8xl leading-none">
                    "</div>

                <div class="text-yellow-400 text-lg mb-4 tracking-widest relative z-10">★★★★★</div>
                <p class="text-gray-600 text-[15px] leading-relaxed mb-8 relative z-10 italic">
                    "J'avais un RZR 900 très endommagé après un accident en sentier. DP Performance Plus me l'a racheté
                    à bon prix, sans tracas. Service rapide et honnête, c'est rare !"
                </p>

                <div class="flex items-center gap-4 mt-auto relative z-10">
                    <div
                        class="w-12 h-12 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold text-sm shadow-md">
                        SP
                    </div>
                    <div>
                        <h4 class="font-bold text-[#001D4A] leading-tight">Stéphanie Parenteau</h4>
                        <span class="text-xs text-gray-500">Mascouche — Polaris RZR 900</span>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div x-ref="testimonial_2"
                class="min-w-[85vw] md:min-w-[45vw] lg:min-w-0 bg-white p-8 lg:p-10 rounded-xl shadow-[0_5px_15px_rgba(0,0,0,0.03)] border border-gray-100 hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all duration-300 relative group snap-center">
                <!-- Large Quote Icon -->
                <div
                    class="absolute top-6 right-6 text-blue-50 opacity-50 group-hover:text-blue-100 transition-colors font-serif text-8xl leading-none">
                    "</div>

                <div class="text-yellow-400 text-lg mb-4 tracking-widest relative z-10">★★★★★</div>
                <p class="text-gray-600 text-[15px] leading-relaxed mb-8 relative z-10 italic">
                    "Confié ma BMW Série 3 à Mec-Euro pour un entretien complet. Les gars connaissent vraiment leur
                    affaire. Meilleur que certains concessionnaires et moins cher. Je reviens assurément."
                </p>

                <div class="flex items-center gap-4 mt-auto relative z-10">
                    <div
                        class="w-12 h-12 rounded-full bg-[#002f66] text-white flex items-center justify-center font-bold text-sm shadow-md">
                        JF
                    </div>
                    <div>
                        <h4 class="font-bold text-[#001D4A] leading-tight">Jean-François Beaulieu</h4>
                        <span class="text-xs text-gray-500">Repentigny — BMW Série 3</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Pagination Dots -->
        <div class="flex lg:hidden justify-center space-x-2 mt-4">
            <template x-for="i in 3">
                <button @click="scrollTo(i-1)" class="w-3 h-1.5 transition-all duration-300"
                    :class="activeTab === (i-1) ? 'bg-[#004791] w-6' : 'bg-gray-300'"></button>
            </template>
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