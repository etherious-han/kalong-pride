@extends('layouts.app')

@section('title', 'Galeri Lengkap - Kalong Pride')

@section('content')
<!-- Full Gallery Page -->
<section class="relative min-h-screen pt-28 pb-20 overflow-hidden bg-gradient-to-b from-black via-gray-900 to-black">
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-600 rounded-full filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-32 right-20 w-96 h-96 bg-blue-700 rounded-full filter blur-3xl opacity-10 animate-pulse" style="animation-delay: 1.5s;"></div>
        <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-blue-500 rounded-full filter blur-3xl opacity-5 animate-pulse" style="animation-delay: 3s;"></div>
        <div class="absolute top-1/3 right-1/4 w-80 h-80 bg-blue-800 rounded-full filter blur-3xl opacity-5 animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px); background-size: 50px 50px;"></div>

    <div class="container mx-auto px-6 relative z-10">
        
        <!-- Back Button -->
        <div class="mb-8 animate-fade-in">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-5 py-3 bg-blue-600/20 hover:bg-blue-600/30 border-2 border-blue-500/50 hover:border-blue-400 text-blue-400 hover:text-blue-300 rounded-xl transition-all duration-300 group backdrop-blur-sm font-semibold shadow-lg hover:shadow-blue-500/30">
                <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Kembali</span>
            </a>
        </div>

        <!-- Section Header -->
        <div class="text-center mb-12 animate-fade-in">
            <div class="inline-block mb-4">
                <div class="px-6 py-2 bg-gradient-to-r from-blue-900/30 to-blue-700/30 rounded-full border border-blue-500/50 backdrop-blur-sm">
                    <span class="text-blue-400 text-sm font-bold tracking-widest uppercase">Complete Collection</span>
                </div>
            </div>
            <h1 class="text-5xl md:text-6xl font-black text-white mb-4">
                <span class="block">Galeri Lengkap</span>
                <span class="text-blue-400 glow-blue text-6xl md:text-7xl">Kalong Pride</span>
            </h1>
            <div class="w-24 h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent mx-auto mb-6"></div>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Koleksi lengkap momen-momen berharga, pencapaian, dan kebersamaan tim kami
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-3 mb-12 animate-fade-in" style="animation-delay: 0.2s;">
            <button onclick="filterGallery('fotbar', this)" class="filter-btn active px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold rounded-xl hover:from-blue-500 hover:to-blue-600 transition-all duration-300 border border-blue-400/30 shadow-lg">
                Fotbar
            </button>
            <button onclick="filterGallery('random', this)" class="filter-btn px-6 py-3 bg-gray-800/50 text-gray-300 font-bold rounded-xl hover:bg-gray-700/50 transition-all duration-300 border border-gray-700">
                Random
            </button>
            <button onclick="filterGallery('musang', this)" class="filter-btn px-6 py-3 bg-gray-800/50 text-gray-300 font-bold rounded-xl hover:bg-gray-700/50 transition-all duration-300 border border-gray-700">
                Musang
            </button>
        </div>

        <!-- Gallery Grid -->
        <div id="galleryGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            @foreach($galleries as $index => $item)
                @php
                    $categoryColors = [
                        'fotbar' => 'blue',
                        'random' => 'purple',
                        'musang' => 'yellow'
                    ];
                    $categoryLabels = [
                        'fotbar' => 'Fotbar',
                        'random' => 'Random',
                        'musang' => 'Musang'
                    ];
                    $color = $categoryColors[$item['category']] ?? 'blue';
                    $label = $categoryLabels[$item['category']] ?? 'Lainnya';
                    $delay = 0.05 * ($index + 1);
                @endphp
                
                <div class="gallery-item animate-scale-in" data-category="{{ $item['category'] }}" style="animation-delay: {{ $delay }}s;">
                    <div class="relative group overflow-hidden rounded-2xl border-2 border-blue-500/30 shadow-2xl transform transition-all duration-500 hover:scale-105 hover:border-blue-500/60 cursor-pointer" 
                         onclick="openModal('{{ asset('images/' . $item['image']) }}', '{{ $item['title'] }}', '{{ $label }}', '{{ $item['date'] ?? 'Desember 2024' }}')">
                        <img src="{{ asset('images/' . $item['image']) }}" 
                             alt="{{ $item['title'] }}" 
                             class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110"
                             onerror="this.src='https://via.placeholder.com/400x300/1e3a8a/60a5fa?text={{ urlencode($item['title']) }}'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div class="mb-2">
                                    <span class="px-3 py-1 bg-{{ $color }}-600/80 backdrop-blur-sm rounded-full text-xs font-bold text-white">{{ $label }}</span>
                                </div>
                                <h3 class="text-white font-bold text-xl mb-2">{{ $item['title'] }}</h3>
                                <p class="text-blue-400 text-sm">{{ $item['date'] ?? 'Desember 2024' }}</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4 bg-blue-600/80 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <span class="text-white text-sm font-semibold">Lihat</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Back to Top Button -->
        <div class="text-center mt-12 animate-fade-in">
            <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 text-white font-bold rounded-xl shadow-lg hover:shadow-blue-500/50 transform hover:scale-105 transition-all duration-300 border border-blue-400/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                </svg>
                <span>Kembali ke Atas</span>
            </a>
        </div>
    </div>

    <!-- Modal Lightbox -->
    <div id="imageModal" class="fixed inset-0 z-50 hidden bg-black/95 backdrop-blur-sm" onclick="closeModal()">
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <!-- Close Button -->
            <button onclick="closeModal()" class="absolute top-6 right-6 text-white hover:text-blue-400 transition-colors z-10">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            
            <!-- Navigation Buttons -->
            <button onclick="navigateImage(-1); event.stopPropagation();" class="absolute left-6 top-1/2 -translate-y-1/2 text-white hover:text-blue-400 transition-colors bg-black/50 backdrop-blur-sm rounded-full p-4 hover:bg-blue-600/50">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button onclick="navigateImage(1); event.stopPropagation();" class="absolute right-6 top-1/2 -translate-y-1/2 text-white hover:text-blue-400 transition-colors bg-black/50 backdrop-blur-sm rounded-full p-4 hover:bg-blue-600/50">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <div class="max-w-6xl w-full animate-zoom-in" onclick="event.stopPropagation()">
                <img id="modalImage" src="" alt="" class="w-full h-auto rounded-2xl border-2 border-blue-500/50 shadow-2xl">
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <p id="modalCaption" class="text-white text-xl font-bold"></p>
                        <div class="flex items-center gap-3 mt-2">
                            <span id="modalCategory" class="text-blue-400 text-sm"></span>
                            <span class="text-gray-600">•</span>
                            <span id="modalDate" class="text-gray-400 text-sm"></span>
                        </div>
                    </div>
                    <span id="imageCounter" class="text-gray-400 text-sm"></span>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    /* Glow Effects */
    .glow-blue {
        text-shadow: 
            0 0 20px rgba(96, 165, 250, 0.6),
            0 0 40px rgba(96, 165, 250, 0.4),
            0 0 60px rgba(96, 165, 250, 0.2);
    }

    /* Animations */
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes scale-in {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }

    @keyframes zoom-in {
        from { opacity: 0; transform: scale(0.8); }
        to { opacity: 1; transform: scale(1); }
    }

    .animate-fade-in { animation: fade-in 1s ease-out; }
    .animate-scale-in { animation: scale-in 0.8s ease-out; }
    .animate-zoom-in { animation: zoom-in 0.3s ease-out; }

    /* Filter Button Active State */
    .filter-btn.active {
        background: linear-gradient(to right, rgb(37, 99, 235), rgb(29, 78, 216));
        box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
    }
