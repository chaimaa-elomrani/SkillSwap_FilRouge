<header class="  shadow-full sticky top-0 z-50"></header>
<div class="container mx-auto px-4 py-3 bg-white">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="" class="flex items-center">
                        <img src=" {{ asset('images/logo.png') }}" alt="SkillSwap Logo" class="h-8 w-auto mr-2">
                        <span class="text-xl font-bold text-primary-600">SkillSwap</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <nav class="hidden md:flex space-x-6">
                    <a href="{{ route('domains.index') }}" class="text-gray-700 hover:text-primary-600 transition-colors duration-200">
                        Domains
                    </a>
                    <a href="{{ route('posts.index') }}" class="text-gray-700 hover:text-primary-600 transition-colors duration-200">
                       Create Posts
                    </a>
                    <a href="" class="text-gray-700 hover:text-primary-600 transition-colors duration-200">
                        Community
                    </a>
                    <a href="" class="text-gray-700 hover:text-primary-600 transition-colors duration-200">
                        Dashboard
                    </a>
                </nav>

                <!-- Right Side Menu -->
                <div class="flex items-center space-x-4">
                    <!-- Search Icon -->
                    <button class="text-gray-600 hover:text-primary-600 transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>

                    <!-- Notification Icon with Badge -->
                    <div class="relative">
                        <button class="text-gray-600 hover:text-primary-600 transition-colors duration-200"
                            id="notification-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span id="notification-badge"
                                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">
                                0
                            </span>
                        </button>
                    </div>
                    @auth
                        <!-- User Dropdown -->
                        <div class="relative">
                            <button id="dropdownButton" class="flex items-center space-x-2 focus:outline-none">
                                <img src="{{ asset('images/' . auth()->user()->profile->image) }}" alt="Profile"
                                    class="h-8 w-8 rounded-full object-cover border border-gray-200">
                                <span
                                    class="hidden md:block text-sm font-medium text-gray-700">{{ auth()->user()->profile->name }}</span>
                                    <a href="{{ route('profile.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-gray-500 transform transition-transform duration-200" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                                </a>
                            </button>

                            <div id="dropdownMenu"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden">
                                <a href="{{ route('profile.show') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Profile
                                </a>
                                <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Requests
                                    <span 
                                        class="inline-block bg-primary-100 text-primary-800 text-xs px-2 rounded-full ml-2">
                                        
                                    </span>
                                </a>
                                <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Settings
                                </a>
                                <div class="border-t border-gray-100 my-1"></div>
                                <form method="POST" action="">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Sign out
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <!-- Login/Register -->
                        <a href="{{ route('login') }}" class="text-sm font-medium text-primary-600 hover:text-primary-700">
                            Log in
                        </a>
                        <a href="{{ route('register') }}"
                            class="hidden md:inline-block px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-md hover:bg-primary-700 transition-colors duration-200">
                            Sign up
                        </a>



                    @endauth

                </div>
            </div>
        </div>

        </header>

<script>
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>