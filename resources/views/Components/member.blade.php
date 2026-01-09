<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member - Kalong Pride</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        
        /* Glow Effects */
        .glow-blue {
            text-shadow: 
                0 0 20px rgba(96, 165, 250, 0.6),
                0 0 40px rgba(96, 165, 250, 0.4),
                0 0 60px rgba(96, 165, 250, 0.2);
        }
        
        .grayscale-filter {
            filter: grayscale(100%);
            transition: filter 0.5s ease;
        }
        
        .member-card:hover .grayscale-filter {
            filter: grayscale(0%);
        }
        
        .member-card:hover .member-name {
            opacity: 1 !important;
        }
        
        .member-card {
            transition: transform 0.3s ease;
        }
        
        .member-card:hover {
            transform: translateY(-5px);
        }
        
        .gradient-overlay {
            background: linear-gradient(to bottom, rgba(37, 99, 235, 0) 0%, rgba(37, 99, 235, 0.9) 100%);
        }
        
        .scroll-container {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        
        .scroll-container::-webkit-scrollbar {
            display: none;
        }
        
        .dot {
            transition: all 0.3s ease;
        }
        
        .dot.active {
            background-color: #3b82f6;
            transform: scale(1.2);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
            animation: fadeIn 0.3s ease;
        }

        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            border: 2px solid rgba(59, 130, 246, 0.3);
            border-radius: 24px;
            padding: 0;
            max-width: 500px;
            width: 90%;
            position: relative;
            animation: slideUp 0.4s ease;
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(50px); 
            }
            to { 
                opacity: 1;
                transform: translateY(0); 
            }
        }

        /* Animations */
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slide-up {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in { 
            animation: fade-in 1s ease-out; 
        }
        
        .animate-slide-up { 
            animation: slide-up 1s ease-out; 
        }

        .animate-slide-up-delay {
            animation: slide-up 1s ease-out;
            animation-delay: 0.2s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
    </style>
</head>
<body class="bg-black text-white">
    <!-- Member Section -->
    <section class="relative min-h-screen py-20 overflow-hidden bg-gradient-to-b from-black via-gray-900 to-black">
        
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
                        <span class="text-blue-400 text-sm font-bold tracking-widest uppercase">Our Team</span>
                    </div>
                </div>
                <h2 class="text-5xl md:text-6xl font-black text-white mb-4">
                    <span class="block">MEMBER</span>
                    <span class="text-blue-400 glow-blue text-6xl md:text-7xl">KALONG PRIDE</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-transparent via-blue-500 to-transparent mx-auto mb-4"></div>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Keluarga kecil dengan kenangan besar
                </p>
            </div>

            <!-- Member Cards Container -->
            <div class="relative animate-slide-up-delay">
                <div id="memberContainer" class="flex gap-6 overflow-x-auto scroll-container pb-8">
                   <!-- Member 1 -->
                   <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('DEHAN', '{{ asset('images/members/dehan1.jpeg') }}' , 'https://www.instagram.com/304.dh4nn?igsh=ZmM0cnFhbThka3Ns')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="{{ asset('images/members/dehan2.jpeg') }}" 
                                alt="Member" 
                                class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-3xl font-bold tracking-widest opacity-0 transition-opacity duration-500 text-center px-4">
                                    DEHAN
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- Member 2 -->
                    <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('TIAN', '{{ asset('images/members/tian.jpeg') }}', 'https://instagram.com/nadia')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="{{ asset('images/members/tian.jpeg') }}" 
                                 alt="Member" 
                                 class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-4xl font-bold tracking-widest opacity-0 transition-opacity duration-500">
                                    TIAN
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Member 3 -->
                    <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('DIKA', '{{ asset('images/members/dika.jpeg') }}', 'https://www.instagram.com/ddka.___/?utm_source=ig_web_button_share_sheet')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="{{ asset('images/members/dika.jpeg') }}" 
                                 alt="Member" 
                                 class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-4xl font-bold tracking-widest opacity-0 transition-opacity duration-500">
                                    DIKA
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Member 4 -->
                    <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('DENIS', '{{ asset('images/members/denis.jpeg') }}', 'https://www.instagram.com/dnisan03_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="{{ asset('images/members/denis.jpeg') }}"  
                                 alt="Member" 
                                 class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-4xl font-bold tracking-widest opacity-0 transition-opacity duration-500">
                                    DENIS
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Member 5 -->
                    <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('AGIP', '{{ asset('images/members/agip.jpeg') }}', 'https://www.instagram.com/mhmdagptrta/?utm_source=ig_web_button_share_sheets')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="{{ asset('images/members/agip.jpeg') }}"  
                                 alt="Member" 
                                 class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-4xl font-bold tracking-widest opacity-0 transition-opacity duration-500">
                                    AGIP
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Member 6 -->
                    <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('FAREL', 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=600&fit=crop', 'https://instagram.com/farel')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=600&fit=crop" 
                                 alt="Member" 
                                 class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-4xl font-bold tracking-widest opacity-0 transition-opacity duration-500">
                                    FAREL
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Member 7 -->
                    <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('GINA', 'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=400&h=600&fit=crop', 'https://instagram.com/gina')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=400&h=600&fit=crop" 
                                 alt="Member" 
                                 class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-4xl font-bold tracking-widest opacity-0 transition-opacity duration-500">
                                    GINA
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Member 8 -->
                    <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('HADI', 'https://images.unsplash.com/photo-1504257432389-52343af06ae3?w=400&h=600&fit=crop', 'https://instagram.com/hadi')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?w=400&h=600&fit=crop" 
                                 alt="Member" 
                                 class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-4xl font-bold tracking-widest opacity-0 transition-opacity duration-500">
                                    HADI
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Member 9 -->
                    <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('IRA', 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&h=600&fit=crop', 'https://instagram.com/ira')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&h=600&fit=crop" 
                                 alt="Member" 
                                 class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-4xl font-bold tracking-widest opacity-0 transition-opacity duration-500">
                                    IRA
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Member 10 -->
                    <div class="member-card flex-none w-80 cursor-pointer" onclick="openModal('JOKO', 'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=400&h=600&fit=crop', 'https://instagram.com/joko')">
                        <div class="relative h-96 rounded-2xl overflow-hidden border-2 border-blue-500/30 shadow-2xl backdrop-blur-sm bg-gradient-to-br from-blue-900/40 to-blue-800/20 hover:border-blue-500/60 transition-all">
                            <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=400&h=600&fit=crop" 
                                 alt="Member" 
                                 class="w-full h-full object-cover grayscale-filter">
                            <div class="absolute inset-0 gradient-overlay flex items-center justify-center">
                                <div class="member-name text-4xl font-bold tracking-widest opacity-0 transition-opacity duration-500">
                                    JOKO
                                </div>
                            </div>
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                                <svg class="w-8 h-8 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dots Indicator -->
                <div class="flex justify-center gap-2 mt-8">
                    <div class="dot w-3 h-3 rounded-full bg-gray-600 active"></div>
                    <div class="dot w-3 h-3 rounded-full bg-gray-600"></div>
                    <div class="dot w-3 h-3 rounded-full bg-gray-600"></div>
                    <div class="dot w-3 h-3 rounded-full bg-gray-600"></div>
                    <div class="dot w-3 h-3 rounded-full bg-gray-600"></div>
                    <div class="dot w-3 h-3 rounded-full bg-gray-600"></div>
                    <div class="dot w-3 h-3 rounded-full bg-gray-600"></div>
                    <div class="dot w-3 h-3 rounded-full bg-gray-600"></div>
                    <div class="dot w-3 h-3 rounded-full bg-gray-600"></div>
                    <div class="dot w-3 h-3 rounded-full bg-gray-600"></div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center mt-16 animate-fade-in">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <div class="h-1 w-16 bg-blue-500"></div>
                    <p class="text-blue-400 font-bold tracking-wider">EXPLORE MORE</p>
                    <div class="h-1 w-16 bg-blue-500"></div>
                </div>
                <a href="#galeri" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 text-white font-bold rounded-xl shadow-lg hover:shadow-blue-500/50 transform hover:scale-105 transition-all duration-300 border border-blue-400/30">
                    <span>Lihat Galeri Kegiatan</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Modal Popup -->
    <div id="memberModal" class="modal" onclick="closeModalOutside(event)">
        <div class="modal-content" onclick="event.stopPropagation()">
            <!-- Close Button -->
            <button onclick="closeModal()" class="absolute top-4 right-4 z-50 w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all backdrop-blur-sm border border-white/20">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Modal Image -->
            <div class="relative">
                <img id="modalImage" src="" alt="Member" class="w-full h-80 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
            </div>

            <!-- Modal Content -->
            <div class="p-6 pt-4">
                <p class="text-gray-400 text-sm mb-2">Member <span class="text-blue-500 font-bold">KALONG PRIDE</span></p>
                <h3 id="modalName" class="text-4xl font-black text-white mb-6">Member Name</h3>
                
                <!-- Instagram Button -->
                <a id="instagramLink" href="https://www.instagram.com/304.dh4nn?igsh=ZmM0cnFhbThka3Ns" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-3 w-full py-4 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold rounded-xl shadow-lg hover:shadow-blue-500/50 transform hover:scale-105 transition-all duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    <span>Follow on Instagram</span>
                </a>
            </div>
        </div>
    </div>

    <script>
        // Modal Functions
        function openModal(name, imageUrl, igLink) {
            const modal = document.getElementById('memberModal');
            const modalName = document.getElementById('modalName');
            const modalImage = document.getElementById('modalImage');
            const instagramLink = document.getElementById('instagramLink');
            
            modalName.textContent = name;
            modalImage.src = imageUrl;
            instagramLink.href = igLink;
            
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('memberModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function closeModalOutside(event) {
            if (event.target.id === 'memberModal') {
                closeModal();
            }
        }

        // Close modal with ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });

        // Update dots based on scroll position
        const container = document.getElementById('memberContainer');
        const dots = document.querySelectorAll('.dot');

        container.addEventListener('scroll', () => {
            const scrollPosition = container.scrollLeft;
            const cardWidth = 320 + 24;
            const activeIndex = Math.round(scrollPosition / cardWidth);
            
            dots.forEach((dot, index) => {
                if (index === activeIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        });

        // Click dots to scroll
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                const cardWidth = 320 + 24;
                container.scrollTo({
                    left: cardWidth * index,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>