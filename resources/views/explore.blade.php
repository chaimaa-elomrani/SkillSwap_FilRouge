<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore - SKILLSWAP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            20: '#F5F3FF',
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
                        secondary: {
                            50: '#fff1f2',
                            100: '#ffe4e6',
                            200: '#fecdd3',
                            300: '#fda4af',
                            400: '#fb7185',
                            500: '#f43f5e',
                            600: '#e11d48',
                            700: '#be123c',
                            800: '#9f1239',
                            900: '#E60023',
                        },
                        neutral: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        },
                        pink: {
                            50: "#f43f5e",
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        roboto: ['Roboto', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
                        'card': '0 0 0 1px rgba(0, 0, 0, 0.05), 0 2px 4px rgba(0, 0, 0, 0.05), 0 10px 20px rgba(0, 0, 0, 0.08)',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 3s ease-in-out infinite',
                        'bounce-slow': 'bounce 3s infinite',
                        'spin-slow': 'spin 8s linear infinite',
                        'slide-in-right': 'slideInRight 0.5s ease-out',
                        'slide-in-left': 'slideInLeft 0.5s ease-out',
                        'zoom-in': 'zoomIn 0.5s ease-out',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        slideInRight: {
                            '0%': { transform: 'translateX(50px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        slideInLeft: {
                            '0%': { transform: 'translateX(-50px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        zoomIn: {
                            '0%': { transform: 'scale(0.9)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 16px;
            grid-auto-flow: dense;
        }
        
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-hover:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .category-card {
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            transition: transform 0.3s ease;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
        }
        
        .category-card img {
            transition: transform 0.5s ease;
        }
        
        .category-card:hover img {
            transform: scale(1.05);
        }
        
        .featured-card {
            position: relative;
            overflow: hidden;
            border-radius: 24px;
            transition: transform 0.3s ease;
        }
        
        .featured-card:hover {
            transform: translateY(-5px);
        }
        
        .featured-card img {
            transition: transform 0.5s ease;
        }
        
        .featured-card:hover img {
            transform: scale(1.05);
        }

        .credit-badge {
            background-color: rgba(14, 165, 233, 0.15);
            border: 1px solid rgba(14, 165, 233, 0.3);
            color: #0284c7;
            font-weight: 600;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.75rem;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }
    </style>
</head>
<body class="font-sans bg-white text-neutral-800">
    <!-- Header -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-sm transition-all duration-300" id="navbar">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 6.1H3"></path>
                            <path d="M21 12.1H3"></path>
                            <path d="M15.1 18H3"></path>
                            <path d="M18.9 8.8l2.7 2.7-2.7 2.7"></path>
                        </svg>
                        <span class="text-xl font-bold text-neutral-900">Skill<span class="text-primary-600">Swap</span></span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-neutral-700 hover:text-primary-600 transition-colors">Home</a>
                    <a href="#premium" class="text-neutral-700 hover:text-primary-600 transition-colors">Premium</a>
                    <a href="#explore" class="text-primary-600 font-medium transition-colors">Explore</a>
                    <a href="#contact" class="text-neutral-700 hover:text-primary-600 transition-colors">Contact</a>
                </div>
                
                <div class="flex items-center space-x-4">
                   
                    <a href="{{route('login')}}" class="hidden md:inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-primary-600 bg-primary-50 hover:bg-primary-100 transition-colors">
                        Login
                    </a>
                    <a href="{{route('register')}}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-primary-600 hover:bg-primary-700 transition-colors">
                        Sign up
                    </a>
                    <button id="mobile-menu-button" class="md:hidden text-neutral-700 hover:text-primary-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden py-4 border-t border-gray-200 animate-fade-in">
                <a href="#how-it-works" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">How it works</a>
                <a href="#premium" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Premium</a>
                <a href="#explore" class="block py-2 text-primary-600 font-medium transition-colors">Explore</a>
                <a href="#contact" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Contact</a>
                <a href="#login" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Login</a>
                <div class="flex items-center mt-2 bg-primary-50 px-3 py-1.5 rounded-full w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 mr-1.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 6v6l4 2"></path>
                    </svg>
                    <span class="text-xs font-medium text-primary-700">Credits: 0</span>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8 mt-16">
        <!-- Search and Filter Section -->
        <section class="mb-8">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="relative w-full md:w-1/2">
                    <input type="text" placeholder="Search for skills, services, or users..." class="w-full pl-10 pr-4 py-3 rounded-full border border-neutral-200 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-neutral-400 absolute left-3 top-1/2 transform -translate-y-1/2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <div class="flex gap-2 w-full md:w-auto">
                    <button class="px-4 py-2 rounded-full bg-neutral-100 hover:bg-neutral-200 text-neutral-700 font-medium transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                        </svg>
                        Filters
                    </button>
                    <button class="px-4 py-2 rounded-full bg-primary-600 hover:bg-primary-700 text-white font-medium transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Offer a Skill
                    </button>
                </div>
            </div>
        </section>

        <!-- Featured Section -->
        <section class="mb-12">
            <h1 class="text-3xl font-bold text-neutral-900 mb-8">Popular Skill Categories</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Featured Card 1 -->
                <div class="featured-card shadow-card overflow-hidden">
                    <div class="relative h-80">
                        <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Programming & Development" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <span class="text-white/80 text-sm">Most requested</span>
                            <h2 class="text-2xl font-bold text-white">Programming & Development</h2>
                            <div class="mt-2 flex items-center">
                                <span class="credit-badge">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 6v6l4 2"></path>
                                    </svg>
                                    15-50 credits/hour
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Card 2 -->
                <div class="featured-card shadow-card overflow-hidden">
                    <div class="relative h-80">
                        <img src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Design & Creative" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <span class="text-white/80 text-sm">Trending now</span>
                            <h2 class="text-2xl font-bold text-white">Design & Creative</h2>
                            <div class="mt-2 flex items-center">
                                <span class="credit-badge">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 6v6l4 2"></path>
                                    </svg>
                                    10-40 credits/hour
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Card 3 -->
                <div class="featured-card shadow-card overflow-hidden">
                    <div class="relative h-80">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Business & Consulting" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex flex-col justify-end p-6">
                            <span class="text-white/80 text-sm">High demand</span>
                            <h2 class="text-2xl font-bold text-white">Business & Consulting</h2>
                            <div class="mt-2 flex items-center">
                                <span class="credit-badge">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 6v6l4 2"></path>
                                    </svg>
                                    20-60 credits/hour
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <button class="px-6 py-3 rounded-full bg-neutral-200 hover:bg-neutral-300 text-neutral-800 font-medium transition-colors">
                    See more categories
                </button>
            </div>
        </section>
        
        <!-- Categories Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-neutral-900 mb-8">Browse by skill domain</h2>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <!-- Category 1 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80" alt="Web Development" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <h3 class="text-xl font-bold text-white">Web Dev</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Category 2 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40">
                        <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1490&q=80" alt="Graphic Design" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <h3 class="text-xl font-bold text-white">Graphic Design</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Category 3 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40">
                        <img src="https://images.unsplash.com/photo-1596704017254-9a89b0a9f534?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Marketing" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <h3 class="text-xl font-bold text-white">Marketing</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Category 4 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40">
                        <img src="https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="UI/UX Design" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <h3 class="text-xl font-bold text-white">UI/UX Design</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Category 5 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40">
                        <img src="https://images.unsplash.com/photo-1596464716127-f2a82984de30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Content Writing" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <h3 class="text-xl font-bold text-white">Content Writing</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Category 6 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Cooking" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <h3 class="text-xl font-bold text-white">Cooking</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Category 7 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1558&q=80" alt="Interior Design" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <h3 class="text-xl font-bold text-white">Interior Design</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Category 8 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40">
                        <img src="https://images.unsplash.com/photo-1617137968427-85924c800a22?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" alt="Photography" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <h3 class="text-xl font-bold text-white">Photography</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Category 9 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40 bg-primary-600">
                        <div class="absolute inset-0 flex items-center justify-center p-4 text-center">
                            <h3 class="text-xl font-bold text-white">Share your skills, grow your network.</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Category 10 -->
                <div class="category-card shadow-card">
                    <div class="relative h-40">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Consulting" class="w-full h-full object  alt="Consulting" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                            <h3 class="text-xl font-bold text-white">Consulting</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <button class="px-6 py-3 rounded-full bg-neutral-200 hover:bg-neutral-300 text-neutral-800 font-medium transition-colors">
                    See more domains
                </button>
            </div>
        </section>
        
        <!-- Available Services Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-neutral-900 mb-8">Available Services</h2>
            
            <div class="masonry-grid">
                <!-- Service Card 1 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card mb-4">
                    <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Web Development" class="w-full h-auto">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-medium text-neutral-900">Full-Stack Web Development</h3>
                            <span class="credit-badge whitespace-nowrap ml-2">25 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">I can build responsive websites and web applications using modern frameworks</p>
                        <div class="flex items-center mt-2">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-neutral-600">John Smith</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 2 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card mb-4">
                    <img src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Graphic Design" class="w-full h-auto">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-medium text-neutral-900">Logo & Brand Identity Design</h3>
                            <span class="credit-badge whitespace-nowrap ml-2">20 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">Professional logo design and complete brand identity packages</p>
                        <div class="flex items-center mt-2">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-neutral-600">Sarah Johnson</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 3 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card mb-4">
                    <img src="https://images.unsplash.com/photo-1605812860427-4024433a70fd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Fitness Training" class="w-full h-auto">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-medium text-neutral-900">Personal Fitness Training</h3>
                            <span class="credit-badge whitespace-nowrap ml-2">15 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">Customized workout plans and virtual training sessions</p>
                        <div class="flex items-center mt-2">
                            <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-neutral-600">Emma Davis</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 4 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card mb-4">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Business Consulting" class="w-full h-auto">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-medium text-neutral-900">Startup Business Consulting</h3>
                            <span class="credit-badge whitespace-nowrap ml-2">30 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">Strategic advice for startups and early-stage businesses</p>
                        <div class="flex items-center mt-2">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-neutral-600">Michael Brown</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 5 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card mb-4">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Team Building" class="w-full h-auto">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-medium text-neutral-900">Remote Team Building Workshops</h3>
                            <span class="credit-badge whitespace-nowrap ml-2">25 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">Virtual team building activities for remote teams</p>
                        <div class="flex items-center mt-2">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-neutral-600">Olivia Wilson</span>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 6 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card mb-4">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Cooking Lessons" class="w-full h-auto">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-medium text-neutral-900">Virtual Cooking Classes</h3>
                            <span class="credit-badge whitespace-nowrap ml-2">15 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">Learn to cook international cuisines from your home</p>
                        <div class="flex items-center mt-2">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="User" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-sm text-neutral-600">David Chen</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <button class="px-6 py-3 rounded-full bg-primary-600 hover:bg-primary-700 text-white font-medium transition-colors">
                    Load more services
                </button>
            </div>
        </section>
        
        <!-- Recommended Skills Section -->
        <section>
            <h2 class="text-2xl font-bold text-neutral-900 mb-8">Skills you might need</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Skill Card 1 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80" alt="Web Development" class="w-full h-48 object-cover">
                        <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-neutral-500 hover:text-secondary-900 hover:bg-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-medium text-neutral-900 mb-1">Frontend Development</h3>
                            <span class="credit-badge">20 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">React, Vue.js, and responsive web design</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-xs text-neutral-600">John Smith</span>
                            </div>
                            <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Technology</span>
                        </div>
                    </div>
                </div>
                
                <!-- Skill Card 2 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Project Management" class="w-full h-48 object-cover">
                        <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-neutral-500 hover:text-secondary-900 hover:bg-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-medium text-neutral-900 mb-1">Agile Project Management</h3>
                            <span class="credit-badge">25 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">Scrum, Kanban, and agile methodologies</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-xs text-neutral-600">Sarah Johnson</span>
                            </div>
                            <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Business</span>
                        </div>
                    </div>
                </div>
                
                <!-- Skill Card 3 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Graphic Design" class="w-full h-48 object-cover">
                        <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-neutral-500 hover:text-secondary-900 hover:bg-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-medium text-neutral-900 mb-1">UI/UX Design</h3>
                            <span class="credit-badge">22 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">User interface and experience design</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="User" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-xs text-neutral-600">Emma Davis</span>
                            </div>
                            <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Design</span>
                        </div>
                    </div>
                </div>
                
                <!-- Skill Card 4 -->
                <div class="card-hover rounded-2xl overflow-hidden shadow-card">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80" alt="Digital Marketing" class="w-full h-48 object-cover">
                        <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center text-neutral-500 hover:text-secondary-900 hover:bg-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-medium text-neutral-900 mb-1">Social Media Marketing</h3>
                            <span class="credit-badge">18 credits/hr</span>
                        </div>
                        <p class="text-sm text-neutral-600 mb-3">Strategy and content for social platforms</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="User" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-xs text-neutral-600">Michael Brown</span>
                            </div>
                            <span class="text-xs bg-primary-100 text-primary-800 px-2 py-1 rounded-full">Marketing</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-primary-50 rounded-2xl p-6 md:p-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-neutral-900 mb-2">Ready to start exchanging skills?</h3>
                        <p class="text-neutral-600">Join our community of skilled professionals and start trading services without spending money.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <button class="px-6 py-3 rounded-full bg-white border border-primary-200 text-primary-700 font-medium hover:bg-primary-100 transition-colors">
                            Learn how it works
                        </button>
                        <a href='{{ route('register') }}' class="px-6 py-3 rounded-full bg-primary-600 text-white font-medium hover:bg-primary-700 transition-colors">
                            Sign up now
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

 

          <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        function adjustMasonryLayout() {
            const cards = document.querySelectorAll('.masonry-grid > div');
            let currentColumn = 0;
            const columns = window.innerWidth < 640 ? 1 : 
                           window.innerWidth < 768 ? 2 : 
                           window.innerWidth < 1024 ? 3 : 4;
            
            const heights = Array(columns).fill(0);
            
            cards.forEach((card, index) => {
                currentColumn = heights.indexOf(Math.min(...heights));
                
                heights[currentColumn] += card.offsetHeight + 16; 
            });
        }
        
       
        window.addEventListener('load', adjustMasonryLayout);
        window.addEventListener('resize', adjustMasonryLayout);
        
     
        const bookmarkButtons = document.querySelectorAll('.card-hover button');
        
        bookmarkButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                button.classList.toggle('text-neutral-500');
                button.classList.toggle('text-secondary-900');
                
           
                button.classList.add('scale-125');
                setTimeout(() => {
                    button.classList.remove('scale-125');
                }, 200);
            });
        });

        const navbar = document.getElementById('navbar');
        let lastScrollTop = 0;
        
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement  () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }
            
            // Hide on scroll down, show on scroll up
            if (scrollTop > lastScrollTop && scrollTop > 200) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        }
        });
        
    </script>
   

  
</body>
</html>