<!-- Advanced Alpine.js Slider (Honda Goldwing Style Update) -->
<div x-data="heroSlider()"
    class="relative w-full h-[650px] lg:h-[800px] bg-[#0b0c10] overflow-hidden text-white font-inter">

    <!-- 1. NAVIGATION ARROWS (Red Arrows from image) -->
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

        <!-- SLIDE 1: Honda Goldwing Style (3 Machines + Prices) -->
        <div x-show="activeSlide === 0" x-transition:enter="transition ease-out duration-700 delay-300"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300 absolute inset-0"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-105"
            class="absolute inset-0 w-full h-full flex flex-col justify-center items-center px-4"
            style="display: none;">

            <!-- Background: Industrial Garage Style -->
            <div
                class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center opacity-20 grayscale brightness-50">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#0b0c10] via-transparent to-[#0b0c10]/80"></div>

            <!-- Content Area -->
            <div class="relative z-20 w-full max-w-7xl flex flex-col items-center">

                <!-- Center Logo/Emblem Area -->
                <div class="flex flex-col items-center mb-12 transform -translate-y-8 animate-pulse-slow">
                    <!-- Winged Emblem (SVG) -->
                    <svg class="w-24 h-24 lg:w-32 lg:h-32 text-white mb-2" viewBox="0 0 100 100" fill="currentColor">
                        <path
                            d="M50 20C40 20 30 25 25 35C20 45 22 55 30 60C22 75 40 80 50 70C60 80 78 75 70 60C78 55 80 45 75 35C70 25 60 20 50 20ZM50 25C58 25 65 30 69 38C71 42 71 48 68 53C65 58 58 60 52 58C54 53 52 48 48 48C44 48 42 53 44 58C38 60 31 58 28 53C25 48 25 42 27 38C31 30 38 25 46 25H50Z" />
                        <path
                            d="M10 40C20 35 35 40 45 50L50 55L55 50C65 40 80 35 90 40C85 55 70 60 55 55L50 52L45 55C30 60 15 55 10 40Z" />
                    </svg>
                    <h1
                        class="font-teko text-6xl lg:text-[100px] font-bold tracking-[0.2em] leading-none uppercase italic">
                        DP PERFORMANCE</h1>
                </div>

                <!-- 3 Machines & Prices Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full items-end pb-20">

                    <!-- Machine Left (White/Small) -->
                    <div class="flex flex-col items-center group order-2 md:order-1">
                        <div class="relative mb-4">
                            <img src="{{ asset('assets/img/moto1.png') }}" alt="Moto 1"
                                class="h-48 lg:h-64 object-contain brightness-125 contrast-110 drop-shadow-2xl translate-x-4 lg:translate-x-8 group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute -bottom-4 left-0 right-0 h-4 bg-white/10 blur-xl rounded-full"></div>
                        </div>
                        <div class="text-center font-inter italic tracking-tighter">
                            <p class="text-gray-400 text-xs font-bold uppercase mb-1">CAN-AM OUTLANDER DC</p>
                            <p class="text-3xl lg:text-4xl font-extrabold text-white">12 499$</p>
                        </div>
                    </div>

                    <!-- Machine Center (Gray/Large) -->
                    <div class="flex flex-col items-center group order-1 md:order-2 z-10">
                        <div class="relative mb-6">
                            <img src="{{ asset('assets/img/moto1.png') }}" alt="Moto 2"
                                class="h-64 lg:h-80 object-contain grayscale brightness-90 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_20px_50px_rgba(255,255,255,0.1)]">
                            <div class="absolute -bottom-6 left-0 right-0 h-6 bg-[#004791]/20 blur-2xl rounded-full">
                            </div>
                        </div>
                        <!-- Offer Badge -->
                        <div
                            class="bg-[#004791] text-white px-8 py-3 rounded-xl shadow-2xl transform hover:scale-110 transition-transform cursor-default mb-4">
                            <p class="text-4xl lg:text-5xl font-extrabold leading-none tracking-tighter">+1000$</p>
                            <p class="text-xs font-bold uppercase tracking-widest text-blue-100">pour ton échange</p>
                            <p class="text-[8px] uppercase mt-1 opacity-60">Quantités limitées*</p>
                        </div>
                        <div class="text-center font-inter italic tracking-tighter">
                            <p class="text-gray-300 text-xs font-bold uppercase mb-1">POLARIS RZR TURBO S</p>
                            <p class="text-4xl lg:text-5xl font-extrabold text-white">24 999$</p>
                        </div>
                    </div>

                    <!-- Machine Right (Black/Medium) -->
                    <div class="flex flex-col items-center group order-3">
                        <div class="relative mb-4">
                            <img src="{{ asset('assets/img/moto1.png') }}" alt="Moto 3"
                                class="h-56 lg:h-72 object-contain brightness-50 contrast-125 -translate-x-4 lg:-translate-x-8 group-hover:scale-105 transition-transform duration-500 drop-shadow-2xl">
                            <div class="absolute -bottom-4 left-0 right-0 h-4 bg-white/5 blur-xl rounded-full"></div>
                        </div>
                        <div class="text-center font-inter italic tracking-tighter">
                            <p class="text-gray-400 text-xs font-bold uppercase mb-1">SKIDOO SUMMIT X</p>
                            <p class="text-3xl lg:text-4xl font-extrabold text-white">18 750$</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- SLIDE 2: Original Split Layout (Text Left / Image Right) -->
        <div x-show="activeSlide === 1" x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 translate-x-[-12px]"
            class="absolute inset-0 w-full h-full flex items-center justify-center px-4 sm:px-8 lg:px-24"
            style="display: none;">

            <div class="relative z-20 w-full max-w-7xl flex flex-col lg:flex-row items-center justify-between">
                <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left z-30">
                    <h2 class="text-xl lg:text-3xl font-bold tracking-widest uppercase mb-2 text-blue-500">PRÉPARATION &
                        ENTRETIEN</h2>
                    <h1 class="font-teko text-[70px] lg:text-[120px] font-bold leading-[0.85] tracking-tight mb-6">
                        PERFORMANCE SUR MESURE
                    </h1>
                    <p class="text-lg lg:text-xl text-gray-400 mb-8 max-w-lg hidden md:block">
                        Confiez-nous votre machine. Notre expertise vous garantit une puissance optimisée et une
                        fiabilité à toute épreuve.
                    </p>
                    <a href="#"
                        class="inline-flex items-center justify-center bg-[#004791] px-8 py-4 text-sm lg:text-lg font-bold uppercase hover:bg-[#00356b] transition-all shadow-[0_10px_30px_rgba(0,71,145,0.4)]">
                        RÉSERVER UN ESSAI
                    </a>
                </div>
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end items-center mt-12 lg:mt-0">
                    <img src="{{ asset('assets/img/moto1.png') }}" alt="Moto Performance"
                        class="w-full max-w-lg lg:max-w-2xl h-auto object-contain drop-shadow-[0_25px_35px_rgba(255,0,0,0.15)]" />
                </div>
            </div>
        </div>

        <!-- SLIDE 3: Video Background Layout -->
        <div x-show="activeSlide === 2" x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 w-full h-full flex flex-col justify-center items-center px-4"
            style="display: none;">

            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                <source src="https://videos.pexels.com/video-files/35307378/14958779_640_360_30fps.mp4"
                    type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-black/70 z-10"></div>

            <div class="relative z-20 text-center max-w-4xl">
                <h2 class="text-2xl lg:text-4xl font-bold tracking-widest uppercase mb-4 text-blue-500">L'ADRÉNALINE À
                    L'ÉTAT PUR</h2>
                <h1
                    class="font-teko text-[80px] lg:text-[150px] font-bold leading-[0.8] tracking-normal mb-8 text-white uppercase italic">
                    REPOUSSEZ LES LIMITES
                </h1>
                <a href="#"
                    class="inline-flex items-center justify-center border-2 border-[#004791] px-10 py-4 text-sm lg:text-lg font-bold uppercase hover:bg-[#004791] transition-all bg-[#004791]/10 backdrop-blur-md">
                    VOIR L'INVENTAIRE
                </a>
            </div>
        </div>

    </div>

    <!-- 3. DASH INDICATORS (Honda Style Pagination) -->
    <div class="absolute bottom-8 w-full z-40 px-12">
        <div class="flex max-w-xl mx-auto space-x-2">
            <template x-for="(slide, index) in Array.from({length: 3})" :key="index">
                <button @click="goToSlide(index)"
                    class="h-1.5 flex-grow transition-all duration-500 relative overflow-hidden rounded-full"
                    :class="activeSlide === index ? 'bg-[#004791]' : 'bg-gray-800 hover:bg-gray-700'">
                    <!-- Progress Fill during auto-play -->
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

    .animate-pulse-slow {
        animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
            transform: translateY(-32px) scale(1);
        }

        50% {
            opacity: 0.8;
            transform: translateY(-40px) scale(1.05);
        }
    }
</style>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('heroSlider', () => ({
            activeSlide: 0,
            interval: null,
            totalSlides: 3,

            init() {
                this.startAutoPlay();
            },
            startAutoPlay() {
                this.interval = setInterval(() => {
                    this.nextSlide();
                }, 6000);
            },
            stopAutoPlay() {
                if (this.interval) clearInterval(this.interval);
            },
            nextSlide() {
                this.activeSlide = (this.activeSlide === this.totalSlides - 1) ? 0 : this.activeSlide + 1;
            },
            prevSlide() {
                this.activeSlide = (this.activeSlide === 0) ? this.totalSlides - 1 : this.activeSlide - 1;
                this.stopAutoPlay();
                this.startAutoPlay();
            },
            goToSlide(index) {
                this.activeSlide = index;
                this.stopAutoPlay();
                this.startAutoPlay();
            }
        }));
    });
</script>