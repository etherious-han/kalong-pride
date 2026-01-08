<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Kalong Pride - Little Family With Big Memorys')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .font-tech {
            font-family: 'Orbitron', sans-serif;
        }

        body {
            background-color: #0a0a0a;
            color: #ffffff;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #3b82f6, #1e40af);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #60a5fa, #2563eb);
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Hero slideshow animations */
        .hero-slide {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Polaroid photo effect */
        .polaroid-img {
            transform: rotate(-2deg);
            transition: transform 0.3s ease;
            border: 8px solid #e5e7eb;
            background: #f9fafb;
        }

        .polaroid-img:hover {
            transform: rotate(0deg) scale(1.05);
        }

        /* Navbar backdrop blur effect */
        .navbar-blur {
            backdrop-filter: blur(10px);
            background: linear-gradient(to bottom, rgba(10, 10, 10, 0.95), rgba(10, 10, 10, 0.8));
            border-bottom: 1px solid rgba(59, 130, 246, 0.3);
        }

        /* Chrome/Silver metallic gradient with blue accent */
        .bg-chrome {
            background: linear-gradient(135deg, #1e3a8a 0%, #0a0a0a 25%, #1e40af 50%, #0a0a0a 75%, #1e3a8a 100%);
        }

        .bg-chrome-light {
            background: linear-gradient(135deg, #dbeafe 0%, #93c5fd 50%, #dbeafe 100%);
        }

        .text-chrome {
            background: linear-gradient(135deg, #dbeafe, #3b82f6, #dbeafe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .text-silver {
            color: #cbd5e1;
        }

        .text-blue-light {
            color: #93c5fd;
        }

        .text-blue-dark {
            color: #1e40af;
        }

        .border-silver {
            border-color: #94a3b8;
        }

        .border-blue {
            border-color: #3b82f6;
        }

        /* Metallic shine effect */
        .metallic-shine {
            position: relative;
            overflow: hidden;
        }

        .metallic-shine::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 30%,
                rgba(255, 255, 255, 0.1) 50%,
                transparent 70%
            );
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        /* Button chrome effect with blue */
        .btn-chrome {
            background: linear-gradient(135deg, #1e40af 0%, #0a0a0a 50%, #2563eb 100%);
            color: white;
            padding: 12px 32px;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #3b82f6;
            position: relative;
            overflow: hidden;
        }

        .btn-chrome:hover {
            background: linear-gradient(135deg, #2563eb 0%, #1e3a8a 50%, #3b82f6 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.4);
        }

        .btn-chrome::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-chrome:hover::after {
            width: 300px;
            height: 300px;
        }

        /* Animated underline for nav links */
        .nav-link {
            position: relative;
            padding-bottom: 4px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, #3b82f6, #60a5fa);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        /* Glow effect with blue */
        .glow-silver {
            text-shadow: 0 0 10px rgba(59, 130, 246, 0.5),
                         0 0 20px rgba(59, 130, 246, 0.3),
                         0 0 30px rgba(59, 130, 246, 0.2);
        }

        .glow-blue {
            text-shadow: 0 0 10px rgba(147, 197, 253, 0.6),
                         0 0 20px rgba(59, 130, 246, 0.4),
                         0 0 30px rgba(30, 64, 175, 0.3);
        }

        /* Card chrome effect with blue */
        .card-chrome {
            background: linear-gradient(135deg, #1a1a1a 0%, #0a0a0a 50%, #1a1a1a 100%);
            border: 1px solid rgba(59, 130, 246, 0.3);
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.2);
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Navbar Component -->
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer (optional) -->
    @include('components.footer')

    @stack('scripts')
</body>
</html>
