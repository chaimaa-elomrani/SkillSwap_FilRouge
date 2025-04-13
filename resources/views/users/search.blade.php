<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Categories - The Complete Freelance Marketplace</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        accent: {
                            purple: '#8b5cf6',
                            pink: '#ec4899',
                            orange: '#f97316',
                            teal: '#14b8a6',
                            green: '#22c55e',
                            red: '#ef4444',
                            yellow: '#eab308',
                            indigo: '#6366f1',
                        },
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .text-shadow {
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            .text-shadow-lg {
                text-shadow: 0 4px 8px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.08);
            }
            .gradient-overlay {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.6));
            }
            .gradient-text {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-primary-500 to-accent-purple;
            }
            .card-lift {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .card-lift:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            .parallax {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .badge {
                @apply px-2 py-1 text-xs rounded-full;
            }
            .badge-blue {
                @apply bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200;
            }
            .badge-purple {
                @apply bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200;
            }
            .badge-pink {
                @apply bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200;
            }
            .badge-green {
                @apply bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200;
            }
            .badge-red {
                @apply bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200;
            }
            .badge-orange {
                @apply bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200;
            }
            .badge-teal {
                @apply bg-teal-100 dark:bg-teal-900 text-teal-800 dark:text-teal-200;
            }
            .badge-indigo {
                @apply bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200;
            }
            .badge-yellow {
                @apply bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200;
            }
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300"></body>
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-md fixed w-full z-50 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-bold text-primary-600 dark:text-primary-400">SkillSwap</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <button id="theme-toggle" class="p-2 rounded-full text-gray-500 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                        <svg id="theme-toggle-dark-icon" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400">Home</a>
                    <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400">Explore</a>
                    <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400">About</a>
                    <a href="#" class="bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-lg transition-colors duration-300">Sign Up</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="p-2 rounded-md text-gray-500 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 border-t dark:border-gray-700">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <button id="mobile-theme-toggle" class="w-full text-left p-2 rounded-md text-gray-500 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                    <span id="mobile-theme-text">Toggle Dark Mode</span>
                </button>
                <a href="#" class="block p-2 rounded-md text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Home</a>
                <a href="#" class="block p-2 rounded-md text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Explore</a>
                <a href="#" class="block p-2 rounded-md text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">About</a>
                <a href="#" class="block p-2 rounded-md bg-primary-500 text-white hover:bg-primary-600">Sign Up</a>
            </div>
        </div>
    </nav>
        <!-- Hero Section with Parallax -->
        <section class="relative h-[70vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
            <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-black/80"></div>
        </div>
        
        <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white text-shadow-lg mb-6 animate-float">
                Every Skill Imaginable, <span class="text-primary-300">One Marketplace</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                From digital design to home repairs, academic tutoring to legal advice - find experts in every field ready to share their expertise.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#categories" class="bg-primary-500 hover:bg-primary-600 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Browse Categories
                </a>
                <a href="#" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white border border-white/30 px-8 py-3 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Become an Expert
                </a>
            </div>
        </div>
        
        <!-- Animated shapes -->
        <div class="absolute -bottom-4 left-0 w-full overflow-hidden">
            <svg class="relative block w-full h-[50px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-gray-50 dark:fill-gray-900"></path>
            </svg>
        </div>
    </section>