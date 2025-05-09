<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap - Échangez vos compétences facilement</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">    <script src="https://cdn.tailwindcss.com"></script>
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
                @apply bg-blue-100  text-blue-800 ;
            }
            .badge-purple {
                @apply bg-purple-100 text-purple-800 ;
            }
            .badge-pink {
                @apply bg-pink-100  text-pink-800 ;
            }
            .badge-green {
                @apply bg-green-100  text-green-800 ;
            }
            .badge-red {
                @apply bg-red-100  text-red-800 ;
            }
            .badge-orange {
                @apply bg-orange-100 text-orange-800 ;
            }
            .badge-teal {
                @apply bg-teal-100  text-teal-800 ;
            }
            .badge-indigo {
                @apply bg-indigo-100  text-indigo-800 ;
            }
            .badge-yellow {
                @apply bg-yellow-100  text-yellow-800 ;
            }
        }
    </style>
</head>

<body class="bg-gray-50  transition-colors duration-300">

    
    @include('layouts/header')

    <!-- Hero Section with Parallax -->
    <section class="relative h-[70vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-[url('../images/Group2072.png')]" 
            >
            <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-black/80"></div>
        </div>

        <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white text-shadow-lg mb-6 animate-float">
                Every Skill Imaginable, <span class="text-primary-300">One Marketplace</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                From digital design to home repairs, academic tutoring to legal advice - find experts in every field
                ready to share their expertise.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#categories"
                    class="bg-primary-500 hover:bg-primary-600 text-white px-8 py-3 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Browse Categories
                </a>
             
            </div>
        </div>

      
    </section>

    <!-- Search & Filter Bar (Sticky) -->
    <div id="search-bar" class=" top-16 z-40 bg-white  shadow-md transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="relative flex-grow max-w-2xl w-full">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" id="search-input"
                        class="block w-full pl-10 pr-3 py-3 border border-gray-300  rounded-lg bg-white  text-gray-900  placeholder-gray-500  focus:outline-none focus:ring-2 focus:ring-primary-500 transition-colors duration-300"
                        placeholder="Search categories...">
                </div>

                <div class="flex flex-wrap gap-3 w-full md:w-auto">
                    <select id="category-type"
                        class="bg-gray-100  text-gray-800  rounded-lg px-4 py-2 border-0 focus:ring-2 focus:ring-primary-500 transition-colors duration-300">
                        <option value="all">All Categories</option>
                        @foreach ($types as $type)
                        <option>{{ $type->name }}</option>
                        @endforeach
                    </select>

                    <select id="sort-by"
                        class="bg-gray-100  text-gray-800  rounded-lg px-4 py-2 border-0 focus:ring-2 focus:ring-primary-500 transition-colors duration-300">
                        <option value="popular">Most Popular</option>
                        <option value="az">Alphabetical (A-Z)</option>  
                        <option value="za">Alphabetical (Z-A)</option>
                        <option value="experts">Most Experts</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Navigation -->
    <div class="bg-gray-100  py-4 border-y border-gray-200 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex overflow-x-auto pb-2 scrollbar-hide space-x-4">
                <a href="#digital-tech"
                    class="flex-shrink-0 px-4 py-2 bg-primary-500 text-white rounded-full hover:bg-primary-600 transition-colors duration-300">Digital
                    & Tech</a>
                <a href="#creative"
                    class="flex-shrink-0 px-4 py-2 bg-white  text-gray-800  rounded-full hover:bg-gray-200 transition-colors duration-300">Creative</a>
                <a href="#professional"
                    class="flex-shrink-0 px-4 py-2 bg-white  text-gray-800  rounded-full hover:bg-gray-200 transition-colors duration-300">Professional</a>
                <a href="#lifestyle"
                    class="flex-shrink-0 px-4 py-2 bg-white  text-gray-800  rounded-full hover:bg-gray-200 transition-colors duration-300">Lifestyle</a>
                <a href="#education"
                    class="flex-shrink-0 px-4 py-2 bg-white  text-gray-800  rounded-full hover:bg-gray-200 transition-colors duration-300">Education</a>
                <a href="#specialized"
                    class="flex-shrink-0 px-4 py-2 bg-white  text-gray-800  rounded-full hover:bg-gray-200 transition-colors duration-300">Specialized</a>
                <a href="#trending"
                    class="flex-shrink-0 px-4 py-2 bg-gradient-to-r from-pink-500 to-orange-500 text-white rounded-full hover:from-pink-600 hover:to-orange-600 transition-colors duration-300">Others</a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main id="categories" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Digital & Tech Categories -->
        <section id="digital-tech" class="mb-16 scroll-mt-32">
            <div class="flex items-center mb-8">
                <div class="w-12 h-12 rounded-full bg-blue-100  flex items-center justify-center mr-4">
                    <i class="fas fa-laptop-code text-primary-500 text-xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 ">Digital & Tech</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Web Development -->
                @foreach ($domains['Digital&Tech'] ?? [] as $domain)

                    <div class="category-card card-lift rounded-xl overflow-hidden shadow-lg bg-white  transition-colors duration-300"
                        data-category="digital">
                        <div class="relative h-48">
                            <img src="{{ $domain->image }}" alt="Web Development" class="w-full h-full object-cover">
                            <div class="absolute inset-0 gradient-overlay"></div>
                            <div class="absolute bottom-0 left-0 p-4 w-full">
                                <h3 class="text-xl font-bold text-white text-shadow">{{ $domain->name }}</h3>
                                <p class="text-sm text-gray-200">1,245 experts available</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600  text-sm mb-4">{{ $domain->description }}</p>
                            <div class="flex justify-between items-center">
                                <div class="flex flex-wrap gap-1">
                                    @foreach ( $domain->skills as $skill )
                                    <span class="badge badge-blue">{{ $skill->name }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('domains.show', ['domains' => $domain->id]) }}"
                                    class="text-primary-500 hover:text-primary-600 font-medium flex items-center transition-colors duration-300">
                                    Explore <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

        </section>


        <!-- Creative Categories -->
        <section id="creative" class="mb-16 scroll-mt-32">
            <div class="flex items-center mb-8">
                <div class="w-12 h-12 rounded-full bg-pink-100  flex items-center justify-center mr-4">
                    <i class="fas fa-paint-brush text-accent-pink text-xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 ">Creative</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($domains['Creative'] ?? [] as $domain)
                    <!-- Graphic Design -->
                    <div class="category-card card-lift rounded-xl overflow-hidden shadow-lg bg-white  transition-colors duration-300"
                        data-category="creative">
                        <div class="relative h-48">
                            <img src="{{ $domain->image }}" alt="Graphic Design" class="w-full h-full object-cover">
                            <div class="absolute inset-0 gradient-overlay"></div>
                            <div class="absolute bottom-0 left-0 p-4 w-full">
                                <h3 class="text-xl font-bold text-white text-shadow">{{ $domain->name }}</h3>
                                <p class="text-sm text-gray-200">987 experts available</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600  text-sm mb-4">{{ $domain->description }}</p>
                            <div class="flex justify-between items-center">
                                <div class="flex flex-wrap gap-1">
                                @foreach ( $domain->skills as $skill )
                                    <span class="badge badge-purple">{{ $skill->name }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('domains.show', ['domains' => $domain->id]) }}"
                                    class="text-primary-500 hover:text-primary-600 font-medium flex items-center transition-colors duration-300">
                                    Explore <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Professional Services -->
        <section id="professional" class="mb-16 scroll-mt-32">
            <div class="flex items-center mb-8">
                <div class="w-12 h-12 rounded-full bg-blue-100  flex items-center justify-center mr-4">
                    <i class="fas fa-briefcase text-accent-blue text-xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 ">Professional Services</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($domains['Professional Services'] ?? [] as $domain)
                    <!-- Graphic Design -->
                    <div class="category-card card-lift rounded-xl overflow-hidden shadow-lg bg-white  transition-colors duration-300"
                        data-category="creative">
                        <div class="relative h-48">
                            <img src="{{ $domain->image }}" alt="Graphic Design" class="w-full h-full object-cover">
                            <div class="absolute inset-0 gradient-overlay"></div>
                            <div class="absolute bottom-0 left-0 p-4 w-full">
                                <h3 class="text-xl font-bold text-white text-shadow">{{ $domain->name }}</h3>
                                <p class="text-sm text-gray-200">987 experts available</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600  text-sm mb-4">{{ $domain->description }}</p>
                            <div class="flex justify-between items-center">
                                <div class="flex flex-wrap gap-1">
                                @foreach ( $domain->skills as $skill )
                                    <span class="badge badge-pink">{{ $skill->name }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('domains.show', ['domains' => $domain->id]) }}"
                                    class="text-primary-500 hover:text-primary-600 font-medium flex items-center transition-colors duration-300">
                                    Explore <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Lifestyle Categories -->
        <section id="lifestyle" class="mb-16 scroll-mt-32">
            <div class="flex items-center mb-8">
                <div
                    class="w-12 h-12 rounded-full bg-green-100  flex items-center justify-center mr-4">
                    <i class="fas fa-leaf text-accent-green text-xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 ">Lifestyle & Wellness</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Fitness Training -->
                @foreach ($domains['Lifestyle & Wellness'] ?? [] as $domain)
                    <div class="category-card card-lift rounded-xl overflow-hidden shadow-lg bg-white  transition-colors duration-300"
                        data-category="creative">
                        <div class="relative h-48">
                            <img src="{{ $domain->image }}" alt="Graphic Design" class="w-full h-full object-cover">
                            <div class="absolute inset-0 gradient-overlay"></div>
                            <div class="absolute bottom-0 left-0 p-4 w-full">
                                <h3 class="text-xl font-bold text-white text-shadow">{{ $domain->name }}</h3>
                                <p class="text-sm text-gray-200">987 experts available</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600  text-sm mb-4">{{ $domain->description }}</p>
                            <div class="flex justify-between items-center">
                                <div class="flex flex-wrap gap-1">
                                @foreach ( $domain->skills as $skill )
                                    <span class="badge badge-green">{{ $skill->name }}</span>
                                @endforeach
                                </div>
                                <a href="{{ route('domains.show', ['domains' => $domain->id]) }}"
                                    class="text-primary-500 hover:text-primary-600  font-medium flex items-center transition-colors duration-300">
                                    Explore <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Education Categories -->
        <section id="education" class="mb-16 scroll-mt-32">
            <div class="flex items-center mb-8">
                <div
                    class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center mr-4">
                    <i class="fas fa-graduation-cap text-accent-yellow text-xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 ">Education & Learning</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Fitness Training -->
                @foreach ($domains['Education & Learning'] ?? [] as $domain)
                    <div class="category-card card-lift rounded-xl overflow-hidden shadow-lg bg-white  transition-colors duration-300"
                        data-category="creative">
                        <div class="relative h-48">
                            <img src="{{ $domain->image }}" alt="Graphic Design" class="w-full h-full object-cover">
                            <div class="absolute inset-0 gradient-overlay"></div>
                            <div class="absolute bottom-0 left-0 p-4 w-full">
                                <h3 class="text-xl font-bold text-white text-shadow">{{ $domain->name }}</h3>
                                <p class="text-sm text-gray-200">987 experts available</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600  text-sm mb-4">{{ $domain->description }}</p>
                            <div class="flex justify-between items-center">
                                <div class="flex flex-wrap gap-1">
                                @foreach ( $domain->skills as $skill )
                                    <span class="badge badge-red">{{ $skill->name }}</span>
                                @endforeach
                                </div>
                                <a href="{{ route('domains.show', ['domains' => $domain->id]) }}"
                                    class="text-primary-500 hover:text-primary-600  font-medium flex items-center transition-colors duration-300">
                                    Explore <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Specialized Services -->
        <section id="specialized" class="mb-16 scroll-mt-32">
            <div class="flex items-center mb-8">
                <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center mr-4">
                    <i class="fas fa-tools text-accent-red text-xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 ">Specialized Services</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Fitness Training -->
                @foreach ($domains['Specialized Services'] ?? [] as $domain)
                    <div class="category-card card-lift rounded-xl overflow-hidden shadow-lg bg-white  transition-colors duration-300"
                        data-category="creative">
                        <div class="relative h-48">
                            <img src="{{ $domain->image }}" alt="Graphic Design" class="w-full h-full object-cover">
                            <div class="absolute inset-0 gradient-overlay"></div>
                            <div class="absolute bottom-0 left-0 p-4 w-full">
                                <h3 class="text-xl font-bold text-white text-shadow">{{ $domain->name }}</h3>
                                <p class="text-sm text-gray-200">987 experts available</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600  text-sm mb-4">{{ $domain->description }}</p>
                            <div class="flex justify-between items-center">
                                <div class="flex flex-wrap gap-1">
                                @foreach ( $domain->skills as $skill )
                                    <span class="badge badge-orange">{{ $skill->name }}</span>
                                @endforeach
                                </div>
                                <a href="{{ route('domains.show', ['domains' => $domain->id]) }}"
                                    class="text-primary-500 hover:text-primary-600  font-medium flex items-center transition-colors duration-300">
                                    Explore <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Trending Categories -->
        <section id="trending" class="mb-16 scroll-mt-32">
            <div class="flex items-center mb-8">
                <div
                    class="w-12 h-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-500 flex items-center justify-center mr-4">
                    <i class="fas fa-fire text-white text-xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 ">Others</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Fitness Training -->
                @foreach ($domains['Others'] ?? [] as $domain)
                    <div class="category-card card-lift rounded-xl overflow-hidden shadow-lg bg-white  transition-colors duration-300"
                        data-category="creative">
                        <div class="relative h-48">
                            <img src="{{ $domain->image }}" alt="Graphic Design" class="w-full h-full object-cover">
                            <div class="absolute inset-0 gradient-overlay"></div>
                            <div class="absolute bottom-0 left-0 p-4 w-full">
                                <h3 class="text-xl font-bold text-white text-shadow">{{ $domain->name }}</h3>
                                <p class="text-sm text-gray-200">987 experts available</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-600  text-sm mb-4">{{ $domain->description }}</p>
                            <div class="flex justify-between items-center">
                                <div class="flex flex-wrap gap-1">
                                @foreach ( $domain->skills as $skill )
                                    <span class="badge badge-teal">{{ $skill->name }}</span>
                                @endforeach
                                </div>
                                <a href="{{ route('domains.show', ['domains' => $domain->id]) }}"
                                    class="text-primary-500 hover:text-primary-600  font-medium flex items-center transition-colors duration-300">
                                    Explore <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <!-- Call to Action Section -->
    <section class="bg-gradient-to-r from-primary-600 to-accent-purple py-16 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Can't find what you're looking for?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Let us know what skills or services you need, and we'll help
                connect you with the right experts.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('posts.index') }}"
                    class="bg-white text-primary-600 hover:bg-gray-100 px-8 py-3 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Request a Skill
                </a>
              
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">SkillSwap</h3>
                    <p class="text-gray-400">Connect with experts and learn new skills in a supportive community.</p>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#digital-tech"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Digital & Tech</a>
                        </li>
                        <li><a href="#creative"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Creative</a></li>
                        <li><a href="#professional"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Professional
                                Services</a></li>
                        <li><a href="#lifestyle"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Lifestyle &
                                Wellness</a></li>
                        <li><a href="#education"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Education &
                                Learning</a></li>
                        <li><a href="#specialized"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Specialized
                                Services</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">About
                                Us</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Blog</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Press</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Terms of
                                Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Privacy
                                Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Cookie
                                Policy</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Accessibility</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400">&copy; 2023 SkillSwap. All rights reserved.</p>
                <div class="mt-4 md:mt-0">
                    <select
                        class="bg-gray-800 text-gray-400 rounded-lg px-4 py-2 border-0 focus:ring-2 focus:ring-primary-500">
                        <option value="en">English</option>
                        <option value="es">Español</option>
                        <option value="fr">Français</option>
                        <option value="de">Deutsch</option>
                    </select>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Theme toggle functionality
        const themeToggleBtn = document.getElementById('theme-toggle');
        const mobileThemeToggleBtn = document.getElementById('mobile-theme-toggle');
        const mobileThemeText = document.getElementById('mobile-theme-text');

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Search and filter functionality
        const searchInput = document.getElementById('search-input');
        const categoryTypeSelect = document.getElementById('category-type');
        const sortBySelect = document.getElementById('sort-by');
        const categoryCards = document.querySelectorAll('.category-card');

        function filterCategories() {
            const searchTerm = searchInput.value.toLowerCase();
            const categoryType = categoryTypeSelect.value;

            categoryCards.forEach(card => {
                const cardTitle = card.querySelector('h3').textContent.toLowerCase();
                const cardType = card.getAttribute('data-category');

                let shouldShow = cardTitle.includes(searchTerm);

                if (categoryType !== 'all' && cardType !== categoryType) {
                    shouldShow = false;
                }

                card.style.display = shouldShow ? 'block' : 'none';
            });
        }

        function sortCategories() {
            const sortBy = sortBySelect.value;
            const cardsContainer = document.querySelector('.grid');
            const cardsArray = Array.from(categoryCards);

            cardsArray.sort((a, b) => {
                const titleA = a.querySelector('h3').textContent;
                const titleB = b.querySelector('h3').textContent;
                const expertsA = parseInt(a.querySelector('p').textContent);
                const expertsB = parseInt(b.querySelector('p').textContent);

                if (sortBy === 'az') {
                    return titleA.localeCompare(titleB);
                } else if (sortBy === 'za') {
                    return titleB.localeCompare(titleA);
                } else if (sortBy === 'experts') {
                    return expertsB - expertsA;
                }

                // Default: popular (already sorted in HTML)
                return 0;
            });

            // Remove all cards
            categoryCards.forEach(card => {
                card.remove();
            });

            // Append sorted cards
            cardsArray.forEach(card => {
                if (card.style.display !== 'none') {
                    cardsContainer.appendChild(card);
                }
            });
        }

        // Add event listeners
        searchInput.addEventListener('input', filterCategories);
        categoryTypeSelect.addEventListener('change', filterCategories);
        sortBySelect.addEventListener('change', sortCategories);

        // Sticky search bar behavior
        const searchBar = document.getElementById('search-bar');
        const searchBarTop = searchBar.offsetTop;

        window.addEventListener('scroll', () => {
            if (window.scrollY >= searchBarTop) {
                searchBar.classList.add('shadow-lg');
            } else {
                searchBar.classList.remove('shadow-lg');
            }
        });

        // Smooth scroll animation for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });




    </script>
</body>

</html>