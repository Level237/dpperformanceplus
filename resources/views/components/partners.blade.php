<section class="py-24 bg-white overflow-hidden border-t border-gray-100">
    <div class="max-w-[1400px] mx-auto px-6 lg:px-12">

        <div class="flex flex-col md:flex-row items-center justify-between mb-16 gap-8">
            <div class="text-center md:text-left">
                <h2
                    class="font-teko text-5xl lg:text-[60px] font-bold uppercase text-[#001026] leading-none tracking-tight">
                    Nos <span class="text-[#004791]">Partenaires</span>
                </h2>
                <p class="text-gray-400 font-inter mt-2 max-w-xl">
                    Nous collaborons avec les plus grandes marques pour vous offrir l'excellence technique et la
                    performance pure.
                </p>
            </div>
            <div class="hidden md:block h-px flex-1 bg-gradient-to-r from-gray-200 to-transparent mx-12"></div>
        </div>

        <!-- Modern Logo Grid / Marquee style -->
        <div class="relative group">
            <div
                class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20 items-center justify-items-center">

                @foreach(range(1, 4) as $i)
                    <div
                        class="w-full flex justify-center items-center h-24 p-4 opacity-100 transition-all duration-700 transform hover:scale-110 cursor-default">
                        <img src="{{ asset('assets/img/partenaires/partenaires' . $i . '.avif') }}" alt="Partner {{ $i }}"
                            class="max-w-full max-h-full object-contain drop-shadow-sm">
                    </div>
                @endforeach

            </div>

            <!-- Bottom decorative line -->
            <div class="mt-20 h-0.5 w-full bg-gradient-to-r from-transparent via-gray-100 to-transparent"></div>
        </div>

    </div>
</section>