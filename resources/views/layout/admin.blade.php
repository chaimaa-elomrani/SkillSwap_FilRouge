<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        /* Custom dropdown behavior */
        .dropdown-content {
            display: none;
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.2s, transform 0.2s;
        }
        
        .dropdown:hover .dropdown-content,
        .dropdown:focus-within .dropdown-content {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Mobile menu toggle */
        #mobile-menu {
            display: none;
        }
        
        #mobile-menu.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Admin Header -->
    <header class="sticky top-0 z-50 w-full border-b bg-white shadow-sm">
        <div class="container mx-auto px-4 h-16 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <a href="#" class="flex items-center">
                    <div class="flex h-6 w-6 items-center justify-center ">
                       <img src="./images/logo.png" alt="">
                    </div>
                    <span class="ml-2 text-lg font-semibold text-gray-800">AdminPanel</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-1">
                <a href="#" class="flex h-10 items-center rounded-md px-4 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                    Dashboard
                </a>
                <a href="#" class="flex h-10 items-center rounded-md px-4 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                    Users
                </a>
                <a href="#" class="flex h-10 items-center rounded-md px-4 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                    Analytics
                </a>
                <a href="#" class="flex h-10 items-center rounded-md px-4 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                    Transactions
                </a>
                <a href="#" class="flex h-10 items-center rounded-md px-4 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                    Settings
                </a>
            </nav>

            <!-- Search (Desktop) -->
            <div class="hidden md:flex md:w-1/3 lg:w-1/4 mx-4">
                <div class="relative w-full">
                    <i class="bx bx-search absolute left-2.5 top-2.5 text-gray-500"></i>
                    <input 
                        type="search" 
                        placeholder="Search..." 
                        class="w-full h-10 px-8 py-2 bg-gray-50 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                </div>
            </div>

            <!-- Right Side Elements -->
            <div class="flex items-center gap-2">
                <!-- Quick Action Button -->
                <div class="dropdown relative">
                    <button class="flex items-center justify-center h-9 w-9 rounded-full border border-blue-200 text-blue-600 hover:bg-blue-50 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <i class="bx bx-plus text-lg"></i>
                        <span class="sr-only">Quick Actions</span>
                    </button>
                    <div class="dropdown-content absolute right-0 mt-2 w-56 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
                        <div class="py-1">
                            <div class="px-4 py-2 text-sm font-medium text-gray-700">Quick Actions</div>
                            <div class="h-px bg-gray-200 my-1"></div>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                <i class="bx bx-user mr-2"></i>
                                <span>New User</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                <i class="bx bx-credit-card mr-2"></i>
                                <span>New Transaction</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                <i class="bx bx-bar-chart-alt-2 mr-2"></i>
                                <span>Generate Report</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Notifications -->
                <div class="dropdown relative">
                    <button class="flex items-center justify-center h-9 w-9 rounded-full border border-blue-200 text-blue-600 hover:bg-blue-50 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 relative">
                        <i class="bx bx-bell text-lg"></i>
                        <span class="absolute -top-1 -right-1 flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-[10px] font-medium text-white">3</span>
                        <span class="sr-only">Notifications</span>
                    </button>
                    <div class="dropdown-content absolute right-0 mt-2 w-80 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
                        <div class="py-1">
                            <div class="px-4 py-2 text-sm font-medium text-gray-700">Notifications</div>
                            <div class="h-px bg-gray-200 my-1"></div>
                            
                            <!-- Notification Item 1 -->
                            <div class="px-4 py-2 hover:bg-blue-50">
                                <div class="flex w-full justify-between">
                                    <span class="font-medium text-sm">New user registered</span>
                                    <span class="text-xs text-gray-500">2h ago</span>
                                </div>
                                <span class="text-sm text-gray-500">John Doe created a new account</span>
                            </div>
                            
                            <!-- Notification Item 2 -->
                            <div class="px-4 py-2 hover:bg-blue-50">
                                <div class="flex w-full justify-between">
                                    <span class="font-medium text-sm">New transaction</span>
                                    <span class="text-xs text-gray-500">4h ago</span>
                                </div>
                                <span class="text-sm text-gray-500">Payment of $1,200 was received</span>
                            </div>
                            
                            <!-- Notification Item 3 -->
                            <div class="px-4 py-2 hover:bg-blue-50">
                                <div class="flex w-full justify-between">
                                    <span class="font-medium text-sm">System update</span>
                                    <span class="text-xs text-gray-500">1d ago</span>
                                </div>
                                <span class="text-sm text-gray-500">The system has been updated to version 2.4.0</span>
                            </div>
                            
                            <div class="h-px bg-gray-200 my-1"></div>
                            <a href="#" class="block px-4 py-2 text-center text-sm text-blue-600 hover:bg-blue-50">
                                View all notifications
                            </a>
                        </div>
                    </div>
                </div>

                <!-- User Profile -->
                <div class="dropdown relative">
                    <button class="flex items-center h-8 gap-2 rounded-full pl-1 pr-2 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center overflow-hidden border border-blue-200">
                            <span class="text-blue-600 font-medium">JD</span>
                        </div>
                        <span class="hidden text-sm font-medium md:inline-flex">John Doe</span>
                        <i class="bx bx-chevron-down text-gray-500"></i>
                    </button>
                    <div class="dropdown-content absolute right-0 mt-2 w-56 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
                        <div class="py-1">
                            <div class="px-4 py-2 text-sm font-medium text-gray-700">My Account</div>
                            <div class="h-px bg-gray-200 my-1"></div>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                <i class="bx bx-user mr-2"></i>
                                <span>Profile</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                <i class="bx bx-cog mr-2"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                <i class="bx bx-help-circle mr-2"></i>
                                <span>Help & Support</span>
                            </a>
                            <div class="h-px bg-gray-200 my-1"></div>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                <i class="bx bx-log-out mr-2"></i>
                                <span>Log out</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Trigger -->
                <button id="mobile-menu-button" class="ml-2 md:hidden flex items-center justify-center h-9 w-9 rounded-full border border-blue-200 text-blue-600 hover:bg-blue-50 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <i class="bx bx-menu text-lg"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden bg-white border-t shadow-lg">
            <div class="px-4 py-4 space-y-4">
                <!-- Mobile Search -->
                <div class="relative">
                    <i class="bx bx-search absolute left-2.5 top-2.5 text-gray-500"></i>
                    <input 
                        type="search" 
                        placeholder="Search..." 
                        class="w-full h-10 px-8 py-2 bg-gray-50 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                </div>
                
                <!-- Mobile Navigation -->
                <nav class="flex flex-col space-y-1">
                    <a href="#" class="flex items-center rounded-md px-3 py-2 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                        <i class="bx bx-layout mr-2"></i>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center rounded-md px-3 py-2 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                        <i class="bx bx-user mr-2"></i>
                        Users
                    </a>
                    <a href="#" class="flex items-center rounded-md px-3 py-2 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                        <i class="bx bx-bar-chart-alt-2 mr-2"></i>
                        Analytics
                    </a>
                    <a href="#" class="flex items-center rounded-md px-3 py-2 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                        <i class="bx bx-credit-card mr-2"></i>
                        Transactions
                    </a>
                    <a href="#" class="flex items-center rounded-md px-3 py-2 text-sm font-medium transition-colors hover:bg-blue-50 hover:text-blue-600">
                        <i class="bx bx-cog mr-2"></i>
                        Settings
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
        });
    </script>
</body>
</html>