<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>User Profile | FreeLancer</title>
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
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer components {
            .tab-active {
                @apply text-primary-600 border-primary-600 ;
            }
            .skill-badge {
                @apply px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800  transition-all hover:bg-primary-200;
            }
            .stat-card {
                @apply flex flex-col items-center p-4 bg-white  rounded-lg shadow-md transition-all hover:shadow-lg;
            }
            .project-card {
                @apply bg-white  rounded-lg shadow-md overflow-hidden transition-all hover:shadow-lg hover:-translate-y-1;
            }
            .review-card {
                @apply bg-white  rounded-lg shadow-md p-6 transition-all hover:shadow-lg;
            }
            .modal-backdrop {
                @apply bg-black bg-opacity-50;
            }
            .animate-fade-in {
                animation: fadeIn 0.3s ease-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
        }
    </style>
</head>

<body class="bg-gray-50  transition-colors duration-200">
    <!-- Header -->
    <header class="bg-white  shadow-sm sticky top-0 z-50 transition-colors duration-200">

        <!-- Mobile Menu -->

    </header>

    <main class="container mx-auto px-4 py-6">
        <!-- Profile Header -->
        <section class="relative mb-8">
            <!-- Cover Image -->
            <div class="h-48 md:h-64 lg:h-80 rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                    alt="Profile Cover" class="w-full h-full object-cover">
            </div>

            <!-- Profile Info -->
            <div
                class="bg-white rounded-xl shadow-lg pr-6 pb-4 pl-4 md:p-8 -mt-20 md:-mt-24 ml-4 md:ml-8 mr-4 md:mr-8 relative z-10 transition-colors duration-200">

                <div class="flex flex-col md:flex-row">
                    <!-- Avatar -->
                    <div class="flex-shrink-0 -mt-16 md:-mt-20 mb-4 md:mb-0 md:mr-6">
                        <div class="relative">
                            <img src="{{ asset('images/profile.png') }}" alt="Profile Picture"
                                class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-white  object-cover shadow-md">
                        </div>
                    </div>

                    <!-- Profile Details -->
                    <div class="flex-grow">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div>
                                <div class="flex items-center">
                                    <h1 class="text-2xl md:text-3xl font-bold text-secondary-900">{{$profile->name}}
                                    </h1>

                                </div>
                                <h2 class="text-lg text-secondary-600  mt-1">{{$profile->title }}</h2>
                                <div class="flex items-start mt-2 text-sm text-secondary-500 flex-col gap-2 ">
                                    <div class="flex items-center mr-4">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        <span>{{ $profile->location }}</span>
                                    </div>

                                </div>
                            </div>
                            <div>

                                <div class="mt-4 md:mt-4 flex flex-wrap gap-2 ">

                                    <div
                                        class="flex items-center bg-primary-50 text-primary-700 px-3 py-1.5 rounded-full">
                                        <i class="fas fa-coins mr-2"></i>
                                        <span class="font-medium">750</span>
                                        <span class="text-primary-500 ml-1">credits</span>
                                    </div>
                                    <button class="">
                                        <a href="{{ route('posts.create') }}"
                                            class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-md transition-colors">Add
                                            Post</a>

                                    </button>

                                    <div class="relative">
                                        <button
                                            class="border border-secondary-300 hover:bg-secondary-100 text-secondary-800  p-2 rounded-md transition-colors">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Sidebar -->
            <div class="lg:w-1/3">
                <div class="bg-white  rounded-xl shadow-md p-6 mb-6 transition-colors duration-200">
                    <h3 class="text-lg font-semibold mb-4 flex items-center">
                        <i class="fas fa-info-circle text-primary-600  mr-2"></i>
                        Availability
                    </h3>
                    <div class="space-y-4">

                        <div class="flex items-center justify-between">
                            <span class="text-secondary-600 ">Email</span>
                            <span class="text-secondary-900 font-medium">{{ $profile->email}}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-secondary-600 ">Phone number</span>
                            <span class="text-secondary-900  font-medium">{{ $profile->phone}}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-secondary-600 ">Languages</span>
                            <span class="text-secondary-900  font-medium">{{ $profile->languages}}</span>
                        </div>
                    </div>
                </div>

                <div class="space-y-8">
                    <!-- Skills Section -->
                    <section
                        class="bg-white rounded-xl shadow-soft shadow-md p-6 mb-6 transition-colors duration-200 md:p-8">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-semibold text-secondary-900">Skills</h2>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors flex items-center"
                                id="addSkillBtn">
                                <i class="fas fa-plus mr-2"></i>
                                <span>Add Skill</span>
                            </button>
                        </div>

                        <!-- Technical Skills -->
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-secondary-500 uppercase tracking-wider mb-3">Technical
                                Skills</h3>
                            <div class="flex flex-wrap gap-2" id="technicalSkillsContainer">
                                <div
                                    class="bg-secondary-100 text-secondary-800 px-3 py-1.5 rounded-full flex items-center group">
                                    @foreach (auth()->user()->skills as $skill)
                                        @if ($skill->type == 'hard')
                                            <span>{{ $skill->name }}</span>
                                        @endif
                                    @endforeach
                                    <button
                                        class="ml-2 text-secondary-400 opacity-0 group-hover:opacity-100 transition-opacity hover:text-red-500">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                            </div>
                        </div>

                        <!-- Soft Skills -->
                        <div>
                            <h3 class="text-sm font-medium text-secondary-500 uppercase tracking-wider mb-3">Soft Skills
                            </h3>
                            <div class="flex flex-wrap gap-2" id="softSkillsContainer">
                                <div
                                    class="bg-primary-50 text-primary-700 px-3 py-1.5 rounded-full flex items-center group">
                                    @foreach (auth()->user()->skills as $skill)
                                        @if ($skill->type == 'soft')
                                            <span>{{ $skill->name }}</span>
                                        @endif
                                    @endforeach
                                    <button
                                        class="ml-2 text-primary-400 opacity-0 group-hover:opacity-100 transition-opacity hover:text-red-500">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>

            <!-- Main Content Area -->
            <div class="lg:w-2/3">
                <!-- Tabs -->
                <div class="bg-white  rounded-xl shadow-md mb-6 transition-colors duration-200">
                    <div class="border-b border-secondary-200 ">
                        <nav class="flex overflow-x-auto" aria-label="Tabs">
                            <button
                                class="tab-button tab-active whitespace-nowrap px-6 py-4 text-sm font-medium border-b-2 border-transparent"
                                data-tab="overview">
                                <i class="fas fa-user mr-2"></i>Overview
                            </button>

                            <button
                                class="tab-button whitespace-nowrap px-6 py-4 text-sm font-medium border-b-2 border-transparent text-secondary-500  hover:text-secondary-700 "
                                data-tab="reviews">
                                <i class="fas fa-star mr-2"></i>Reviews
                            </button>
                            <button
                                class="tab-button whitespace-nowrap px-6 py-4 text-sm font-medium border-b-2 border-transparent text-secondary-500  hover:text-secondary-700 "
                                data-tab="history">
                                <i class="fas fa-history mr-2"></i>Offered Services
                            </button>
                        </nav>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="tab-content" id="overview">
                    <!-- Bio Section -->
                    <section
                        class="bg-white rounded-xl shadow-soft shadow-md p-6 mb-6 transition-colors duration-200 md:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-secondary-900">About</h2>
                            <button class="text-secondary-400 hover:text-primary-600 transition-colors" id="editBioBtn">
                                <i class="fas fa-pen"></i>
                            </button>
                        </div>
                        <div class="prose max-w-none text-secondary-700" id="userBio">
                            <p> {{ $profile->bio }}</p>

                        </div>
                    </section>



                </div>


                <div class="tab-content hidden" id="reviews">
                    <div class="bg-white  rounded-xl shadow-md p-6 mb-6 transition-colors duration-200">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold">Client Reviews</h3>
                            <div class="flex items-center">
                                <div class="flex items-center mr-2">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                </div>
                                <span class="text-lg font-bold text-secondary-900 ">4.9</span>
                                <span class="text-sm text-secondary-500  ml-1">(48 reviews)</span>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="review-card">
                                <div class="flex items-start">
                                    <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Client"
                                        class="w-12 h-12 rounded-full object-cover">
                                    <div class="ml-4 flex-grow">
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium text-secondary-900 ">Sarah Johnson</h4>
                                            <span class="text-sm text-secondary-500 ">2 weeks ago</span>
                                        </div>
                                        <div class="flex items-center mt-1">
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                        </div>
                                        <p class="mt-2 text-secondary-600 ">
                                            Alex is an exceptional developer who delivered our e-commerce platform ahead
                                            of schedule.
                                            His communication was clear throughout the project, and he was quick to
                                            implement changes
                                            when needed. Highly recommended!
                                        </p>
                                        <div class="mt-3 text-sm text-secondary-500 ">
                                            <span class="font-medium">Project:</span> E-commerce Platform
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review-card">
                                <div class="flex items-start">
                                    <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Client"
                                        class="w-12 h-12 rounded-full object-cover">
                                    <div class="ml-4 flex-grow">
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium text-secondary-900 ">Michael Chen</h4>
                                            <span class="text-sm text-secondary-500 ">1 month ago</span>
                                        </div>
                                        <div class="flex items-center mt-1">
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                        </div>
                                        <p class="mt-2 text-secondary-600 ">
                                            Working with Alex was a pleasure. He built our analytics dashboard with
                                            attention to detail
                                            and made sure it was optimized for performance. The real-time features work
                                            flawlessly,
                                            and our team loves using it daily.
                                        </p>
                                        <div class="mt-3 text-sm text-secondary-500 ">
                                            <span class="font-medium">Project:</span> Analytics Dashboard
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review-card">
                                <div class="flex items-start">
                                    <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Client"
                                        class="w-12 h-12 rounded-full object-cover">
                                    <div class="ml-4 flex-grow">
                                        <div class="flex items-center justify-between">
                                            <h4 class="font-medium text-secondary-900 ">Emily Rodriguez</h4>
                                            <span class="text-sm text-secondary-500 ">2 months ago</span>
                                        </div>
                                        <div class="flex items-center mt-1">
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="fas fa-star text-yellow-400"></i>
                                            <i class="far fa-star text-yellow-400"></i>
                                        </div>
                                        <p class="mt-2 text-secondary-600 ">
                                            Alex developed our mobile app with great skill. The app is intuitive and
                                            performs well
                                            on both iOS and Android. There were a few minor issues after launch, but
                                            Alex was quick
                                            to fix them. Overall, a great experience.
                                        </p>
                                        <div class="mt-3 text-sm text-secondary-500 ">
                                            <span class="font-medium">Project:</span> Fitness Tracker App
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-center">
                            <button
                                class="px-4 py-2 border border-secondary-300 rounded-md text-secondary-700 hover:bg-secondary-50  transition-colors">
                                Load More Reviews
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Services Offered -->
                <section
                    class="bg-white rounded-xl shadow-md p-6 transition-colors duration-200 md:p-8 tab-content hidden"
                    id="history">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-semibold text-secondary-900">My Services</h2>
                        <button class="text-primary-600 hover:text-primary-700 transition-colors flex items-center"
                            id="addServiceBtn">
                            <i class="fas fa-plus mr-2"></i>
                            <span>Add Service</span>
                        </button>
                    </div>

                    <div class="space-y-6" id="servicesContainer">
                        <!-- Service Item 1 -->
                        @foreach (auth()->user()->personalServices as $service)
                            <div
                                class="border border-secondary-200 rounded-lg p-5 hover:border-primary-300 transition-colors">
                                <div class="flex justify-between">
                                    <h3 class="text-lg font-medium text-secondary-900">{{ $service->title }}</h3>
                                    <div class="flex space-x-2">
                                        <button
                                            class="text-secondary-400 hover:text-primary-600 transition-colors service-edit-btn">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                        <button
                                            class="text-secondary-400 hover:text-red-500 transition-colors service-delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-2 text-secondary-600">{{ $service->description }}</p>
                                <div class="mt-3 flex items-center">
                                    <span class="text-secondary-500">Estimated:</span>
                                    <span
                                        class="ml-2 bg-primary-50 text-primary-700 px-2 py-0.5 rounded text-sm font-medium">{{ $service->credit_cost }}</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </section>

            </div>
        </div>

        <!-- Edit Bio Modal -->
        <div id="editBioModal" class="fixed inset-0 z-50 hidden">
            <div class="modal-backdrop absolute inset-0"></div>
            <div class="absolute inset-0 flex items-center justify-center p-4">
                <div class="bg-white rounded-xl shadow-lg max-w-md w-full p-6 animate-fade-in">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold text-secondary-900">Edit Bio</h3>
                        <button class="text-secondary-500 hover:text-secondary-700 transition-colors modal-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <form id="editBioForm">
                        <div class="mb-4">
                            <label for="bioInput" class="block text-sm font-medium text-secondary-700 mb-1">About
                                You</label>
                            <textarea id="bioInput" rows="6"
                                class="w-full px-3 py-2 border border-secondary-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">I'm a UX/UI Designer and Frontend Developer with over 8 years of experience creating intuitive digital experiences. My approach combines user-centered design principles with clean, efficient code to build products that are both beautiful and functional.

I specialize in design systems, responsive web applications, and bridging the gap between design and development. I'm passionate about accessibility and creating inclusive experiences that work for everyone.</textarea>
                            <div class="mt-1 text-sm text-secondary-500 flex justify-between">
                                <span>Use markdown for formatting</span>
                                <span id="bioCharCount">250/500</span>
                            </div>
                        </div>
                        <div class="flex justify-end space-x-3">
                            <button type="button"
                                class="px-4 py-2 border border-secondary-300 rounded-lg text-secondary-700 hover:bg-secondary-50 transition-colors modal-close">
                                Cancel
                            </button>
                            <button type="submit"
                                class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-colors">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add Skill Modal -->
        <div id="skillModal" class="fixed inset-0 z-50 hidden">
            <div class="modal-backdrop absolute inset-0"></div>
            <div class="absolute inset-0 flex items-center justify-center p-4">
                <div class="bg-white rounded-xl shadow-lg max-w-md w-full p-6 animate-fade-in">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold text-secondary-900">Add Skill</h3>
                        <button class="text-secondary-500 hover:text-secondary-700 transition-colors modal-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <form id="skills-form">
                        <!-- Skills -->
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <label for="skills-input" class="block text-sm font-medium text-gray-700">Skills
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="flex items-center">
                                    <span class="text-xs text-gray-500 mr-1">Add your top skills</span>
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 bg-gray-100 text-gray-500 rounded-full cursor-pointer"
                                        title="Add skills that showcase your expertise. These will help others find you for relevant projects.">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 mb-2">
                                <div class="relative flex-grow">
                                    <input type="text" id="skills-input"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Type a skill and press Enter (e.g., JavaScript, Project Management)">
                                </div>
                                <button type="button" id="add-skill-btn"
                                    class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Add
                                </button>
                            </div>
                            <div id="skills-container"
                                class="flex flex-wrap gap-2 min-h-[40px] max-h-[120px] overflow-y-auto p-2 border border-gray-200 rounded-lg tag-container">
                                <!-- Skills tags will be added here dynamically -->
                            </div>
                            <div class="hidden mt-1 text-sm text-red-500" id="skills-error"></div>
                            <input type="hidden" name="skills" id="skills-hidden">
                        </div>

                        <div class="mt-6">
                            <button type="button" id="cancelbtn"
                                class="px-4 py-2 border border-secondary-300 rounded-lg text-secondary-700 hover:bg-secondary-50 transition-colors modal-close">
                                Cancel
                            </button>
                            <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Save Skills
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>


    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // Tab switching
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    tabButtons.forEach(btn => {
                        btn.classList.remove('tab-active');
                    });

                    // Add active class to clicked button
                    button.classList.add('tab-active');

                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Show the corresponding tab content
                    const tabId = button.getAttribute('data-tab');
                    document.getElementById(tabId).classList.remove('hidden');
                });
            });

            // Tab triggers from other elements
            const tabTriggers = document.querySelectorAll('[data-tab-trigger]');

            tabTriggers.forEach(trigger => {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    const tabId = trigger.getAttribute('data-tab-trigger');
                    const tabButton = document.querySelector(`.tab-button[data-tab="${tabId}"]`);
                    tabButton.click();
                });
            });

            // Modal functionality
            function openModal(modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeModal(modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }

            // Close modals when clicking on backdrop or close button
            document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
                backdrop.addEventListener('click', (e) => {
                    if (e.target === backdrop) {
                        const modal = backdrop.closest('.fixed');
                        closeModal(modal);
                    }
                });
            });

            document.querySelectorAll('.modal-close').forEach(closeBtn => {
                closeBtn.addEventListener('click', () => {
                    const modal = closeBtn.closest('.fixed');
                    closeModal(modal);
                });
            });

            // Bio editing functionality
            const editBioModal = document.getElementById('editBioModal');
            const editBioBtn = document.getElementById('editBioBtn');
            const editBioForm = document.getElementById('editBioForm');
            const bioInput = document.getElementById('bioInput');
            const bioCharCount = document.getElementById('bioCharCount');
            const userBio = document.getElementById('userBio');

            editBioBtn.addEventListener('click', () => {
                bioInput.value = userBio.innerText.trim();
                updateBioCharCount();
                openModal(editBioModal);
            });

            function updateBioCharCount() {
                const length = bioInput.value.length;
                bioCharCount.textContent = `${length}/500`;
            }

            bioInput.addEventListener('input', updateBioCharCount);

            editBioForm.addEventListener('submit', (e) => {
                e.preventDefault();
                userBio.innerHTML = bioInput.value.replace(/\n/g, '<br>');
                closeModal(editBioModal);
            });


            // Skills  functionality

            const addSkillBtn =document.getElementById('addSkillBtn')
            const skillsModal = document.getElementById('skillModal');
            const canselBtn = document.getElementById('cancelbtn');
            const skillsInput = document.getElementById('skills-input');
            const skillsContainer = document.getElementById('skills-container');
            const skillsForm = document.getElementById('skills-form');
            const skillsError = document.getElementById('skills-error');
            const skillsHidden = document.getElementById('skills-hidden');
            let skillsData = [];
            let nextId = 1;


            addSkillBtn.addEventListener('click', () => {
                openModal(skillsModal);
            });
            canselBtn.addEventListener('click', () => {
                closeModal(skillsModal);
            });
            skillsForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const skillName = skillsInput.value.trim();
                if (skillName) {
                    addSkill(skillName);
                    skillsInput.value = '';
                    closeModal(skillsModal);
                }
            });

            function addSkill(skillName) {  
                if (!skillName.trim()) return;

                // Check if skill already exists
                const existingSkills = Array.from(skillsContainer.querySelectorAll('.skill-tag')).map(tag =>
                    tag.querySelector('span').textContent.toLowerCase()
                );

                if (existingSkills.includes(skillName.toLowerCase())) return;

                // Create skill tag
                const skillTag = document.createElement('div');
                skillTag.className = 'skill-tag inline-flex items-center bg-blue-100 text-blue-700 rounded-full px-3 py-1 text-sm';
                skillTag.innerHTML = `
                    <span>${skillName}</span>
                    <button type="button" class="ml-1 text-blue-500 hover:text-blue-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                `;  
                const skillId = nextId++;
                skillsData.push({ id: skillId, name: skillName });

                // Add remove event listener
                skillTag.querySelector('button').addEventListener('click', function() {
                    skillTag.remove();
                    updateHiddenField();
                });

                skillsContainer.appendChild(skillTag);
                skillsInput.value = '';
                updateHiddenField();
            }

            function updateHiddenField() {
                const skills = Array.from(skillsContainer.querySelectorAll('.skill-tag')).map(tag =>
                    tag.querySelector('span').textContent
                );
                skillsHidden.value = JSON.stringify(skills);
            }

            addSkillBtn.addEventListener('click', function() {
                addSkill(skillsInput.value);
            });

            skillsInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    addSkill(this.value);
                }
            });

            skillsForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validate that at least one skill is added
                const skillTags = skillsContainer.querySelectorAll('.skill-tag');
                
                if (skillTags.length === 0) {
                    skillsError.textContent = 'Please add at least one skill';
                    skillsError.classList.remove('hidden');
                    return;
                } else {
                    skillsError.classList.add('hidden');
                }
                
                // Get all skills
                const skills = Array.from(skillTags).map(tag => 
                    tag.querySelector('span').textContent
                );
                
                // Send data to server
                sendSkills(skills);
            });

            async function sendSkills(skills) {
                try {
                    // Show loading indicator if you have one
                    // loader.style.display = 'flex';
                    
                    // Check if CSRF token exists
                    const csrfToken = document.querySelector('meta[name="csrf-token"]');
                    if (!csrfToken) {
                        console.error('CSRF token not found');
                        alert('CSRF token not found. Please refresh the page.');
                        return;
                    }
                    
                    console.log('Sending skills:', skills);
                    console.log('CSRF token:', csrfToken.getAttribute('content'));
                    
                    const response = await fetch('/save-skills', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken.getAttribute('content'),
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            skills: JSON.stringify(skills)
                        })
                    });
                    
                    console.log('Response status:', response.status);
                    
                    // Try to get the response text first to debug
                    const responseText = await response.text();
                    console.log('Response text:', responseText);
                    
                    // Parse the JSON if possible
                    let result;
                    try {
                        result = JSON.parse(responseText);
                        console.log('Parsed result:', result);
                    } catch (e) {
                        console.error('Could not parse JSON response:', e);
                        alert('Server returned invalid JSON. Check console for details.');
                        return;
                    }
                    
                    if (result.success) {
                        alert('Skills saved successfully!');
                    } else {
                        alert('Error saving skills: ' + (result.message || 'Unknown error'));
                    }
                } catch (error) {
                    console.error('Fetch error:', error);
                    alert('An error occurred while saving skills: ' + error.message);
                } finally {
                  
                }
            }     
        });

       
    
    </script>
</body>

</html>