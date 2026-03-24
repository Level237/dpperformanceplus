<!-- Service-Oriented Hero Slider -->
<div x-data="heroSlider()"
    class="relative w-full h-[650px] lg:h-[800px] bg-[#0b0c10] overflow-hidden text-white font-inter">

    <!-- 1. NAVIGATION ARROWS -->
    <div class="absolute inset-y-0 left-4 lg:left-8 z-40 flex items-center">
        <button @click="prevSlide()" class="group p-2 focus:outline-none">
            <svg class="w-8 h-8 lg:w-12 lg:h-12 text-[#004791] group-hover:scale-125 transition-transform" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </div>
    <div class="absolute inset-y-0 right-4 lg:right-8 z-40 flex items-center">
        <button @click="nextSlide()" class="group p-2 focus:outline-none">
            <svg class="w-8 h-8 lg:w-12 lg:h-12 text-[#004791] group-hover:scale-125 transition-transform" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- 2. SLIDES CONTAINER -->
    <div class="relative w-full h-full">

        <!-- SLIDE 1: General Expertise -->
        <div x-show="activeSlide === 0" x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300 absolute inset-0"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-105"
            class="absolute inset-0 w-full h-full flex flex-col justify-center items-center px-4">

            <div
                class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1558981403-c5f9899a28bc?q=80&w=2000')] bg-cover bg-center opacity-30 grayscale brightness-75">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#0b0c10] via-transparent to-[#0b0c10]/80"></div>

            <div class="relative z-20 w-full max-w-7xl flex flex-col items-center text-center px-6">
                <h2 class="text-xl lg:text-3xl font-bold tracking-[0.3em] uppercase mb-4 text-[#004791]">DP PERFORMANCE
                    PLUS</h2>
                <h1
                    class="font-teko text-[80px] lg:text-[140px] font-bold leading-[0.85] tracking-tight mb-8 italic uppercase">
                    VOTRE EXPERT EN <br> <span class="text-[#004791]">SPORTS MOTORISÉS</span>
                </h1>
                <p class="text-lg lg:text-2xl text-gray-300 mb-12 max-w-3xl font-light">
                    Vente, réparation et rachat de VTT, Côte-à-côte et plus. <br class="hidden lg:block"> Une précision
                    mécanique pour une performance sans compromis.
                </p>
                <div class="flex flex-col sm:flex-row gap-6">
                    <a href="#services"
                        class="bg-[#004791] px-10 py-5 text-lg font-bold uppercase hover:bg-[#00356b] transition-all shadow-2xl">
                        NOS SERVICES
                    </a>
                    <a href="#"
                        class="border-2 border-white/20 px-10 py-5 text-lg font-bold uppercase hover:bg-white hover:text-black transition-all backdrop-blur-md">
                        NOUS CONTACTER
                    </a>
                </div>
            </div>
        </div>

        <!-- SLIDE 2: Focus Réparation -->
        <div x-show="activeSlide === 1" x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 translate-x-[-12px]"
            class="absolute inset-0 w-full h-full flex items-center justify-center px-4 sm:px-8 lg:px-24"
            style="display: none;">

            <div
                class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1486006396113-ad7302ff6761?q=80&w=2000')] bg-cover bg-center opacity-20">
            </div>

            <div class="relative z-20 w-full max-w-7xl flex flex-col lg:flex-row items-center justify-between">
                <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left z-30">
                    <h2 class="text-xl lg:text-2xl font-bold tracking-widest uppercase mb-4 text-[#004791]">MÉCANIQUE DE
                        HAUTE PRÉCISION</h2>
                    <h1
                        class="font-teko text-[70px] lg:text-[110px] font-bold leading-[0.9] tracking-tight mb-8 uppercase italic">
                        ENTRETIEN & <br> PRÉPARATION
                    </h1>
                    <p class="text-lg lg:text-xl text-gray-400 mb-10 max-w-lg">
                        Spécialistes en VTT, SxS et moteurs européens. Confiez-nous votre machine pour une optimisation
                        totale.
                    </p>
                    <a href="#"
                        class="inline-flex items-center justify-center bg-[#004791] px-10 py-5 text-lg font-bold uppercase hover:bg-[#00356b] transition-all">
                        PRENDRE RENDEZ-VOUS
                    </a>
                </div>
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end items-center mt-12 lg:mt-0">
                    <img src="{{ asset('assets/img/moto1.png') }}" alt="Expertise"
                        class="w-full max-w-lg lg:max-w-xl h-auto object-contain drop-shadow-[0_20px_50px_rgba(0,71,145,0.2)]" />
                </div>
            </div>
        </div>

        <!-- SLIDE 3: Video Perspective -->
        <div x-show="activeSlide === 2" x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300 absolute inset-0"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="absolute inset-0 w-full h-full flex flex-col justify-center items-center px-4 text-center"
            style="display: none;">

            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                <source src="https://videos.pexels.com/video-files/35307378/14958779_640_360_30fps.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-black/60 z-10"></div>

            <div class="relative z-20 max-w-5xl px-6">
                <h2 class="text-2xl lg:text-4xl font-bold tracking-[0.4em] uppercase mb-6 text-[#004791]">L'ADRÉNALINE À L'ÉTAT PUR</h2>
                <h1 class="font-teko text-[80px] lg:text-[150px] font-bold leading-[0.8] tracking-normal mb-8 text-white uppercase italic">
                    REPOUSSEZ LES <br> <span class="text-[#004791]">LIMITES</span>
                </h1>
                <p class="text-xl lg:text-2xl text-gray-300 mb-12 max-w-2xl mx-auto font-light">
                    Découvrez une nouvelle dimension de puissance. Notre passion au service de votre aventure.
                </p>
                <a href="#" class="inline-flex items-center justify-center border-2 border-[#004791] px-12 py-5 text-lg font-bold uppercase hover:bg-[#004791] transition-all bg-[#004791]/10 backdrop-blur-md">
                    NOTRE EXPERTISE
                </a>
            </div>
        </div>

    </div>

    <!-- 3. DASH INDICATORS -->
    <div class="absolute bottom-8 w-full z-40 px-12">
        <div class="flex max-w-xs mx-auto space-x-3">
            <template x-for="(slide, index) in Array.from({length: 3})" :key="index">
                <button @click="goToSlide(index)"
                    class="h-1.5 flex-grow transition-all duration-500 relative overflow-hidden rounded-full"
                    :class="activeSlide === index ? 'bg-[#004791]' : 'bg-gray-800 hover:bg-gray-700'">
                    <div x-show="activeSlide === index" class="absolute inset-y-0 left-0 bg-white/20 animate-progress"
                        style="animation-duration: 6s;"></div>
                </button>
            </template>
        </div>
    </div>
</div>

<style>
    @keyframes progress {
        from {
            width: 0%;
        }

        to {
            width: 100%;
        }
    }

    .animate-progress {
        animation-name: progress;
        animation-timing-function: linear;
    }
</style>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('heroSlider', () => ({
            activeSlide: 0,
            interval: null,
            totalSlides: 3,

            init() { this.startAutoPlay(); },
            startAutoPlay() {
                this.interval = setInterval(() => { this.nextSlide(); }, 6000);
            },
            stopAutoPlay() { if (this.interval) clearInterval(this.interval); },
            nextSlide() { this.activeSlide = (this.activeSlide === this.totalSlides - 1) ? 0 : this.activeSlide + 1; },
            prevSlide() {
                this.activeSlide = (this.activeSlide === 0) ? this.totalSlides - 1 : this.activeSlide - 1;
                this.stopAutoPlay(); this.startAutoPlay();
            },
            goToSlide(index) {
                this.activeSlide = index;
                this.stopAutoPlay(); this.startAutoPlay();
            }
        }));
    });
</script>