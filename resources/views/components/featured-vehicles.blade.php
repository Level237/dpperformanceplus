<section x-data="{ activeSlide: 0, totalSlides: 3 }" class="py-24 bg-white relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute inset-0 bg-gray-50 opacity-40 pointer-events-none"></div>

    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-12 relative z-10">

        <!-- Center Header -->
        <div class="text-center mb-16 lg:mb-24">
            <h2
                class="font-teko text-6xl lg:text-[90px] font-bold uppercase text-[#001026] leading-none tracking-tight">
                Véhicules <span class="text-[#004791]">vedettes</span>
            </h2>
            <div class="mt-4 flex justify-center">
                <div class="w-24 h-1.5 bg-[#004791] rounded-full"></div>
            </div>
        </div>

        <!-- Desktop Grid & Mobile Slider Container -->
        <div class="relative">

            <!-- Slider Wrapper -->
            <div class="overflow-hidden md:overflow-visible">
                <div class="flex md:grid md:grid-cols-2 lg:grid-cols-3 gap-6 transition-transform duration-500 ease-out"
                    :style="window.innerWidth < 768 ? 'transform: translateX(-' + (activeSlide * 100) + '%)' : ''">

                    @php
                        $vehicles = [
                            ['img' => 'moto1.png', 'cat' => 'CÔTE-À-CÔTE 2025', 'name' => 'POLARIS RZR TURBO S', 'sku' => '# BIMOTA3', 'price' => '84 999 $', 'photos' => 5],
                            ['img' => 'moto2.png', 'cat' => 'VTT PERFORMANCE 2025', 'name' => 'TESIH2 TERA', 'sku' => '# BIMOTA2', 'price' => '74 999 $', 'photos' => 5],
                            ['img' => 'moto3.png', 'cat' => 'MÉCANIQUE EUROPÉENNE 2027', 'name' => '1390 SUPER ADVENTURE', 'sku' => '# INSK', 'price' => '26 444 $', 'photos' => 2],
                        ];
                    @endphp

                    @foreach ($vehicles as $vehicle)
                        <div
                            class="min-w-full md:min-w-0 bg-white rounded-[2.5rem] overflow-hidden shadow-[0_15px_50px_rgba(0,0,0,0.03)] border border-gray-100 group flex flex-col hover:shadow-[0_40px_100px_rgba(0,0,0,0.1)] transition-all duration-700">

                            <!-- Modern Spotlight Image Container -->
                            <div class="relative p-6 pt-8">
                                <div
                                    class="relative aspect-[16/11] bg-slate-50 rounded-[2rem] flex items-center justify-center overflow-hidden group-hover:bg-blue-50/50 transition-colors duration-700">
                                    <!-- Dynamic Light Pulse -->
                                    <div
                                        class="absolute w-40 h-40 bg-[#004791]/5 rounded-full blur-[60px] group-hover:scale-150 transition-transform duration-1000">
                                    </div>

                                    <img src="{{ asset('assets/img/' . $vehicle['img']) }}" alt="{{ $vehicle['name'] }}"
                                        class="h-[85%] w-auto object-contain z-10 group-hover:scale-110 transition-transform duration-700 transform group-hover:-translate-y-4">

                                    <!-- Photo Count Badge (Sleek) -->
                                    <div
                                        class="absolute top-5 right-5 bg-white/90 backdrop-blur-md text-[#001026] px-3 py-1.5 rounded-xl flex items-center gap-1.5 text-[10px] font-black z-20 shadow-sm border border-white">
                                        <svg class="w-3.5 h-3.5 text-[#004791]" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        {{ $vehicle['photos'] }}
                                    </div>
                                </div>
                            </div>

                            <!-- Content Area (Compact) -->
                            <div class="px-8 pb-10 pt-2 flex-1 flex flex-col">
                                <div class="mb-6">
                                    <p
                                        class="text-[11px] text-[#004791] font-black uppercase tracking-[0.25em] mb-1.5 opacity-60">
                                        {{ $vehicle['cat'] }}</p>
                                    <h3
                                        class="font-teko text-4xl lg:text-[45px] font-bold text-[#001026] leading-[0.85] group-hover:text-[#004791] transition-colors">
                                        {{ $vehicle['name'] }}
                                    </h3>
                                    <div class="flex items-center gap-2 mt-2">
                                        <span class="w-4 h-0.5 bg-gray-200"></span>
                                        <p class="text-[10px] text-gray-400 font-bold tracking-widest uppercase">
                                            {{ $vehicle['sku'] }}</p>
                                    </div>
                                </div>

                                <!-- Compact Pricing & Action -->
                                <div class="mt-auto flex items-center justify-between gap-4 pt-6 border-t border-gray-50">
                                    <div class="flex flex-col">
                                        <span class="text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-0.5">À
                                            partir de</span>
                                        <p class="text-3xl font-black text-[#001026] tracking-tighter leading-none">
                                            {{ $vehicle['price'] }}</p>
                                    </div>
                                    <a href="#"
                                        class="w-14 h-14 bg-gray-900 group-hover:bg-[#004791] text-white flex items-center justify-center rounded-2xl transition-all duration-300 shadow-xl group-hover:shadow-[#004791]/30 transform active:scale-90">
                                        <svg class="w-6 h-6 transform group-hover:translate-x-1 transition-transform"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- MOBILE NAVIGATION CONTROLS (Only visible on md-) -->
            <div class="flex md:hidden items-center justify-between mt-12 px-2">
                <button @click="activeSlide = (activeSlide === 0) ? totalSlides - 1 : activeSlide - 1"
                    class="p-2 text-[#004791] active:scale-90 transition-transform">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <div class="flex space-x-3">
                    <template x-for="i in totalSlides">
                        <button @click="activeSlide = i-1" class="h-2 rounded-full transition-all duration-300"
                            :class="(activeSlide === i-1) ? 'w-12 bg-[#004791]' : 'w-12 bg-gray-300'"></button>
                    </template>
                </div>
                <button @click="activeSlide = (activeSlide === totalSlides - 1) ? 0 : activeSlide + 1"
                    class="p-2 text-[#004791] active:scale-90 transition-transform">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Centered Global CTA -->
        <div class="mt-20 lg:mt-32 flex flex-col items-center">
            <a href="#"
                class="inline-flex items-center justify-center gap-3 px-12 py-5 border-2 border-[#004791] text-[#004791] font-bold uppercase rounded-full hover:bg-[#004791] hover:text-white transition-all transform hover:scale-105 group text-sm lg:text-lg  shadow-lg hover:shadow-[#004791]/20">
                <span>Voir l'inventaire complet</span>
                <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
           
        </div>

    </div>
</section>