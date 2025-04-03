<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkillSwap Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: {
              DEFAULT: '#6366f1',
              50: '#eef2ff',
              100: '#e0e7ff',
              200: '#c7d2fe',
              300: '#a5b4fc',
              400: '#818cf8',
              500: '#6366f1',
              600: '#4f46e5',
              700: '#4338ca',
              800: '#3730a3',
              900: '#312e81',
              950: '#1e1b4b',
            },
            secondary: {
              DEFAULT: '#14b8a6',
              50: '#f0fdfa',
              100: '#ccfbf1',
              200: '#99f6e4',
              300: '#5eead4',
              400: '#2dd4bf',
              500: '#14b8a6',
              600: '#0d9488',
              700: '#0f766e',
              800: '#115e59',
              900: '#134e4a',
              950: '#042f2e',
            },
          },
        },
      },
    }
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="fixed inset-y-0 left-0 w-64 bg-white dark:bg-gray-800 shadow-lg z-10 transition-all duration-300 ease-in-out transform" id="sidebar">
      <div class="flex flex-col h-full">
        <div class="p-4 border-b border-gray-200 dark:border-gray-700">
          <div class="flex items-center justify-center space-x-2">
            <div class="bg-gradient-to-r from-primary-500 to-secondary-500 p-2 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
              </svg>
            </div>
            <h1 class="text-xl font-semibold text-gray-800 dark:text-white">SkillSwap</h1>
          </div>
          <p class="text-xs text-center mt-1 text-gray-600 dark:text-gray-400">Admin Dashboard</p>
        </div>
        
        <nav class="flex-1 overflow-y-auto py-4">
          <ul class="space-y-1 px-3">
            <li class="font-medium text-sm text-gray-400 px-3 py-2 uppercase">Main</li>
            <li>
              <a href="index.html" class="flex items-center text-primary-600 dark:text-primary-400 px-3 py-2 rounded-md bg-primary-50 dark:bg-gray-700">
                <i class="fas fa-home w-5 h-5 mr-3"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="user-management.html" class="flex items-center text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md">
                <i class="fas fa-users w-5 h-5 mr-3"></i>
                <span>User Management</span>
              </a>
            </li>
            <li>
              <a href="skills-management.html" class="flex items-center text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md">
                <i class="fas fa-tools w-5 h-5 mr-3"></i>
                <span>Skills Management</span>
              </a>
            </li>
            <li>
              <a href="transactions.html" class="flex items-center text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md">
                <i class="fas fa-exchange-alt w-5 h-5 mr-3"></i>
                <span>Transactions</span>
              </a>
            </li>
            <li>
              <a href="content-moderation.html" class="flex items-center text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md">
                <i class="fas fa-shield-alt w-5 h-5 mr-3"></i>
                <span>Content Moderation</span>
              </a>
            </li>
            
            <li class="font-medium text-sm text-gray-400 px-3 py-2 mt-6 uppercase">Analytics</li>
            <li>
              <a href="analytics.html" class="flex items-center text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md">
                <i class="fas fa-chart-line w-5 h-5 mr-3"></i>
                <span>Performance</span>
              </a>
            </li>
            <li>
              <a href="reports.html" class="flex items-center text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md">
                <i class="fas fa-file-alt w-5 h-5 mr-3"></i>
                <span>Reports</span>
              </a>
            </li>
            
            <li class="font-medium text-sm text-gray-400 px-3 py-2 mt-6 uppercase">Settings</li>
            <li>
              <a href="settings.html" class="flex items-center text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md">
                <i class="fas fa-cog w-5 h-5 mr-3"></i>
                <span>General Settings</span>
              </a>
            </li>
            <li>
              <a href="credit-settings.html" class="flex items-center text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md">
                <i class="fas fa-coins w-5 h-5 mr-3"></i>
                <span>Credit System</span>
              </a>
            </li>
          </ul>
        </nav>
        
        <div class="p-4 border-t border-gray-200 dark:border-gray-700">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
              <img src="/placeholder.svg?height=40&width=40" alt="Admin" class="h-10 w-10 rounded-full object-cover border-2 border-primary-500">
              <div>
                <h3 class="text-sm font-medium text-gray-800 dark:text-white">Admin User</h3>
                <p class="text-xs text-gray-500 dark:text-gray-400">Super Admin</p>
              </div>
            </div>
            <button class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
              <i class="fas fa-sign-out-alt"></i>
            </button>
          </div>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 ml-64">
      <!-- Top Navigation -->
      <header class="bg-white dark:bg-gray-800 shadow-sm sticky top-0 z-10">
        <div class="flex items-center justify-between h-16 px-6">
          <div class="flex items-center space-x-4">
            <button id="sidebar-toggle" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
            <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Dashboard Overview</h2>
          </div>
          
          <div class="flex items-center space-x-4">
            <div class="relative">
              <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 w-64">
              <div class="absolute left-3 top-2.5 text-gray-400 dark:text-gray-500">
                <i class="fas fa-search"></i>
              </div>
            </div>
            
            <button id="theme-toggle" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" id="theme-toggle-dark-icon" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="theme-toggle-light-icon" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </button>
            
            <div class="relative">
              <button class="relative p-2 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
              </button>
            </div>
            
            <div class="relative">
              <button class="flex items-center space-x-2 focus:outline-none">
                <img src="/placeholder.svg?height=32&width=32" alt="Admin" class="h-8 w-8 rounded-full object-cover border-2 border-primary-500">
                <span class="hidden md:block text-sm font-medium text-gray-800 dark:text-white">Admin User</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </header>

      <!-- Page Content -->
      <main class="p-6">
        <!-- Alert Banner -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
          <div class="flex">
            <div class="flex-shrink-0">
              <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
              </svg>
            </div>
            <div class="ml-3">
              <p class="text-sm text-yellow-700">
                New feature alert: Credit system has been updated. <a href="#" class="font-medium underline text-yellow-700 hover:text-yellow-600">View changes</a>
              </p>
            </div>
            <div class="ml-auto pl-3">
              <div class="-mx-1.5 -my-1.5">
                <button class="inline-flex bg-yellow-50 rounded-md p-1.5 text-yellow-500 hover:bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                  <span class="sr-only">Dismiss</span>
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700 transition-all duration-200 hover:shadow-lg">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Users</p>
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mt-1">12,485</h3>
                <p class="text-xs flex items-center mt-2 text-green-600 dark:text-green-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                  </svg>
                  <span>23.5% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-primary-50 text-primary-600 dark:bg-primary-900/20 dark:text-primary-400">
                <i class="fas fa-users text-xl"></i>
              </div>
            </div>
          </div>
          
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700 transition-all duration-200 hover:shadow-lg">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Active Services</p>
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mt-1">3,897</h3>
                <p class="text-xs flex items-center mt-2 text-green-600 dark:text-green-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                  </svg>
                  <span>12.7% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-secondary-50 text-secondary-600 dark:bg-secondary-900/20 dark:text-secondary-400">
                <i class="fas fa-tools text-xl"></i>
              </div>
            </div>
          </div>
          
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700 transition-all duration-200 hover:shadow-lg">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Exchanges</p>
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mt-1">8,645</h3>
                <p class="text-xs flex items-center mt-2 text-green-600 dark:text-green-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                  </svg>
                  <span>18.2% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-purple-50 text-purple-600 dark:bg-purple-900/20 dark:text-purple-400">
                <i class="fas fa-exchange-alt text-xl"></i>
              </div>
            </div>
          </div>
          
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700 transition-all duration-200 hover:shadow-lg">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Premium Revenue</p>
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mt-1">$15,378</h3>
                <p class="text-xs flex items-center mt-2 text-red-600 dark:text-red-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                  </svg>
                  <span>3.4% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-red-50 text-red-600 dark:bg-red-900/20 dark:text-red-400">
                <i class="fas fa-dollar-sign text-xl"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
          <!-- User Activity Chart -->
          <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-white">User Activity</h3>
              <div class="flex items-center space-x-2">
                <button class="px-3 py-1 text-xs font-medium rounded-full bg-primary-100 text-primary-700 dark:bg-primary-900/30 dark:text-primary-400">Daily</button>
                <button class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 hover:bg-primary-100 hover:text-primary-700 dark:hover:bg-primary-900/30 dark:hover:text-primary-400">Weekly</button>
                <button class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 hover:bg-primary-100 hover:text-primary-700 dark:hover:bg-primary-900/30 dark:hover:text-primary-400">Monthly</button>
              </div>
            </div>
            <div>
              <canvas id="userActivityChart" height="280"></canvas>
            </div>
          </div>

          <!-- Recent Signups -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Recent Signups</h3>
              <a href="#" class="text-sm text-primary-600 dark:text-primary-400 hover:underline">View all</a>
            </div>
            <div class="space-y-4">
              <div class="flex items-center space-x-3">
                <img src="/placeholder.svg?height=40&width=40" alt="User" class="h-10 w-10 rounded-full object-cover">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-800 dark:text-white">Sarah Johnson</h4>
                  <p class="text-xs text-gray-500 dark:text-gray-400">Web Developer</p>
                </div>
                <span class="text-xs text-gray-500 dark:text-gray-400">2m ago</span>
              </div>
              <div class="flex items-center space-x-3">
                <img src="/placeholder.svg?height=40&width=40" alt="User" class="h-10 w-10 rounded-full object-cover">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-800 dark:text-white">Michael Chen</h4>
                  <p class="text-xs text-gray-500 dark:text-gray-400">UI/UX Designer</p>
                </div>
                <span class="text-xs text-gray-500 dark:text-gray-400">34m ago</span>
              </div>
              <div class="flex items-center space-x-3">
                <img src="/placeholder.svg?height=40&width=40" alt="User" class="h-10 w-10 rounded-full object-cover">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-800 dark:text-white">David Lee</h4>
                  <p class="text-xs text-gray-500 dark:text-gray-400">Content Writer</p>
                </div>
                <span class="text-xs text-gray-500 dark:text-gray-400">1h ago</span>
              </div>
              <div class="flex items-center space-x-3">
                <img src="/placeholder.svg?height=40&width=40" alt="User" class="h-10 w-10 rounded-full object-cover">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-800 dark:text-white">Olivia Martinez</h4>
                  <p class="text-xs text-gray-500 dark:text-gray-400">Photographer</p>
                </div>
                <span class="text-xs text-gray-500 dark:text-gray-400">3h ago</span>
              </div>
              <div class="flex items-center space-x-3">
                <img src="/placeholder.svg?height=40&width=40" alt="User" class="h-10 w-10 rounded-full object-cover">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-800 dark:text-white">James Wilson</h4>
                  <p class="text-xs text-gray-500 dark:text-gray-400">Video Editor</p>
                </div>
                <span class="text-xs text-gray-500 dark:text-gray-400">5h ago</span>
              </div>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
          <!-- Service Categories Distribution -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Service Categories Distribution</h3>
              <a href="#" class="text-sm text-primary-600 dark:text-primary-400 hover:underline">Details</a>
            </div>
            <div>
              <canvas id="categoriesChart" height="250"></canvas>
            </div>
          </div>

          <!-- Top Performing Skills -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Top Skills</h3>
              <a href="#" class="text-sm text-primary-600 dark:text-primary-400 hover:underline">View all</a>
            </div>
            <div class="space-y-4">
              <div class="flex items-center">
                <div class="w-full">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Web Development</span>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">78%</span>
                  </div>
                  <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-primary-600 h-2 rounded-full" style="width: 78%"></div>
                  </div>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-full">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Graphic Design</span>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">64%</span>
                  </div>
                  <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-secondary-500 h-2 rounded-full" style="width: 64%"></div>
                  </div>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-full">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Content Writing</span>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">56%</span>
                  </div>
                  <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-purple-500 h-2 rounded-full" style="width: 56%"></div>
                  </div>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-full">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Photography</span>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">42%</span>
                  </div>
                  <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 42%"></div>
                  </div>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-full">
                  <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Video Editing</span>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">38%</span>
                  </div>
                  <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-red-500 h-2 rounded-full" style="width: 38%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Credit System Metrics -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Credit Metrics</h3>
              <select class="text-sm bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-md py-1 px-3 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <option>This Week</option>
                <option>This Month</option>
                <option>This Quarter</option>
              </select>
            </div>
            <div class="space-y-6">
              <div>
                <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">Total Credits in Circulation</h4>
                <div class="flex items-end space-x-2">
                  <span class="text-2xl font-bold text-gray-800 dark:text-white">134,567</span>
                  <span class="text-xs flex items-center text-green-600 dark:text-green-400 pb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span>12.5%</span>
                  </span>
                </div>
              </div>
              
              <div>
                <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">Credits Purchased</h4>
                <div class="flex items-end space-x-2">
                  <span class="text-2xl font-bold text-gray-800 dark:text-white">42,890</span>
                  <span class="text-xs flex items-center text-green-600 dark:text-green-400 pb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span>8.2%</span>
                  </span>
                </div>
              </div>
              
              <div>
                <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">Average Credits per User</h4>
                <div class="flex items-end space-x-2">
                  <span class="text-2xl font-bold text-gray-800 dark:text-white">24.7</span>
                  <span class="text-xs flex items-center text-red-600 dark:text-red-400 pb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                    <span>3.1%</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Latest Transactions -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 overflow-hidden">
          <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Latest Transactions</h3>
            <a href="#" class="text-sm text-primary-600 dark:text-primary-400 hover:underline">View all</a>
          </div>
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
              <thead class="bg-gray-50 dark:bg-gray-700/50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Transaction ID</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">User</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Type</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Service</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Credits</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Date</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Status</th>
                </tr>
              </thead>
              <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-white">#TX-9824</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-8 w-8">
                        <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-800 dark:text-white">Sarah Johnson</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">sarah.j@example.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Credit Purchase</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Premium Plan</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">+500</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Today, 12:42 PM</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Completed</span>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-white">#TX-9823</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-8 w-8">
                        <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-800 dark:text-white">David Lee</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">david.l@example.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">Service Exchange</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Content Writing</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">-50</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Today, 10:23 AM</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">Pending</span>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-white">#TX-9822</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-8 w-8">
                        <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-800 dark:text-white">Michael Chen</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">m.chen@example.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-400">Service Provided</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">UI/UX Design</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">+75</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Yesterday, 4:12 PM</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Completed</span>
                  </td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-white">#TX-9821</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-8 w-8">
                        <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-800 dark:text-white">Olivia Martinez</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">o.martinez@example.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400">Refund</span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Photography</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">+35</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Yesterday, 11:05 AM</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Processed</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script>
    // Toggle dark mode
    document.addEventListener('DOMContentLoaded', function() {
      const themeToggleBtn = document.getElementById('theme-toggle');
      const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
      const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

      // Change the icons inside the button based on previous settings
      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
        document.documentElement.classList.add('dark');
      } else {
        themeToggleDarkIcon.classList.remove('hidden');
      }

      themeToggleBtn.addEventListener('click', function() {
        // Toggle icons
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // Toggle dark mode class
        document.documentElement.classList.toggle('dark');

        // Update localStorage
        if (document.documentElement.classList.contains('dark')) {
          localStorage.setItem('color-theme', 'dark');
        } else {
          localStorage.setItem('color-theme', 'light');
        }
      });

      // Toggle sidebar
      const sidebarToggle = document.getElementById('sidebar-toggle');
      const sidebar = document.getElementById('sidebar');
      const mainContent = document.querySelector('.flex-1');

      sidebarToggle.addEventListener('click', function() {
        if (sidebar.classList.contains('-translate-x-full')) {
          sidebar.classList.remove('-translate-x-full');
          mainContent.classList.remove('ml-0');
          mainContent.classList.add('ml-64');
        } else {
          sidebar.classList.add('-translate-x-full');
          mainContent.classList.remove('ml-64');
          mainContent.classList.add('ml-0');
        }
      });

      // Initialize charts
      const userActivityChart = new Chart(
        document.getElementById('userActivityChart'),
        {
          type: 'line',
          data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
              {
                label: 'New Users',
                data: [120, 190, 210, 250, 220, 320, 380, 420, 450, 520, 550, 620],
                borderColor: '#6366f1',
                backgroundColor: 'rgba(99, 102, 241, 0.1)',
                tension: 0.3,
                fill: true
              },
              {
                label: 'Active Users',
                data: [320, 390, 420, 480, 520, 580, 650, 700, 750, 820, 890, 940],
                borderColor: '#14b8a6',
                backgroundColor: 'rgba(20, 184, 166, 0.1)',
                tension: 0.3,
                fill: true
              }
            ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                position: 'top',
                labels: {
                  usePointStyle: true,
                  boxWidth: 6
                }
              }
            },
            scales: {
              x: {
                grid: {
                  display: false
                }
              },
              y: {
                beginAtZero: true,
                ticks: {
                  precision: 0
                }
              }
            }
          }
        }
      );

      const categoriesChart = new Chart(
        document.getElementById('categoriesChart'),
        {
          type: 'doughnut',
          data: {
            labels: ['Web Development', 'Design', 'Writing', 'Marketing', 'Video', 'Other'],
            datasets: [{
              data: [35, 25, 15, 10, 10, 5],
              backgroundColor: ['#6366f1', '#14b8a6', '#a855f7', '#f59e0b', '#ef4444', '#64748b'],
              borderWidth: 0,
              hoverOffset: 4
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                position: 'right',
                labels: {
                  usePointStyle: true,
                  boxWidth: 6
                }
              }
            },
            cutout: '70%'
          }
        }
      );
    });
  </script>
</body>
</html>
<?php