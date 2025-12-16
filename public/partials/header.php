<?php
$config = require_once __DIR__ . '/../../config/site.php';
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($config['meta']['description']) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($config['meta']['keywords']) ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($config['meta']['title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($config['meta']['description']) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($config['meta']['og_image']) ?>">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png">

    <title><?= htmlspecialchars($page_title ?? $config['meta']['title']) ?></title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #0EA5E9 0%, #F97316 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Sticky header shadow */
        .header-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-white sticky top-0 z-50 header-shadow" x-data="{ mobileMenuOpen: false }">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="index.php" class="flex items-center space-x-3">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-orange-500 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">W</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900"><?= htmlspecialchars($config['site_name']) ?></h1>
                        <p class="text-xs text-gray-500">Expert Auto</p>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="index.php"
                        class="<?= $current_page === 'index' ? 'text-cyan-600 font-semibold' : 'text-gray-700 hover:text-cyan-600' ?> transition-colors">
                        Accueil
                    </a>
                    <a href="services.php"
                        class="<?= $current_page === 'services' ? 'text-cyan-600 font-semibold' : 'text-gray-700 hover:text-cyan-600' ?> transition-colors">
                        Services
                    </a>
                    <a href="rendez-vous.php"
                        class="<?= $current_page === 'rendez-vous' ? 'text-cyan-600 font-semibold' : 'text-gray-700 hover:text-cyan-600' ?> transition-colors">
                        Rendez-vous
                    </a>
                    <a href="#contact" class="text-gray-700 hover:text-cyan-600 transition-colors">
                        Contact
                    </a>
                </nav>

                <!-- CTA Button Desktop -->
                <a href="rendez-vous.php"
                    class="hidden md:inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-500 to-orange-500 text-white font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all">
                    📅 Prendre RDV
                </a>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                class="md:hidden mt-4 pb-4 border-t border-gray-200 pt-4">
                <nav class="flex flex-col space-y-3">
                    <a href="index.php"
                        class="<?= $current_page === 'index' ? 'text-cyan-600 font-semibold' : 'text-gray-700' ?> py-2">
                        Accueil
                    </a>
                    <a href="services.php"
                        class="<?= $current_page === 'services' ? 'text-cyan-600 font-semibold' : 'text-gray-700' ?> py-2">
                        Services
                    </a>
                    <a href="rendez-vous.php"
                        class="<?= $current_page === 'rendez-vous' ? 'text-cyan-600 font-semibold' : 'text-gray-700' ?> py-2">
                        Rendez-vous
                    </a>
                    <a href="#contact" class="text-gray-700 py-2">
                        Contact
                    </a>
                    <a href="rendez-vous.php"
                        class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-cyan-500 to-orange-500 text-white font-semibold rounded-lg mt-2">
                        📅 Prendre RDV
                    </a>
                </nav>
            </div>
        </div>
    </header>