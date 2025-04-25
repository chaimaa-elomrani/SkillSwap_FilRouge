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
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Pulse animation for notification badge */
    @keyframes pulse {
      0% {
        transform: scale(0.95);
        box-shadow: 0 0 0 0 rgba(79, 70, 229, 0.7);
      }
      
      70% {
        transform: scale(1);
        box-shadow: 0 0 0 10px rgba(79, 70, 229, 0);
      }
      
      100% {
        transform: scale(0.95);
        box-shadow: 0 0 0 0 rgba(79, 70, 229, 0);
      }
    }

    .pulse-animation {
      animation: pulse 2s infinite;
    }

    /* Sidebar panel animation */
    .sidebar-panel {
      transform: translateX(100%);
      transition: transform 0.3s ease-in-out;
    }

    .sidebar-panel.open {
      transform: translateX(0);
    }

    /* Overlay styles */
    #overlay {
      background-color: rgba(0, 0, 0, 0.5);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    #overlay.visible {
      opacity: 1;
    }

    .post-card {
      transition: all 0.2s ease;
    }

    .post-card:hover {
      transform: translateY(-1px);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
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

    /* Experience level badges */
    .badge-beginner {
      background-color: #dcfce7;
      color: #166534;
    }

    .badge-intermediate {
      background-color: #dbeafe;
      color: #1e40af;
    }

    .badge-expert {
      background-color: #f3e8ff;
      color: #6b21a8;
    }

    /* LinkedIn-style post cards */
    .post-meta-item {
      display: inline-flex;
      align-items: center;
      margin-right: 12px;
      color: #6b7280;
      font-size: 0.8125rem;
    }

    .post-meta-item i {
      margin-right: 4px;
      font-size: 0.875rem;
    }

    .post-meta-divider {
      display: inline-block;
      width: 4px;
      height: 4px;
      border-radius: 50%;
      background-color: #d1d5db;
      margin: 0 8px;
      vertical-align: middle;
    }

    /* Primary colors for Tailwind */
    .bg-primary-50 { background-color: #eef2ff; }
    .bg-primary-100 { background-color: #e0e7ff; }
    .bg-primary-200 { background-color: #c7d2fe; }
    .bg-primary-300 { background-color: #a5b4fc; }
    .bg-primary-400 { background-color: #818cf8; }
    .bg-primary-500 { background-color: #6366f1; }
    .bg-primary-600 { background-color: #4f46e5; }
    .bg-primary-700 { background-color: #4338ca; }
    .bg-primary-800 { background-color: #3730a3; }
    .bg-primary-900 { background-color: #312e81; }

    .text-primary-500 { color: #6366f1; }
    .text-primary-600 { color: #4f46e5; }
    .text-primary-700 { color: #4338ca; }

    .hover\:bg-primary-600:hover { background-color: #4f46e5; }
    .border-primary-200 { border-color: #c7d2fe; }
    .hover\:border-primary-200:hover { border-color: #c7d2fe; }

    .from-primary-400 { --tw-gradient-from: #818cf8; }
    .from-primary-500 { --tw-gradient-from: #6366f1; }
    .from-primary-600 { --tw-gradient-from: #4f46e5; }
    .to-primary-500 { --tw-gradient-to: #6366f1; }
    .to-primary-600 { --tw-gradient-to: #4f46e5; }
  </style>
</head>

<body class="bg-gray-50 min-h-screen">
  <!-- Header -->
  <header class="sticky top-0 z-30 bg-white border-b border-gray-200 shadow-sm">
    <div class="container mx-auto px-4 py-3">
      <div class="flex items-center justify-between">
        <!-- Left section with logo and toggle -->
        <div class="flex items-center space-x-4">
          <button id="sidebar-toggle"
            class="h-9 w-9 flex items-center justify-center rounded-md hover:bg-gray-100 lg:hidden">
            <i class="fas fa-bars text-gray-600"></i>
          </button>
          <h1 class="text-xl font-semibold text-gray-800">Explore</h1>
        </div>

        <!-- Right section with search and profile -->
        <div class="flex items-center space-x-4">
          <div class="relative hidden md:block w-64">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
            <input type="text" id="search-input" placeholder="Search posts..."
              class="pl-10 py-2 pr-4 w-full rounded-md bg-gray-100 border-0 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
          </div>

          <button id="notifications-btn"
            class="h-9 w-9 flex items-center justify-center rounded-full hover:bg-gray-100 relative">
            <i class="far fa-bell text-gray-600"></i>
            <span class="absolute top-0 right-0 h-2 w-2 bg-indigo-600 rounded-full"></span>
          </button>

          <button id="messages-btn"
            class="h-9 w-9 flex items-center justify-center rounded-full hover:bg-gray-100 relative">
            <i class="far fa-envelope text-gray-600"></i>
            <span class="absolute top-0 right-0 h-2 w-2 bg-indigo-600 rounded-full"></span>
          </button>

          <div
            class="h-9 w-9 rounded-full bg-gray-200 flex items-center justify-center cursor-pointer hover:opacity-80 transition-opacity">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User"
              class="h-full w-full rounded-full object-cover">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Search bar for mobile -->
  <div class="md:hidden container mx-auto px-4 py-3">
    <div class="relative">
      <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
      <input type="text" id="mobile-search-input" placeholder="Search posts..."
        class="pl-10 py-2 pr-4 w-full rounded-md bg-gray-100 border-0 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
    </div>
  </div>

  <!-- Main layout with sidebars -->
  <div class="flex min-h-[calc(100vh-70px)]">
    <!-- Left Sidebar -->
    <aside id="left-sidebar"
      class="fixed lg:sticky top-[70px] left-0 h-[calc(100vh-70px)] w-64 bg-white border-r border-gray-200 z-20 transform -translate-x-full lg:translate-x-0 sidebar-transition overflow-y-auto custom-scrollbar">
      <!-- Navigation -->
      <nav class="p-4">
        <h2 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Navigation</h2>
        <ul class="space-y-1">
          <li>
            <a href="#"
              class="nav-item active flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <i class="fas fa-home w-5 h-5 mr-3 text-gray-500"></i>
              Home
            </a>
          </li>
          <li>
            <a href="#"
              class="nav-item flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <div class="relative cursor-pointer group" id="requestsToggle">
              <div class="p-1 rounded-full group-hover:bg-gray-100 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-700 group-hover:text-primary-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
              </div>
              <!-- Notification Badge -->
              <span class="absolute -top-1 -right-1 flex items-center justify-center w-5 h-5 bg-primary-500 text-white text-xs font-bold rounded-full shadow-sm pulse-animation"></span>
            </div>
              Requests  
            </a>
          </li>
          <li>
            <a href="#"
              class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <i class="fas fa-compass w-5 h-5 mr-3 text-gray-500"></i>
              Explore
            </a>
          </li>
          <li>
            <a href="#"
              class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <i class="fas fa-bookmark w-5 h-5 mr-3 text-gray-500"></i>
              Saved
            </a>
          </li>
          <li>
            <a href="#"
              class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
              <i class="fas fa-user-friends w-5 h-5 mr-3 text-gray-500"></i>
              Network
            </a>
          </li>
          <li>
            <a href="#"
              class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-50 transition-colors">
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
      <div class="container mx-auto px-4 py-4 max-w-4xl">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
          <div class="flex items-center space-x-2">
            <div class="bg-gray-100 rounded-md p-1 flex">
              <button class="filter-btn active px-4 py-1.5 rounded-md bg-white text-sm font-medium transition-colors"
                data-filter="trending">
                Trending
              </button>
              <button class="filter-btn px-4 py-1.5 rounded-md text-sm font-medium transition-colors"
                data-filter="latest">
                Latest
              </button>
              <button class="filter-btn px-4 py-1.5 rounded-md text-sm font-medium transition-colors"
                data-filter="following">
                Following
              </button>
            </div>
          </div>

          <div class="flex items-center space-x-2 w-full sm:w-auto">
            <div class="relative">
              <button id="filter-dropdown-btn"
                class="flex items-center px-3 py-2 text-sm font-medium border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                <i class="fas fa-filter mr-2 text-gray-500"></i>
                Filter
                <i class="fas fa-chevron-down ml-2 text-gray-500 text-xs"></i>
              </button>
              <div id="filter-dropdown"
                class="hidden absolute right-0 mt-1 w-48 bg-white rounded-md shadow-lg border border-gray-200 z-10">
                <div class="py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All Posts</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Job Opportunities</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Services</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Case Studies</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mentorship</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Posts List -->
      <div class="container  mx-auto px-4 py-4 max-w-4xl">
          @foreach ($posts as $post)
            @php
              $langs = json_decode($post->languages);
            @endphp
        <div id="posts-container" class="grid grid-cols-1 gap-4 ">
          <!-- Post 1 -->
            <div class="post-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
            <div class="p-4">
              <!-- Author and timestamp -->
              <div class="flex items-center mb-3">
              <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-3">
                <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Alex Morgan"
                class="h-full w-full object-cover">
              </div>
              <div class="flex-1">
                <div class="flex items-center">
                <h3 class="font-medium text-gray-900 text-sm">Alex Morgan</h3>
                <i class="fas fa-check-circle ml-1 text-blue-500 text-xs"></i>
                </div>
                <div class="flex items-center text-xs text-gray-500 mt-0.5">
                <span>Product Designer</span>
                <span class="mx-1">•</span>
                <span>Created at:{{ $post->created_at }}</span>
                </div>
              </div>
              <button
                class="h-8 w-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                <i class="fas fa-ellipsis-h text-gray-500 text-sm"></i>
              </button>
              </div>

              <!-- Title and content -->
              <h2 class="text-base font-semibold text-gray-900 mb-2">{{ $post->title }}</h2>
              <p class="text-gray-700 text-sm mb-3">{{ $post->description }}</p>

              <!-- Post meta information -->
              <div class="flex flex-wrap items-center mb-3 text-xs text-gray-500">
              <!-- Experience Level -->
              <div class="post-meta-item">
                <i class="fas fa-user-graduate"></i>
                <span>{{$post->experience}}</span>
              </div>

              <span class="post-meta-divider"></span>

              <!-- Credit Cost -->
              <div class="post-meta-item">
                <i class="fas fa-credit-card"></i>
                <span>{{ $post->credits_cost }} credits</span>
              </div>

              <span class="post-meta-divider"></span>

              <!-- Duration -->
              <div class="post-meta-item">
                <i class="fas fa-clock"></i>
                <span>{{ $post->duration }} {{ $post->duration_unit }}</span>
              </div>
              </div>

              <!-- Languages/Technologies -->
              <div class="flex flex-wrap gap-1.5 mb-3">
              <span
                class="inline-block bg-gray-100 text-gray-700 rounded-full px-2.5 py-0.5 text-xs font-medium">{{ implode(', ', $langs) }}</span>
              <span
                class="inline-block bg-gray-100 text-gray-700 rounded-full px-2.5 py-0.5 text-xs font-medium">Sketch</span>
              <span
                class="inline-block bg-gray-100 text-gray-700 rounded-full px-2.5 py-0.5 text-xs font-medium">Adobe
                XD</span>
              <span class="inline-block badge-expert rounded-full px-2.5 py-0.5 text-xs font-medium">Expert</span>
              </div>

              <!-- Action button -->
              <button
              class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-1.5 px-4 rounded-md transition-colors flex items-center justify-center text-sm">
              <i class="fas fa-paper-plane mr-2"></i>
              Send Request
              </button>
            </div>
          </div>
          @endforeach

        </div>

      <!-- No results message (hidden by default) -->
      <div id="no-results" class="hidden container mx-auto px-4 py-12 text-center max-w-4xl">
        <h3 class="text-lg font-medium text-gray-700">No posts found</h3>
        <p class="text-gray-500 mt-2">Try adjusting your search or filters</p>
      </div>
    </main>

    <!-- Right Sidebar -->
    <aside id="right-sidebar"
      class="hidden xl:block w-80 bg-white border-l border-gray-200 sticky top-[70px] h-[calc(100vh-70px)] overflow-y-auto custom-scrollbar">
      <!-- User Profile Summary -->
      <div class="p-4 border-b border-gray-200">
        <div class="flex items-center space-x-3">
          <div class="h-12 w-12 rounded-full bg-gray-200 overflow-hidden">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Your Profile"
              class="h-full w-full object-cover">
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
              <img src="https://randomuser.me/api/portraits/women/76.jpg" alt="Jane Smith"
                class="h-full w-full object-cover">
            </div>
            <div class="flex-1 min-w-0">
              <h4 class="text-sm font-medium text-gray-900 truncate">Jane Smith</h4>
              <p class="text-xs text-gray-500 truncate">UX Designer at Google</p>
            </div>
            <button
              class="ml-2 px-3 py-1 text-xs font-medium text-indigo-600 border border-indigo-600 rounded-full hover:bg-indigo-50 transition-colors">
              Connect
            </button>
          </div>
          <div class="flex items-center">
            <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-3">
              <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Robert Johnson"
                class="h-full w-full object-cover">
            </div>
            <div class="flex-1 min-w-0">
              <h4 class="text-sm font-medium text-gray-900 truncate">Robert Johnson</h4>
              <p class="text-xs text-gray-500 truncate">Frontend Developer at Netflix</p>
            </div>
            <button
              class="ml-2 px-3 py-1 text-xs font-medium text-indigo-600 border border-indigo-600 rounded-full hover:bg-indigo-50 transition-colors">
              Connect
            </button>
          </div>
          <div class="flex items-center">
            <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-3">
              <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Lisa Wong"
                class="h-full w-full object-cover">
            </div>
            <div class="flex-1 min-w-0">
              <h4 class="text-sm font-medium text-gray-900 truncate">Lisa Wong</h4>
              <p class="text-xs text-gray-500 truncate">Product Manager at Airbnb</p>
            </div>
            <button
              class="ml-2 px-3 py-1 text-xs font-medium text-indigo-600 border border-indigo-600 rounded-full hover:bg-indigo-50 transition-colors">
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
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Your Profile"
                class="h-full w-full object-cover">
            </div>
            <div>
              <p class="text-sm text-gray-700">You connected with <span class="font-medium">Alex Morgan</span></p>
              <p class="text-xs text-gray-500">2 hours ago</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-3 mt-1">
              <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Chen"
                class="h-full w-full object-cover">
            </div>
            <div>
              <p class="text-sm text-gray-700"><span class="font-medium">Sarah Chen</span> viewed your profile</p>
              <p class="text-xs text-gray-500">5 hours ago</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="h-8 w-8 rounded-full bg-gray-200 overflow-hidden mr-3 mt-1">
              <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Michael Torres"
                class="h-full w-full object-cover">
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

  <!-- Requests section -->
  <div class="sidebar-panel fixed top-0 right-0 h-full w-80 md:w-96 bg-white shadow-xl z-50 overflow-hidden flex flex-col">
      <div class="p-5 border-b border-gray-100 flex justify-between items-center bg-gradient-to-r from-primary-500 to-primary-600 text-white">
        <h2 class="text-lg font-semibold">Collaboration Requests</h2>
        <button id="closePanelBtn" class="p-1.5 rounded-full hover:bg-white/20 transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <div class="flex-1 overflow-y-auto p-4 space-y-3">
        <!-- Request Item 1 -->
        <div class="request-item flex items-center justify-between p-4 border border-gray-100 rounded-xl bg-white shadow-sm hover:border-primary-200 transition-colors">
          <div class="flex items-center space-x-3">
            <div class="relative">
              <div class="absolute -inset-0.5 bg-gradient-to-r from-primary-400 to-primary-600 rounded-full blur-sm opacity-70"></div>
              <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="User" class="relative w-12 h-12 rounded-full border-2 border-white object-cover" />
            </div>
            <div>
              <p class="font-medium text-gray-800">johndoe</p>
              <div class="flex items-center mt-1">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                  <span class="w-1.5 h-1.5 mr-1.5 rounded-full bg-blue-500"></span>
                  Organizer
                </span>
              </div>
            </div>
          </div>
          <div class="flex space-x-2">
            <button class="action-button p-2 bg-green-50 text-green-600 rounded-full hover:bg-green-100 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </button>
            <button class="action-button p-2 bg-red-50 text-red-600 rounded-full hover:bg-red-100 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        
        <!-- Request Item 2 -->
        <div class="request-item flex items-center justify-between p-4 border border-gray-100 rounded-xl bg-white shadow-sm hover:border-primary-200 transition-colors">
          <div class="flex items-center space-x-3">
            <div class="relative">
              <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full blur-sm opacity-70"></div>
              <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User" class="relative w-12 h-12 rounded-full border-2 border-white object-cover" />
            </div>
            <div>
              <p class="font-medium text-gray-800">sarahsmith</p>
              <div class="flex items-center mt-1">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                  <span class="w-1.5 h-1.5 mr-1.5 rounded-full bg-purple-500"></span>
                  Participant
                </span>
              </div>
            </div>
          </div>
          <div class="flex space-x-2">
            <button class="action-button p-2 bg-green-50 text-green-600 rounded-full hover:bg-green-100 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </button>
            <button class="action-button p-2 bg-red-50 text-red-600 rounded-full hover:bg-red-100 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        
        <!-- Request Item 3 -->
        <div class="request-item flex items-center justify-between p-4 border border-gray-100 rounded-xl bg-white shadow-sm hover:border-primary-200 transition-colors">
          <div class="flex items-center space-x-3">
            <div class="relative">
              <div class="absolute -inset-0.5 bg-gradient-to-r from-green-400 to-green-600 rounded-full blur-sm opacity-70"></div>
              <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="User" class="relative w-12 h-12 rounded-full border-2 border-white object-cover" />
            </div>
            <div>
              <p class="font-medium text-gray-800">mikebrown</p>
              <div class="flex items-center mt-1">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                  <span class="w-1.5 h-1.5 mr-1.5 rounded-full bg-green-500"></span>
                  Collaborator
                </span>
              </div>
            </div>
          </div>
          <div class="flex space-x-2">
            <button class="action-button p-2 bg-green-50 text-green-600 rounded-full hover:bg-green-100 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </button>
            <button class="action-button p-2 bg-red-50 text-red-600 rounded-full hover:bg-red-100 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      
      <!-- Panel Footer -->
      <div class="p-4 border-t border-gray-100 bg-gray-50">
        <button class="w-full py-2.5 px-4 bg-primary-500 hover:bg-primary-600 text-white font-medium rounded-lg shadow-sm transition-colors flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg>
          New Request
        </button>
      </div>
    </div>

  <!-- Overlay for sidebar panel -->
  <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden transition-opacity"></div>

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
    const filterBtns = document.querySelectorAll('.filter-btn');
    const likeBtns = document.querySelectorAll('.like-btn');
    const saveBtns = document.querySelectorAll('.save-btn');

    // Sidebar elements
    const leftSidebar = document.getElementById('left-sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebarBackdrop = document.getElementById('sidebar-backdrop');

    // Requests panel elements
    const requestsToggle = document.getElementById('requestsToggle');
    const closePanelBtn = document.getElementById('closePanelBtn');
    const sidebarPanel = document.querySelector('.sidebar-panel');
    const overlay = document.getElementById('overlay');

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

    // Requests panel functionality
    function openPanel() {
      sidebarPanel.classList.add('open');
      overlay.classList.remove('hidden');
      setTimeout(() => {
        overlay.classList.add('visible');
      }, 10);
    }
    
    function closePanel() {
      sidebarPanel.classList.remove('open');
      overlay.classList.remove('visible');
      setTimeout(() => {
        overlay.classList.add('hidden');
      }, 300);
    }
    
    // Event listeners for requests panel
    requestsToggle.addEventListener('click', openPanel);
    closePanelBtn.addEventListener('click', closePanel);
    overlay.addEventListener('click', closePanel);
    
    // Close panel with Escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && sidebarPanel.classList.contains('open')) {
        closePanel();
      }
    });
  </script>
</body>

</html>
