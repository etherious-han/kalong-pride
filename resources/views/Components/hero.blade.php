<!-- Hero Section with Scrolling Photo Background -->
    <section id="beranda" class="relative h-screen overflow-hidden">

        <!-- ===== SCROLLING PHOTO MOSAIC BACKGROUND ===== -->
        <div class="hero-mosaic-bg">
            <!-- Baris 1 - Gerak ke Kiri (Cepat) -->
            <div class="photo-row photo-row-1">
                <div class="photo-scroll">
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/1.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/2.png') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/3.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/4.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/5.jpg') }}')"></div>
                    <!-- Duplicate untuk seamless loop -->
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/1.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/2.png') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/3.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/4.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/5.jpg') }}')"></div>
                </div>
            </div>

            <!-- Baris 2 - Gerak ke Kiri (Sedang) -->
            <div class="photo-row photo-row-2">
                <div class="photo-scroll">
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/6.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/7.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/8.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/1.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/2.png') }}')"></div>
                    <!-- Duplicate untuk seamless loop -->
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/6.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/7.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/8.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/1.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/2.png') }}')"></div>
                </div>
            </div>

            <!-- Baris 3 - Gerak ke Kiri (Lambat) -->
            <div class="photo-row photo-row-3">
                <div class="photo-scroll">
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/3.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/4.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/5.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/6.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/7.jpg') }}')"></div>
                    <!-- Duplicate untuk seamless loop -->
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/3.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/4.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/5.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/6.jpg') }}')"></div>
                    <div class="photo-mosaic-item" style="background-image: url('{{ asset('images/hero-mosaic/7.jpg') }}')"></div>
                </div>
            </div>
        </div>
        <div class="hero-mosaic-overlay"></div>
        <!-- ============================================== -->

        <!-- Slideshow Container -->
        <div class="absolute inset-0 w-full h-full">
            @foreach($heroSlides as $index => $slide)
            <div class="hero-slide absolute inset-0 w-full h-full transition-opacity duration-1000 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}" 
                data-slide="{{ $index }}">
                <!-- Background Image with Overlay -->
                <div class="absolute inset-0">
                    <img src="{{ asset($slide->image_path) }}" 
                        alt="{{ $slide->title ?? 'Hero Image' }}" 
                        class="w-full h-full object-cover">
                    <!-- Dark Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
                    <!-- Blue Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/60 via-blue-800/40 to-transparent"></div>
                    <!-- Silver Chrome Accent -->
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-blue-950/80"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Content -->
        <div class="relative z-10 container mx-auto px-6 h-full flex items-center">
            <div class="grid md:grid-cols-2 gap-12 items-center w-full">
                <!-- Left Side - Text Content -->
                <div class="space-y-6">
                    <!-- Badge -->
                    <div class="inline-block">
                        <div class="px-4 py-2 bg-chrome rounded-full border border-blue-500 metallic-shine">
                            <span class="text-blue-light text-sm font-medium tracking-wide">WELCOME BARUDAWG</span>
                        </div>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="text-5xl md:text-7xl font-black leading-tight font-tech">
                        <span class="block text-white glow-blue">WILEUJEUNG ENJING DI</span>
                        <span class="block mt-2">
                            <span class="text-chrome glow-silver" style="font-size: 1.2em;">KALONG PRIDE</span>
                        </span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-silver text-lg md:text-xl max-w-xl leading-relaxed">
                        <span class="text-blue-light font-semibold">Little Family With Big Memorys</span><br>
                        Ie teh website nu isi na kalakuan random kalong pride 
                    </p>

                    <!-- CTA Button -->
                    <div class="pt-4 flex gap-4">
                        <a href="#tentang" class="btn-chrome relative z-10">
                            <span>Selengkapnya</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

               <!-- Right Side - Polaroid Photo -->
                <div class="hidden md:flex justify-center items-center">
                    <div class="polaroid-img shadow-2xl relative" style="max-width: 400px;">
                        <img src="{{ asset($heroSlides->first()->image_path ?? 'images/1 (1).png') }}" 
                            alt="Group Photo" 
                            class="w-full h-auto object-cover rounded"
                            style="aspect-ratio: 4/4;">
                        
                        <!-- Logo Pin - Simple Version -->
                        <div class="absolute -top-10 -right-10 z-20">
                            <img src="{{ asset('images/logo.png') }}" 
                                alt="Kalong Pride Logo" 
                                class="w-28 h-28 object-contain drop-shadow-2xl transform rotate-12 hover:rotate-0 hover:scale-110 transition-all duration-300">
                        </div>
                        
                        <div class="mt-4 pb-2 text-center bg-white">
                            <p class="text-gray-800 font-handwriting text-lg">Kalong Pride Since 2020</p>
                        </div>
                        
                        <!-- Chrome Frame Effect -->
                        <div class="absolute -bottom-2 -right-2 w-full h-full border-2 border-blue-500 rounded -z-10 opacity-50"></div>
                        <div class="absolute -bottom-4 -right-4 w-full h-full border border-silver rounded -z-20 opacity-30"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-20 right-10 w-64 h-64 bg-blue-500 rounded-full filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-blue-700 rounded-full filter blur-3xl opacity-10 animate-pulse" style="animation-delay: 1s;"></div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
            <div class="flex flex-col items-center gap-2 animate-bounce">
                <span class="text-blue-light text-sm font-medium">Scroll Down</span>
                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>

        <!-- Slide Indicators -->
        @if(count($heroSlides) > 1)
        <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2 z-10 flex gap-2">
            @foreach($heroSlides as $index => $slide)
            <button class="slide-indicator w-2 h-2 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-blue-500 w-8' : 'bg-white/50 hover:bg-white/80' }}" 
                    data-slide-index="{{ $index }}"></button>
            @endforeach
        </div>
        @endif
    </section>

    @push('scripts')
    <script>
        // Hero Slideshow functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            const indicators = document.querySelectorAll('.slide-indicator');
            const totalSlides = slides.length;
            
            if (totalSlides <= 1) return;

            let currentSlide = 0;
            const slideDuration = 5000;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.remove('opacity-0');
                        slide.classList.add('opacity-100');
                    } else {
                        slide.classList.remove('opacity-100');
                        slide.classList.add('opacity-0');
                    }
                });

                indicators.forEach((indicator, i) => {
                    if (i === index) {
                        indicator.classList.remove('bg-white/50', 'w-2');
                        indicator.classList.add('bg-blue-500', 'w-8');
                    } else {
                        indicator.classList.remove('bg-blue-500', 'w-8');
                        indicator.classList.add('bg-white/50', 'w-2');
                    }
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            }

            let slideInterval = setInterval(nextSlide, slideDuration);

            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    currentSlide = index;
                    showSlide(currentSlide);
                    clearInterval(slideInterval);
                    slideInterval = setInterval(nextSlide, slideDuration);
                });
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowRight') {
                    nextSlide();
                    clearInterval(slideInterval);
                    slideInterval = setInterval(nextSlide, slideDuration);
                } else if (e.key === 'ArrowLeft') {
                    prevSlide();
                    clearInterval(slideInterval);
                    slideInterval = setInterval(nextSlide, slideDuration);
                }
            });

            const heroSection = document.querySelector('#beranda');
            heroSection.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });
            heroSection.addEventListener('mouseleave', () => {
                slideInterval = setInterval(nextSlide, slideDuration);
            });
        });
    </script>
    @endpush

    @push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap');

        @keyframes bounce-slow {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-5px);
    }
}

