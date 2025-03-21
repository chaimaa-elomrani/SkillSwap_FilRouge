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

<body class="bg-primary-20 bg-cover bg-full ">

    @include('header')

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
                <div class="hover:text-primary-600 hover:bg-primary-100 bg-primary-20 text-black p-2 py-1 rounded-full text-center text-sm mt-2">Web Development</div>
                <div class="hover:text-primary-600 hover:bg-primary-100 bg-primary-20 text-black p-2 py-1 rounded-full text-center text-sm mt-2">Content writing</div>
                <div class="hover:text-primary-600 hover:bg-primary-100 bg-primary-20 text-black p-2 py-1 rounded-full text-center text-sm mt-2">Digital Marketing</div>
                <div class="hover:text-primary-600 hover:bg-primary-100 bg-primary-20 text-black p-2 py-1 rounded-full text-center text-sm mt-2">Video Editing</div>
            </div>

        </div>
    </aside>








</body>

</html>