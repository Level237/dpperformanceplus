<section id="services" x-data="{ activeSlide: 0, totalSlides: 3 }" class="py-24 bg-white relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute inset-0 bg-gray-50 opacity-40 pointer-events-none"></div>

    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-12 relative z-10">

        <!-- Center Header -->
        <div class="text-center mb-16 lg:mb-24">
            <h2
                class="font-teko text-6xl lg:text-[90px] font-bold uppercase text-[#001026] leading-none tracking-tight">
                Nos <span class="text-[#004791]">Services</span> Experts
            </h2>
            <div class="mt-4 flex justify-center">
                <div class="w-24 h-1.5 bg-[#004791] rounded-full"></div>
            </div>
            <p class="mt-8 text-gray-500 text-lg lg:text-xl max-w-2xl mx-auto font-inter">
                De la vente spécialisée à la mécanique de haute précision, nous couvrons tous vos besoins en sports
                motorisés.
            </p>
        </div>

        <!-- Services Container (Grid on Desktop, Slider on Mobile) -->
        <div class="relative">
            <!-- Mobile Slider (Visible only on mobile) -->
            <div class="md:hidden overflow-hidden relative" @touchstart="startX = $event.touches[0].clientX"
                @touchend="if (startX - $event.changedTouches[0].clientX > 50) activeSlide = (activeSlide + 1) % totalSlides; if ($event.changedTouches[0].clientX - startX > 50) activeSlide = (activeSlide - 1 + totalSlides) % totalSlides;">

                <div class="flex transition-transform duration-500 ease-out"
                    :style="`transform: translateX(-${activeSlide * 100}%)`" x-data="{ startX: 0 }">

                    <!-- Service 1: Vente -->
                    <div class="w-full flex-shrink-0 px-2">
                        <div class="group relative bg-[#001026] rounded-[2.5rem] overflow-hidden shadow-2xl">
                            <div class="relative h-72 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1558981806-ec527fa84c39?q=80&w=800"
                                    alt="Vente" class="w-full h-full object-cover opacity-70">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#001026] via-transparent to-transparent">
                                </div>
                                <div class="absolute top-6 left-6 bg-[#004791] p-3 rounded-2xl border border-white/10">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-8 text-center">
                                <h3 class="font-teko text-4xl font-bold text-white uppercase mb-2">Service de <span
                                        class="text-[#004791]">vente</span></h3>
                                <p class="text-gray-400 text-sm mb-6">Vente de produit spécialisé <br> VTT et côte à
                                    côte.</p>
                                <a href="#"
                                    class="inline-flex items-center text-xs font-black uppercase text-[#004791]">En
                                    savoir plus <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2: Réparation -->
                    <div class="w-full flex-shrink-0 px-2">
                        <div class="group relative bg-[#001026] rounded-[2.5rem] overflow-hidden shadow-2xl">
                            <div class="relative h-72 overflow-hidden">
                                <img src="https://images.pexels.com/photos/4489749/pexels-photo-4489749.jpeg"
                                    alt="Réparation" class="w-full h-full object-cover opacity-70">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#001026] via-transparent to-transparent">
                                </div>
                                <div class="absolute top-6 left-6 bg-[#004791] p-3 rounded-2xl border border-white/10">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-8 text-center">
                                <h3 class="font-teko text-4xl font-bold text-white uppercase mb-2">Service de <span
                                        class="text-[#004791]">réparation</span></h3>
                                <p class="text-gray-400 text-sm mb-6">Service de mécanique général, <br> entretien, et
                                    plus.</p>
                                <a href="#"
                                    class="inline-flex items-center text-xs font-black uppercase text-[#004791]">Prendre
                                    rendez-vous <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3: Rachat -->
                    <div class="w-full flex-shrink-0 px-2">
                        <div class="group relative bg-[#001026] rounded-[2.5rem] overflow-hidden shadow-2xl">
                            <div class="relative h-72 overflow-hidden">
                                <img src="https://images.pexels.com/photos/4489765/pexels-photo-4489765.jpeg"
                                    alt="Rachat" class="w-full h-full object-cover opacity-70">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#001026] via-transparent to-transparent">
                                </div>
                                <div class="absolute top-6 left-6 bg-[#004791] p-3 rounded-2xl border border-white/10">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-8 text-center">
                                <h3 class="font-teko text-4xl font-bold text-white uppercase mb-2">Service de <span
                                        class="text-[#004791]">rachat RZR</span></h3>
                                <p class="text-gray-400 text-sm mb-6">VTT ou RZR défectueux ? <br> Contactez-nous pour
                                    une estimation.</p>
                                <a href="#"
                                    class="inline-flex items-center text-xs font-black uppercase text-[#004791]">Obtenir
                                    une offre <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <div class="flex items-center justify-between mt-8">
                    <button @click="activeSlide = (activeSlide === 0) ? totalSlides - 1 : activeSlide - 1"
                        class="p-2 text-[#004791]">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <div class="flex space-x-2">
                        <template x-for="i in totalSlides">
                            <button @click="activeSlide = i-1" class="h-1.5 rounded-full transition-all duration-300"
                                :class="activeSlide === i-1 ? 'w-8 bg-[#004791]' : 'w-4 bg-gray-200'"></button>
                        </template>
                    </div>
                    <button @click="activeSlide = (activeSlide === totalSlides - 1) ? 0 : activeSlide + 1"
                        class="p-2 text-[#004791]">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Desktop Grid (Hidden on mobile) -->
            <div class="hidden md:grid grid-cols-3 gap-8 lg:gap-12">
                <!-- Service 1: Vente -->
                <div
                    class="group relative bg-[#001026] rounded-[2.5rem] overflow-hidden shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="relative h-64 lg:h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1558981806-ec527fa84c39?q=80&w=800" alt="Vente"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001026] via-transparent to-transparent">
                        </div>
                        <div
                            class="absolute top-8 left-8 bg-[#004791] p-4 rounded-2xl shadow-lg border border-white/10 group-hover:rotate-6 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-10 pt-4 text-center">
                        <h3 class="font-teko text-4xl lg:text-5xl font-bold text-white uppercase mb-4 tracking-tight">
                            Service de <span class="text-[#004791]">vente</span></h3>
                        <p class="text-gray-400 font-medium text-lg leading-relaxed mb-8">Vente de produit spécialisé
                            <br> VTT et côte à côte.</p>
                        <a href="#"
                            class="inline-flex items-center text-sm font-black uppercase tracking-[0.2em] text-[#004791] hover:text-white transition-colors group/btn">En
                            savoir plus <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-2 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg></a>
                    </div>
                </div>

                <!-- Service 2: Réparation -->
                <div
                    class="group relative bg-[#001026] rounded-[2.5rem] overflow-hidden shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="relative h-64 lg:h-80 overflow-hidden">
                        <img src="https://images.pexels.com/photos/4489749/pexels-photo-4489749.jpeg" alt="Réparation"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001026] via-transparent to-transparent">
                        </div>
                        <div
                            class="absolute top-8 left-8 bg-[#004791] p-4 rounded-2xl shadow-lg border border-white/10 group-hover:rotate-6 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-10 pt-4 text-center">
                        <h3 class="font-teko text-4xl lg:text-5xl font-bold text-white uppercase mb-4 tracking-tight">
                            Service de <span class="text-[#004791]">réparation</span></h3>
                        <p class="text-gray-400 font-medium text-lg leading-relaxed mb-8">Service de mécanique général,
                            <br> entretien, et plus.</p>
                        <a href="#"
                            class="inline-flex items-center text-sm font-black uppercase tracking-[0.2em] text-[#004791] hover:text-white transition-colors group/btn">Prendre
                            rendez-vous <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-2 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg></a>
                    </div>
                </div>

                <!-- Service 3: Rachat -->
                <div
                    class="group relative bg-[#001026] rounded-[2.5rem] overflow-hidden shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="relative h-64 lg:h-80 overflow-hidden">
                        <img src="https://images.pexels.com/photos/4489765/pexels-photo-4489765.jpeg" alt="Rachat"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001026] via-transparent to-transparent">
                        </div>
                        <div
                            class="absolute top-8 left-8 bg-[#004791] p-4 rounded-2xl shadow-lg border border-white/10 group-hover:rotate-6 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-10 pt-4 text-center">
                        <h3 class="font-teko text-4xl lg:text-5xl font-bold text-white uppercase mb-4 tracking-tight">
                            Service de <span class="text-[#004791]">rachat RZR</span></h3>
                        <p class="text-gray-400 font-medium text-lg leading-relaxed mb-8">VTT ou RZR défectueux ? <br>
                            Contactez-nous pour une estimation.</p>
                        <a href="#"
                            class="inline-flex items-center text-sm font-black uppercase tracking-[0.2em] text-[#004791] hover:text-white transition-colors group/btn">Obtenir
                            une offre <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-2 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Global CTA -->
        <div class="mt-20 flex justify-center">
            <p class="text-gray-400 font-bold uppercase tracking-widest text-sm flex items-center gap-4 text-center">
                <span class="w-8 lg:w-12 h-px bg-gray-200"></span>
                Partenaire de confiance à Terrebonne
                <span class="w-8 lg:w-12 h-px bg-gray-200"></span>
            </p>
        </div>

    </div>
</section>