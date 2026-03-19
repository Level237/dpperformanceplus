<!-- Polaris Style Alpine.js Slider with Diverse Layouts -->
<div x-data="heroSlider()"
    class="relative w-full h-[600px] lg:h-[700px] bg-gradient-to-br from-[#003B73] via-[#004791] to-[#005BBE] overflow-hidden text-white font-inter">

    <!-- Background Watermark -->
    <div class="absolute inset-0 flex items-center justify-center opacity-5 pointer-events-none z-0">
        <span
            class="text-[20rem] font-teko font-bold uppercase leading-none text-white whitespace-nowrap select-none">PERFORMANCE</span>
    </div>

    <!-- SLIDE 1: Video VTT Background -->
    <div x-show="activeSlide === 0" x-transition:enter="transition ease-out duration-700"
        x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute inset-0 w-full h-full flex flex-col justify-center items-center px-4" style="display: none;">

        <!-- Video Background Element -->
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <!-- Placeholder video path (remplacez par votre vidéo VTT, ex: assets/video/vtt.mp4) -->
            <source src="https://cdn.pixabay.com/video/2020/05/12/38827-422037168_large.mp4" type="video/mp4">
        </video>
        <!-- Dark/Blue overlay to ensure text contrast -->
        <div class="absolute inset-0 bg-[#002f66]/60 mix-blend-multiply z-10"></div>

        <div class="relative z-20 text-center max-w-4xl">
            <h2 class="text-2xl lg:text-4xl font-bold tracking-widest uppercase mb-4 drop-shadow-md">L'ADRÉNALINE À
                L'ÉTAT PUR</h2>
            <h1
                class="font-teko text-[80px] lg:text-[150px] font-bold leading-[0.8] tracking-tight mb-8 drop-shadow-xl text-white">
                VÉLO TOUT-TERRAIN
            </h1>
            <a href="#"
                class="inline-flex items-center justify-center border-2 border-white px-8 py-4 text-sm lg:text-lg font-bold uppercase hover:bg-white hover:text-[#004791] transition-all bg-white/10 backdrop-blur-sm">
                DÉCOUVRIR NOS SERVICES
            </a>
        </div>
    </div>

    <!-- SLIDE 2: Split Layout (Text Left / Image Right) using moto1.png -->
    <div x-show="activeSlide === 1" x-transition:enter="transition ease-out duration-700"
        x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute inset-0 w-full h-full flex items-center justify-center px-4 sm:px-8 lg:px-24"
        style="display: none;">

        <div class="relative z-20 w-full max-w-7xl flex flex-col lg:flex-row items-center justify-between">

            <!-- Left: Text & CTA -->
            <div
                class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left z-30 pt-16 lg:pt-0">
                <h2 class="text-xl lg:text-3xl font-bold tracking-widest uppercase mb-2 text-blue-200">PRÉPARATION &
                    ENTRETIEN</h2>
                <h1 class="font-teko text-[70px] lg:text-[120px] font-bold leading-[0.85] tracking-tight mb-6">
                    PERFORMANCE SUR MESURE
                </h1>
                <p class="text-lg lg:text-xl text-gray-100 mb-8 max-w-lg hidden md:block">
                    Confiez-nous votre machine. Notre expertise vous garantit une puissance optimisée et une fiabilité à
                    toute épreuve.
                </p>
                <a href="#"
                    class="inline-flex items-center justify-center border-2 border-white px-8 py-4 text-sm lg:text-lg font-bold uppercase hover:bg-white hover:text-[#004791] transition-all bg-transparent">
                    RÉSERVER UN ESSAI
                </a>
            </div>

            <!-- Right: Image (moto1.png) -->
            <div class="w-full lg:w-1/2 flex justify-center lg:justify-end items-center z-20 mt-12 lg:mt-0">
                <!-- The PNG is given a drop shadow to pop off the blue gradient -->
                <img src="{{ asset('assets/img/moto1.png') }}" alt="Moto Performance"
                    class="w-full max-w-lg lg:max-w-2xl h-auto object-contain drop-shadow-[0_25px_35px_rgba(0,0,0,0.5)] transform lg:translate-x-8" />
            </div>
        </div>
    </div>

    <!-- SLIDE 3: Polaris Classic Center Deal Template -->
    <div x-show="activeSlide === 2" x-transition:enter="transition ease-out duration-700"
        x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-300 absolute inset-0" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute inset-0 w-full h-full flex flex-col justify-center px-4 sm:px-6 lg:px-12"
        style="display: none;">

        <div class="relative z-20 container mx-auto flex flex-col items-center">

            <div class="text-center w-full mb-8 lg:mb-4 transform -translate-y-8 lg:-translate-y-16">
                <h2 class="text-xl lg:text-3xl font-bold tracking-widest uppercase mb-1 drop-shadow-md">RÉVISION
                    COMPLÈTE VTT À PARTIR DE</h2>
                <div class="flex items-end justify-center drop-shadow-xl">
                    <span class="font-teko text-[100px] lg:text-[180px] font-bold leading-[0.8] tracking-tight">
                        199€<span
                            class="text-3xl lg:text-5xl align-top ml-2 inline-block mt-4 lg:mt-8 font-inter">TTC*</span>
                    </span>
                </div>
            </div>

            <!-- Another generic or specific Image could go here, replacing Unsplash with a local asset later -->
            <div
                class="relative z-30 w-full max-w-2xl lg:max-w-4xl flex justify-center transform -translate-y-4 lg:-translate-y-12">
                <!-- Using an Unsplash placeholder so it doesn't 404, or use the second moto image if available -->
                <div class="w-full h-32 lg:h-48 invisible"></div> <!-- Space holder if you put an absolute image -->
                <img src="assets/img/velo.png" alt="VTT"
                    class="absolute top-0 w-full max-w-[500px] h-auto object-cover" />

                <!-- Badges -->
                <div class="absolute -left-4 top-1/2 -translate-y-1/2 hidden lg:flex flex-col space-y-4">
                    <div
                        class="bg-[#002B54] text-white p-3 border border-yellow-500 shadow-lg flex flex-col items-center justify-center transform -rotate-2">
                        <span class="text-xs font-bold uppercase">Spécialiste</span>
                        <span class="text-3xl font-teko font-bold text-yellow-500">N°1</span>
                        <span class="text-[10px] uppercase">Région</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="absolute bottom-16 right-4 lg:right-12 z-40">
            <a href="#"
                class="inline-flex items-center justify-center border-2 border-white px-6 py-3 text-sm lg:text-lg font-bold uppercase hover:bg-white hover:text-[#004791] transition-all bg-[#004791]/30 backdrop-blur-sm">
                VOIR LES CONDITIONS
            </a>
        </div>
    </div>

    <!-- Navigation / Pagination Bars -->
    <div class="absolute bottom-0 w-full z-40 px-1 py-1">
        <div class="flex w-full space-x-1">
            <template x-for="(slide, index) in Array.from({length: 3})" :key="index">
                <button @click="goToSlide(index)" class="h-2 lg:h-3 flex-grow transition-colors duration-300"
                    :class="activeSlide === index ? 'bg-white' : 'bg-[#002f66] hover:bg-[#003B73]'">
                </button>
            </template>
        </div>
    </div>
</div>

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
                }, 6000); // 6 seconds per slide
            },
            stopAutoPlay() {
                if (this.interval) clearInterval(this.interval);
            },
            nextSlide() {
                this.activeSlide = (this.activeSlide === this.totalSlides - 1) ? 0 : this.activeSlide + 1;
            },
            goToSlide(index) {
                this.activeSlide = index;
                this.stopAutoPlay();
                this.startAutoPlay(); // Reset timer on manual click
            }
        }));
    });
</script>