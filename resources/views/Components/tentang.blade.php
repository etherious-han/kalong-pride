<!-- Tentang Section -->
<section id="tentang" class="relative min-h-screen py-20 overflow-hidden bg-gradient-to-b from-black via-gray-900 to-black">
    
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
                    <span class="text-blue-400 text-sm font-bold tracking-widest uppercase">About Us</span>
                </div>
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-white mb-4">
                <span class="block">Tentang</span>
                <span class="text-blue-400 glow-blue text-6xl md:text-7xl">Kalong Pride</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent mx-auto"></div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Side - Image -->
            <div class="relative group animate-slide-left">
                <div class="relative overflow-hidden rounded-2xl border-2 border-blue-500/30 shadow-2xl transform transition-all duration-500 hover:scale-105 hover:border-blue-500/60">
                    <!-- Image -->
                    <img src="{{ asset('images/1 (2).jpg') }}" 
                         alt="Kalong Pride Team" 
                         class="w-full h-auto object-cover"
                         style="aspect-ratio: 4/3;">
                </div>
            </div>

            <!-- Right Side - Content -->
            <div class="space-y-6 animate-slide-right">
                <!-- Main Title -->
                <div>
                    <h3 class="text-4xl md:text-5xl font-black text-white mb-4 leading-tight">
                        Little Family With Big 
                        <span class="text-blue-400 glow-blue">Memorys</span>
                    </h3>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="h-1 w-16 bg-blue-500"></div>
                        <p class="text-blue-400 font-bold tracking-wider">Welcome To KALONG PRIDE</p>
                    </div>
                </div>

                <!-- Description -->
                <div class="space-y-4 text-gray-300 text-lg leading-relaxed">
                    <p>
                        Welcome Barudawg di kalong pride. Naha di aranan KalongPride? di aranan kalong pride gara" barudak na nu sering nyaring ejeng sering maling buah pas peting jadi di ngaranan na kalong.barudak ie teh ges jadi batur ti sing awit sd sampai ayena.
                    </p>
                    <p>
                        Kerja dengan dedikasi, tumbuh bersama dalam suatu organisasi dan tercipta kekeluargaan. <span class="text-blue-400 font-semibold">Inilah cerita kami Kalong Pride.</span>
                    </p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-3 gap-4 pt-6">
                    <div class="bg-gradient-to-br from-blue-900/40 to-blue-800/20 backdrop-blur-sm rounded-xl p-4 border border-blue-500/30 hover:border-blue-500/60 transition-all">
                        <p class="text-3xl font-black text-blue-400 mb-1">10</p>
                        <p class="text-gray-400 text-sm font-medium">Anggota</p>
                    </div>
                    <div class="bg-gradient-to-br from-blue-900/40 to-blue-800/20 backdrop-blur-sm rounded-xl p-4 border border-blue-500/30 hover:border-blue-500/60 transition-all">
                        <p class="text-3xl font-black text-blue-400 mb-1">1000+</p>
                        <p class="text-gray-400 text-sm font-medium">Kenangan</p>
                    </div>
                    <div class="bg-gradient-to-br from-blue-900/40 to-blue-800/20 backdrop-blur-sm rounded-xl p-4 border border-blue-500/30 hover:border-blue-500/60 transition-all">
                        <p class="text-3xl font-black text-blue-400 mb-1">∞</p>
                        <p class="text-gray-400 text-sm font-medium">Cerita</p>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="pt-4">
                    <a href="#galeri" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 text-white font-bold rounded-xl shadow-lg hover:shadow-blue-500/50 transform hover:scale-105 transition-all duration-300 border border-blue-400/30">
                        <span>Lihat Galeri</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
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

    @keyframes slide-left {
        from { opacity: 0; transform: translateX(-50px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes slide-right {
        from { opacity: 0; transform: translateX(50px); }
        to { opacity: 1; transform: translateX(0); }
    }

    .animate-fade-in { animation: fade-in 1s ease-out; }
    .animate-slide-left { animation: slide-left 1s ease-out; }
    .animate-slide-right { animation: slide-right 1s ease-out; }
</style>
@endpush