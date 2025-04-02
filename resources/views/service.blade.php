<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>Services</title>
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
    <script src={{ asset('js/palette.js') }}></script>
</head>
<style>
    /* Custom styles for the right sidebar */
    .right-sidebar {
        position: fixed;
        right: 2%;
        top: 10%;
        width: 22%;
        max-height: 80vh;
        overflow-y: auto;
        z-index: 10;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .right-sidebar {
            width: 25%;
        }

        main {
            margin-right: calc(25% + 4%);
        }
    }

    @media (max-width: 992px) {
        .right-sidebar {
            position: static;
            width: 50%;
            max-height: none;
            margin: 2rem auto;
        }

        main {
            margin-left: calc(18% + 4%);
            margin-right: 2%;
        }
    }

    @media (max-width: 768px) {
        main {
            margin-left: 2%;
            margin-right: 2%;
        }

        .right-sidebar {
            width: 90%;
        }
    }
</style>

@include('layout/admin')

<body class="bg-primary-20 bg-cover bg-full ">
    <!-- sidebar -->
    <div class="flex items-center">
    <div class="flex-shrink-0">
        <button id="addServiceBtn" type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            <i class="fas fa-plus mr-2"></i>
            Add Service
        </button>
    </div>
    
    <!-- Modified this div to show on all screen sizes by removing 'hidden' class -->
    <div class="ml-4 flex-shrink-0 flex items-center">
        <!-- Improved notification button with indicator -->
        <button type="button" class="relative p-1 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
            <span class="sr-only">View notifications</span>
            <i class="fas fa-bell"></i>
            <!-- Notification indicator dot -->
            <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500 ring-1 ring-white">{{ asset('images/notif.svg') }}</span>
        </button>
        
        <div class="ml-3 relative">
            <div>
                <button type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-medium overflow-hidden">
                        US
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>

    <aside
        class="bg-white w-[18%] p-2 h-auto flex flex-col rounded-xl top-[10%] left-[2%] fixed shadow-sm border border-gray-200">
        <div class="flex flex-col p-2 justify-center items-center gap-4 mb-4">
            <img src="{{ asset('images/profile.png') }}" alt="profile" class="rounded-full w-[20%]">
            <div class="flex flex-col ">
                <h1 class="font-sans font-bold text-black text-lg text-center">User name</h1>
                <p class="text-secondary-700 text-sm">user job or speciality</p>
            </div>
        </div>
        <div>
            <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg ">
                <i class="fas fa-home mr-3 text-blue-600"></i>
                <span>Home Feed</span>
            </a>
            <a href="#"
                class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 group transition-all duration-200 ease-in-out">
                <i class="fas fa-compass mr-3 text-gray-500 group-hover:text-gray-700"></i>
                <span>Explore</span>
            </a>
            <a href="#"
                class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 group transition-all duration-200 ease-in-out">
                <i class="fas fa-bookmark mr-3 text-gray-500 group-hover:text-gray-700"></i>
                <span>Saved</span>
            </a>
            <a href="#"
                class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 group transition-all duration-200 ease-in-out">
                <i class="fas fa-briefcase mr-3 text-gray-500 group-hover:text-gray-700"></i>
                <span>My Services</span>
            </a>
            <a href="#"
                class="flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 group transition-all duration-200 ease-in-out">
                <i class="fas fa-chart-line mr-3 text-gray-500 group-hover:text-gray-700"></i>
                <span>Analytics</span>
            </a>
        </div>

        <div class="flex flex-col mt-4">
            <h1 class="text-sans font-bold text-black text-md text-center">Categories</h1>
            <div class="flex flex-row flex-wrap w-full gap-2">
                <div
                    class="text-primary-600 hover:bg-primary-100 bg-primary-50 border border-primary-400  p-2 py-1 rounded-full text-center text-sm mt-2">
                    Web Development</div>
                <div
                    class="text-primary-600 hover:bg-primary-100 bg-primary-20 border border-primary-400 p-2 py-1 rounded-full text-center text-sm mt-2">
                    Content writing</div>
                <div
                    class="text-primary-600 hover:bg-primary-100 bg-primary-20 border border-primary-400 p-2 py-1 rounded-full text-center text-sm mt-2">
                    Digital Marketing</div>
                <div
                    class="text-primary-600 hover:bg-primary-100 bg-primary-20 border border-primary-400 p-2 py-1 rounded-full text-center text-sm mt-2">
                    Video Editing</div>
            </div>
        </div>
    </aside>

    <main>
        <div
            class="bg-white rounded-xl w-[50%] mt-10 mx-auto p-4 shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow duration-300 ease-in-out">

            <div class="p-4">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/profile.png') }}" alt="profile"
                                class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-medium overflow-hidden">

                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-gray-900 flex items-center">
                                James Davis
                                <span
                                    class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                    status
                                </span>
                            </h3>
                            <p class="text-sm text-gray-500">UX Designer · Just now</p>
                        </div>
                    </div>
                    <button class="text-gray-400 hover:text-gray-500 focus:outline-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                            </path>
                        </svg>
                    </button>
                </div>

                <h2 class="text-xl font-bold text-gray-900 mb-3">UI/UX Design Services</h2>

                <p class="text-gray-700 mb-4">
                    I create intuitive, user-centered designs that enhance user experience. Specializing in mobile apps,
                    websites, and design systems. Let me help you create beautiful and functional interfaces.
                </p>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-primary-500   hover:bg-gray-200 transition-colors duration-200">
                        Figma
                    </span>
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-primary-500   hover:bg-gray-200 transition-colors duration-200">
                        Adobe XD
                    </span>
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-primary-500   hover:bg-gray-200 transition-colors duration-200">
                        Prototyping
                    </span>
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-primary-500   hover:bg-gray-200 transition-colors duration-200">
                        User Research
                    </span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="text-gray-700 font-medium">
                        Starting at <span class="text-lg font-bold text-gray-900">65ptj/hr</span>
                    </div>
                    <button
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-primary-500 hover:bg-[#f43f5e] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                        Contact Now
                    </button>
                </div>
            </div>

        </div>

    </main>
    <!-- right sidebar -->
    <section class="right-sidebar">
        <div class="w-full lg:w-80 h-auto sticky p-2 shadow-sm right-0 top-[10%] ">
            <!-- Suggested Services -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-y: scroll">
                <div class="p-5 border-b border-gray-200">
                    <h2 class="text-lg font-bold text-gray-900">Suggested Services</h2>
                </div>
                <div class="divide-y divide-gray-200">
                    <!-- Service 1 -->
                    <div class="p-5 hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Content Writing</h3>
                        <p class="text-sm text-gray-500 mb-2">Well-researched blog posts and articles</p>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">(4.7)</span>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="p-5 hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">UI/UX Design</h3>
                        <p class="text-sm text-gray-500 mb-2">User-centered interface design</p>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">(5.0)</span>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="p-5 hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Video Editing</h3>
                        <p class="text-sm text-gray-500 mb-2">Professional video production</p>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-500 ml-1">(4.8)</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-gray-50 border-t border-gray-200">
                    <a href="#"
                        class="text-sm font-medium text-blue-600 hover:text-blue-800 transition-colors duration-200">View
                        All</a>
                </div>
            </div>

            <!-- Top Providers -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden mt-4">
                <div class="p-5 border-b border-gray-200">
                    <h2 class="text-lg font-bold text-gray-900">Top Providers</h2>
                </div>
                <div class="divide-y divide-gray-200">
                    <!-- Provider 1 -->
                    <div class="p-5 hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-medium overflow-hidden">
                                        EW
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-base font-semibold text-gray-900">Emma Wilson</h3>
                                    <p class="text-sm text-gray-500">Web Developer</p>
                                </div>
                            </div>
                            <button
                                class="inline-flex items-center px-3 py-1 border border-blue-600 text-xs font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                Follow
                            </button>
                        </div>
                    </div>

                    <!-- Provider 2 -->
                    <div class="p-5 hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-medium overflow-hidden">
                                        AM
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-base font-semibold text-gray-900">Alex Morgan</h3>
                                    <p class="text-sm text-gray-500">Graphic Designer</p>
                                </div>
                            </div>
                            <button
                                class="inline-flex items-center px-3 py-1 border border-blue-600 text-xs font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                Follow
                            </button>
                        </div>
                    </div>

                    <!-- Provider 3 -->
                    <div class="p-5 hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-medium overflow-hidden">
                                        SJ
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-base font-semibold text-gray-900">Sarah Johnson</h3>
                                    <p class="text-sm text-gray-500">Digital Marketer</p>
                                </div>
                            </div>
                            <button
                                class="inline-flex items-center px-3 py-1 border border-blue-600 text-xs font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                Follow
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-gray-50 border-t border-gray-200">
                    <a href="#"
                        class="text-sm font-medium text-blue-600 hover:text-blue-800 transition-colors duration-200">View
                        All</a>
                </div>
            </div>
        </div>
    </section>


</body>

</html>