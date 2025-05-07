<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkillSwap - Échangez vos compétences facilement</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <title>Explore Posts</title>
  <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
              950: '#082f49',
            },
          },
          boxShadow: {
            'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
          },
        },
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      },
    }
  </script>

</head>

<body class="bg-gray-50 min-h-screen">
  <header class="bg-white shadow-sm sticky top-0 z-50">
  @include('layouts.header')

</header>

  <div class="md:hidden container mx-auto px-4 py-3">
    <div class="relative">
      <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
      <input type="text" id="mobile-search-input" placeholder="Search posts..."
        class="pl-10 py-2 pr-4 w-full rounded-md bg-gray-100 border-0 focus:ring-2 focus:ring-indigo-200 focus:outline-none">
    </div>
  </div>

  <div class="flex min-h-[calc(100vh-70px)]">
    <aside id="left-sidebar"
      class="fixed lg:sticky top-[70px] left-0 h-[calc(100vh-70px)] w-64 bg-white border-r border-gray-200 z-20 transform -translate-x-full lg:translate-x-0 sidebar-transition overflow-y-auto custom-scrollbar">
      <nav class="p-4">
        <h2 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Navigation</h2>
        <ul class="space-y-1">
          <li>
            <a href="{{ route('domains.index') }}"
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
                  <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-3 text-gray-700 group-hover:text-primary-600 transition-colors" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                  </svg>
                </div>
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

      <div class="border-t border-gray-200 my-4"></div>
    </aside>

    <main class="flex-1 min-w-0 bg-gray-50">
      <div class="container mx-auto px-4 py-4 max-w-4xl">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
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

      @foreach ($posts as $post)
      <div class="container  mx-auto px-4 py-4 max-w-4xl">
        @php
        $langs = json_decode($post->languages);
        @endphp
        <div id="posts-container" class="grid grid-cols-1 gap-4 ">
          <div class="post-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
          <div class="p-4">
            <div class="flex items-center mb-3">
            <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-3">

              <img src="{{ asset('images/' . $post->user->profile->image) ?? '' }}"
              alt="{{ $post->user->profile->name }}" class="h-full w-full object-cover">
            </div>
            <div class="flex-1">
              <div class="flex items-center">
              <a class="font-medium text-gray-900 text-sm" href="{{ route('profile.user', ['id' => $post->user->id]) }}">
                {{ $post->user->profile->name }}</a>
              </div>
              <div class="flex items-center text-xs text-gray-500 mt-0.5">
              <span>{{ $post->user->profile->title ?? 'no title '}}</span>
              <span class="mx-1">•</span>
              <span>Created at:{{ $post->created_at }}</span>
              </div>
            </div>
            <button
              class="h-8 w-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
              <i class="fas fa-ellipsis-h text-gray-500 text-sm"></i>
            </button>
            </div>

            <h2 class="text-base font-semibold text-gray-900 mb-2">{{ $post->title }}</h2>
            <p class="text-gray-700 text-sm mb-3">{{ $post->description }}</p>

            <div class="flex flex-wrap items-center mb-3 text-xs text-gray-500">
            <div class="post-meta-item">
              <i class="fas fa-user-graduate"></i>
              <span>{{$post->experience}}</span>
            </div>

            <span class="post-meta-divider"></span>

            <div class="post-meta-item">
              <i class="fas fa-credit-card"></i>
              <span>{{ $post->credits_cost }} credits</span>
            </div>

            <span class="post-meta-divider"></span>

            <div class="post-meta-item">
              <i class="fas fa-clock"></i>
              <span>{{ $post->duration }} {{ $post->duration_unit }}</span>
            </div>
            </div>

            <div class="flex flex-wrap gap-1.5 mb-3">
            @foreach($langs as $lang)
          <span
          class="inline-block bg-gray-100 text-gray-700 rounded-full px-2.5 py-0.5 text-xs font-medium">{{ $lang }}</span>
        @endforeach
            <span
              class="inline-block bg-gray-100 text-gray-700 rounded-full px-2.5 py-0.5 text-xs font-medium">Sketch</span>
            <span
              class="inline-block bg-gray-100 text-gray-700 rounded-full px-2.5 py-0.5 text-xs font-medium">Adobe
              XD</span>
            </div>

            @if(isset($post->skills) && !empty($post->skills))
          <div class="mt-3">
          <h4 class="text-sm font-medium text-gray-700 mb-2">Skills Required:</h4>
          <div class="flex flex-wrap gap-1">
            @foreach(explode(',', $post->skills) as $skill)
          <span
          class="inline-block bg-blue-100 text-blue-700 rounded-full px-2.5 py-0.5 text-xs font-medium mr-1 mb-1">
          {{ trim($skill) ?? '' }}
          </span>
          @endforeach
          </div>
          </div>
        @endif

            <button
            class="send-request-btn w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-1.5 px-4 rounded-md transition-colors flex items-center justify-center text-sm"
            data-post-id="{{ $post->id }}">
            <i class="fas fa-paper-plane mr-2"></i>
            Send Request
            </button>
          </div>
        </div>
      </div>
    </div>
    @endforeach



      <div id="no-results" class="hidden container mx-auto px-4 py-12 text-center max-w-4xl">
        <h3 class="text-lg font-medium text-gray-700">No posts found</h3>
        <p class="text-gray-500 mt-2">Try adjusting your search or filters</p>
      </div>
    </main>

    <aside id="right-sidebar"
      class="hidden xl:block w-80 bg-white border-l border-gray-200 sticky top-[70px] h-[calc(100vh-70px)] overflow-y-auto custom-scrollbar">
     

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

  <div id="requestsPanel"
    class="sidebar-panel fixed top-0 right-0 h-full w-80 md:w-96 bg-white shadow-xl z-50 overflow-hidden flex flex-col">
    <div class="p-5 border-b border-gray-100 flex justify-between items-center bg-indigo-600 text-white">
      <h2 class="text-lg font-semibold">Collaboration Requests</h2>
      <button id="closePanelBtn" class="p-1.5 rounded-full hover:bg-white/20 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="flex-1 overflow-y-auto p-4 space-y-3 custom-scrollbar requests-container">
    </div>

    <div id="emptyState" class="hidden flex flex-col items-center justify-center py-12 text-center">
      <div class="bg-gray-100 p-4 rounded-full mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
        </svg>
      </div>
      <h3 class="text-lg font-medium text-gray-900">No pending requests</h3>
      <p class="text-sm text-gray-500 mt-1">
        You're all caught up! Check back later for new collaboration requests.
      </p>
    </div>
  </div>


  <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden transition-opacity"></div>


  <div id="sidebar-backdrop" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-10 hidden lg:hidden"></div>


 <script src="{{ asset('js/posts.js') }}"></script>
</body>

</html>




