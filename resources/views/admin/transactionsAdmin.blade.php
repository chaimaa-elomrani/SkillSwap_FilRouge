<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transactions - SkillSwap Admin Dashboard</title>
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
    <!-- Sidebar (same as in index.html) -->
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
              <a href="index.html" class="flex items-center text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-2 rounded-md">
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
              <a href="transactions.html" class="flex items-center text-primary-600 dark:text-primary-400 px-3 py-2 rounded-md bg-primary-50 dark:bg-gray-700">
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
            <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Transactions</h2>
          </div>
          
          <div class="flex items-center space-x-4">
            <div class="relative">
              <input type="text" placeholder="Search transactions..." class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 w-64">
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
        <!-- Transactions Header -->
        <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
          <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Transactions</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Monitor and manage all credit and service exchanges on the platform</p>
          </div>
          <div class="mt-4 md:mt-0 flex flex-wrap gap-3">
            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
              <i class="fas fa-plus mr-2"></i> Add Transaction
            </button>
        
          </div>
        </div>

        <!-- Transaction Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700 transition-all duration-200 hover:shadow-lg">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Transactions</p>
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mt-1">{{ number_format($stats['total']) }}</h3>
                <p class="text-xs flex items-center mt-2 text-green-600 dark:text-green-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                  </svg>
                  <span>18.2% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-primary-50 text-primary-600 dark:bg-primary-900/20 dark:text-primary-400">
                <i class="fas fa-exchange-alt text-xl"></i>
              </div>
            </div>
          </div>
          
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700 transition-all duration-200 hover:shadow-lg">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Credit Purchases</p>
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mt-1">${{ number_format($creditPurchasesAmount, 2) }}</h3>
                <p class="text-xs flex items-center mt-2 text-green-600 dark:text-green-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                  </svg>
                  <span>12.7% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-green-50 text-green-600 dark:bg-green-900/20 dark:text-green-400">
                <i class="fas fa-dollar-sign text-xl"></i>
              </div>
            </div>
          </div>
          
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700 transition-all duration-200 hover:shadow-lg">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Service Exchanges</p>
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mt-1">{{ number_format($stats['service_exchanges']) }}</h3>
                <p class="text-xs flex items-center mt-2 text-green-600 dark:text-green-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                  </svg>
                  <span>8.5% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-purple-50 text-purple-600 dark:bg-purple-900/20 dark:text-purple-400">
                <i class="fas fa-handshake text-xl"></i>
              </div>
            </div>
          </div>
          
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700 transition-all duration-200 hover:shadow-lg">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Refunds</p>
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mt-1">${{ number_format($refundsAmount, 2) }}</h3>
                <p class="text-xs flex items-center mt-2 text-red-600 dark:text-red-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                  </svg>
                  <span>3.4% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-red-50 text-red-600 dark:bg-red-900/20 dark:text-red-400">
                <i class="fas fa-undo-alt text-xl"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Transaction Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
          <!-- Transaction Volume Chart -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Transaction Volume</h3>
              <div class="flex items-center space-x-2">
                <button class="px-3 py-1 text-xs font-medium rounded-full bg-primary-100 text-primary-700 dark:bg-primary-900/30 dark:text-primary-400">Daily</button>
                <button class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 hover:bg-primary-100 hover:text-primary-700 dark:hover:bg-primary-900/30 dark:hover:text-primary-400">Weekly</button>
                <button class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 hover:bg-primary-100 hover:text-primary-700 dark:hover:bg-primary-900/30 dark:hover:text-primary-400">Monthly</button>
              </div>
            </div>
            <div>
              <canvas id="transactionVolumeChart" height="280"></canvas>
            </div>
          </div>

          <!-- Transaction Types Chart -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Transaction Types</h3>
              <select class="text-sm bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-md py-1 px-3 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <option>This Month</option>
                <option>Last Month</option>
                <option>Last 3 Months</option>
                <option>This Year</option>
              </select>
            </div>
            <div>
              <canvas id="transactionTypesChart" height="280"></canvas>
            </div>
          </div>
        </div>

     

        <!-- Transactions Table -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700">
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
              <thead class="bg-gray-50 dark:bg-gray-700/50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Transaction ID
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    User
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Type
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Amount
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Status
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Date
                  </th>
                  <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                @forelse($transactions as $transaction)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                    #TRX-{{ $transaction->id }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-8 w-8">
                        <img class="h-8 w-8 rounded-full" src="/placeholder.svg?height=32&width=32" alt="{{ $transaction->user->name }} avatar">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $transaction->user->name }}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $transaction->user->email }}</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                      @if($transaction->type == 'Credit Purchase') bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400
                      @elseif($transaction->type == 'Service Exchange') bg-primary-100 text-primary-800 dark:bg-primary-900/30 dark:text-primary-400
                      @elseif($transaction->type == 'Premium Subscription') bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-400
                      @else bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300 @endif">
                      {{ $transaction->type }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                    <div class="flex items-center">
                      <i class="fas fa-euro-sign mr-1"></i> {{ number_format($transaction->amount, 2) }}
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                      Completed
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                    Today, 12:42 PM
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <div class="flex justify-end space-x-2">
                      <button class="text-primary-600 dark:text-primary-400 hover:text-primary-900 dark:hover:text-primary-300">
                        <i class="fas fa-eye"></i>
                      </button>
                      <button class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-300">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="7" class="text-center py-4">No transactions found</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          
          <!-- Pagination -->
          <div class="bg-white dark:bg-gray-800 px-4 py-3 flex items-center justify-between border-t border-gray-200 dark:border-gray-700 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
              <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                Previous
              </a>
              <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                Next
              </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
              <div>
                <p class="text-sm text-gray-700 dark:text-gray-300">
                  Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">24,853</span> results
                </p>
              </div>
              <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                  <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <span class="sr-only">Previous</span>
                    <i class="fas fa-chevron-left h-5 w-5"></i>
                  </a>
                  <a href="#" aria-current="page" class="z-10 bg-primary-50 dark:bg-primary-900/30 border-primary-500 dark:border-primary-500 text-primary-600 dark:text-primary-400 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    1
                  </a>
                  <a href="#" class="bg-white dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    2
                  </a>
                  <a href="#" class="bg-white dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    3
                  </a>
                  <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-400">
                    ...
                  </span>
                  <a href="#" class="bg-white dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    8
                  </a>
                  <a href="#" class="bg-white dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    9
                  </a>
                  <a href="#" class="bg-white dark:bg-gray-700 border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    10
                  </a>
                  <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <span class="sr-only">Next</span>
                    <i class="fas fa-chevron-right h-5 w-5"></i>
                  </a>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- JavaScript for Charts and Functionality -->
  <script>
    // Theme Toggle Functionality
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Set initial theme based on user preference or system preference
    if (localStorage.getItem('color-theme') === 'dark' || 
        (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
      themeToggleLightIcon.classList.remove('hidden');
    } else {
      document.documentElement.classList.remove('dark');
      themeToggleDarkIcon.classList.remove('hidden');
    }

    // Toggle theme when button is clicked
    themeToggleBtn.addEventListener('click', function() {
      // Toggle icons
      themeToggleDarkIcon.classList.toggle('hidden');
      themeToggleLightIcon.classList.toggle('hidden');
      
      // Toggle dark class on html element
      if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('color-theme', 'light');
      } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
      }
      
      // Update charts with new theme
      updateCharts();
    });

    // Sidebar Toggle for Mobile
    const sidebarToggleBtn = document.getElementById('sidebar-toggle');
    const sidebar = document.getElementById('sidebar');
    
    sidebarToggleBtn.addEventListener('click', function() {
      sidebar.classList.toggle('-translate-x-full');
    });

    // Initialize Charts
    function initializeCharts() {
      // Transaction Volume Chart
      const transactionVolumeCtx = document.getElementById('transactionVolumeChart').getContext('2d');
      const transactionVolumeChart = new Chart(transactionVolumeCtx, {
        type: 'line',
        data: {
          labels: ['1 May', '2 May', '3 May', '4 May', '5 May', '6 May', '7 May', '8 May', '9 May', '10 May', '11 May', '12 May', '13 May', '14 May'],
          datasets: [{
            label: 'Transactions',
            data: [65, 78, 52, 91, 43, 58, 72, 81, 59, 87, 64, 93, 76, 68],
            borderColor: '#6366f1',
            backgroundColor: 'rgba(99, 102, 241, 0.1)',
            tension: 0.4,
            fill: true
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              mode: 'index',
              intersect: false,
              backgroundColor: isDarkMode() ? '#374151' : '#ffffff',
              titleColor: isDarkMode() ? '#ffffff' : '#111827',
              bodyColor: isDarkMode() ? '#d1d5db' : '#4b5563',
              borderColor: isDarkMode() ? '#4b5563' : '#e5e7eb',
              borderWidth: 1,
              padding: 12,
              boxPadding: 6
            }
          },
          scales: {
            x: {
              grid: {
                display: false,
                drawBorder: false
              },
              ticks: {
                color: isDarkMode() ? '#9ca3af' : '#6b7280'
              }
            },
            y: {
              grid: {
                borderDash: [2],
                drawBorder: false,
                color: isDarkMode() ? 'rgba(255, 255, 255, 0.1)' : 'rgba(0, 0, 0, 0.1)'
              },
              ticks: {
                color: isDarkMode() ? '#9ca3af' : '#6b7280'
              }
            }
          }
        }
      });

      // Transaction Types Chart
      const transactionTypesCtx = document.getElementById('transactionTypesChart').getContext('2d');
      const transactionTypesChart = new Chart(transactionTypesCtx, {
        type: 'doughnut',
        data: {
          labels: ['Credit Purchases', 'Service Exchanges', 'Premium Subscriptions', 'Refunds'],
          datasets: [{
            data: [42, 38, 15, 5],
            backgroundColor: [
              '#14b8a6',
              '#6366f1',
              '#8b5cf6',
              '#ef4444'
            ],
            borderWidth: 0,
            hoverOffset: 4
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: '70%',
          plugins: {
            legend: {
              position: 'bottom',
              labels: {
                usePointStyle: true,
                padding: 15,
                color: isDarkMode() ? '#f3f4f6' : '#374151'
              }
            },
            tooltip: {
              backgroundColor: isDarkMode() ? '#374151' : '#ffffff',
              titleColor: isDarkMode() ? '#ffffff' : '#111827',
              bodyColor: isDarkMode() ? '#d1d5db' : '#4b5563',
              borderColor: isDarkMode() ? '#4b5563' : '#e5e7eb',
              borderWidth: 1,
              padding: 12,
              boxPadding: 6
            }
          }
        }
      });

      // Store charts in window object for later updates
      window.skillswapCharts = {
        transactionVolumeChart,
        transactionTypesChart
      };
    }

    function updateCharts() {
      if (window.skillswapCharts) {
        // Update chart colors based on current theme
        const textColor = isDarkMode() ? '#f3f4f6' : '#374151';
        const gridColor = isDarkMode() ? 'rgba(255, 255, 255, 0.1)' : 'rgba(0, 0, 0, 0.1)';
        const tickColor = isDarkMode() ? '#9ca3af' : '#6b7280';
        
        // Update each chart
        Object.values(window.skillswapCharts).forEach(chart => {
          // Update legend text color
          if (chart.options.plugins.legend) {
            chart.options.plugins.legend.labels.color = textColor;
          }
          
          // Update tooltip colors
          if (chart.options.plugins.tooltip) {
            chart.options.plugins.tooltip.backgroundColor = isDarkMode() ? '#374151' : '#ffffff';
            chart.options.plugins.tooltip.titleColor = isDarkMode() ? '#ffffff' : '#111827';
            chart.options.plugins.tooltip.bodyColor = isDarkMode() ? '#d1d5db' : '#4b5563';
            chart.options.plugins.tooltip.borderColor = isDarkMode() ? '#4b5563' : '#e5e7eb';
          }
          
          // Update axis colors if applicable
          if (chart.options.scales) {
            if (chart.options.scales.x) {
              chart.options.scales.x.grid.color = gridColor;
              chart.options.scales.x.ticks.color = tickColor;
            }
            if (chart.options.scales.y) {
              chart.options.scales.y.grid.color = gridColor;
              chart.options.scales.y.ticks.color = tickColor;
            }
          }
          
          chart.update();
        });
      }
    }

    function isDarkMode() {
      return document.documentElement.classList.contains('dark');
    }

    // Initialize charts when the DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
      initializeCharts();
    });
  </script>
</body>
</html>

