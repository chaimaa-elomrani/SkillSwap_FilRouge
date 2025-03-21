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

@include('header')
<body class="bg-primary-20 bg-cover bg-full ">
    <aside class="bg-white w-[18%] p-2 h-auto flex flex-col rounded-xl top-[10%] left-[2%] fixed">
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
                <div class="text-primary-600 hover:bg-primary-100 bg-primary-50 border border-primary-400  p-2 py-1 rounded-full text-center text-sm mt-2">Web Development</div>
                <div class="text-primary-600 hover:bg-primary-100 bg-primary-20 border border-primary-400 p-2 py-1 rounded-full text-center text-sm mt-2">Content writing</div>
                <div class="text-primary-600 hover:bg-primary-100 bg-primary-20 border border-primary-400 p-2 py-1 rounded-full text-center text-sm mt-2">Digital Marketing</div>
                <div class="text-primary-600 hover:bg-primary-100 bg-primary-20 border border-primary-400 p-2 py-1 rounded-full text-center text-sm mt-2">Video Editing</div>
            </div>
        </div>
    </aside>

    <main>
        <div class="bg-white rounded-xl w-[50%] mt-10 mx-auto p-4 shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow duration-300 ease-in-out">

    <div class="p-4">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0">
                    <img src="{{ asset('images/profile.png') }}" alt="profile" class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-medium overflow-hidden">

                    </div>
                    <div>
                        <h3 class="text-base font-semibold text-gray-900 flex items-center">
                            James Davis
                            <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                               status
                            </span>
                        </h3>
                        <p class="text-sm text-gray-500">UX Designer · Just now</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-500 focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </button>
            </div>
            
            <h2 class="text-xl font-bold text-gray-900 mb-3">UI/UX Design Services</h2>
            
            <p class="text-gray-700 mb-4">
                I create intuitive, user-centered designs that enhance user experience. Specializing in mobile apps, websites, and design systems. Let me help you create beautiful and functional interfaces.
            </p>
            
            <div class="flex flex-wrap gap-2 mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 hover:bg-gray-200 transition-colors duration-200">
                    Figma
                </span>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 hover:bg-gray-200 transition-colors duration-200">
                    Adobe XD
                </span>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 hover:bg-gray-200 transition-colors duration-200">
                    Prototyping
                </span>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 hover:bg-gray-200 transition-colors duration-200">
                    User Research
                </span>
            </div>
            
            <div class="flex items-center justify-between">
                <div class="text-gray-700 font-medium">
                    Starting at <span class="text-lg font-bold text-gray-900">65ptj/hr</span>
                </div>
                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                    Contact Now
                </button>
            </div>
        </div>
        
        </div>
     
    </main>







</body>

</html>