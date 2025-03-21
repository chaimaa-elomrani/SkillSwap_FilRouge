<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap - Échangez vos compétences facilement</title>
    <meta name="description" content="Plateforme d'échange de compétences entre particuliers. Trouvez des experts ou partagez votre savoir-faire.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
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
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
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
        .gradient-text {
            background: linear-gradient(90deg, #0ea5e9, #f43f5e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .animate-delay-100 {
            animation-delay: 0.1s;
        }
        .animate-delay-200 {
            animation-delay: 0.2s;
        }
        .animate-delay-300 {
            animation-delay: 0.3s;
        }
        .animate-delay-400 {
            animation-delay: 0.4s;
        }
        .animate-delay-500 {
            animation-delay: 0.5s;
        }
        .animate-delay-600 {
            animation-delay: 0.6s;
        }
        .animate-delay-700 {
            animation-delay: 0.7s;
        }
        .animate-delay-800 {
            animation-delay: 0.8s;
        }

        /* Parallax effect */
        .parallax {
            transition: transform 0.1s ease-out;
        }

        /* Scroll reveal animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Gradient animation */
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .animated-gradient {
            background: linear-gradient(270deg, #0ea5e9, #f43f5e, #0ea5e9);
            background-size: 200% 200%;
            animation: gradientAnimation 6s ease infinite;
        }

        /* Shine effect */
        .shine {
            position: relative;
            overflow: hidden;
        }
        .shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.3) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: rotate(30deg);
            animation: shine 6s infinite;
        }
        @keyframes shine {
            0% {
                transform: rotate(30deg) translate(-100%, -100%);
            }
            100% {
                transform: rotate(30deg) translate(100%, 100%);
            }
        }

        /* Typing animation */
        .typing {
            overflow: hidden;
            border-right: 0.15em solid #0ea5e9;
            white-space: nowrap;
            margin: 0 auto;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #0ea5e9 }
        }
    </style>
</head>

