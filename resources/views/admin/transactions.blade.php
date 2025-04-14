<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkillSwap Admin - Transactions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
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
</head>
<body class="bg-gray-50">
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-10 transition-all duration-300 ease-in-out transform" id="sidebar">
      <div class="flex flex-col h-full">
        <div class="p-4 border-b border-gray-200">
          <div class="flex items-center justify-center space-x-2">
            <div class="bg-gradient-to-r from-primary-500 to-secondary-500 p-2 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
              </svg>
            </div>
            <h1 class="text-xl font-semibold text-gray-800">SkillSwap</h1>
          </div>
          <p class="text-xs text-center mt-1 text-gray-600">Admin Dashboard</p>
        </div>
        
        <nav class="flex-1 overflow-y-auto py-4">
          <ul class="space-y-1 px-3">
            <li class="font-medium text-sm text-gray-400 px-3 py-2 uppercase">Main</li>
            <li>
              <a href="index.html" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">
                <i class="fas fa-home w-5 h-5 mr-3"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="user-management.html" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">
                <i class="fas fa-users w-5 h-5 mr-3"></i>
                <span>User Management</span>
              </a>
            </li>
            <li>
              <a href="skills-management.html" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">
                <i class="fas fa-tools w-5 h-5 mr-3"></i>
                <span>Skills Management</span>
              </a>
            </li>
            <li>
              <a href="transactions.html" class="flex items-center text-primary-600 px-3 py-2 rounded-md bg-primary-50">
                <i class="fas fa-exchange-alt w-5 h-5 mr-3"></i>
                <span>Transactions</span>
              </a>
            </li>
            <li>
              <a href="content-moderation.html" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">
                <i class="fas fa-shield-alt w-5 h-5 mr-3"></i>
                <span>Content Moderation</span>
              </a>
            </li>
            
            <li class="font-medium text-sm text-gray-400 px-3 py-2 mt-6 uppercase">Settings</li>
            <li>
              <a href="settings.html" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">
                <i class="fas fa-cog w-5 h-5 mr-3"></i>
                <span>General Settings</span>
              </a>
            </li>
            <li>
              <a href="credit-settings.html" class="flex items-center text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md">
                <i class="fas fa-coins w-5 h-5 mr-3"></i>
                <span>Credit System</span>
              </a>
            </li>
          </ul>
        </nav>
        
        <div class="p-4 border-t border-gray-200">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
              <img src="https://via.placeholder.com/40" alt="Admin" class="h-10 w-10 rounded-full object-cover border-2 border-primary-500">
              <div>
                <h3 class="text-sm font-medium text-gray-800">Admin User</h3>
                <p class="text-xs text-gray-500">Super Admin</p>
              </div>
            </div>
            <button class="text-gray-500 hover:text-gray-700">
              <i class="fas fa-sign-out-alt"></i>
            </button>
          </div>
        </div>
      </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 ml-64">
      <!-- Top Navigation -->
      <header class="bg-white shadow-sm sticky top-0 z-10">
        <div class="flex items-center justify-between h-16 px-6">
          <div class="flex items-center space-x-4">
            <button id="sidebar-toggle" class="text-gray-600 hover:text-gray-900 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
            <h2 class="text-lg font-semibold text-gray-800">Transaction Management</h2>
          </div>
          
          <div class="flex items-center space-x-4">
            <div class="relative">
              <input type="text" id="search-transactions" placeholder="Search transactions..." class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-primary-500 w-64">
              <div class="absolute left-3 top-2.5 text-gray-400">
                <i class="fas fa-search"></i>
              </div>
            </div>
            
            <button id="refresh-btn" class="p-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400">
              <i class="fas fa-sync-alt"></i>
            </button>
            
            <button id="export-btn" class="flex items-center px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-colors">
              <i class="fas fa-download mr-2"></i>
              Export
            </button>
            
            <div class="relative" id="notification-container">
              <button id="notification-btn" class="relative p-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400">
                <i class="fas fa-bell"></i>
                <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
              </button>
              
              <!-- Notification Dropdown (Initially Hidden) -->
              <div id="notification-dropdown" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg z-20 border border-gray-200">
                <div class="p-3 border-b border-gray-200">
                  <div class="flex items-center justify-between">
                    <h3 class="text-sm font-semibold text-gray-800">Notifications</h3>
                    <span class="text-xs font-medium text-primary-600 bg-primary-50 rounded-full px-2 py-0.5">3 New</span>
                  </div>
                </div>
                <div class="max-h-72 overflow-y-auto">
                  <a href="#" class="block p-3 hover:bg-gray-50 border-b border-gray-200">
                    <div class="flex items-start">
                      <div class="flex-shrink-0 bg-primary-100 rounded-full p-2">
                        <i class="fas fa-user-plus text-primary-600 text-sm"></i>
                      </div>
                      <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">New user registration</p>
                        <p class="text-xs text-gray-500 mt-1">Sarah Johnson has registered as a new user</p>
                        <p class="text-xs text-gray-400 mt-1">10 minutes ago</p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="block p-3 hover:bg-gray-50 border-b border-gray-200">
                    <div class="flex items-start">
                      <div class="flex-shrink-0 bg-yellow-100 rounded-full p-2">
                        <i class="fas fa-exclamation-triangle text-yellow-600 text-sm"></i>
                      </div>
                      <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">Disputed transaction</p>
                        <p class="text-xs text-gray-500 mt-1">Transaction #TX-9819 has been disputed</p>
                        <p class="text-xs text-gray-400 mt-1">1 hour ago</p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="block p-3 hover:bg-gray-50">
                    <div class="flex items-start">
                      <div class="flex-shrink-0 bg-green-100 rounded-full p-2">
                        <i class="fas fa-credit-card text-green-600 text-sm"></i>
                      </div>
                      <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">New credit purchase</p>
                        <p class="text-xs text-gray-500 mt-1">James Wilson purchased 200 credits</p>
                        <p class="text-xs text-gray-400 mt-1">3 hours ago</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="p-3 border-t border-gray-200 text-center">
                  <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">View all notifications</a>
                </div>
              </div>
            </div>
            
            <div class="relative">
              <button class="flex items-center space-x-2 focus:outline-none">
                <img src="https://via.placeholder.com/32" alt="Admin" class="h-8 w-8 rounded-full object-cover border-2 border-primary-500">
                <span class="hidden md:block text-sm font-medium text-gray-800">Admin User</span>
                <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
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
              <i class="fas fa-exclamation-triangle text-yellow-400"></i>
            </div>
            <div class="ml-3">
              <p class="text-sm text-yellow-700">
                There are currently <span id="disputed-count">2</span> disputed transactions that require your attention.
                <a href="#" class="font-medium underline text-yellow-700 hover:text-yellow-600" id="view-disputes-btn">
                  Review now
                </a>
              </p>
            </div>
            <div class="ml-auto pl-3">
              <div class="-mx-1.5 -my-1.5">
                <button class="inline-flex bg-yellow-50 rounded-md p-1.5 text-yellow-500 hover:bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                  <span class="sr-only">Dismiss</span>
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
          <!-- Total Transactions -->
          <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 transition-all duration-200 hover:shadow-lg overflow-hidden">
            <div class="pb-2">
              <p class="text-sm font-medium text-gray-500">Total Transactions</p>
            </div>
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-2xl font-semibold text-gray-800 mt-1">8,645</h3>
                <p class="text-xs flex items-center mt-2 text-green-600">
                  <i class="fas fa-arrow-up mr-1 text-xs"></i>
                  <span>18.2% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-primary-50 text-primary-600">
                <i class="fas fa-exchange-alt text-xl"></i>
              </div>
            </div>
          </div>
          
          <!-- Total Credits Issued -->
          <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 transition-all duration-200 hover:shadow-lg overflow-hidden">
            <div class="pb-2">
              <p class="text-sm font-medium text-gray-500">Total Credits Issued</p>
            </div>
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-2xl font-semibold text-gray-800 mt-1">134,567</h3>
                <p class="text-xs flex items-center mt-2 text-green-600">
                  <i class="fas fa-arrow-up mr-1 text-xs"></i>
                  <span>12.7% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-secondary-50 text-secondary-600">
                <i class="fas fa-credit-card text-xl"></i>
              </div>
            </div>
          </div>
          
          <!-- Credits Purchased -->
          <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 transition-all duration-200 hover:shadow-lg overflow-hidden">
            <div class="pb-2">
              <p class="text-sm font-medium text-gray-500">Credits Purchased</p>
            </div>
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-2xl font-semibold text-gray-800 mt-1">42,890</h3>
                <p class="text-xs flex items-center mt-2 text-green-600">
                  <i class="fas fa-arrow-up mr-1 text-xs"></i>
                  <span>23.5% from last month</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-purple-50 text-purple-600">
                <i class="fas fa-wallet text-xl"></i>
              </div>
            </div>
          </div>
          
          <!-- Pending Transactions -->
          <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 transition-all duration-200 hover:shadow-lg overflow-hidden">
            <div class="pb-2">
              <p class="text-sm font-medium text-gray-500">Pending Transactions</p>
            </div>
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-2xl font-semibold text-gray-800 mt-1">24</h3>
                <p class="text-xs flex items-center mt-2 text-yellow-600">
                  <i class="fas fa-clock mr-1 text-xs"></i>
                  <span>Requires attention</span>
                </p>
              </div>
              <div class="p-3 rounded-full bg-yellow-50 text-yellow-600">
                <i class="fas fa-exclamation-triangle text-xl"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Tabs for different views -->
        <div class="mb-6">
          <div class="flex justify-between items-center mb-4">
            <div class="bg-white rounded-lg shadow-sm">
              <div class="flex space-x-1 p-1">
                <button class="tab-btn px-4 py-2 text-sm font-medium rounded-md bg-primary-50 text-primary-600" data-tab="all">All Transactions</button>
              </div>
            </div>

            <div class="flex items-center space-x-2">
              <select id="status-filter" class="text-sm bg-white border border-gray-300 text-gray-700 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <option value="All">All Statuses</option>
                <option value="Completed">Completed</option>
                <option value="Pending">Pending</option>
                <option value="Processed">Processed</option>
                <option value="Disputed">Disputed</option>
                <option value="Failed">Failed</option>
              </select>

              <select id="type-filter" class="text-sm bg-white border border-gray-300 text-gray-700 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <option value="All">All Types</option>
                <option value="Credit Purchase">Credit Purchase</option>
                <option value="Service Exchange">Service Exchange</option>
                <option value="Service Provided">Service Provided</option>
                <option value="Refund">Refund</option>
              </select>

              <select id="date-filter" class="text-sm bg-white border border-gray-300 text-gray-700 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <option value="All">All Time</option>
                <option value="Today">Today</option>
                <option value="This Week">This Week</option>
                <option value="This Month">This Month</option>
              </select>

              <button id="filter-btn" class="p-2 rounded-lg bg-white border border-gray-300 text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <i class="fas fa-filter"></i>
              </button>
            </div>
          </div>

          <!-- Tab Content -->
          <div class="tab-content" id="all-tab">
            <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
              <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <button class="flex items-center font-medium">
                          ID <i class="fas fa-sort ml-1 text-gray-400"></i>
                        </button>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <button class="flex items-center font-medium">
                          User <i class="fas fa-sort ml-1 text-gray-400"></i>
                        </button>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <button class="flex items-center font-medium">
                          Amount <i class="fas fa-sort ml-1 text-gray-400"></i>
                        </button>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <button class="flex items-center font-medium">
                          Date <i class="fas fa-sort ml-1 text-gray-400"></i>
                        </button>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                      <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Static table row -->
                    <tr class="hover:bg-gray-50 cursor-pointer" id="transaction-row">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">TX-9824</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center space-x-3">
                          <img class="h-8 w-8 rounded-full" src="https://via.placeholder.com/32" alt="Sarah Johnson">
                          <div>
                            <p class="text-sm font-medium text-gray-800">Sarah Johnson</p>
                            <p class="text-xs text-gray-500">sarah.j@example.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Credit Purchase</span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Premium Plan</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">
                        +500 Credits
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 13, 12:42 PM</td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium border bg-green-100 text-green-800 border-green-200">
                          <i class="fas fa-check-circle mr-1"></i>Completed
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <div class="relative inline-block text-left">
                          <button class="text-gray-500 hover:text-gray-700 focus:outline-none" id="action-menu-button">
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="flex items-center justify-between border-t border-gray-200 px-6 py-4">
                <div class="text-sm text-gray-500">
                  Showing <span id="showing-count" class="font-medium">1</span> of <span id="total-count" class="font-medium">1</span> transactions
                </div>
                <div class="flex items-center space-x-2">
                  <button class="px-3 py-1 text-sm font-medium rounded-md bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 disabled:opacity-50" disabled>
                    Previous
                  </button>
                  <button class="px-3 py-1 text-sm font-medium rounded-md bg-primary-50 text-primary-600 border border-primary-200 focus:outline-none focus:ring-2 focus:ring-primary-500">
                    1
                  </button>
                  <button class="px-3 py-1 text-sm font-medium rounded-md bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 disabled:opacity-50" disabled>
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- User Information Popup Card (Initially Hidden) -->
        <div id="user-popup" class="hidden fixed inset-0 z-50 overflow-y-auto">
          <div class="flex items-center justify-center min-h-screen p-4 text-center sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">User Information</h3>
                    
                    <div class="bg-gray-50 p-4 rounded-lg mb-4">
                      <div class="flex items-center space-x-4">
                        <img src="https://via.placeholder.com/64" alt="Sarah Johnson" class="h-16 w-16 rounded-full">
                        <div>
                          <h4 class="text-lg font-medium text-gray-900">Sarah Johnson</h4>
                          <p class="text-sm text-gray-500">sarah.j@example.com</p>
                          <p class="text-xs text-gray-400 mt-1">Member since: Jan 15, 2025</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="space-y-3">
                      <div class="grid grid-cols-2 gap-4">
                        <div>
                          <h5 class="text-sm font-medium text-gray-500">User ID</h5>
                          <p class="text-sm text-gray-900">USR-4872</p>
                        </div>
                        <div>
                          <h5 class="text-sm font-medium text-gray-500">Role</h5>
                          <p class="text-sm text-gray-900">Premium Member</p>
                        </div>
                      </div>
                      
                      <div class="grid grid-cols-2 gap-4">
                        <div>
                          <h5 class="text-sm font-medium text-gray-500">Credits Balance</h5>
                          <p class="text-sm text-gray-900">1,250 Credits</p>
                        </div>
                        <div>
                          <h5 class="text-sm font-medium text-gray-500">Total Transactions</h5>
                          <p class="text-sm text-gray-900">24</p>
                        </div>
                      </div>
                      
                      <div>
                        <h5 class="text-sm font-medium text-gray-500">Skills</h5>
                        <div class="flex flex-wrap gap-2 mt-1">
                          <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Content Writing</span>
                          <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">Graphic Design</span>
                          <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Social Media</span>
                        </div>
                      </div>
                      
                      <div>
                        <h5 class="text-sm font-medium text-gray-500">Recent Activity</h5>
                        <p class="text-sm text-gray-900 mt-1">Last login: Apr 13, 2025 (10:23 AM)</p>
                        <p class="text-sm text-gray-900">Last transaction: Apr 13, 2025 (12:42 PM)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" id="export-user-btn" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary-600 text-base font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 sm:ml-3 sm:w-auto sm:text-sm">
                  <i class="fas fa-file-export mr-2"></i> Export Data
                </button>
                <button type="button" id="print-user-btn" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                  <i class="fas fa-print mr-2"></i> Print
                </button>
                <button type="button" id="close-popup-btn" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script>
    // Minimal JavaScript for required functionality
    document.addEventListener('DOMContentLoaded', function() {
      // Toggle notification dropdown
      const notificationBtn = document.getElementById('notification-btn');
      const notificationDropdown = document.getElementById('notification-dropdown');
      
      notificationBtn.addEventListener('click', function() {
        notificationDropdown.classList.toggle('hidden');
      });
      
      // Close notification dropdown when clicking outside
      document.addEventListener('click', function(event) {
        if (!notificationBtn.contains(event.target) && !notificationDropdown.contains(event.target)) {
          notificationDropdown.classList.add('hidden');
        }
      });
      
      // Toggle user popup on 3-dot menu click
      const actionMenuButton = document.getElementById('action-menu-button');
      const userPopup = document.getElementById('user-popup');
      const closePopupBtn = document.getElementById('close-popup-btn');
      
      actionMenuButton.addEventListener('click', function() {
        userPopup.classList.remove('hidden');
      });
      
      closePopupBtn.addEventListener('click', function() {
        userPopup.classList.add('hidden');
      });
      
      // Close popup when clicking outside
      userPopup.addEventListener('click', function(event) {
        if (event.target === userPopup) {
          userPopup.classList.add('hidden');
        }
      });
      
      // Print functionality (minimal implementation)
      const printUserBtn = document.getElementById('print-user-btn');
      printUserBtn.addEventListener('click', function() {
        alert('Print functionality would be implemented here');
      });
      
      // Export functionality (minimal implementation)
      const exportUserBtn = document.getElementById('export-user-btn');
      exportUserBtn.addEventListener('click', function() {
        alert('Export functionality would be implemented here');
      });
      
      // Sidebar toggle (minimal implementation)
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
    });
  </script>
</body>
</html>