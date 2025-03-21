<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>Services</title>
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
    <script src={{ asset('js/palette.js') }}></script>
    <title>Search</title>
</head>
<style>
    .search-container {
        position: relative;
        width: 50%;
        max-width: 600px;
        margin: 0 auto;
        margin-top: 1.5rem;
    }

    .search-container input {
        width: 100%;
        padding: 1rem 3rem 1rem 1.5rem;
        border-radius: 9999px;
        background-color: rgba(255, 255, 255, 0.9);
        border: none;
        outline: none;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .search-container input:focus {
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
    }

    .gradient-text {
        background: linear-gradient(90deg, #0ea5e9, #FFF5F5);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>

<body class="bg-[url('./images/Group%2072.png')] bg-cover bg-center bg-no-repeat h-screen">
    <div class="absolute inset-0 bg-black opacity-70"></div>

    <div class="absolute inset-0 flex flex-col items-center top-[30%] ">
        <h1 class="text-6xl text-white font-bold"> <span class="gradient-text typing">Find your services partner</span>
        </h1>
        <p class="text-white text-3xl text-roboto font-light tracking-wide mt-4 ">explore new services in different
            majors</p>
        <div>

        </div>
        <div class="search-container">
            <input type="text" placeholder="Search Services" class="shadow-lg w-full mt-4 pt-4 pb-4 pr-4 pl-4 transition-all duration-300  focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"
                aria-label="Search services">
            <span class="absolute right-[1.5rem] top-1/2 transform -translate-y-1/2 text-[#4B5563] font-semibold">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
        </div>

        <div class="flex flex-col items-center mt-4 absolute top-[90%]">
        <button
            class="fixed top-[87%] bg-white text-black rounded-full p-3 animate-float shadow-lg transition-all duration-300 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" style="transform: rotate(180deg);">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>

        </button>
        <p class="font-light top-[20%] text-white text-xl text-roboto">Discover more</p>
        </div>

</body>

</html>