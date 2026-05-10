<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="min-h-screen">

<div class="bg-white min-h-screen">

    <!-- Navbar -->
<nav class="fixed top-0 left-0 w-full bg-white z-50 px-6 md:px-10 py-5 border-b border-gray-100 shadow-sm">

    <div class="max-w-7xl mx-auto">

        <div class="relative flex items-center justify-between">

            <!-- Logo -->
            <div class="flex items-center gap-3">

                <div class="w-12 h-12 rounded-full border-[6px] border-black border-r-orange-500 rotate-45"></div>

                <h1 class="text-3xl font-semibold">
                    Blog<span class="text-orange-500">One</span>
                </h1>

            </div>

           <!-- Desktop Menu -->
            <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 items-center gap-12 text-2xl text-gray-800">

                <a href="/home" class="hover:text-orange-500 transition">
                    Home
                </a>

                <a href="/blog" class="hover:text-orange-500 transition">
                    Blog
                </a>

            </div>

            <!-- Mobile Button -->
            <button 
                id="menu-button"
                class="md:hidden relative w-10 h-10 flex flex-col justify-center items-center gap-1.5"
            >

                <span class="menu-line w-7 h-0.5 bg-black rounded transition-all duration-300"></span>

                <span class="menu-line w-7 h-0.5 bg-black rounded transition-all duration-300"></span>

                <span class="menu-line w-7 h-0.5 bg-black rounded transition-all duration-300"></span>

            </button>

        </div>

    <!-- Mobile Menu -->
<div 
    id="mobile-menu"
    class="hidden md:hidden mt-5 border-t border-gray-200 pt-5 flex-col gap-5 text-center text-xl text-gray-800"
>

    <a 
        href="#"
        class="hover:text-orange-500 transition py-2"
    >
        Home
    </a>

    <a 
        href="#"
        class="hover:text-orange-500 transition py-2"
    >
        Blog
    </a>

</div>

    </div>

</nav>

<!-- Overlay -->
<div 
    id="overlay"
    class="fixed inset-0 bg-black/50 opacity-0 invisible transition-all duration-300 z-40 md:hidden"
></div>