<body class="bg-white bg-cover w-full">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-sm transition-all duration-300" id="navbar">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="flex items-center space-x-2">
                       <img src="./images/logo.png" alt="logo" class="w-8 h-8">
                        <span class="text-xl font-bold text-neutral-900">Skill<span class="text-primary-600">Swap</span></span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#fonctionnement" class="text-neutral-700 hover:text-primary-600 transition-colors">Comment ça marche</a>
                    <a href="#tarifs" class="text-neutral-700 hover:text-primary-600 transition-colors">Tarifs</a>
                    <a href="#testimonials" class="text-neutral-700 hover:text-primary-600 transition-colors">Témoignages</a>
                    <a href="#" class="text-neutral-700 hover:text-primary-600 transition-colors">Contact</a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="#" class="hidden md:inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-primary-600 bg-primary-50 hover:bg-primary-100 transition-colors">
                        Se connecter
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-primary-600 hover:bg-primary-700 transition-colors">
                        S'inscrire
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
                <a href="#fonctionnement" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Comment ça marche</a>
                <a href="#tarifs" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Tarifs</a>
                <a href="#testimonials" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Témoignages</a>
                <a href="#" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Contact</a>
                <a href="#" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Se connecter</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-28 pb-16 md:pt-32 md:pb-24 bg-gradient-to-b from-primary-50 to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 lg:pr-12 mb-10 lg:mb-0 reveal">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-neutral-900 mb-6">
                        Échangez vos <span class="gradient-text typing">compétences</span> facilement
                    </h1>
                    <p class="text-lg md:text-xl text-neutral-600 mb-8 max-w-2xl reveal animate-delay-200">
                        Découvrez une nouvelle façon de partager votre savoir-faire et d'apprendre de nouvelles compétences. Rejoignez notre communauté d'experts et de passionnés.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 reveal animate-delay-300">
                        <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300 hover:scale-105 shine">
                            Commencer maintenant
                        </a>
                        <a href="#how-it-works" class="inline-flex items-center justify-center px-6 py-3 border border-neutral-300 text-base font-medium rounded-full shadow-sm text-neutral-700 bg-white hover:bg-neutral-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300 hover:scale-105">
                            Comment ça marche
                            <svg class="ml-2 -mr-1 h-5 w-5 animate-bounce-slow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 relative reveal animate-delay-400">
                    <div class="grid grid-cols-2 gap-4 parallax" data-speed="0.05">
                        <div class="space-y-4">
                            <div class="rounded-2xl overflow-hidden shadow-card animate-float" style="animation-delay: 0.2s;">
                                <img src="./images/dev.png" alt="Chef cuisinant" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="rounded-2xl overflow-hidden shadow-card animate-float" style="animation-delay: 0.6s;">
                                <img src="./images/drawer.png" alt="Personne travaillant sur ordinateur" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                        <div class="space-y-4 mt-8">
                            <div class="rounded-2xl overflow-hidden shadow-card animate-float" style="animation-delay: 0.4s;">
                                <img src="./images/gymCoach.jpeg" alt="Personne peignant" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="rounded-2xl overflow-hidden shadow-card animate-float" style="animation-delay: 0.8s;">
                                <img src="./images/nutritioniste.jpeg" alt="Musicien jouant du piano" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-soft p-4 animate-float animate-delay-600">
                        <div class="flex items-center space-x-2">
                            <div class="flex -space-x-2">
                                <img class="h-8 w-8 rounded-full ring-2 ring-white" src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0mh4zjI7ajYqO3wGBRBreS9ju889Ay.png" alt="User">
                                <img class="h-8 w-8 rounded-full ring-2 ring-white" src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0mh4zjI7ajYqO3wGBRBreS9ju889Ay.png" alt="User">
                                <img class="h-8 w-8 rounded-full ring-2 ring-white" src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0mh4zjI7ajYqO3wGBRBreS9ju889Ay.png" alt="User">
                            </div>
                            <span class="text-sm font-medium text-neutral-900">+2500 utilisateurs actifs</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- How it works Section -->
    <section class="py-28 bg-neutral-200" id="fonctionnement">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Comment fonctionne SkillSwap ?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Un processus simple et efficace pour échanger vos
                    compétences</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal">
                    <div class="h-16 flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" viewBox="0 0 64 64" class="animate-pulse-slow">
                            <path fill="#7dd3fc" d="M26.8 45.7h10v7h-10v-7z"></path>
                            <path fill="#fff" d="M10.8 13.7h42v29h-42v-29z"></path>
                            <path fill="#E4E5E7" d="M10.8 13.7v3h39v26h3v-29h-42z"></path>
                            <path fill="#404145"
                                d="M56.6 43.2h-1 1zm-2.5 2.6v1-1zm-44.6 0v1-1zM7 43.2h1-1zm0-30.7H6h1zm3.6 1v-1c-.6 0-1 .4-1 1h1zm42.4 0h1c0-.6-.4-1-1-1v1zm0 28.7v1c.6 0 1-.4 1-1h-1zm-42.4 0h-1c0 .6.4 1 1 1v-1zm18.2-7.8v1h.1l-.1-1zm1 1-1-.1v.1h1zm-1 1-.1 1h.1v-1zm-1-1h-1v.1l1-.1zm7.4-1-.1 1h.2l-.1-1zm1 1-1-.1v.1h1zm-2 0h1v-.1l-1 .1zM24.1 20.6l1-.3c-.1-.4-.5-.7-1-.7v1zm3.1 10.2-1 .3c.1.4.5.7 1 .7v-1zM9.5 11h44.6V9H9.5v2zm44.6 0c.4 0 .8.2 1.1.4l1.4-1.4c-.7-.7-1.5-1-2.5-1v2zm1.1.4c.3.3.4.7.4 1.1h2c0-.9-.4-1.8-1-2.5l-1.4 1.4zm.4 1.1v30.7h2V12.5h-2zm0 30.7c0 .4-.2.8-.4 1.1l1.4 1.4c.6-.7 1-1.6 1-2.5h-2zm-.4 1.1c-.3.3-.7.5-1.1.5l.1 2c.9 0 1.8-.4 2.5-1.1l-1.5-1.4zm-1.1.5H9.5v2h44.6v-2zm-44.6 0c-.4 0-.8-.2-1.1-.5L7 45.7c.6.7 1.5 1.1 2.5 1.1v-2zm-1.1-.5c-.3-.3-.4-.7-.4-1.1H6c0 .9.4 1.8 1 2.5l1.4-1.4zM8 43.2V12.5H6v30.7h2zm0-30.7c0-.4.2-.8.4-1.1L7 10c-.7.7-1 1.5-1 2.5h2zm.4-1.1c.3-.3.7-.4 1.1-.4V9c-.9 0-1.8.4-2.5 1l1.4 1.4zm2.2 3.1H53v-2H10.6v2zm41.4-1v28.7h2V13.5h-2zm1 27.7H10.6v2H53v-2zm-41.4 1V13.5h-2v28.7h2zm17.3-6.8.6-1.9c-.3-.1-.6-.1-.8-.1l.2 2zm0 0s-.1 0 0 0l1.4-1.4c-.2-.2-.5-.4-.7-.5l-.7 1.9zm-.1 0s0-.1 0 0l1.9-.7c-.1-.3-.2-.5-.5-.7l-1.4 1.4zm0-.1 2 .2c0-.3 0-.6-.1-.8l-1.9.6zm0 .1 1.4 1.4c.4-.4.6-.9.6-1.4h-2zm0 0v2c.5 0 1-.2 1.4-.6l-1.4-1.4zm.1 0s-.1 0 0 0l-1.5 1.4c.3.3.8.6 1.3.6l.2-2zm-.1 0s0-.1 0 0l-2 .1c0 .5.3 1 .6 1.3l1.4-1.4zm0 0L27.4 34c-.4.4-.6.9-.6 1.4h2zm0 0v-2c-.5 0-1 .2-1.4.6l1.4 1.4zm6.5 0 .6-1.9c-.3-.1-.6-.1-.8-.1l.2 2zm0 0s-.1 0 0 0l1.4-1.4c-.2-.2-.4-.4-.7-.5l-.7 1.9zm-.1 0s0-.1 0 0l1.9-.7c-.1-.3-.2-.5-.5-.7l-1.4 1.4zm0-.1 2 .2c0-.3 0-.6-.1-.8l-1.9.6zm0 .1 1.4 1.4c.4-.4.6-.9.6-1.4h-2zm0 0v2c.5 0 1-.2 1.4-.6l-1.4-1.4zm0 0-1.4 1.4c.4.4.9.6 1.4.6v-2zm0 0h-2c0 .5.2 1 .6 1.4l1.4-1.4zm0-.1-1.9-.6c-.1.3-.1.6-.1.8l2-.2zm0 0s0 .1 0 0l-1.4-1.4c-.2.2-.4.5-.5.7l1.9.7zm0 .1s-.1 0 0 0l-.7-1.9c-.3.1-.5.2-.7.5l1.4 1.4zm-.1 0 .2-2c-.3 0-.6 0-.8.1l.6 1.9zM20.7 21.6h3.4v-2h-3.4v2zm2.4-.7 3.1 10.2 1.9-.6L25 20.3l-1.9.6zm4.1 10.9h10.4v-2H27.2v2zm-.6-3.1h12.1v-2H26.6v2zm-.8-3.1h13.6v-2H25.8v2zm9.5 20.5V53h2v-6.9h-2zm-7 6.9v-6.9h-2V53h2zm-9.4 1.4h25.8v-2H18.9v2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-center">Créez votre profil</h3>
                    <p class="text-gray-600 text-center">Inscrivez-vous et présentez vos compétences, expériences et services que
                        vous souhaitez proposer.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-200">
                    <div class="flex items-center justify-center mx-auto mb-6">
                        <svg width="64" height="64" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="animate-pulse-slow">
                            <path
                                d="M40.599 23.377c0 9.719-7.88 17.598-17.599 17.598-9.72 0-17.598-7.879-17.598-17.598 0-9.72 7.879-17.599 17.598-17.599 9.72 0 17.599 7.88 17.599 17.599Z"
                                fill="#E4E5E7" stroke="#E4E5E7"></path>
                            <path
                                d="M43.36 6.044H14.706c-.83 0-1.508.679-1.508 1.508v34.689c0 .83.679 1.508 1.508 1.508h28.656c.83 0 1.508-.679 1.508-1.508V7.552c0-.83-.679-1.508-1.508-1.508Z"
                                fill="#7dd3fc"></path>
                            <path
                                d="M13.197 17.355V7.552c0-.83.679-1.508 1.508-1.508h28.656c.83 0 1.508.679 1.508 1.508v34.689c0 .83-.679 1.508-1.508 1.508H14.705c-.83 0-1.508-.679-1.508-1.508V29.42"
                                stroke="#404145" stroke-width="1.5" stroke-miterlimit="10"></path>
                            <path d="M41.852 9.06h-25.64v31.673h25.64V9.06Z" fill="#fff"></path>
                            <path
                                d="M26.77 17.355h10.558M26.77 21.88h10.558M24.508 15.848l-1.357 3.016H23l-1.508-1.508M24.508 20.372l-1.357 3.017H23l-1.508-1.509"
                                stroke="#404145" stroke-width="1.5" stroke-miterlimit="10"></path>
                            <path d="M16.213 20.372V9.061h25.64v31.672h-25.64v-8.295" stroke="#404145"
                                stroke-width="1.5" stroke-miterlimit="10"></path>
                            <path
                                d="M35.066 5.29h-3.017v-.604c0-1.583-1.13-3.016-2.715-3.167-1.81-.15-3.317 1.207-3.317 3.017v.754H23c-1.282 0-2.262.98-2.262 2.262v3.016h16.59V7.552a2.269 2.269 0 0 0-2.262-2.262Z"
                                fill="#fff" stroke="#404145" stroke-width="1.5" stroke-miterlimit="10"></path>
                            <path d="M29.033 3.781V5.29" stroke="#404145" stroke-width="1.5" stroke-miterlimit="10">
                            </path>
                            <path
                                d="M6.787 14.717 5.58 13.51c-.603-.603-1.508-.603-2.111 0l-.15.15c-.604.604-.604 1.51 0 2.112l1.206 1.207"
                                stroke="#404145" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round">
                            </path>
                            <path d="M4.147 17.356 21.492 34.7l6.032 3.017-3.016-6.033L7.164 14.34l-3.017 3.016Z"
                                fill="#fff" stroke="#404145" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linejoin="round"></path>
                            <path d="M24.508 31.684 21.492 34.7M9.426 16.602 4.147 21.88M1.885 19.618l7.541 7.541"
                                stroke="#404145" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-center">Trouvez des correspondances</h3>
                    <p class="text-gray-600 text-center">Parcourez les profils ou utilisez notre système de mise en relation pour
                        trouver les compétences dont vous avez besoin.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-400">
                    <div class="flex items-center justify-center mx-auto mb-6">
                        <svg width="64" height="64" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="animate-pulse-slow">
                            <path
                                d="M17.102 33.205c8.893 0 16.103-7.21 16.103-16.103S25.995 1 17.102 1 1 8.21 1 17.102c0 8.893 7.21 16.103 16.102 16.103zM9.5 7.23c2.738-2.256 6.256-3.246 9.562-2.562"
                                stroke="#404145" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round">
                            </path>
                            <path
                                d="M29.44 33.518 39.482 43.56c.586.587 1.466.587 2.052 0l1.026-1.026c.587-.586.587-1.466 0-2.052L32.518 30.44c-.586-.587-1.466-.587-2.052 0l-1.026 1.026c-.587.586-.587 1.466 0 2.052z"
                                fill="#7dd3fc" stroke="#404145" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="m29.753 30.523-1.687-1.687" stroke="#404145" stroke-width="1.5"
                                stroke-miterlimit="10" stroke-linecap="round"></path>
                            <path
                                d="M38.57 21.703v1.534m0 1.533v1.533m-.766-2.299H36.27m4.6 0h-1.533m3.6 4.598v1.533m0 1.533v1.534m-.767-2.3h-1.533m4.6 0h-1.533m-24.302 5.371v1.534m0 1.533v1.533m-.767-2.299h-1.533m4.6 0h-1.534"
                                stroke="#C5C6C9" stroke-width="1.5" stroke-miterlimit="10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-center">Échangez et collaborez</h3>
                    <p class="text-gray-600 text-center">Établissez les termes de votre échange, collaborez et développez votre
                        réseau professionnel.</p>
                </div>
            </div>

            <div class="mt-12 text-center reveal animate-delay-600">
                <a href="#" class="bg-primary-800 text-white px-8 py-4 rounded-full font-semibold hover:bg-primary-700 transition-all duration-300 inline-block hover:scale-105 shine">
                    Commencer maintenant
                </a>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section class="pb-8 pt-6 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-3xl mt-10 font-bold mb-6 reveal">Explorez nos services les plus populaires</h2>
                    <p class="text-lg text-gray-600 mb-8 reveal animate-delay-200">Parcourez notre sélection des services les plus demandés et
                        découvrez les talents de notre communauté.</p>
                    <div class="grid grid-cols-2 gap-4 reveal animate-delay-300">
                        <div class="overflow-hidden rounded-2xl shadow-md group">
                            <img src="./images/photographer.png" alt="Développeur travaillant sur un ordinateur"
                                class="rounded-2xl shadow-md h-auto w-full object-cover aspect-[4/3] group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-2xl shadow-md group">
                            <img src="./images/waiter.png" alt="Designer créant une maquette"
                                class="rounded-2xl shadow-md h-auto w-full object-cover aspect-[4/3] group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-2xl shadow-md group">
                            <img src="./images/marketing.png" alt="Réunion d'affaires"
                                class="rounded-2xl shadow-md h-auto w-full object-cover aspect-[4/3] group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-2xl shadow-md group">
                            <img src="./images/computer.png" alt="Musicien jouant du piano"
                                class="rounded-2xl shadow-md h-auto w-full object-cover aspect-[4/3] group-hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg mt-48 reveal animate-delay-400">
                    <div class="mb-5 reveal">
                        <div class="flex items-center mb-5 group">
                            <div class="bg-secondary-100 rounded-full p-2 mr-3 group-hover:bg-secondary-200 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-secondary-900" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold group-hover:text-primary-600 transition-colors">Développement Web & Mobile</h3>
                        </div>
                        <p class="text-gray-600 pl-11">Création de sites web, applications mobiles et solutions
                            e-commerce personnalisées.</p>
                    </div>

                    <div class="mb-8 reveal animate-delay-200">
                        <div class="flex items-center mb-5 group">
                            <div class="bg-secondary-100 rounded-full p-2 mr-3 group-hover:bg-secondary-200 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-secondary-900" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold group-hover:text-primary-600 transition-colors">Design Graphique & UX/UI</h3>
                        </div>
                        <p class="text-gray-600 pl-11">Création d'identités visuelles, interfaces utilisateur et
                            expériences digitales innovantes.</p>
                    </div>

                    <div class="mb-8 reveal animate-delay-300">
                        <div class="flex items-center mb-5 group">
                            <div class="bg-secondary-100 rounded-full p-2 mr-3 group-hover:bg-secondary-200 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-secondary-900" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold group-hover:text-primary-600 transition-colors">Marketing Digital & SEO</h3>
                        </div>
                        <p class="text-gray-600 pl-11">Stratégies de marketing en ligne, référencement et campagnes
                            publicitaires ciblées.</p>
                    </div>

                    <div class="reveal animate-delay-400">
                        <div class="flex items-center mb-5 group">
                            <div class="bg-secondary-100 rounded-full p-2 mr-3 group-hover:bg-secondary-200 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-secondary-900" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold group-hover:text-primary-600 transition-colors">Coaching & Formation</h3>
                        </div>
                        <p class="text-gray-600 pl-11">Accompagnement personnalisé et formations dans divers domaines
                            professionnels.</p>
                    </div>

                    <div class="mt-10 reveal animate-delay-500">
                        <a href="#" class="bg-secondary-900 text-white py-4 px-6 rounded-full font-semibold hover:bg-secondary-800 transition-all duration-300 inline-block hover:scale-105 shine">
                            Explorer tous les services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile App Section -->
    <section id="how-it-works" class="py-16 md:py-24 bg-[#F1F1F1]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8"> 
            <div class="mt-16 bg-white rounded-2xl shadow-card overflow-hidden reveal">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center reveal">
                        <h3 class="text-2xl font-bold text-neutral-900 mb-4">Découvrez notre application mobile</h3>
                        <p class="text-neutral-600 mb-6">Accédez à SkillSwap où que vous soyez et restez connecté avec notre communauté. Recevez des notifications en temps réel et gérez vos échanges facilement.</p>
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 reveal animate-delay-200">
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-neutral-900 hover:bg-neutral-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500 transition-all duration-300 hover:scale-105">
                                <svg class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.9766 2.125C10.1016 2.125 9.375 2.5 8.875 3C8.375 3.5 8.125 4.125 8 4.625C7.875 5.125 7.875 5.5 7.875 5.5H5.5C4.8125 5.5 4.25 6.0625 4.25 6.75V15.75C4.25 16.4375 4.8125 17 5.5 17H14.5C15.1875 17 15.75 16.4375 15.75 15.75V6.75C15.75 6.0625 15.1875 5.5 14.5 5.5H12.125C12.125 5.5 12.125 5.125 12 4.625C11.875 4.125 11.625 3.5 11.125 3C10.625 2.5 9.8516 2.125 9.0234 2.125H10.9766ZM10.9766 3.375C10.4766 3.375 10.125 3.5 9.875 3.75C9.625 4 9.5 4.375 9.375 4.75C9.25 5.125 9.25 5.5 9.25 5.5H12.125C12.125 5.5 12.125 5.125 12 4.75C11.875 4.375 11.75 4 11.5 3.75C11.25 3.5 10.8516 3.375 10.3516 3.375H10.9766ZM10 7.375C12.0703 7.375 13.75 9.05469 13.75 11.125C13.75 13.1953 12.0703 14.875 10 14.875C7.92969 14.875 6.25 13.1953 6.25 11.125C6.25 9.05469 7.92969 7.375 10 7.375ZM10 8.625C8.625 8.625 7.5 9.75 7.5 11.125C7.5 12.5 8.625 13.625 10 13.625C11.375 13.625 12.5 12.5 12.5 11.125C12.5 9.75 11.375 8.625 10 8.625Z"/>
                                </svg>
                                App Store
                            </a>
                            <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-neutral-900 hover:bg-neutral-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500 transition-all duration-300 hover:scale-105">
                                <svg class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M3.3125 2.5C2.75 2.5 2.5 2.75 2.5 3.3125V16.6875C2.5 17.25 2.75 17.5 3.3125 17.5H16.6875C17.25 17.5 17.5 17.25 17.5 16.6875V3.3125C17.5 2.75 17.25 2.5 16.6875 2.5H3.3125ZM9.6875 4.375L14.0625 8.75L9.6875 13.125V10.625H5.9375V6.875H9.6875V4.375Z"/>
                                </svg>
                                Google Play
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2 bg-neutral-100 p-8 md:p-0 flex items-center justify-center reveal animate-delay-400">
                        <div class="relative w-64 h-96 md:w-80 md:h-[30rem]">
                            <div class="absolute top-0 left-0 w-full h-full bg-neutral-600 rounded-3xl transform rotate-3 shadow-lg"></div>
                            <div class="absolute top-0 left-0 w-full h-full bg-white rounded-3xl transform -rotate-3 shadow-lg overflow-hidden animate-float">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0mh4zjI7ajYqO3wGBRBreS9ju889Ay.png" alt="SkillSwap Mobile App" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 md:py-24 bg-white" id="tarifs">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Nos formules SkillSwap</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Choisissez le plan qui correspond le mieux à vos besoins</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-lg transition-all duration-500 hover:-translate-y-2 relative reveal">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-secondary-100 text-secondary-900 font-semibold px-4 py-1 rounded-full text-sm">
                        Populaire
                    </div>
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-2">Débutant</h3>
                        <div class="flex justify-center items-baseline mb-4">
                            <span class="text-4xl font-bold">€0</span>
                            <span class="text-gray-500 ml-1">/mois</span>
                        </div>
                        <p class="text-gray-600">Parfait pour découvrir la plateforme</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Profil de base</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>5 échanges par mois</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Messagerie de base</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            <span>Profil vérifié</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            <span>Support prioritaire</span>
                        </li>
                    </ul>
                    
                    <div class="text-center">
                        <a href="#" class="border border-secondary-900 text-secondary-900 px-6 py-3 rounded-full font-semibold hover:bg-secondary-900 hover:text-white transition-all duration-300 inline-block w-full hover:scale-105">
                            S'inscrire gratuitement
                        </a>
                    </div>
                </div>
                
                <div class="bg-white border-2 border-secondary-900 rounded-2xl p-8 shadow-lg relative z-10 transform md:-translate-y-4 hover:shadow-xl transition-all duration-500 hover:-translate-y-6 reveal animate-delay-200">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-secondary-100 text-secondary-900 font-semibold px-4 py-1 rounded-full text-sm">
                        Recommandé
                    </div>
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-2">Pro</h3>
                        <div class="flex justify-center items-baseline mb-4">
                            <span class="text-4xl font-bold">€19</span>
                            <span class="text-gray-500 ml-1">/mois</span>
                        </div>
                        <p class="text-gray-600">Idéal pour les professionnels actifs</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Profil premium</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Échanges illimités</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Messagerie avancée</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Profil vérifié</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Support prioritaire</span>
                        </li>
                    </ul>
                    
                    <div class="text-center">
                        <a href="#" class="bg-secondary-900 text-white px-6 py-3 rounded-full font-semibold hover:bg-secondary-800 transition-all duration-300 inline-block w-full hover:scale-105 shine">
                            Commencer l'essai gratuit
                        </a>
                    </div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-400">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-2">Entreprise</h3>
                        <div class="flex justify-center items-baseline mb-4">
                            <span class="text-4xl font-bold">€49</span>
                            <span class="text-gray-500 ml-1">/mois</span>
                        </div>
                        <p class="text-gray-600">Pour les équipes et entreprises</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Tout ce qui est inclus dans Pro</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>5 utilisateurs inclus</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Gestion d'équipe</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Statistiques avancées</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-900 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Support dédié 24/7</span>
                        </li>
                    </ul>
                    
                    <div class="text-center">
                        <a href="#" class="border border-secondary-900 text-secondary-900 px-6 py-3 rounded-full font-semibold hover:bg-secondary-900 hover:text-white transition-all duration-300 inline-block w-full hover:scale-105">
                            Contacter les ventes
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between mb-12">
                <div class="md:w-1/2 mb-8 md:mb-0 reveal">
                    <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">Explore Top Services</h2>
                    <p class="text-lg text-neutral-600 max-w-2xl mb-7">Browse through our most popular skills and services offered by our community members.</p>
                </div>
                <div class="md:w-1/2 flex justify-end reveal animate-delay-200">
                    <div class="relative w-full max-w-md">
                        <input type="text" placeholder="Rechercher une compétence..." class="w-full px-4 py-3 pl-10 pr-12 rounded-full border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-neutral-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <button class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="h-5 w-5 text-primary-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <div class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal">
                    <div class="relative h-48 overflow-hidden">
                        <img src="./images/dev.png" alt="Développement Web" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white">Développement Web</h3>
                                <p class="text-white/80 text-sm">42 experts disponibles</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Category 2 -->
                <div class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-200">
                    <div class="relative h-48 overflow-hidden">
                        <img src="images/designer.png" alt="Design Graphique" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white">Design Graphique</h3>
                                <p class="text-white/80 text-sm">38 experts disponibles</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Category 3 -->
                <div class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-400">
                    <div class="relative h-48 overflow-hidden">
                        <img src="./images/singer.jpeg" alt="Musique" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white">Musique</h3>
                                <p class="text-white/80 text-sm">56 experts disponibles</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Category 4 -->
                <div class="group bg-white rounded-2xl shadow-card overflow-hidden hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-600">
                    <div class="relative h-48 overflow-hidden">
                        <img src="./images/cuisinier.jpeg" alt="Cuisine" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white">Cuisine</h3>
                                <p class="text-white/80 text-sm">29 experts disponibles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center reveal animate-delay-800">
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-primary-600 hover:bg-primary-700 transition-all duration-300 hover:scale-105 shine">
                    Découvrir toutes les catégories
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 md:py-24 bg-neutral-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">Tout commence par un simple professionnel</h2>
                <p class="text-lg text-neutral-600 max-w-3xl mx-auto">Découvrez ce que nos utilisateurs disent de leur expérience</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl shadow-card p-8 hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal">
                    <div class="flex items-center mb-6">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0mh4zjI7ajYqO3wGBRBreS9ju889Ay.png" alt="Sophie Martin" class="h-12 w-12 rounded-full mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-neutral-900">Sophie Martin</h3>
                            <p class="text-neutral-600">Graphiste freelance</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-neutral-700 mb-4">"Grâce à SkillSwap, j'ai pu améliorer mes compétences en développement web en échange de cours de design graphique. La plateforme est intuitive et la communauté est vraiment bienveillante. Je recommande vivement !"</p>
                    <div class="text-sm text-neutral-500">Il y a 2 semaines</div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl shadow-card p-8 hover:shadow-lg transition-all duration-500 hover:-translate-y-2 reveal animate-delay-200">
                    <div class="flex items-center mb-6">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0mh4zjI7ajYqO3wGBRBreS9ju889Ay.png" alt="Thomas Dubois" class="h-12 w-12 rounded-full mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-neutral-900">Thomas Dubois</h3>
                            <p class="text-neutral-600">Professeur de musique</p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-neutral-700 mb-4">"J'ai pu partager ma passion pour la musique tout en apprenant la photographie. Le système de mise en relation est efficace et j'ai rencontré des personnes formidables. SkillSwap a vraiment changé ma façon d'apprendre !"</p>
                    <div class="text-sm text-neutral-500">Il y a 1 mois</div>
                </div>
            </div>
            
            <div class="mt-12 text-center reveal animate-delay-400">
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-neutral-300 text-base font-medium rounded-full shadow-sm text-neutral-700 bg-white hover:bg-neutral-50 transition-all duration-300 hover:scale-105">
                    Voir tous les témoignages
                    <svg class="ml-2 -mr-1 h-5 w-5 animate-bounce-slow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    @include('footer')

    <!-- Back to top button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-primary-600 text-white rounded-full p-3 shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md');
                navbar.classList.remove('bg-white/90');
                navbar.classList.add('bg-white');
            } else {
                navbar.classList.remove('shadow-md');
                navbar.classList.add('bg-white/90');
                navbar.classList.remove('bg-white');
            }
        });

        // Scroll reveal animation
        const revealElements = document.querySelectorAll('.reveal');
        
        function checkReveal() {
            const windowHeight = window.innerHeight;
            const revealPoint = 150;
            
            revealElements.forEach(element => {
                const revealTop = element.getBoundingClientRect().top;
                
                if (revealTop < windowHeight - revealPoint) {
                    element.classList.add('active');
                }
            });
        }
        
        window.addEventListener('scroll', checkReveal);
        window.addEventListener('load', checkReveal);

        // Parallax effect
        const parallaxElements = document.querySelectorAll('.parallax');
        
        window.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth - 0.5;
            const mouseY = e.clientY / window.innerHeight - 0.5;
            
            parallaxElements.forEach(element => {
                const speed = element.getAttribute('data-speed') || 0.05;
                const x = mouseX * 100 * speed;
                const y = mouseY * 100 * speed;
                
                element.style.transform = `translate(${x}px, ${y}px)`;
            });
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible');
                backToTopButton.classList.remove('opacity-100', 'visible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Add hover effect to service cards
        const serviceCards = document.querySelectorAll('.group');
        
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('scale-105');
                setTimeout(() => {
                    card.classList.remove('scale-105');
                }, 300);
            });
        });
    </script>
</body>
</html>