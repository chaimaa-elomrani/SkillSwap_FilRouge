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
                    <a href="{{route('explore')}}" class="text-neutral-700 hover:text-primary-600 transition-colors">Explore</a>
                    <a href="#" class="text-neutral-700 hover:text-primary-600 transition-colors">Contact</a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{route('login')}}" class="hidden md:inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-primary-600 bg-primary-50 hover:bg-primary-100 transition-colors">
                        Login
                    </a>
                    <a href="{{route("register")}}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-primary-600 hover:bg-primary-700 transition-colors">
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
                <a href="#fonctionnement" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Comment ça marche</a>
                <a href="#tarifs" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Tarifs</a>
                <a href="#testimonials" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Témoignages</a>
                <a href="#" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Contact</a>
                <a href="#" class="block py-2 text-neutral-700 hover:text-primary-600 transition-colors">Log in</a>
            </div>
        </div>
    </nav>
