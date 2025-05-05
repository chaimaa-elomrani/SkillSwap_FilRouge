<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Navigation Bar with Hover Effects</title>
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
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3af',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1f2937',
                            900: '#0f172a',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.2s ease-out forwards',
                        'slide-down': 'slideDown 0.3s ease-out forwards',
                        'slide-up': 'slideUp 0.2s ease-out forwards',
                        'scale-in': 'scaleIn 0.2s ease-out forwards',
                        'bounce-in': 'bounceIn 0.3s ease-out forwards',
                        'rotate-in': 'rotateIn 0.3s ease-out forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideDown: {
                            '0%': { transform: 'translateY(-10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        scaleIn: {
                            '0%': { transform: 'scale(0.95)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                        bounceIn: {
                            '0%': { transform: 'scale(0.8)', opacity: '0' },
                            '50%': { transform: 'scale(1.05)' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                        rotateIn: {
                            '0%': { transform: 'rotateX(-10deg)', opacity: '0' },
                            '100%': { transform: 'rotateX(0)', opacity: '1' },
                        },
                    },
                    boxShadow: {
                        'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
                        'hover': '0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1)',
                        'dropdown': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
                    },
                    transitionProperty: {
                        'height': 'height',
                        'spacing': 'margin, padding',
                    }
                }
            }
        }
    </script>
    <style type="text/css">
        /* Custom styles that are difficult to achieve with Tailwind alone */
        .dropdown-menu {
            transform-origin: top center;
            perspective: 1000px;
            backface-visibility: hidden;
        }
        
        .nav-indicator {
            position: absolute;
            height: 3px;
            bottom: -2px;
            left: 0;
            background-color: #0ea5e9;
            transition: all 0.3s ease;
            border-radius: 3px;
        }
        
        .menu-item:hover .menu-icon {
            transform: translateY(-2px);
        }
        
        .mega-menu-container {
            clip-path: inset(0 0 100% 0);
            transition: clip-path 0.3s ease;
        }
        
        .mega-menu-active .mega-menu-container {
            clip-path: inset(0 0 0 0);
        }
        
        .dropdown-arrow {
            transition: transform 0.3s ease;
        }
        
        .dropdown-active .dropdown-arrow {
            transform: rotate(180deg);
        }
        
        /* Fancy hover effect for menu items */
        .fancy-hover-item {
            position: relative;
            z-index: 1;
            transition: color 0.3s ease;
        }
        
        .fancy-hover-item::before {
            content: '';
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            transform: scale(0.95);
            width: 100%;
            height: 100%;
            opacity: 0;
            background-color: #f0f9ff;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .fancy-hover-item:hover::before {
            opacity: 1;
            transform: scale(1);
        }
        
        /* Staggered animation for dropdown items */
        .stagger-item {
            opacity: 0;
            transform: translateY(10px);
        }
        
        .dropdown-visible .stagger-item {
            animation: staggerFadeIn 0.3s ease forwards;
        }
        
        .dropdown-visible .stagger-item:nth-child(1) { animation-delay: 0.05s; }
        .dropdown-visible .stagger-item:nth-child(2) { animation-delay: 0.1s; }
        .dropdown-visible .stagger-item:nth-child(3) { animation-delay: 0.15s; }
        .dropdown-visible .stagger-item:nth-child(4) { animation-delay: 0.2s; }
        .dropdown-visible .stagger-item:nth-child(5) { animation-delay: 0.25s; }
        .dropdown-visible .stagger-item:nth-child(6) { animation-delay: 0.3s; }
        
        @keyframes staggerFadeIn {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Mobile menu animations */
        .mobile-menu {
            transition: transform 0.3s ease, opacity 0.3s ease;
            transform: translateY(-10px);
            opacity: 0;
            pointer-events: none;
        }
        
        .mobile-menu.active {
            transform: translateY(0);
            opacity: 1;
            pointer-events: auto;
        }
        
        /* Hamburger menu animation */
        .hamburger-line {
            transition: all 0.3s ease;
        }
        
        .hamburger.active .hamburger-line:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }
        
        .hamburger.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active .hamburger-line:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
        
        /* Fix for resources dropdown overflow */
        body {
            overflow-x: hidden;
        }
        
        #resources-dropdown {
            max-width: 100vw;
            left: 130%;
            transform: translateX(-50%) translateY(-10px);
        }
        
        #resources-dropdown.dropdown-visible {
            transform: translateX(-50%) translateY(0);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header with Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50 transition-all duration-300" id="main-header">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <div class="flex items-center">
                        <a href="#" class="flex items-center space-x-2">
                           <img src="./images/logo.png" alt="logo" class="w-8 h-8">
                            <span class="text-xl font-bold text-neutral-900">Skill<span class="text-primary-600">Swap</span></span>
                        </a>
                    </div>  
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-1 relative">
                    <div class="nav-indicator" id="nav-indicator"></div>
                    
                    <!-- Engagement Dropdown -->
                    <div class="relative group nav-item" data-dropdown="engagement-dropdown">
                        <button class="px-4 py-2 text-secondary-700 rounded-md group-hover:text-primary-600 transition-colors duration-200 flex items-center" 
                                aria-expanded="false"
                                aria-haspopup="true">
                            Engagement
                            <svg class="ml-1 h-4 w-4 text-secondary-400 group-hover:text-primary-500 transition-colors duration-200 dropdown-arrow" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        
                        <!-- Engagement Dropdown Menu -->
                        <div class="absolute left-0 mt-2 w-56 rounded-md shadow-dropdown bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible transition-all duration-300 transform origin-top-left dropdown-menu z-20" id="engagement-dropdown">
                            <div class="py-2 px-3 divide-y divide-gray-100">
                                <div class="pb-2">
                                    <h3 class="text-xs font-semibold text-secondary-400 uppercase tracking-wider mb-2">Company</h3>
                                    <a href="#" class="stagger-item block px-3 py-2 rounded-md text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-700 fancy-hover-item">
                                        <div class="flex items-center">
                                            <svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-primary-500 transition-colors duration-200" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                            </svg>
                                            About
                                        </div>
                                    </a>
                                    <a href="#" class="stagger-item block px-3 py-2 rounded-md text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-700 fancy-hover-item">
                                        <div class="flex items-center">
                                            <svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-primary-500 transition-colors duration-200" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                            </svg>
                                            Customers
                                        </div>
                                    </a>
                                </div>
                                <div class="py-2">
                                    <h3 class="text-xs font-semibold text-secondary-400 uppercase tracking-wider mb-2">Resources</h3>
                                    <a href="#" class="stagger-item block px-3 py-2 rounded-md text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-700 fancy-hover-item">
                                        <div class="flex items-center">
                                            <svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-primary-500 transition-colors duration-200" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                            </svg>
                                            Press
                                        </div>
                                    </a>
                                    <a href="#" class="stagger-item block px-3 py-2 rounded-md text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-700 fancy-hover-item">
                                        <div class="flex items-center">
                                            <svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-primary-500 transition-colors duration-200" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                            </svg>
                                            Careers
                                        </div>
                                    </a>
                                    <a href="#" class="stagger-item block px-3 py-2 rounded-md text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-700 fancy-hover-item">
                                        <div class="flex items-center">
                                            <svg class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-primary-500 transition-colors duration-200" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            Privacy
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Resources Mega Menu -->
                    <div class="relative group nav-item" data-dropdown="resources-dropdown">
                        <button class="px-4 py-2 text-secondary-700 rounded-md group-hover:text-primary-600 transition-colors duration-200 flex items-center"
                                aria-expanded="false"
                                aria-haspopup="true">
                            Resources
                            <svg class="ml-1 h-4 w-4 text-secondary-400 group-hover:text-primary-500 transition-colors duration-200 dropdown-arrow" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        
                        <!-- Resources Mega Menu -->
                        <div class="absolute left-0 mt-2 w-[22rem]  -translate-x-1/2  px-4 sm:px-6 opacity-0 invisible transition-all duration-300 transform dropdown-menu z-20" id="resources-dropdown">
                            <div class="grid grid-cols-2 md:grid-cols-2 gap-6 bg-white p-6 rounded-lg shadow-dropdown ring-1 ring-black ring-opacity-5 mt-2">
                                <!-- Column 1 -->
                                <div>
                                    <h3 class="text-sm font-semibold text-secondary-900 mb-3">Documentation</h3>
                                    <ul class="space-y-2">
                                        <li class="stagger-item">
                                            <a href="#" class="text-sm text-secondary-700 hover:text-primary-600 flex items-center">
                                                <svg class="mr-2 h-5 w-5 text-secondary-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                                </svg>
                                                Guides
                                            </a>
                                        </li>
                                        <li class="stagger-item">
                                            <a href="#" class="text-sm text-secondary-700 hover:text-primary-600 flex items-center">
                                                <svg class="mr-2 h-5 w-5 text-secondary-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                                API Reference
                                            </a>
                                        </li>
                                        <li class="stagger-item">
                                            <a href="#" class="text-sm text-secondary-700 hover:text-primary-600 flex items-center">
                                                <svg class="mr-2 h-5 w-5 text-secondary-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                                </svg>
                                                Tutorials
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <!-- Column 2 -->
                                <div>
                                    <h3 class="text-sm font-semibold text-secondary-900 mb-3">Community</h3>
                                    <ul class="space-y-2">
                                        <li class="stagger-item">
                                            <a href="#" class="text-sm text-secondary-700 hover:text-primary-600 flex items-center">
                                                <svg class="mr-2 h-5 w-5 text-secondary-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                                                    <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                                                </svg>
                                                Forum
                                            </a>
                                        </li>
                                        <li class="stagger-item">
                                            <a href="#" class="text-sm text-secondary-700 hover:text-primary-600 flex items-center">
                                                <svg class="mr-2 h-5 w-5 text-secondary-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd" />
                                                </svg>
                                                Events
                                            </a>
                                        </li>
                                        <li class="stagger-item">
                                            <a href="#" class="text-sm text-secondary-700 hover:text-primary-600 flex items-center">
                                                <svg class="mr-2 h-5 w-5 text-secondary-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                                </svg>
                                                Webinars
                                            </a>
                                        </li>
                                    </ul>
                                </div>
        
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Simple Dropdown -->
                    <div class="relative group nav-item" data-dropdown="products-dropdown">
                        <button class="px-4 py-2 text-secondary-700 rounded-md group-hover:text-primary-600 transition-colors duration-200 flex items-center"
                                aria-expanded="false"
                                aria-haspopup="true">
                            Products
                            <svg class="ml-1 h-4 w-4 text-secondary-400 group-hover:text-primary-500 transition-colors duration-200 dropdown-arrow" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        
                        <!-- Products Dropdown Menu -->
                        <div class="absolute left-0 mt-2 w-48 rounded-md shadow-dropdown bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible transition-all duration-300 transform origin-top-left dropdown-menu z-20" id="products-dropdown">
                            <div class="py-1">
                                <a href="#" class="stagger-item block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Analytics</a>
                                <a href="#" class="stagger-item block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Automation</a>
                                <a href="#" class="stagger-item block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Customer Support</a>
                                <a href="#" class="stagger-item block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Marketing</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Regular Links -->
                    <a href="#" class="px-4 py-2 text-secondary-700 rounded-md hover:text-primary-600 transition-colors duration-200 nav-item">Pricing</a>
                    <a href="#" class="px-4 py-2 text-secondary-700 rounded-md hover:text-primary-600 transition-colors duration-200 nav-item">Contact</a>
                </nav>

                <!-- Right Side Navigation with Icons -->
                <div class="hidden md:flex items-center space-x-4">
                
                    
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center space-x-4">
                    <!-- Mobile Add Post Icon -->
                    <button class="text-secondary-700 hover:text-primary-600 transition-colors duration-200 p-2 rounded-full hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <span class="sr-only">Add Post</span>
                    </button>
                    
                    <!-- Mobile Notifications Icon -->
                    <button class="text-secondary-700 hover:text-primary-600 transition-colors duration-200 p-2 rounded-full hover:bg-gray-100 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="sr-only">Notifications</span>
                        <!-- Notification Badge -->
                        <span class="absolute top-1 right-1 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-red-500 rounded-full">3</span>
                    </button>
                    
                    <!-- Mobile Profile Icon -->
                    <button class="flex items-center text-secondary-700 hover:text-primary-600 transition-colors duration-200">
                        <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center overflow-hidden border border-primary-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </button>
                    
                    <button type="button" class="hamburger flex flex-col justify-center items-center w-10 h-10 rounded-md focus:outline-none" id="mobile-menu-button" aria-label="Menu">
                        <span class="hamburger-line w-6 h-0.5 bg-secondary-700 mb-1.5"></span>
                        <span class="hamburger-line w-6 h-0.5 bg-secondary-700 mb-1.5"></span>
                        <span class="hamburger-line w-6 h-0.5 bg-secondary-700"></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu md:hidden absolute w-full bg-white shadow-lg z-40" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Mobile Engagement Dropdown -->
                <div>
                    <button class="w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700" id="mobile-engagement-button">
                        Engagement
                        <svg class="h-5 w-5 text-secondary-400" viewBox="0 0 20 20" fill="currentColor" id="mobile-engagement-icon">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 space-y-1" id="mobile-engagement-dropdown">
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">About</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Customers</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Press</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Careers</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Privacy</a>
                    </div>
                </div>
                
                <!-- Mobile Resources Dropdown -->
                <div>
                    <button class="w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700" id="mobile-resources-button">
                        Resources
                        <svg class="h-5 w-5 text-secondary-400" viewBox="0 0 20 20" fill="currentColor" id="mobile-resources-icon">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 space-y-1" id="mobile-resources-dropdown">
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Guides</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">API Reference</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Tutorials</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Forum</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Events</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Webinars</a>
                    </div>
                </div>
                
                <!-- Mobile Products Dropdown -->
                <div>
                    <button class="w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700" id="mobile-products-button">
                        Products
                        <svg class="h-5 w-5 text-secondary-400" viewBox="0 0 20 20" fill="currentColor" id="mobile-products-icon">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="hidden px-4 py-2 space-y-1" id="mobile-products-dropdown">
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Analytics</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Automation</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Customer Support</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Marketing</a>
                    </div>
                </div>
                
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Pricing</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary-700 hover:bg-primary-50 hover:text-primary-700">Contact</a>
                
               
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const dropdownButtons = document.querySelectorAll('[data-dropdown]');
            
            dropdownButtons.forEach(button => {
                const dropdownId = button.getAttribute('data-dropdown');
                const dropdown = document.getElementById(dropdownId);
                
                button.addEventListener('mouseenter', () => {
                    dropdown.classList.add('dropdown-visible');
                    dropdown.style.opacity = '1';
                    dropdown.style.visibility = 'visible';
                    button.classList.add('dropdown-active');
                });
                
                button.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        if (!dropdown.matches(':hover')) {
                            dropdown.classList.remove('dropdown-visible');
                            dropdown.style.opacity = '0';
                            dropdown.style.visibility = 'hidden';
                            button.classList.remove('dropdown-active');
                        }
                    }, 100);
                });
                
                dropdown.addEventListener('mouseleave', () => {
                    dropdown.classList.remove('dropdown-visible');
                    dropdown.style.opacity = '0';
                    dropdown.style.visibility = 'hidden';
                    button.classList.remove('dropdown-active');
                });
            });
            
            // Mobile menu
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuButton.addEventListener('click', () => {
                mobileMenuButton.classList.toggle('active');
                mobileMenu.classList.toggle('active');
            });
            
            // Mobile dropdowns
            const mobileDropdownButtons = [
                document.getElementById('mobile-engagement-button'),
                document.getElementById('mobile-resources-button'),
                document.getElementById('mobile-products-button')
            ];
            
            const mobileDropdowns = [
                document.getElementById('mobile-engagement-dropdown'),
                document.getElementById('mobile-resources-dropdown'),
                document.getElementById('mobile-products-dropdown')
            ];
            
            const mobileIcons = [
                document.getElementById('mobile-engagement-icon'),
                document.getElementById('mobile-resources-icon'),
                document.getElementById('mobile-products-icon')
            ];
            
            mobileDropdownButtons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    mobileDropdowns[index].classList.toggle('hidden');
                    mobileIcons[index].classList.toggle('transform');
                    mobileIcons[index].classList.toggle('rotate-180');
                });
            });
        });
    </script>

    
</body>
</html>