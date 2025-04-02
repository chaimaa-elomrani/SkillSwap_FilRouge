<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>Services</title>
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
    <script src={{ asset('js/palette.js') }}></script>
    <style>
        .search-container {
            position: relative;
            width: 50%;
            max-width: 600px;
            margin: 0 auto;
            margin-top: 1.5rem;
        }

        .search-container input {
            width: 100%;
            padding: 1rem 3rem 1rem 1.5rem;
            border-radius: 9999px;
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            outline: none;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .search-container input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
        }

        .gradient-text {
            background: linear-gradient(90deg, #0ea5e9, #FFF5F5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Fix for the layout structure */
        .page-container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .services-section {
            position: relative;
            z-index: 10;
        }
    </style>
</head>

<body>
    <div class="page-container">
        <!-- Hero Section -->
        <section class="hero-section bg-[url('./images/Group%2072.png')] bg-cover bg-center bg-no-repeat">
            <div class="absolute inset-0 bg-black opacity-70"></div>

            <div class="relative z-10 flex flex-col items-center px-4">
                <h1 class="text-4xl md:text-6xl text-white font-bold text-center">
                    <span class="gradient-text typing">Find your services partner</span>
                </h1>
                <p class="text-white text-xl md:text-3xl text-roboto font-light tracking-wide mt-4 text-center">
                    explore new services in different majors
                </p>

                <div class="search-container">
                    <input type="text" placeholder="Search Services"
                        class="shadow-lg w-full mt-4 pt-4 pb-4 pr-4 pl-4 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"
                        aria-label="Search services">
                    <span
                        class="absolute right-[1.5rem] top-1/2 transform -translate-y-1/2 text-[#4B5563] font-semibold">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>

                <div class="absolute top-[170%] left-0 right-0 flex flex-col items-center opacity-0 animate-fade-in"
                    style="animation-delay: 2s; animation-fill-mode: forwards;">
                    <p class="text-white text-lg mb-3">Discover more</p>
                    <button id="scroll-down-btn"
                        class="bg-white text-black rounded-full p-3 animate-float shadow-lg transition-all duration-300 hover:bg-primary-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services-section py-16 md:py-24 bg-grey-100 ]">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-12">Popular Categories</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Category cards (your existing cards) -->
                    <!-- Category 1 -->
                    <div
                        class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80"
                                alt="Web Development"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-white">Web Development</h3>
                                    <p class="text-white/80 text-sm">42 experts available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 2 -->
                    <div
                        class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-200">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="Graphic Design"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-white">Graphic Design</h3>
                                    <p class="text-white/80 text-sm">38 experts available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 3 -->
                    <div
                        class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-400">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="Music"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-white">Music</h3>
                                    <p class="text-white/80 text-sm">56 experts available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 4 -->
                    <div
                        class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-600">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="Cooking"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-white">Cooking</h3>
                                    <p class="text-white/80 text-sm">29 experts available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category 1 -->
                    <div
                        class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80"
                                alt="Web Development"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-white">Web Development</h3>
                                    <p class="text-white/80 text-sm">42 experts available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 2 -->
                    <div
                        class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-200">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="Graphic Design"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-white">Graphic Design</h3>
                                    <p class="text-white/80 text-sm">38 experts available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 3 -->
                    <div
                        class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-400">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="Music"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-white">Music</h3>
                                    <p class="text-white/80 text-sm">56 experts available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category 4 -->
                    <div
                        class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-600">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="Cooking"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-white">Cooking</h3>
                                    <p class="text-white/80 text-sm">29 experts available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- More categories... -->
                </div>

                <div class="mt-12 text-center  animate-delay-800">
                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-full shadow-sm text-gray-700 bg-gray-100 hover:bg-gray-200 transition-all duration-300 hover:scale-105 shine">
                        Discover more categories
                        <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>



            </div>
        </section>
    </div>

    <script>
        const scrollDownBtn = document.getElementById('scroll-down-btn');
        const servicesSection = document.getElementById('services');

        scrollDownBtn.addEventListener('click', () => {
            servicesSection.scrollIntoView({ behavior: 'smooth' });
        });

        function revealOnScroll() {
            const reveals = document.querySelectorAll('.reveal');

            reveals.forEach(element => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    element.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', revealOnScroll);
        window.addEventListener('load', revealOnScroll);

        // Search functionality
        const searchInputs = document.querySelectorAll('input[placeholder*="Search"]');

        searchInputs.forEach(input => {
            input.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    alert('Searching for: ' + input.value);
                    // Here you would typically implement actual search functionality
                }
            });
        });
    </script>
</body>

</html>