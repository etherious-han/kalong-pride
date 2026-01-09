<!-- Galeri Section -->
<section id="galeri" class="relative min-h-screen py-20 overflow-hidden bg-gradient-to-b from-black via-gray-900 to-black">
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-600 rounded-full filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-32 right-20 w-96 h-96 bg-blue-700 rounded-full filter blur-3xl opacity-10 animate-pulse" style="animation-delay: 1.5s;"></div>
        <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-blue-500 rounded-full filter blur-3xl opacity-5 animate-pulse" style="animation-delay: 3s;"></div>
    </div>

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px); background-size: 50px 50px;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-fade-in">
            <div class="inline-block mb-4">
                <div class="px-6 py-2 bg-gradient-to-r from-blue-900/30 to-blue-700/30 rounded-full border border-blue-500/50 backdrop-blur-sm">
                    <span class="text-blue-400 text-sm font-bold tracking-widest uppercase">Our Memories</span>
                </div>
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-white mb-4">
                <span class="block">Galeri</span>
                <span class="text-blue-400 glow-blue text-6xl md:text-7xl">Kalong Pride</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent mx-auto mb-6"></div>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Setiap foto adalah cerita, setiap momen adalah kenangan berharga yang kita ciptakan bersama
            </p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Gallery Item 1 -->
            <div class="animate-scale-in" style="animation-delay: 0.1s;">
                <div class="relative group overflow-hidden rounded-2xl border-2 border-blue-500/30 shadow-2xl transform transition-all duration-500 hover:scale-105 hover:border-blue-500/60 cursor-pointer" onclick="openModal('{{ asset('images/gallery-1.jpg') }}', 'Kegiatan Tim')">
                    <img src="{{ asset('images/gallery-1.jpg') }}" 
                         alt="Gallery 1" 
                         class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white font-bold text-xl mb-2">Kegiatan Tim</h3>
                            <p class="text-blue-400 text-sm">2024</p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-600/80 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <span class="text-white text-sm font-semibold">Lihat</span>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="animate-scale-in" style="animation-delay: 0.2s;">
                <div class="relative group overflow-hidden rounded-2xl border-2 border-blue-500/30 shadow-2xl transform transition-all duration-500 hover:scale-105 hover:border-blue-500/60 cursor-pointer" onclick="openModal('{{ asset('images/gallery-2.jpg') }}', 'Gathering Bulanan')">
                    <img src="{{ asset('images/gallery-2.jpg') }}" 
                         alt="Gallery 2" 
                         class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white font-bold text-xl mb-2">Gathering Bulanan</h3>
                            <p class="text-blue-400 text-sm">2024</p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-600/80 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <span class="text-white text-sm font-semibold">Lihat</span>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="animate-scale-in" style="animation-delay: 0.3s;">
                <div class="relative group overflow-hidden rounded-2xl border-2 border-blue-500/30 shadow-2xl transform transition-all duration-500 hover:scale-105 hover:border-blue-500/60 cursor-pointer" onclick="openModal('{{ asset('images/gallery-3.jpg') }}', 'Pencapaian Tim')">
                    <img src="{{ asset('images/gallery-3.jpg') }}" 
                         alt="Gallery 3" 
                         class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white font-bold text-xl mb-2">Pencapaian Tim</h3>
                            <p class="text-blue-400 text-sm">2024</p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-600/80 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <span class="text-white text-sm font-semibold">Lihat</span>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="animate-scale-in" style="animation-delay: 0.4s;">
                <div class="relative group overflow-hidden rounded-2xl border-2 border-blue-500/30 shadow-2xl transform transition-all duration-500 hover:scale-105 hover:border-blue-500/60 cursor-pointer" onclick="openModal('{{ asset('images/gallery-4.jpg') }}', 'Workshop Tim')">
                    <img src="{{ asset('images/gallery-4.jpg') }}" 
                         alt="Gallery 4" 
                         class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white font-bold text-xl mb-2">Workshop Tim</h3>
                            <p class="text-blue-400 text-sm">2024</p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-600/80 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <span class="text-white text-sm font-semibold">Lihat</span>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="animate-scale-in" style="animation-delay: 0.5s;">
                <div class="relative group overflow-hidden rounded-2xl border-2 border-blue-500/30 shadow-2xl transform transition-all duration-500 hover:scale-105 hover:border-blue-500/60 cursor-pointer" onclick="openModal('{{ asset('images/gallery-5.jpg') }}', 'Perayaan Bersama')">
                    <img src="{{ asset('images/gallery-5.jpg') }}" 
                         alt="Gallery 5" 
                         class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white font-bold text-xl mb-2">Perayaan Bersama</h3>
                            <p class="text-blue-400 text-sm">2024</p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-600/80 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <span class="text-white text-sm font-semibold">Lihat</span>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="animate-scale-in" style="animation-delay: 0.6s;">
                <div class="relative group overflow-hidden rounded-2xl border-2 border-blue-500/30 shadow-2xl transform transition-all duration-500 hover:scale-105 hover:border-blue-500/60 cursor-pointer" onclick="openModal('{{ asset('images/gallery-6.jpg') }}', 'Award Ceremony')">
                    <img src="{{ asset('images/gallery-6.jpg') }}" 
                         alt="Gallery 6" 
                         class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white font-bold text-xl mb-2">Award Ceremony</h3>
                            <p class="text-blue-400 text-sm">2024</p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-600/80 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <span class="text-white text-sm font-semibold">Lihat</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button - Sesuaikan dengan route baru -->
<div class="text-center animate-fade-in" style="animation-delay: 0.7s;">
    <a href="{{ route('galeri.lengkap') }}" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 text-white font-bold rounded-xl shadow-lg hover:shadow-blue-500/50 transform hover:scale-105 transition-all duration-300 border border-blue-400/30">
        <span>Muat Lebih Banyak</span>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </a>
</div>
    </div>

    <!-- Modal Lightbox -->
    <div id="imageModal" class="fixed inset-0 z-50 hidden bg-black/95 backdrop-blur-sm" onclick="closeModal()">
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <button onclick="closeModal()" class="absolute top-6 right-6 text-white hover:text-blue-400 transition-colors">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div class="max-w-6xl w-full animate-zoom-in" onclick="event.stopPropagation()">
                <img id="modalImage" src="" alt="" class="w-full h-auto rounded-2xl border-2 border-blue-500/50 shadow-2xl">
                <p id="modalCaption" class="text-white text-center text-xl font-bold mt-6"></p>
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
</style>
@endpush

@push('scripts')
<script>
    // Open Modal Function
    function openModal(imageSrc, caption) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        
        modalImage.src = imageSrc;
        modalCaption.textContent = caption;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    // Close Modal Function
    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Close modal with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });
</script>
@endpush