.animate-bounce-slow {
    animation: bounce-slow 3s ease-in-out infinite;
}
        
        .font-handwriting {
            font-family: 'Caveat', cursive;
            font-size: 1.125rem;
        }

        .polaroid-img {
            box-shadow: 
                0 4px 6px rgba(234, 225, 225, 1),
                0 10px 20px rgba(0, 98, 255, 1),
                0 20px 40px rgba(30, 64, 175, 0.2);
        }

        .slide-indicator {
            cursor: pointer;
        }

        /* ===== SCROLLING PHOTO MOSAIC BACKGROUND ===== */
        .hero-mosaic-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .hero-mosaic-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 1;
        }

        /* Container untuk setiap baris foto */
      .photo-row {
    position: relative;
    width: 100%;
    height: 33.33%;          /* sedikit diperkecil */
    margin: 10px 0;      /* INI JARAK ATAS–BAWAH */
    overflow: hidden;
    display: flex;
    align-items: center;
}


        /* Wrapper untuk scrolling animation - GAP KONSISTEN */
        .photo-scroll {
            display: flex;
            gap: 30px;
            width: max-content;
            will-change: transform;
            align-items: center;
        }

        /* Baris 1 - Gerak ke KIRI (CEPAT - 40 detik) */
        .photo-row-1 .photo-scroll {
            animation: scrollLeft 40s linear infinite;
        }

        /* Baris 2 - Gerak ke KIRI (SEDANG - 60 detik) - BEDA KECEPATAN */
        .photo-row-2 .photo-scroll {
            animation: scrollLeft 60s linear infinite;
        }

        /* Baris 3 - Gerak ke KIRI (LAMBAT - 80 detik) - PALING LAMBAT */
        .photo-row-3 .photo-scroll {
            animation: scrollLeft 80s linear infinite;
        }

        /* Container item foto - SIMETRIS */
        .photo-mosaic-item {
    width: 380px;              /* lebih kecil dikit */
    height: 290px;             /* lebih kecil dikit */
    background-size: cover;
    background-position: center;
    border-radius: 8px;
    box-shadow: 
        0 12px 35px rgba(0, 0, 0, 0.5),
        0 5px 15px rgba(0, 0, 0, 0.4);
    flex-shrink: 0;
    transition: all 0.3s ease;
    filter: grayscale(100%) blur(3px); /* JADI ABU-ABU */
    opacity: 0.70;
}

        /* Hover effect - TANPA ROTASI */
        .photo-mosaic-item:hover {
            opacity: 0.90;
            transform: scale(1.05);
            box-shadow: 
                0 20px 50px rgba(0, 0, 0, 0.6),
                0 10px 20px rgba(0, 0, 0, 0.5);
            filter: blur(1px);
            z-index: 10;
        }

        /* Animasi scroll ke kiri */
        @keyframes scrollLeft {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Pause animation on hover untuk interactivity */
        .photo-row:hover .photo-scroll {
            animation-play-state: paused;
        }

        /* Responsive untuk mobile */
        @media (max-width: 768px) {
            .photo-mosaic-item {
                width: 240px;
                height: 180px;
                filter: blur(2px);
                opacity: 0.65;
            }

            .photo-scroll {
                gap: 25px;
            }

            .photo-mosaic-item:hover {
                filter: blur(1px);
            }

            /* Kecepatan berbeda di mobile */
            .photo-row-1 .photo-scroll {
                animation-duration: 30s;
            }

            .photo-row-2 .photo-scroll {
                animation-duration: 45s;
            }

            .photo-row-3 .photo-scroll {
                animation-duration: 60s;
            }photo-scroll {
                animation-duration: 25s;
            }

            .photo-row-2 .photo-scroll {
                animation-duration: 40s;
            }

            .photo-row-3 .photo-scroll {
                animation-duration: 55s;
            }
        }

        /* Tablet */
        @media (max-width: 1024px) and (min-width: 769px) {
            .photo-mosaic-item {
                width: 320px;
                height: 240px;
                filter: blur(2.5px);
                opacity: 0.68;
            }

            .photo-mosaic-item:hover {
                filter: blur(1px);
            }
        }
    </style>
    @endpush