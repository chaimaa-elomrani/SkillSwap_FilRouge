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


<body class="bg-primary-20 bg-cover bg-full ">
    @include('layout/users')
    <!-- Right Side Navigation with Icons -->
    <div class=" md:flex items-center space-x-4 z-50 absolute top-2 right-4">
        <!-- Add Post Icon -->
        <a id="addPost"
            class="text-secondary-700 hover:text-primary-600 transition-colors duration-200 p-2 rounded-full hover:bg-primary-100">

            <img src="{{ asset('images/addService.png') }}" alt="" class="h-6 w-6">

            <span class="sr-only">Add Post</span>
        </a>
        <a href="{{ asset('explore') }}"
            class="text-secondary-700 hover:text-primary-600 transition-colors duration-200 p-2 rounded-full hover:bg-primary-100">

            <img src="{{ asset('images/explore.png') }}" alt="" class="h-6 w-6">

            <span class="sr-only">Add Post</span>
        </a>


        <!-- Notifications Icon -->
        <button
            class="text-secondary-700 hover:text-primary-600 transition-colors duration-200 p-2 rounded-full hover:bg-gray-100 relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="sr-only">Notifications</span>
            <!-- Notification Badge -->
            <span
                class="absolute top-1 right-1 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-red-500 rounded-full">3</span>
        </button>

        <!-- Profile Icon -->
        <button class="flex items-center text-secondary-700 hover:text-primary-600 transition-colors duration-200">
            <div
                class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center overflow-hidden border border-primary-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
        </button>

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


    <!-- add service modal -->
    <div id="addServiceModal" class="fixed inset-0 z-50 hidden">
        <div class="modal-overlay absolute inset-0 bg-black bg-opacity-50"></div>
        <div
            class="modal-container bg-white w-11/12 md:max-w-3xl mx-auto rounded-xl shadow-lg z-50 overflow-y-auto max-h-[90vh] relative">
            <div class="modal-content py-4 text-left px-6">
                <!-- Header -->
                <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                    <h3 class="text-xl font-bold text-gray-900">Add New Service</h3>
                    <button id="closeModal" class="modal-close text-gray-400 hover:text-gray-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Form -->
                <form id="serviceForm" class="mt-4">
                    <div class="space-y-6">
                        <!-- Service Title -->
                        <div>
                            <label for="serviceTitle" class="block text-sm font-medium text-gray-700">Service
                                Title</label>
                            <input type="text" id="serviceTitle" name="serviceTitle"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="e.g. Professional Web Development" required>
                        </div>

                        <!-- Service Description -->
                        <div>
                            <label for="serviceDescription"
                                class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="serviceDescription" name="serviceDescription" rows="4"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Describe your service in detail..." required></textarea>
                            <p class="mt-1 text-xs text-gray-500">Minimum 100 characters. Be specific about what you
                                offer.</p>
                        </div>

                        <!-- Service Category -->
                        <div>
                            <label for="serviceCategory"
                                class="block text-sm font-medium text-gray-700">Category</label>
                            <div class="custom-select-wrapper mt-1">
                                <div id="categorySelector" class="relative">
                                    <button type="button" id="categoryButton"
                                        class="bg-white relative w-full border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        <span class="block truncate text-gray-500">Select a category</span>
                                        <span
                                            class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div id="categoryDropdown"
                                        class="custom-select-dropdown hidden bg-white border border-gray-300 mt-1">
                                        <ul class="py-1 max-h-60 overflow-auto text-base">
                                            <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-blue-50"
                                                data-value="web-development">Web Development</li>
                                            <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-blue-50"
                                                data-value="mobile-development">Mobile Development</li>
                                            <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-blue-50"
                                                data-value="ui-ux-design">UI/UX Design</li>
                                            <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-blue-50"
                                                data-value="graphic-design">Graphic Design</li>
                                            <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-blue-50"
                                                data-value="content-writing">Content Writing</li>
                                            <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-blue-50"
                                                data-value="digital-marketing">Digital Marketing</li>
                                            <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-blue-50"
                                                data-value="video-editing">Video Editing</li>
                                            <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-blue-50"
                                                data-value="data-analysis">Data Analysis</li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="hidden" id="selectedCategory" name="category" required>
                            </div>
                        </div>

                        <!-- Skills/Tags -->
                        <div>
                            <label for="skillsInput" class="block text-sm font-medium text-gray-700">Skills &
                                Expertise</label>
                            <div
                                class="mt-1 border border-gray-300 rounded-md shadow-sm focus-within:border-blue-500 focus-within:ring-1 focus-within:ring-blue-500">
                                <div id="tagsContainer" class="tags-container bg-white rounded-md">
                                    <div id="tagsDisplay" class="flex flex-wrap gap-2"></div>
                                    <input type="text" id="skillsInput"
                                        class="flex-grow min-w-[120px] border-0 p-0 focus:ring-0 sm:text-sm"
                                        placeholder="Type a skill and press Enter">
                                </div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Add up to 10 skills that best describe your service
                            </p>
                        </div>

                        <!-- Pricing -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="priceAmount" class="block text-sm font-medium text-gray-700">Price</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">$</span>
                                    </div>
                                    <input type="number" name="priceAmount" id="priceAmount" min="5" step="0.01"
                                        class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="0.00" required>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">USD</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="priceType" class="block text-sm font-medium text-gray-700">Price
                                    Type</label>
                                <select id="priceType" name="priceType"
                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                    <option value="hourly">Per Hour</option>
                                    <option value="fixed">Fixed Price</option>
                                    <option value="project">Per Project</option>
                                </select>
                            </div>
                        </div>

                        <!-- Service Image -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Service Image</label>
                            <div
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <div id="imagePreview" class="image-preview hidden mb-3">
                                        <img id="previewImg" src="#" alt="Preview">
                                    </div>
                                    <div id="uploadIcon" class="flex text-sm text-gray-600">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <label for="serviceImage"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                            <span class="block text-center">Upload an image</span>
                                            <input id="serviceImage" name="serviceImage" type="file" class="sr-only"
                                                accept="image/*">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 5MB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="mt-6 flex justify-end space-x-3 border-t border-gray-200 pt-5">
                        <button type="button" id="cancelBtn"
                            class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cancel
                        </button>
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Publish Service
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>{{ asset('js/service.js') }}</script>
</body>

</html>