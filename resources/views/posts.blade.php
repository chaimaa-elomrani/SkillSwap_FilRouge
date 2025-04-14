<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Posts</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Custom animations */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    
    .post-card {
      transition: all 0.2s ease;
    }
    
    .post-card:hover {
      transform: translateY(-2px);
    }
    
    .like-btn.active i, 
    .save-btn.active i {
      transform: scale(1.1);
    }
    
    .like-btn.active {
      color: #ef4444;
    }
    
    .save-btn.active {
      color: #3b82f6;
    }
    
    .btn-icon {
      transition: all 0.15s ease;
    }
    
    .btn-icon:hover {
      transform: scale(1.1);
    }
    
    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }

    /* Sidebar transitions */
    .sidebar-transition {
      transition: transform 0.3s ease-in-out;
    }

    /* Custom scrollbar */
    .custom-scrollbar::-webkit-scrollbar {
      width: 6px;
    }
    
    .custom-scrollbar::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
    }
    
    .custom-scrollbar::-webkit-scrollbar-thumb {
      background: #d1d5db;
      border-radius: 10px;
    }
    
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
      background: #9ca3af;
    }

    /* Active nav item */
    .nav-item.active {
      background-color: rgba(79, 70, 229, 0.1);
      color: #4f46e5;
      border-left: 3px solid #4f46e5;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen">
  <!-- Header -->
  <header class="sticky top-0 z-30 bg-white border-b border-gray-200 shadow-sm">
    <div class="container mx-auto px-4 py-3">
      <div class="flex items-center justify-between">
        <!-- Left section with logo and toggle -->
        <div class="flex items-center space-x-4">
          <button id="sidebar-toggle" class="h-9 w-9 flex items-center justify-center rounded-md hover:bg-gray-100 lg:hidden">
            <i class="fas fa-bars text-gray-600"></i>
          </button>
          <h1 class="text-xl font-semibold text-gray-800">Explore</h1>
        </div>
        
        <!-- Right section with search and profile -->
        <div class="flex items-center space-x-4">
          <div class="relative hidden md:block w-64">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
            <input 
              type="text" 
              id="search-input"
              placeholder="Search posts..." 
              class="pl-10 py-2 pr-4 w-full rounded-md bg-gray-100 border-0 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
            >
          </div>
          
          <button id="notifications-btn" class="h-9 w-9 flex items-center justify-center rounded-full hover:bg-gray-100 relative">
            <i class="far fa-bell text-gray-600"></i>
            <span class="absolute top-0 right-0 h-2 w-2 bg-indigo-600 rounded-full"></span>
          </button>
          
          <button id="messages-btn" class="h-9 w-9 flex items-center justify-center rounded-full hover:bg-gray-100 relative">
            <i class="far fa-envelope text-gray-600"></i>
            <span class="absolute top-0 right-0 h-2 w-2 bg-indigo-600 rounded-full"></span>
          </button>
          
          <div class="h-9 w-9 rounded-full bg-gray-200 flex items-center justify-center cursor-pointer hover:opacity-80 transition-opacity">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="h-full w-full rounded-full object-cover">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Search bar for mobile -->
  <div class="md:hidden container mx-auto px-4 py-3">
    <div class="relative">
      <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
      <input 
        type="text" 
        id="mobile-search-input"
        placeholder="Search posts..." 
        class="pl-10 py-2 pr-4 w-full rounded-md bg-gray-100 border-0 focus:ring-2 focus:ring-indigo-200 focus:outline-none"
      >
    </div>
  </div>

  <!-- Main layout with sidebars -->
  <div class="flex min-h-[calc(100vh-70px)]">
    <!-- Left Sidebar -->
    <aside id="left-sidebar" class="fixed lg:sticky top-[70px] left-0 h-[calc(100vh-70px)] w-64 bg-white border-r border-gray-200 z-20 transform -translate-x-full lg:translate-x-0 sidebar-transition overflow-y-auto custom-scrollbar">
      <!-- Navigation -->
      <nav class="p-4">
        <h2 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Navigation</h2>
        <ul class="space-y-1">
          <li>
            <a href="#" class="nav-item active flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <i class="fas fa-home w-5 h-5 mr-3 text-gray-500"></i>
              Home
            </a>
          </li>
          <li>
            <a href="#" class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <i class="fas fa-compass w-5 h-5 mr-3 text-gray-500"></i>
              Explore
            </a>
          </li>
          <li>
            <a href="#" class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <i class="fas fa-bookmark w-5 h-5 mr-3 text-gray-500"></i>
              Saved
            </a>
          </li>
          <li>
            <a href="#" class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <i class="fas fa-user-friends w-5 h-5 mr-3 text-gray-500"></i>
              Network
            </a>
          </li>
          <li>
            <a href="#" class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <i class="fas fa-briefcase w-5 h-5 mr-3 text-gray-500"></i>
              Jobs
            </a>
          </li>
        </ul>
      </nav>

      <!-- Divider -->
      <div class="border-t border-gray-200 my-4"></div>

   
    </aside>

    <!-- Main Content -->
    <main class="flex-1 min-w-0 bg-gray-50">
      <!-- Filters and View Options -->
      <div class="container mx-auto px-4 py-4">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
          <div class="flex items-center space-x-2">
            <div class="bg-gray-100 rounded-md p-1 flex">
              <button class="filter-btn active px-4 py-1.5 rounded-md bg-white text-sm font-medium transition-colors" data-filter="trending">
                Trending
              </button>
              <button class="filter-btn px-4 py-1.5 rounded-md text-sm font-medium transition-colors" data-filter="latest">
                Latest
              </button>
              <button class="filter-btn px-4 py-1.5 rounded-md text-sm font-medium transition-colors" data-filter="following">
                Following
              </button>
            </div>
          </div>

          <div class="flex items-center space-x-2 w-full sm:w-auto">
            <div class="relative">
              <button id="filter-dropdown-btn" class="flex items-center px-3 py-2 text-sm font-medium border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                <i class="fas fa-filter mr-2 text-gray-500"></i>
                Filter
                <i class="fas fa-chevron-down ml-2 text-gray-500 text-xs"></i>
              </button>
              <div id="filter-dropdown" class="hidden absolute right-0 mt-1 w-48 bg-white rounded-md shadow-lg border border-gray-200 z-10">
                <div class="py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All Posts</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Job Opportunities</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Services</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Case Studies</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mentorship</a>
                </div>
              </div>
            </div>

            <div class="hidden sm:flex items-center border rounded-md overflow-hidden">
              <button id="grid-view-btn" class="view-btn active h-9 px-3 bg-gray-100 transition-colors">
                <i class="fas fa-th-large text-gray-600"></i>
              </button>
              <button id="list-view-btn" class="view-btn h-9 px-3 transition-colors">
                <i class="fas fa-list text-gray-600"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Posts Grid -->
      <div class="container mx-auto px-24 py-6">
        <div id="posts-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-1 gap-6">
          <!-- Post 1 -->
          <div class="post-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
            <div class="p-4 pb-0">
              <div class="flex justify-between items-start">
                <div class="flex items-center space-x-3">
                  <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Alex Morgan" class="h-full w-full object-cover">
                  </div>
                  <div>
                    <div class="flex items-center">
                      <h3 class="font-medium text-gray-900">Alex Morgan</h3>
                      <i class="fas fa-check-circle ml-1 text-blue-500 text-sm"></i>
                    </div>
                    <p class="text-sm text-gray-500">Product Designer</p>
                  </div>
                </div>
                <div class="flex items-center">
                  <span class="text-xs text-gray-500">2h ago</span>
                  <button class="h-8 w-8 ml-1 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                    <i class="fas fa-ellipsis-h text-gray-500 text-sm"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="p-4">
              <p class="text-gray-800 mb-3">Just finished a comprehensive UX audit for a fintech client. Identified 37 critical issues that were affecting conversion rates. Key takeaway: simplicity always wins.</p>

              <div class="flex flex-wrap gap-2 mt-3">
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">UX Design</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Fintech</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Case Study</span>
              </div>
            </div>

            <div class="p-4 pt-0 border-t border-gray-100 mt-4">
              <div class="p-4 pt-0 border-t border-gray-100 mt-4">
                <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors flex items-center justify-center">
                  <i class="fas fa-paper-plane mr-2"></i>
                  Send Request
                </button>
              </div>
            </div>
          </div>
          
          <!-- Post 2 -->
          <div class="post-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
            <div class="p-4 pb-0">
              <div class="flex justify-between items-start">
                <div class="flex items-center space-x-3">
                  <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Chen" class="h-full w-full object-cover">
                  </div>
                  <div>
                    <div class="flex items-center">
                      <h3 class="font-medium text-gray-900">Sarah Chen</h3>
                      <i class="fas fa-check-circle ml-1 text-blue-500 text-sm"></i>
                    </div>
                    <p class="text-sm text-gray-500">Frontend Developer</p>
                  </div>
                </div>
                <div class="flex items-center">
                  <span class="text-xs text-gray-500">4h ago</span>
                  <button class="h-8 w-8 ml-1 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                    <i class="fas fa-ellipsis-h text-gray-500 text-sm"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="p-4">
              <p class="text-gray-800 mb-3">I'm offering mentorship sessions for junior developers looking to level up their React skills. Limited spots available for next month.</p>
              
              <div class="flex flex-wrap gap-2 mt-3">
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Mentorship</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">React</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Frontend</span>
              </div>
            </div>

            <div class="p-4 pt-0 border-t border-gray-100 mt-4">
              <div class="p-4 pt-0 border-t border-gray-100 mt-4">
                <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors flex items-center justify-center">
                  <i class="fas fa-paper-plane mr-2"></i>
                  Send Request
                </button>
              </div>
            </div>
          </div>
          
          <!-- Post 3 -->
          <div class="post-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
            <div class="p-4 pb-0">
              <div class="flex justify-between items-start">
                <div class="flex items-center space-x-3">
                  <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Michael Torres" class="h-full w-full object-cover">
                  </div>
                  <div>
                    <div class="flex items-center">
                      <h3 class="font-medium text-gray-900">Michael Torres</h3>
                    </div>
                    <p class="text-sm text-gray-500">Marketing Strategist</p>
                  </div>
                </div>
                <div class="flex items-center">
                  <span class="text-xs text-gray-500">6h ago</span>
                  <button class="h-8 w-8 ml-1 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                    <i class="fas fa-ellipsis-h text-gray-500 text-sm"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="p-4">
              <p class="text-gray-800 mb-3">Looking for a skilled graphic designer to help with our upcoming product launch. Need someone who understands both brand identity and conversion-focused design.</p>
              <div class="flex flex-wrap gap-2 mt-3">
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Job Opportunity</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Graphic Design</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Marketing</span>
              </div>
            </div>

            <div class="p-4 pt-0 border-t border-gray-100 mt-4">
              <div class="p-4 pt-0 border-t border-gray-100 mt-4">
                <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors flex items-center justify-center">
                  <i class="fas fa-paper-plane mr-2"></i>
                  Send Request
                </button>
              </div>
            </div>
          </div>
          
          <!-- Post 4 -->
          <div class="post-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
            <div class="p-4 pb-0">
              <div class="flex justify-between items-start">
                <div class="flex items-center space-x-3">
                  <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Emily Johnson" class="h-full w-full object-cover">
                  </div>
                  <div>
                    <div class="flex items-center">
                      <h3 class="font-medium text-gray-900">Emily Johnson</h3>
                      <i class="fas fa-check-circle ml-1 text-blue-500 text-sm"></i>
                    </div>
                    <p class="text-sm text-gray-500">Data Scientist</p>
                  </div>
                </div>
                <div class="flex items-center">
                  <span class="text-xs text-gray-500">1d ago</span>
                  <button class="h-8 w-8 ml-1 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                    <i class="fas fa-ellipsis-h text-gray-500 text-sm"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="p-4">
              <p class="text-gray-800 mb-3">Just published my research on predictive analytics in e-commerce. We were able to increase purchase prediction accuracy by 27% using a hybrid model approach.</p>
              
              <div class="flex flex-wrap gap-2 mt-3">
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Data Science</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Research</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">E-commerce</span>
              </div>
            </div>

            <div class="p-4 pt-0 border-t border-gray-100 mt-4">
              <div class="p-4 pt-0 border-t border-gray-100 mt-4">
                <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors flex items-center justify-center">
                  <i class="fas fa-paper-plane mr-2"></i>
                  Send Request
                </button>
              </div>
            </div>
          </div>
          
          <!-- Post 5 -->
          <div class="post-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
            <div class="p-4 pb-0">
              <div class="flex justify-between items-start">
                <div class="flex items-center space-x-3">
                  <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="David Kim" class="h-full w-full object-cover">
                  </div>
                  <div>
                    <div class="flex items-center">
                      <h3 class="font-medium text-gray-900">David Kim</h3>
                      <i class="fas fa-check-circle ml-1 text-blue-500 text-sm"></i>
                    </div>
                    <p class="text-sm text-gray-500">Product Manager</p>
                  </div>
                </div>
                <div class="flex items-center">
                  <span class="text-xs text-gray-500">1d ago</span>
                  <button class="h-8 w-8 ml-1 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                    <i class="fas fa-ellipsis-h text-gray-500 text-sm"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="p-4">
              <p class="text-gray-800 mb-3">We're looking for beta testers for our new productivity tool. If you manage remote teams and want early access, comment below or DM me.</p>

              <div class="flex flex-wrap gap-2 mt-3">
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Product Launch</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Beta Testing</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Productivity</span>
              </div>
            </div>

            <div class="p-4 pt-0 border-t border-gray-100 mt-4">
              <div class="p-4 pt-0 border-t border-gray-100 mt-4">
                <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors flex items-center justify-center">
                  <i class="fas fa-paper-plane mr-2"></i>
                  Send Request
                </button>
              </div>
            </div>
          </div>
          
          <!-- Post 6 -->
          <div class="post-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
            <div class="p-4 pb-0">
              <div class="flex justify-between items-start">
                <div class="flex items-center space-x-3">
                  <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/women/62.jpg" alt="Priya Patel" class="h-full w-full object-cover">
                  </div>
                  <div>
                    <div class="flex items-center">
                      <h3 class="font-medium text-gray-900">Priya Patel</h3>
                    </div>
                    <p class="text-sm text-gray-500">UX Researcher</p>
                  </div>
                </div>
                <div class="flex items-center">
                  <span class="text-xs text-gray-500">2d ago</span>
                  <button class="h-8 w-8 ml-1 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                    <i class="fas fa-ellipsis-h text-gray-500 text-sm"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="p-4">
              <p class="text-gray-800 mb-3">Just wrapped up a fascinating user research study on how professionals use collaboration tools. Some surprising insights about notification fatigue and context switching.</p>
              
              <div class="flex flex-wrap gap-2 mt-3">
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">UX Research</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Productivity</span>
                <span class="inline-block bg-gray-100 text-gray-700 rounded-full px-3 py-1 text-xs font-medium">Remote Work</span>
              </div>
            </div>

            <div class="p-4 pt-0 border-t border-gray-100 mt-4">
              <div class="p-4 pt-0 border-t border-gray-100 mt-4">
                <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors flex items-center justify-center">
                  <i class="fas fa-paper-plane mr-2"></i>
                  Send Request
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- No results message (hidden by default) -->
      <div id="no-results" class="hidden container mx-auto px-4 py-12 text-center">
        <h3 class="text-lg font-medium text-gray-700">No posts found</h3>
        <p class="text-gray-500 mt-2">Try adjusting your search or filters</p>
      </div>
    </main>

    <!-- Right Sidebar -->
    <aside id="right-sidebar" class="hidden xl:block w-80 bg-white border-l border-gray-200 sticky top-[70px] h-[calc(100vh-70px)] overflow-y-auto custom-scrollbar">
      <!-- User Profile Summary -->
      <div class="p-4 border-b border-gray-200">
        <div class="flex items-center space-x-3">
          <div class="h-12 w-12 rounded-full bg-gray-200 overflow-hidden">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Your Profile" class="h-full w-full object-cover">
          </div>
          <div>
            <h3 class="font-medium text-gray-900">John Doe</h3>
            <p class="text-sm text-gray-500">Software Engineer</p>
          </div>
        </div>
      </div>

      <!-- Trending Topics -->
      <div class="p-4 border-b border-gray-200">
        <h3 class="text-sm font-semibold text-gray-700 mb-3">Trending Topics</h3>
        <div class="space-y-2">
          <a href="#" class="block p-2 hover:bg-gray-50 rounded-md transition-colors">
            <span class="text-xs text-indigo-600 font-medium">#UXDesign</span>
            <p class="text-sm text-gray-700 mt-1">1,245 new posts this week</p>
          </a>
          <a href="#" class="block p-2 hover:bg-gray-50 rounded-md transition-colors">
            <span class="text-xs text-indigo-600 font-medium">#RemoteWork</span>
            <p class="text-sm text-gray-700 mt-1">982 new posts this week</p>
          </a>
          <a href="#" class="block p-2 hover:bg-gray-50 rounded-md transition-colors">
            <span class="text-xs text-indigo-600 font-medium">#AIinDesign</span>
            <p class="text-sm text-gray-700 mt-1">756 new posts this week</p>
          </a>
        </div>
      </div>

      <!-- People You May Know -->
      <div class="p-4 border-b border-gray-200">
        <h3 class="text-sm font-semibold text-gray-700 mb-3">People You May Know</h3>
        <div class="space-y-4">
          <div class="flex items-center">
            <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-3">
              <img src="https://randomuser.me/api/portraits/women/76.jpg" alt="Jane Smith" class="h-full w-full object-cover">
            </div>
            <div class="flex-1 min-w-0">
              <h4 class="text-sm font-medium text-gray-900 truncate">Jane Smith</h4>
              <p class="text-xs text-gray-500 truncate">UX Designer at Google</p>
            </div>
            <button class="ml-2 px-3 py-1 text-xs font-medium text-indigo-600 border border-indigo-600 rounded-full hover:bg-indigo-50 transition-colors">
              Connect
            </button>
          </div>
          <div class="flex items-center">
            <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-3">
              <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Robert Johnson" class="h-full w-full object-cover">
            </div>
            <div class="flex-1 min-w-0">
              <h4 class="text-sm font-medium text-gray-900 truncate">Robert Johnson</h4>
              <p class="text-xs text-gray-500 truncate">Frontend Developer at Netflix</p>
            </div>
            <button class="ml-2 px-3 py-1 text-xs font-medium text-indigo-600 border border-indigo-600 rounded-full hover:bg-indigo-50 transition-colors">
              Connect
            </button>
          </div>
          <div class="flex items-center">
            <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-3">
              <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Lisa Wong" class="h-full w-full object-cover">
            </div>
            <div class="flex-1 min-w-0">
              <h4 class="text-sm font-medium text-gray-900 truncate">Lisa Wong</h4>
              <p class="text-xs text-gray-500 truncate">Product Manager at Airbnb</p>
            </div>
            <button class="ml-2 px-3 py-1 text-xs font-medium text-indigo-600 border border-indigo-600 rounded-full hover:bg-indigo-50 transition-colors">
              Connect
            </button>
          </div>
        </div>
        <a href="#" class="block text-center text-sm text-indigo-600 hover:text-indigo-700 mt-3">
          View More
        </a>
      </div>

      <!-- Recent Activity -->
      <div class="p-4">
        <h3 class="text-sm font-semibold text-gray-700 mb-3">Recent Activity</h3>
        <div class="space-y-3">
          <div class="flex items-start">
            <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-3 mt-1">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Your Profile" class="h-full w-full object-cover">
            </div>
            <div>
              <p class="text-sm text-gray-700">You connected with <span class="font-medium">Alex Morgan</span></p>
              <p class="text-xs text-gray-500">2 hours ago</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-3 mt-1">
              <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Chen" class="h-full w-full object-cover">
            </div>
            <div>
              <p class="text-sm text-gray-700"><span class="font-medium">Sarah Chen</span> viewed your profile</p>
              <p class="text-xs text-gray-500">5 hours ago</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-3 mt-1">
              <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Michael Torres" class="h-full w-full object-cover">
            </div>
            <div>
              <p class="text-sm text-gray-700"><span class="font-medium">Michael Torres</span> liked your post</p>
              <p class="text-xs text-gray-500">1 day ago</p>
            </div>
          </div>
        </div>
        <a href="#" class="block text-center text-sm text-indigo-600 hover:text-indigo-700 mt-3">
          View All Activity
        </a>
      </div>
    </aside>
  </div>

  <!-- Mobile sidebar backdrop -->
  <div id="sidebar-backdrop" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-10 hidden lg:hidden"></div>

  <!-- JavaScript for interactions -->
  <script>
    // DOM Elements
    const postsContainer = document.getElementById('posts-container');
    const noResults = document.getElementById('no-results');
    const searchInput = document.getElementById('search-input');
    const mobileSearchInput = document.getElementById('mobile-search-input');
    const filterDropdownBtn = document.getElementById('filter-dropdown-btn');
    const filterDropdown = document.getElementById('filter-dropdown');
    const gridViewBtn = document.getElementById('grid-view-btn');
    const listViewBtn = document.getElementById('list-view-btn');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const likeBtns = document.querySelectorAll('.like-btn');
    const saveBtns = document.querySelectorAll('.save-btn');
    
    // Sidebar elements
    const leftSidebar = document.getElementById('left-sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebarBackdrop = document.getElementById('sidebar-backdrop');
    
    // Toggle left sidebar on mobile
    sidebarToggle.addEventListener('click', () => {
      leftSidebar.classList.toggle('-translate-x-full');
      sidebarBackdrop.classList.toggle('hidden');
      document.body.classList.toggle('overflow-hidden');
    });
    
    // Close sidebar when clicking on backdrop
    sidebarBackdrop.addEventListener('click', () => {
      leftSidebar.classList.add('-translate-x-full');
      sidebarBackdrop.classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
    });
    
    // Toggle filter dropdown
    filterDropdownBtn.addEventListener('click', () => {
      filterDropdown.classList.toggle('hidden');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
      if (!filterDropdownBtn.contains(e.target) && !filterDropdown.contains(e.target)) {
        filterDropdown.classList.add('hidden');
      }
    });
    
    // Toggle view mode
    gridViewBtn.addEventListener('click', () => {
      postsContainer.classList.remove('grid-cols-1');
      postsContainer.classList.add('grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-1', 'xl:grid-cols-2');
      
      gridViewBtn.classList.add('active', 'bg-gray-100');
      listViewBtn.classList.remove('active', 'bg-gray-100');
    });
    
    listViewBtn.addEventListener('click', () => {
      postsContainer.classList.remove('md:grid-cols-2', 'lg:grid-cols-1', 'xl:grid-cols-2');
      postsContainer.classList.add('grid-cols-1');
      
      listViewBtn.classList.add('active', 'bg-gray-100');
      gridViewBtn.classList.remove('active', 'bg-gray-100');
    });
    
    // Filter buttons
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        // Remove active class from all buttons
        filterBtns.forEach(b => b.classList.remove('active', 'bg-white'));
        
        // Add active class to clicked button
        btn.classList.add('active', 'bg-white');
        
        // Here you would normally filter the posts based on the selected filter
        const filter = btn.dataset.filter;
        console.log(`Filter selected: ${filter}`);
        
        // For demo purposes, we'll just log the filter
      });
    });
    
    // Search functionality
    const handleSearch = (e) => {
      const searchTerm = e.target.value.toLowerCase();
      const posts = document.querySelectorAll('.post-card');
      let visiblePosts = 0;
      
      posts.forEach(post => {
        const postText = post.textContent.toLowerCase();
        if (postText.includes(searchTerm)) {
          post.style.display = 'block';
          visiblePosts++;
        } else {
          post.style.display = 'none';
        }
      });
      
      // Show/hide no results message
      if (visiblePosts === 0) {
        noResults.classList.remove('hidden');
        postsContainer.classList.add('hidden');
      } else {
        noResults.classList.add('hidden');
        postsContainer.classList.remove('hidden');
      }
    };
    
    // Add search event listeners
    if (searchInput) searchInput.addEventListener('input', handleSearch);
    if (mobileSearchInput) mobileSearchInput.addEventListener('input', handleSearch);
    
    // Like button functionality
    likeBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        btn.classList.toggle('active');
        
        const icon = btn.querySelector('i');
        const countSpan = btn.querySelector('span');
        const currentCount = parseInt(countSpan.textContent);
        
        if (btn.classList.contains('active')) {
          icon.classList.remove('far');
          icon.classList.add('fas');
          btn.classList.add('text-red-500');
          countSpan.textContent = currentCount + 1;
        } else {
          icon.classList.remove('fas');
          icon.classList.add('far');
          btn.classList.remove('text-red-500');
          countSpan.textContent = currentCount - 1;
        }
      });
    });
    
    // Save button functionality
    saveBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        btn.classList.toggle('active');
        
        const icon = btn.querySelector('i');
        
        if (btn.classList.contains('active')) {
          icon.classList.remove('far');
          icon.classList.add('fas');
          btn.classList.add('text-blue-500');
        } else {
          icon.classList.remove('fas');
          icon.classList.add('far');
          btn.classList.remove('text-blue-500');
        }
      });
    });
    
    // Add animation to cards
    document.querySelectorAll('.post-card').forEach(card => {
      card.style.animation = 'fadeIn 0.3s ease-in-out';
    });
    
    // Navigation item active state
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
      item.addEventListener('click', () => {
        navItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
      });
    });
  </script>
</body>
</html>