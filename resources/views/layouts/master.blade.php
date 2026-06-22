<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Falane Solutions - HR & Immigration Consultancy')</title>
    <meta name="description" content="@yield('meta_description', 'Falane Solutions provides expert HR, recruitment, and immigration consultancy services across Africa.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('meta_tags')
    @livewireStyles
    <style>
        [x-cloak] { display: none !important; }
        .floating-shape { animation: float 6s ease-in-out infinite; }
        .floating-shape:nth-child(2) { animation-delay: -2s; }
        .floating-shape:nth-child(3) { animation-delay: -4s; }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up { animation: fadeInUp 0.6s ease-out forwards; }
        .animate-fade-in-up-delay-1 { animation: fadeInUp 0.6s ease-out 0.2s forwards; opacity: 0; }
        .animate-fade-in-up-delay-2 { animation: fadeInUp 0.6s ease-out 0.4s forwards; opacity: 0; }
        @media (max-width: 768px) {
            .mobile-nav-open { overflow: hidden; }
        }
        .hero-clip-path {
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }
        .text-3d {
            text-shadow: 0 1px 2px rgba(0,0,0,0.1), 0 2px 4px rgba(0,0,0,0.05);
        }
        .perspective-section {
            perspective: 1200px;
        }
        .job-card {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .job-card:hover {
            transform: translateY(-4px) scale(1.01);
        }
        .modal-overlay {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
        }
        .modal-content {
            animation: modalIn 0.3s ease-out;
        }
        @keyframes modalIn {
            from { opacity: 0; transform: scale(0.95) translateY(20px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }
        .service-card {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15);
        }
        .footer-link {
            position: relative;
            display: inline-block;
            transition: color 0.3s;
        }
        .footer-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: #39BAE9;
            transition: width 0.3s;
        }
        .footer-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen font-body bg-white" x-data="{ mobileOpen: false, scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })" :class="{ 'mobile-nav-open': mobileOpen }">
    @include('partials.navbar')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.scroll-to-top')

    @livewireScripts
    @stack('scripts')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