</style>
@endpush

@push('scripts')
<script>
    let currentImages = [];
    let currentImageIndex = 0;

    // Open Modal Function
    function openModal(imageSrc, caption, category, date) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        const modalCategory = document.getElementById('modalCategory');
        const modalDate = document.getElementById('modalDate');
        
        // Get all visible images for navigation
        const visibleItems = document.querySelectorAll('.gallery-item:not([style*="display: none"])');
        currentImages = Array.from(visibleItems).map(item => {
            const img = item.querySelector('img');
            const caption = item.querySelector('h3').textContent;
            const category = item.querySelector('.px-3').textContent;
            const date = item.querySelector('.text-blue-400').textContent;
            return {
                src: img.src,
                caption: caption,
                category: category,
                date: date
            };
        });
        
        // Find current image index
        currentImageIndex = currentImages.findIndex(img => img.src === imageSrc);
        
        modalImage.src = imageSrc;
        modalCaption.textContent = caption;
        modalCategory.textContent = category;
        modalDate.textContent = date;
        updateImageCounter();
        
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    // Close Modal Function
    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Navigate Images
    function navigateImage(direction) {
        if (currentImages.length === 0) return;
        
        currentImageIndex += direction;
        
        // Loop around
        if (currentImageIndex < 0) currentImageIndex = currentImages.length - 1;
        if (currentImageIndex >= currentImages.length) currentImageIndex = 0;
        
        const currentImage = currentImages[currentImageIndex];
        document.getElementById('modalImage').src = currentImage.src;
        document.getElementById('modalCaption').textContent = currentImage.caption;
        document.getElementById('modalCategory').textContent = currentImage.category;
        document.getElementById('modalDate').textContent = currentImage.date;
        updateImageCounter();
    }

    // Update Image Counter
    function updateImageCounter() {
        const counter = document.getElementById('imageCounter');
        counter.textContent = `${currentImageIndex + 1} / ${currentImages.length}`;
    }

    // Filter Gallery
    function filterGallery(category, button) {
        const items = document.querySelectorAll('.gallery-item');
        const buttons = document.querySelectorAll('.filter-btn');
        
        // Remove active class from all buttons
        buttons.forEach(btn => {
            btn.classList.remove('active');
            // Reset to default style
            btn.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'border-blue-400/30', 'shadow-lg');
            btn.classList.add('bg-gray-800/50', 'text-gray-300', 'border-gray-700');
        });
        
        // Add active class to clicked button
        button.classList.add('active');
        button.classList.remove('bg-gray-800/50', 'text-gray-300', 'border-gray-700');
        button.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white', 'border-blue-400/30', 'shadow-lg');
        
        // Filter items
        items.forEach(item => {
            if (item.getAttribute('data-category') === category) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                }, 10);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });
    }

    // Keyboard Navigation
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('imageModal');
        if (!modal.classList.contains('hidden')) {
            if (e.key === 'Escape') {
                closeModal();
            } else if (e.key === 'ArrowLeft') {
                navigateImage(-1);
            } else if (e.key === 'ArrowRight') {
                navigateImage(1);
            }
        }
    });

    // Smooth transitions for filtered items
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        
        // Show only 'fotbar' category by default on page load
        if (item.getAttribute('data-category') !== 'fotbar') {
            item.style.display = 'none';
        }
    });
</script>
@endpush
@endsection