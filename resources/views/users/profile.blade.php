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
    <style>
        .bg-overlay {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
        }
    </style>
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
                            <img src="{{ asset('images/' . $profile->image) }}" alt="Profile Picture"
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
                                        <a href="{{ route('posts.index') }}"
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
                            <span class="text-secondary-900  font-medium">{{ $profile->phone_number}}</span>
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
                                @foreach (auth()->user()->skills as $skill)
                                    <!-- delete skill button  -->
                                    <div
                                        class="bg-secondary-100 text-secondary-800 px-3 py-1.5 rounded-full flex items-center group">
                                        <span>{{ $skill->name }}</span>
                                        <a class="ml-2 text-secondary-400 opacity-0 group-hover:opacity-100 transition-opacity hover:text-red-500"
                                            aria-autocomplete="" href="/skills/{{$skill->id}}"><i
                                                class="fas fa-times"></i></a>
                                    </div>
                                @endforeach

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
                                <i class="fas fa-star mr-2"></i>My Posts
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
                        class="bg-white rounded-xl shadow-soft shadow-md p-6 mb-4 transition-colors duration-200 md:p-8">
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
                    <section
                        class="bg-white rounded-xl shadow-soft shadow-md p-6 mb-6 transition-colors duration-200 md:p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h2 class="text-lg  font-medium text-black  tracking-wider mb-3">Languages</h2>
                            <button class="text-primary-600 hover:text-primary-700 transition-colors flex items-center"
                                id="addLanguageBtn">
                                <i class="fas fa-plus mr-2"></i>
                                <span>Add Language</span>
                            </button>
                        </div>

                        <!-- language section -->
                        <div class="mb-6">
                            <!-- <h3 class="  uppercase tracking-wider mb-3">Languages</h3> -->
                            <div class="flex flex-wrap gap-2" id="technicalSkillsContainer">
                                <!-- @foreach (auth()->user()->skills as $skill) -->
                                <!-- delete skill button  -->
                                <div
                                    class="bg-secondary-100 text-secondary-800 px-3 py-1.5 rounded-full flex items-center group">
                                    <span>English</span>
                                    <a class="ml-2 text-secondary-400 opacity-0 group-hover:opacity-100 transition-opacity hover:text-red-500"
                                        aria-autocomplete="" href="/skills/{{$skill->id}}"><i
                                            class="fas fa-times"></i></a>
                                </div>
                                <!-- @endforeach -->

                            </div>
                        </div>


                    </section>



                </div>

                <div class="tab-content hidden" id="reviews">
                    <div class="bg-white  rounded-xl shadow-md p-6 mb-6 transition-colors duration-200">
                        <div class="flex items-center justify-between mb-6">
                <div class="container  mx-auto px-4 py-4 max-w-4xl">
                        <div id="posts-container" class="grid grid-cols-1 gap-4 ">
                    @foreach ($posts as $post)
                        @php
                            $langs = json_decode($post->languages);
                          @endphp
                            <!-- Post 1 -->
                            <div class="post-card bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
                                <div class="p-4">
                                    <!-- Author and timestamp -->
                                    <div class="flex items-center mb-3">
                                        <div class="h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-3">
                                            <img src="{{ asset('images/' . $post->user->profile->image) }}"
                                                alt="{{ $post->user->profile->name }}" class="h-full w-full object-cover">
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex items-center">
                                                <h3 class="font-medium text-gray-900 text-sm">
                                                    {{ $post->user->profile->name }}</h3>
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
                                                        {{ trim($skill) }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

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
                </div>
            </div>
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
                                        <a href="/personal_services/{{ $service->id }}"
                                            class="text-secondary-400 hover:text-red-500 transition-colors service-delete-btn">
                                            <i class="fas fa-trash"></i>

                                        </a>
                                    </div>
                                </div>
                                <p class="mt-2 text-secondary-600">{{ $service->description }}</p>
                                <div class="mt-3 flex items-center">
                                    <span class="text-secondary-500">Credit Cost:</span>
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
                        @csrf
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

        <!--  services modal -->
        <div id="AddServiceModal"
            class="modal-backdrop fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden ">

            <form class="service-item p-6 rounded-lg bg-white w-full max-w-xl mx-auto shadow-lg" method="POST"
                action="/personal_services/store">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <input type="text" name="title"
                        class="service-title w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Service Title (e.g., Web Development, Logo Design)" required>
                </div>

                <textarea name="description"
                    class="service-description w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 mb-4"
                    rows="4"
                    placeholder="Describe this service in detail. What do you offer, and what can clients expect?"
                    required></textarea>

                <div class="flex items-center">
                    <span class="text-md text-gray-600 mr-2  ">Credit Cost:</span>
                    <div class="flex items-center space-x-2">
                        <input type="number" name="credit_cost"
                            class="service-min-credits w-20 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="800..." required>
                        <span class="text-gray-500">-</span>

                    </div>
                </div>
                <div class=" flex items-end justify-end gap-4">
                    <button type="button" id="cancelbtn"
                        class="px-4 py-2 border border-secondary-300 rounded-lg text-secondary-700 hover:bg-secondary-50 transition-colors modal-close">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Save Service
                    </button>
                </div>
            </form>


        </div>

        <!-- Add Languagess Modal -->
        <div id="LanguageModal" class="fixed inset-0 z-50 hidden">
            <div class="modal-backdrop absolute inset-0"></div>
            <div class="absolute inset-0 flex items-center justify-center p-4">
                <div class="bg-white rounded-xl shadow-lg max-w-md w-full p-6 animate-fade-in">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold text-secondary-900">Add language</h3>
                        <button class="text-secondary-500 hover:text-secondary-700 transition-colors modal-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <form id="languages-form">
                        @csrf
                        <!-- languages -->
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <label for="languages-input" class="block text-sm font-medium text-gray-700">Languages
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="flex items-center">
                                    <span class="text-xs text-gray-500 mr-1">Add your top Languages</span>
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 bg-gray-100 text-gray-500 rounded-full cursor-pointer"
                                        title="Add languages that showcase your expertise. These will help others find you for relevant projects.">
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
                                    <input type="text" id="languages-input"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Type a language and press Enter (e.g., JavaScript, Project Management)">
                                </div>
                                <button type="button" id="add-language-btn"
                                    class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Add
                                </button>
                            </div>
                            <div id="languages-container"
                                class="flex flex-wrap gap-2 min-h-[40px] max-h-[120px] overflow-y-auto p-2 border border-gray-200 rounded-lg tag-container">
                                <!-- languages tags will be added here dynamically -->
                            </div>
                            <div class="hidden mt-1 text-sm text-red-500" id="languages-error"></div>
                            <input type="hidden" name="languages" id="languages-hidden">
                        </div>

                        <div class="mt-6">
                            <button type="button" id="cancelbtn"
                                class="px-4 py-2 border border-secondary-300 rounded-lg text-secondary-700 hover:bg-secondary-50 transition-colors modal-close">
                                Cancel
                            </button>
                            <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Save Languages
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <script src="{{ asset('js/profile.js') }}"></script>

    <!-- <script>
     
      document.addEventListener('DOMContentLoaded', function(){

        const addLanguageBtn = document.getElementById('addLanguageBtn');
        const languagesModal = document.getElementById('LanguageModal');
        const cancelBtn = document.getElementById('cancelbtn');
    
        addLanguageBtn.addEventListener('click', function(){
            languagesModal.classList.remove('hidden');
        });

        cancelBtn.addEventListener('click', function(){
            languagesModal.classList.add('hidden');
        });

        const LanguagesInput = document.getElementById('languages_input');
        const languagesContainer = document.getElementById('languages_container');
        const addBtn = document.getElementById('add-language-btn');


        addBtn.addEventListener('click', function(){
            const languages = LanguagesInput.value.trim();

            const languagesTag = document.createElement('span');
        })

        
      })
    </script> -->

</body>

</html>