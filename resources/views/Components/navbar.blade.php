<nav class="fixed top-0 left-0 right-0 z-50 navbar-blur">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo with Chrome Effect -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                {{-- Nanti ganti dengan logo lu --}}
                <div class="relative">
    <div class="w-16     h-16 rounded-lg flex items-center justify-center">
        <img src="{{ asset('images/logo.png') }}" 
             alt="Kalong Pride Logo" 
             class="w-full h-full object-contain">
    </div>
</div>
                <div>
                    <span class="text-xl font-tech font-bold text-chrome glow-silver">Kalong Pride</span>
                    <p class="text-xs text-silver">Little Family</p>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}#beranda" class="nav-link text-white hover:text-silver transition font-medium {{ request()->is('/') ? 'active' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('home') }}#tentang" class="nav-link text-white hover:text-silver transition font-medium">
                    Tentang
                </a>
                <a href="{{ route('home') }}#galeri" class="nav-link text-white hover:text-silver transition font-medium">
                    Galeri
                </a>
                <a href="{{ route('home') }}#komentar" class="nav-link text-white hover:text-silver transition font-medium">
                    Komentar
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}#beranda" class="text-white hover:text-silver transition font-medium">
                    Beranda
                </a>
                <a href="{{ route('home') }}#tentang" class="text-white hover:text-silver transition font-medium">
                    Tentang
                </a>
                <a href="{{ route('home') }}#galeri" class="text-white hover:text-silver transition font-medium">
                    Galeri
                </a>
                <a href="{{ route('home') }}#komentar" class="text-white hover:text-silver transition font-medium">
                    Komentar
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu after click
                    if (mobileMenu) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Add active class on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });
    });
</script>
