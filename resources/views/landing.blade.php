<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>

<style>
    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .animate-marquee {
        display: inline-flex;
        animation: marquee 15s linear infinite;
        width: max-content;
    }
</style>


<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50" x-data="{ open: false }">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <img src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Logo"
                    class="h-8 w-8">
                <span class="text-xl font-bold text-gray-800">BrandName</span>
            </div>

            <!-- Navbar Desktop -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ url('/landing') }}" class="text-gray-600 hover:text-indigo-600 transition">Home</a>
                <a href="{{ url('/about') }}" class="text-gray-600 hover:text-indigo-600 transition">About</a>
                <a href="{{ url('/service') }}" class="text-gray-600 hover:text-indigo-600 transition">Services</a>
                <a href="{{ url('/kontak') }}" class="text-gray-600 hover:text-indigo-600 transition">Contact</a>
            </nav>

            <!-- Tombol Hamburger (Mobile) -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div x-show="open" class="md:hidden bg-white shadow-lg">
            <div class="px-6 py-4 space-y-4">
                <a href="{{ url('/landing') }}" class="block text-gray-600 hover:text-indigo-600 transition">Home</a>
                <a href="{{ url('/about') }}" class="block text-gray-600 hover:text-indigo-600 transition">About</a>
                <a href="{{ url('/service') }}"
                    class="block text-gray-600 hover:text-indigo-600 transition">Services</a>
                <a href="{{ url('/kontak') }}" class="block text-gray-600 hover:text-indigo-600 transition">Contact</a>
            </div>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="relative bg-white py-20">
        <div class="container mx-auto px-6 lg:flex lg:items-center lg:space-x-12">
            <div class="lg:w-1/2">
                <h1 class="text-5xl font-bold text-gray-800 leading-tight sm:text-6xl">
                    Build Your Future with <span class="text-indigo-600">Modern Solutions</span>
                </h1>
                <p class="mt-6 text-lg text-gray-600">
                    Discover cutting-edge tools and services to help your business thrive in a competitive world.
                </p>
                <div class="mt-8 flex space-x-4">
                    <a href="#"
                        class="px-8 py-3 bg-indigo-600 text-white text-lg font-medium rounded-lg shadow hover:bg-indigo-500 transition">Get
                        Started</a>
                    <a href="#"
                        class="px-8 py-3 border border-indigo-300 text-gray-700 text-lg font-medium rounded-lg shadow hover:border-indigo-500 transition">Pilih
                        Template</a>
                </div>
            </div>
            <div class="mt-12 lg:mt-0 lg:w-1/2 flex justify-center lg:justify-end">
                <img src="image/Aurecle.png" alt="Hero Image" class=" w-full max-w-5xl">
            </div>

        </div>
    </section>

    <!--about-->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">Tentang Joki Web</h2>
            <p class="text-lg mb-4">Kami adalah tim ahli web developer yang berpengalaman dalam membangun dan mengelola
                website untuk berbagai jenis bisnis. Dengan solusi kreatif dan teknologi canggih, kami memastikan
                website Anda berfungsi dengan baik dan memikat pengunjung.</p>
        </div>
    </section>


    <!-- Features Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800">Our Features</h2>
            <p class="mt-4 text-lg text-gray-600">Why choose us? Explore our key benefits and features.</p>
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                    <div
                        class="flex items-center justify-center w-12 h-12 bg-indigo-600 text-indigo-600 rounded-full mx-auto opacity-0 transition-opacity duration-1000">
                        <svg viewBox="0 0 1024 1024" fill="#fff" class="icon w-7 h-7" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M1015.848 687.82H8.156a7.992 7.992 0 0 1-7.998-7.996 7.994 7.994 0 0 1 7.998-7.998h1007.692a7.992 7.992 0 0 1 7.996 7.998 7.992 7.992 0 0 1-7.996 7.996zM512 767.766c-17.636 0-31.99-14.34-31.99-31.99s14.354-31.99 31.99-31.99 31.992 14.34 31.992 31.99-14.356 31.99-31.992 31.99z m0-47.984c-8.826 0-15.996 7.184-15.996 15.994s7.17 15.994 15.996 15.994c8.824 0 15.996-7.184 15.996-15.994s-7.172-15.994-15.996-15.994zM376.136 975.732a8.01 8.01 0 0 1-7.81-9.73l31.99-143.956c0.954-4.296 5.202-6.984 9.544-6.078a8.014 8.014 0 0 1 6.078 9.544l-31.99 143.956a8.004 8.004 0 0 1-7.812 6.264zM647.864 975.732a8 8 0 0 1-7.808-6.264l-31.988-143.956a8.01 8.01 0 0 1 6.074-9.544c4.376-0.906 8.59 1.782 9.542 6.078l31.992 143.956a8.008 8.008 0 0 1-7.812 9.73z"
                                    fill=""></path>
                                <path
                                    d="M671.954 975.732H352.05a7.992 7.992 0 0 1-7.998-7.998 7.992 7.992 0 0 1 7.998-7.996h319.904a7.992 7.992 0 0 1 7.996 7.996 7.992 7.992 0 0 1-7.996 7.998zM967.86 640.086H56.14a7.994 7.994 0 0 1-7.998-7.998V104.25a7.994 7.994 0 0 1 7.998-7.998h911.72c4.422 0 8 3.578 8 7.998v527.838a7.994 7.994 0 0 1-8 7.998z m-903.722-15.996h895.726V112.248H64.138v511.842z"
                                    fill=""></path>
                                <path
                                    d="M967.86 800.038H56.14c-30.866 0-55.982-25.118-55.982-55.982V104.25c0-30.866 25.118-55.982 55.982-55.982h911.72c30.868 0 55.984 25.118 55.984 55.982v639.804c0 30.866-25.118 55.984-55.984 55.984zM56.14 64.262c-22.056 0-39.988 17.94-39.988 39.988v639.804c0 22.054 17.932 39.986 39.988 39.986h911.72c22.058 0 39.988-17.932 39.988-39.986V104.25c0-22.048-17.93-39.988-39.988-39.988H56.14z"
                                    fill=""></path>
                                <path
                                    d="M967.86 831.778H56.14c-31.396 0-55.982-24.586-55.982-55.982v-31.99a7.994 7.994 0 0 1 7.998-7.998 7.994 7.994 0 0 1 7.998 7.998v31.99c0 22.43 17.558 39.986 39.988 39.986h911.72c22.434 0 39.988-17.556 39.988-39.986v-31.74a7.994 7.994 0 0 1 8-7.998 7.992 7.992 0 0 1 7.996 7.998v31.74c-0.002 31.396-24.588 55.982-55.986 55.982zM88.13 640.086a7.994 7.994 0 0 1-7.998-7.998V104.25a7.994 7.994 0 0 1 7.998-7.998 7.994 7.994 0 0 1 7.998 7.998v527.838a7.994 7.994 0 0 1-7.998 7.998z"
                                    fill=""></path>
                                <path
                                    d="M72.136 160.232H56.14c-4.42 0-7.998-3.576-7.998-7.998s3.578-7.998 7.998-7.998h15.996c4.42 0 7.998 3.576 7.998 7.998s-3.578 7.998-7.998 7.998zM72.136 208.218H56.14c-4.42 0-7.998-3.578-7.998-7.998s3.578-7.998 7.998-7.998h15.996c4.42 0 7.998 3.578 7.998 7.998s-3.578 7.998-7.998 7.998zM72.136 256.204H56.14c-4.42 0-7.998-3.576-7.998-7.998s3.578-7.998 7.998-7.998h15.996c4.42 0 7.998 3.576 7.998 7.998s-3.578 7.998-7.998 7.998zM72.136 304.19H56.14c-4.42 0-7.998-3.578-7.998-7.998s3.578-7.998 7.998-7.998h15.996c4.42 0 7.998 3.578 7.998 7.998s-3.578 7.998-7.998 7.998zM72.136 352.174H56.14c-4.42 0-7.998-3.576-7.998-7.998s3.578-7.998 7.998-7.998h15.996c4.42 0 7.998 3.576 7.998 7.998s-3.578 7.998-7.998 7.998zM72.136 400.16H56.14a7.994 7.994 0 0 1-7.998-7.998 7.994 7.994 0 0 1 7.998-7.998h15.996a7.994 7.994 0 0 1 7.998 7.998 7.996 7.996 0 0 1-7.998 7.998zM72.136 448.144H56.14a7.994 7.994 0 0 1-7.998-7.998 7.994 7.994 0 0 1 7.998-7.998h15.996a7.994 7.994 0 0 1 7.998 7.998 7.994 7.994 0 0 1-7.998 7.998zM72.136 496.13H56.14a7.994 7.994 0 0 1-7.998-7.998 7.994 7.994 0 0 1 7.998-7.998h15.996a7.994 7.994 0 0 1 7.998 7.998 7.996 7.996 0 0 1-7.998 7.998zM72.136 544.116H56.14a7.994 7.994 0 0 1-7.998-7.998 7.992 7.992 0 0 1 7.998-7.996h15.996a7.992 7.992 0 0 1 7.998 7.996 7.994 7.994 0 0 1-7.998 7.998zM72.136 592.102H56.14c-4.42 0-7.998-3.578-7.998-7.998s3.578-7.998 7.998-7.998h15.996c4.42 0 7.998 3.578 7.998 7.998s-3.578 7.998-7.998 7.998zM200.096 160.232h-63.98c-4.42 0-7.998-3.576-7.998-7.998s3.576-7.998 7.998-7.998h63.98c4.42 0 7.998 3.576 7.998 7.998s-3.578 7.998-7.998 7.998zM456.016 208.218h-191.94c-4.42 0-7.998-3.578-7.998-7.998s3.576-7.998 7.998-7.998h191.94c4.422 0 7.998 3.578 7.998 7.998s-3.576 7.998-7.998 7.998zM232.086 208.218H152.11c-4.42 0-7.998-3.578-7.998-7.998s3.578-7.998 7.998-7.998h79.976c4.42 0 7.998 3.578 7.998 7.998s-3.578 7.998-7.998 7.998zM456.016 256.204h-15.994c-4.42 0-7.998-3.576-7.998-7.998s3.578-7.998 7.998-7.998h15.994c4.422 0 7.998 3.576 7.998 7.998s-3.576 7.998-7.998 7.998zM408.032 256.204H168.106c-4.42 0-7.998-3.576-7.998-7.998s3.576-7.998 7.998-7.998h239.926c4.42 0 7.998 3.576 7.998 7.998s-3.578 7.998-7.998 7.998zM216.09 352.174H168.106c-4.42 0-7.998-3.576-7.998-7.998s3.576-7.998 7.998-7.998h47.986c4.42 0 7.998 3.576 7.998 7.998s-3.58 7.998-8 7.998zM456.016 352.174H248.082c-4.42 0-7.998-3.576-7.998-7.998s3.578-7.998 7.998-7.998h207.936c4.422 0 7.998 3.576 7.998 7.998s-3.578 7.998-8 7.998zM456.016 304.19H184.1c-4.42 0-7.998-3.578-7.998-7.998s3.578-7.998 7.998-7.998h271.916c4.422 0 7.998 3.578 7.998 7.998s-3.576 7.998-7.998 7.998zM456.016 400.16h-63.98a7.994 7.994 0 0 1-7.998-7.998 7.994 7.994 0 0 1 7.998-7.998h63.98a7.994 7.994 0 0 1 7.998 7.998 7.994 7.994 0 0 1-7.998 7.998zM408.032 448.144H152.11a7.994 7.994 0 0 1-7.998-7.998 7.994 7.994 0 0 1 7.998-7.998h255.922a7.994 7.994 0 0 1 7.998 7.998 7.994 7.994 0 0 1-7.998 7.998zM280.072 544.116h-127.96a7.994 7.994 0 0 1-7.998-7.998 7.992 7.992 0 0 1 7.998-7.996h127.96a7.992 7.992 0 0 1 7.998 7.996 7.994 7.994 0 0 1-7.998 7.998zM456.016 496.13h-79.974a7.994 7.994 0 0 1-7.998-7.998 7.994 7.994 0 0 1 7.998-7.998h79.974a7.994 7.994 0 0 1 7.998 7.998 7.994 7.994 0 0 1-7.998 7.998zM344.052 496.13H168.106a7.994 7.994 0 0 1-7.998-7.998 7.994 7.994 0 0 1 7.998-7.998h175.946a7.994 7.994 0 0 1 7.998 7.998 7.994 7.994 0 0 1-7.998 7.998zM200.096 592.102h-63.98c-4.42 0-7.998-3.578-7.998-7.998s3.576-7.998 7.998-7.998h63.98c4.42 0 7.998 3.578 7.998 7.998s-3.578 7.998-7.998 7.998zM456.016 448.144h-15.994a7.994 7.994 0 0 1-7.998-7.998 7.994 7.994 0 0 1 7.998-7.998h15.994a7.994 7.994 0 0 1 7.998 7.998 7.992 7.992 0 0 1-7.998 7.998zM360.046 400.16h-191.94a7.994 7.994 0 0 1-7.998-7.998 7.994 7.994 0 0 1 7.998-7.998h191.942a7.994 7.994 0 0 1 7.998 7.998 7.996 7.996 0 0 1-8 7.998z"
                                    fill=""></path>
                                <path
                                    d="M512 640.086a7.994 7.994 0 0 1-7.998-7.998V104.25A7.994 7.994 0 0 1 512 96.252a7.992 7.992 0 0 1 7.996 7.998v527.838a7.992 7.992 0 0 1-7.996 7.998z"
                                    fill=""></path>
                                <path
                                    d="M903.878 544.116a7.984 7.984 0 0 1-6.7-3.638l-97.27-149.634-97.266 149.634c-2.39 3.732-7.372 4.748-11.058 2.358a8.012 8.012 0 0 1-2.344-11.074l103.968-159.952c2.938-4.544 10.464-4.544 13.402 0l103.968 159.952a8.012 8.012 0 0 1-2.344 11.074c-1.34 0.872-2.856 1.28-4.356 1.28z"
                                    fill=""></path>
                                <path
                                    d="M631.964 544.116a7.998 7.998 0 0 1-6.656-12.434l63.98-95.876a8 8 0 0 1 13.308 0l31.524 47.25a8 8 0 0 1-2.218 11.09c-3.672 2.42-8.636 1.468-11.09-2.218l-24.868-37.278-57.328 85.904a7.99 7.99 0 0 1-6.652 3.562zM631.964 432.15c-22.058 0-39.988-17.94-39.988-39.988s17.93-39.988 39.988-39.988c22.054 0 39.988 17.94 39.988 39.988 0.002 22.048-17.932 39.988-39.988 39.988z m0-63.98c-13.23 0-23.992 10.762-23.992 23.992s10.762 23.992 23.992 23.992 23.992-10.762 23.992-23.992-10.76-23.992-23.992-23.992z"
                                    fill=""></path>
                                <path
                                    d="M919.876 544.116H567.984c-4.422 0-8-3.576-8-7.998V328.182a7.994 7.994 0 0 1 8-7.998h351.89a7.992 7.992 0 0 1 7.996 7.998v207.936a7.988 7.988 0 0 1-7.994 7.998z m-343.896-15.994h335.898V336.18H575.98v191.942z"
                                    fill=""></path>
                                <path
                                    d="M919.876 160.232H567.984c-4.422 0-8-3.576-8-7.998s3.578-7.998 8-7.998h351.89c4.422 0 7.996 3.576 7.996 7.998s-3.574 7.998-7.994 7.998z"
                                    fill=""></path>
                                <path
                                    d="M919.876 288.194a7.99 7.99 0 0 1-7.996-7.998v-127.96c0-4.42 3.574-7.998 7.996-7.998s7.996 3.576 7.996 7.998v127.96a7.992 7.992 0 0 1-7.996 7.998z"
                                    fill=""></path>
                                <path
                                    d="M919.876 288.194H567.984c-4.422 0-8-3.576-8-7.998s3.578-7.998 8-7.998h351.89c4.422 0 7.996 3.576 7.996 7.998s-3.574 7.998-7.994 7.998z"
                                    fill=""></path>
                                <path
                                    d="M871.89 224.212H567.984c-4.422 0-8-3.576-8-7.998s3.578-7.998 8-7.998h303.906c4.418 0 7.996 3.576 7.996 7.998s-3.578 7.998-7.996 7.998z"
                                    fill=""></path>
                                <path
                                    d="M919.876 592.102H567.984c-4.422 0-8-3.578-8-7.998s3.578-7.998 8-7.998h351.89c4.422 0 7.996 3.578 7.996 7.998s-3.574 7.998-7.994 7.998z"
                                    fill=""></path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Pembuatan Website</h3>
                    <p class="mt-2 text-gray-600">Kami membuat website seperti landing page, toko online, blog, dan
                        portofolio sesuai kebutuhan Anda.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition opacity-0 transition-opacity duration-1000">
                    <div
                        class="flex items-center justify-center w-12 h-12 bg-indigo-600 text-white rounded-full mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h11M9 21V3M17 16l4-4m0 0l-4-4m4 4H9" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Optimasi Website</h3>
                    <p class="mt-2 text-gray-600">Layanan SEO, kecepatan loading, dan desain responsif untuk
                        meningkatkan performa website Anda.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition opacity-0 transition-opacity duration-1000">
                    <div
                        class="flex items-center justify-center w-12 h-12 bg-indigo-600 text-indigo-600 rounded-full mx-auto">
                        <svg viewBox="0 -2 32 32" version="1.1" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#fff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>brush</title>
                                <desc>Created with Sketch Beta.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                    sketch:type="MSPage">
                                    <g id="Icon-Set-Filled" sketch:type="MSLayerGroup"
                                        transform="translate(-101.000000, -156.000000)" fill="#fff">
                                        <path
                                            d="M132.132,156.827 C130.975,155.685 129.099,155.685 127.942,156.827 L115.336,169.277 L119.499,173.44 L132.132,160.964 C133.289,159.821 133.289,157.969 132.132,156.827 L132.132,156.827 Z M112.461,180.385 C111.477,181.298 107.08,183.333 104.491,181.36 C104.491,181.36 105.392,180.657 106.074,179.246 C107.703,174.919 111.763,175.56 111.763,175.56 L113.159,176.938 C113.173,176.952 114.202,178.771 112.461,180.385 L112.461,180.385 Z M113.913,170.683 L110.764,173.788 C108.661,173.74 105.748,174.485 104.491,178.603 C103.53,180.781 101,180.671 101,180.671 C106.253,186.498 112.444,183.196 113.857,181.764 C115.1,180.506 115.279,178.966 115.146,177.734 L118.076,174.846 L113.913,170.683 L113.913,170.683 Z"
                                            id="brush" sketch:type="MSShapeGroup"> </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Kustomisasi Website</h3>
                    <p class="mt-2 text-gray-600">Desain UI/UX, penambahan fitur, dan integrasi sistem pembayaran sesuai
                        kebutuhan Anda.</p>
                    </p>
                </div>
                <div
                    class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition opacity-0 transition-opacity duration-1000">
                    <div
                        class="flex items-center justify-center w-12 h-12 bg-indigo-600 text-indigo-600 rounded-full mx-auto">
                        <svg fill="#fff" viewBox="0 0 32 32" version="1.1" class="w-8 h-8"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>tools</title>
                                <path
                                    d="M27.783 7.936c0.959 2.313 0.502 5.074-1.379 6.955-2.071 2.071-5.201 2.395-7.634 1.022l-1.759 1.921 1.255 1.26 0.75-0.75c0.383-0.384 1.005-0.384 1.388 0l6.082 6.144c0.384 0.383 0.384 1.005 0 1.388l-2.776 2.776c-0.383 0.384-1.005 0.384-1.388 0l-6.082-6.144c-0.384-0.383-0.384-1.005 0-1.388l0.685-0.685-1.196-1.199-8.411 9.189c-0.767 0.767-2.010 0.767-2.776 0l-0.694-0.694c-0.767-0.767-0.767-2.010 0-2.776l9.582-8.025-6.364-6.381-2.010-0.001-2.326-3.74 1.872-1.875 3.825 2.341 0.025 1.968 6.438 6.463 1.873-1.568c-1.831-2.496-1.64-6.012 0.616-8.268 1.872-1.872 4.618-2.337 6.925-1.396l-4.124 4.067 3.471 3.471 4.132-4.075zM6.15 25.934c-0.383-0.383-1.004-0.383-1.388 0-0.384 0.384-0.384 1.005 0 1.389 0.384 0.383 1.005 0.383 1.388 0 0.384-0.385 0.384-1.006 0-1.389z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Maintenance dan Perawatan</h3>
                    <p class="mt-2 text-gray-600">Backup rutin, update keamanan, dan pemantauan uptime untuk menjaga
                        website tetap optimal.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition opacity-0 transition-opacity duration-1000">
                    <div class="flex items-center justify-center w-12 h-12 bg-indigo-600 rounded-full mx-auto">
                        <svg viewBox="0 0 24 24" fill="none" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M14 21H5C4.06812 21 3.60218 21 3.23463 20.8478C2.74458 20.6448 2.35523 20.2554 2.15224 19.7654C2 19.3978 2 18.9319 2 18C2 17.0681 2 16.6022 2.15224 16.2346C2.35523 15.7446 2.74458 15.3552 3.23463 15.1522C3.60218 15 4.06812 15 5 15H19C19.9319 15 20.3978 15 20.7654 15.1522C21.2554 15.3552 21.6448 15.7446 21.8478 16.2346C22 16.6022 22 17.0681 22 18C22 18.9319 22 19.3978 21.8478 19.7654C21.6448 20.2554 21.2554 20.6448 20.7654 20.8478C20.3978 21 19.9319 21 19 21H18"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                <path
                                    d="M2 12C2 11.0681 2 10.6022 2.15224 10.2346C2.35523 9.74458 2.74458 9.35523 3.23463 9.15224C3.60218 9 4.06812 9 5 9H19C19.9319 9 20.3978 9 20.7654 9.15224C21.2554 9.35523 21.6448 9.74458 21.8478 10.2346C22 10.6022 22 11.0681 22 12C22 12.9319 22 13.3978 21.8478 13.7654C21.6448 14.2554 21.2554 14.6448 20.7654 14.8478C20.3978 15 19.9319 15 19 15H5C4.06812 15 3.60218 15 3.23463 14.8478C2.74458 14.6448 2.35523 14.2554 2.15224 13.7654C2 13.3978 2 12.9319 2 12Z"
                                    stroke="#fff" stroke-width="1.5"></path>
                                <path
                                    d="M10 3H19C19.9319 3 20.3978 3 20.7654 3.15224C21.2554 3.35523 21.6448 3.74458 21.8478 4.23463C22 4.60218 22 5.06812 22 6C22 6.93188 22 7.39782 21.8478 7.76537C21.6448 8.25542 21.2554 8.64477 20.7654 8.84776C20.3978 9 19.9319 9 19 9H5C4.06812 9 3.60218 9 3.23463 8.84776C2.74458 8.64477 2.35523 8.25542 2.15224 7.76537C2 7.39782 2 6.93188 2 6C2 5.06812 2 4.60218 2.15224 4.23463C2.35523 3.74458 2.74458 3.35523 3.23463 3.15224C3.60218 3 4.06812 3 5 3H6"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                <circle cx="5" cy="12" r="1" fill="#fff"></circle>
                                <circle cx="5" cy="6" r="1" fill="#fff"></circle>
                                <circle cx="5" cy="18" r="1" fill="#fff"></circle>
                            </g>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Migrasi Website</h3>
                    <p class="mt-2 text-gray-600">Layanan transfer hosting dan migrasi dari platform lama ke yang baru
                        tanpa kendala.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition opacity-0 transition-opacity duration-1000">
                    <div
                        class="flex items-center justify-center w-12 h-12 bg-indigo-600 text-indigo-600 rounded-full mx-auto">
                        <svg viewBox="0 0 14 14" role="img" class="w-8 h-8" focusable="false" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g fill="#fff" transform="translate(-.57894728 -.57894728) scale(.31579)">
                                    <circle cx="8" cy="38" r="3"></circle>
                                    <circle cx="16" cy="40" r="3"></circle>
                                    <circle cx="24" cy="33" r="3"></circle>
                                    <circle cx="32" cy="35" r="3"></circle>
                                    <circle cx="40" cy="31" r="3"></circle>
                                    <path d="M40.9 32.8l-1.8-3.6-7.3 3.7-8.3-2.1-8 7-7-1.7-1 3.8 9 2.3 8-7 7.7 1.9z">
                                    </path>
                                </g>
                                <g fill="#fff" transform="translate(-.57894728 -.57894728) scale(.31579)">
                                    <circle cx="8" cy="20" r="3"></circle>
                                    <circle cx="16" cy="22" r="3"></circle>
                                    <circle cx="24" cy="15" r="3"></circle>
                                    <circle cx="32" cy="20" r="3"></circle>
                                    <circle cx="40" cy="8" r="3"></circle>
                                    <path
                                        d="M38.3 6.9c-2.1 3.2-5.3 8-6.9 10.4-1.2-.7-3.1-2-6.4-4l-1.3-.8-8.3 7.3-7-1.7-1 3.9 9 2.3 7.7-6.7c2.6 1.6 5.8 3.6 6.5 4.1l.5.5.9-.1c1.1-.1 1.1-.1 9.5-12.9l-3.2-2.3z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Analisis dan Konsultasi</h3>
                    <p class="mt-2 text-gray-600">Kami menyediakan analisis website secara menyeluruh dan konsultasi
                        untuk pengembangan lebih lanjut.</p>
                </div>
            </div>
        </div>
    </section>

    <!--price -->
    <section class="bg-white py-16">
        <div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl"
                aria-hidden="true">
                <div class="mx-auto aspect-1155/678 w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-base font-semibold text-indigo-600">Pricing</h2>
                <p class="mt-2 text-5xl font-semibold tracking-tight text-gray-900 sm:text-6xl">Choose the right plan
                    for you</p>
            </div>
            <p class="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-gray-600 sm:text-xl">
                Choose an affordable plan that’s packed with the best features for engaging your audience, creating
                customer loyalty, and driving sales.
            </p>
            <div
                class="mx-auto mt-16 grid max-w-lg grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-3 lg:gap-x-8">
                <!-- Hobby Plan -->
                <div
                    class="rounded-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:p-10 opacity-0 transition-opacity duration-1000">
                    <h3 id="tier-hobby" class="text-base font-semibold text-indigo-600">Hobby</h3>
                    <p class="mt-4 flex items-baseline gap-x-2">
                        <span class="text-5xl font-semibold tracking-tight text-gray-900">$29</span>
                        <span class="text-base text-gray-500">/month</span>
                    </p>
                    <p class="mt-6 text-base text-gray-600">The perfect plan if you're just getting started with our
                        product.</p>
                    <ul class="mt-8 space-y-3 text-sm text-gray-600 sm:mt-10">
                        <li class="flex gap-x-3">25 products</li>
                        <li class="flex gap-x-3">Up to 10,000 subscribers</li>
                        <li class="flex gap-x-3">Advanced analytics</li>
                        <li class="flex gap-x-3">24-hour support response time</li>
                    </ul>
                    <a href="#"
                        class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 sm:mt-10">Get
                        started today</a>
                </div>
                <!-- Professional Plan -->
                <div
                    class="rounded-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:p-10 opacity-0 transition-opacity duration-1000">
                    <h3 id="tier-professional" class="text-base font-semibold text-indigo-600">Professional</h3>
                    <p class="mt-4 flex items-baseline gap-x-2">
                        <span class="text-5xl font-semibold tracking-tight text-gray-900">$49</span>
                        <span class="text-base text-gray-500">/month</span>
                    </p>
                    <p class="mt-6 text-base text-gray-600">Great for growing businesses looking to scale.</p>
                    <ul class="mt-8 space-y-3 text-sm text-gray-600 sm:mt-10">
                        <li class="flex gap-x-3">50 products</li>
                        <li class="flex gap-x-3">Up to 20,000 subscribers</li>
                        <li class="flex gap-x-3">Advanced analytics</li>
                        <li class="flex gap-x-3">24-hour support response time</li>
                        <li class="flex gap-x-3">Dedicated account manager</li>
                    </ul>
                    <a href="#"
                        class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 sm:mt-10">Get
                        started today</a>
                </div>
                <!-- Enterprise Plan -->
                <div
                    class="rounded-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:p-10 opacity-0 transition-opacity duration-1000">
                    <h3 id="tier-professional" class="text-base font-semibold text-indigo-600">Professional</h3>
                    <p class="mt-4 flex items-baseline gap-x-2">
                        <span class="text-5xl font-semibold tracking-tight text-gray-900">$49</span>
                        <span class="text-base text-gray-500">/month</span>
                    </p>
                    <p class="mt-6 text-base text-gray-600">Great for growing businesses looking to scale.</p>
                    <ul class="mt-8 space-y-3 text-sm text-gray-600 sm:mt-10">
                        <li class="flex gap-x-3">50 products</li>
                        <li class="flex gap-x-3">Up to 20,000 subscribers</li>
                        <li class="flex gap-x-3">Advanced analytics</li>
                        <li class="flex gap-x-3">24-hour support response time</li>
                        <li class="flex gap-x-3">Dedicated account manager</li>
                    </ul>
                    <a href="#"
                        class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-indigo-600 ring-1 ring-indigo-200 ring-inset hover:ring-indigo-300 sm:mt-10">Get
                        started today</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-indigo-600 text-white py-12">
        <div class="mt-8 text-left px-4 sm:px-6 lg:px-8">
            <p class="text-white text-5xl font-bold">Keuntungan menggunakan <br>layanan Jasterweb</p>
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-10">
            <!-- Pastikan grid menggunakan kelas yang sesuai untuk responsivitas -->
            <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-10">
                <!-- Card 1 -->
                <div class="bg-white bg-opacity-60 backdrop-blur-lg rounded-lg shadow-lg p-6 w-full mb-6 opacity-0 transition-opacity duration-1000"
                    data-aos="fade-up">
                    <div class="flex items-center justify-center bg-indigo-500 rounded-full w-12 h-12">
                        <svg fill="#ffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8"
                            data-name="Layer 1" stroke="#ffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M20,16a3,3,0,0,0-1.73.56l-2.45-1.45A3.74,3.74,0,0,0,16,14a4,4,0,0,0-3-3.86V7.82a3,3,0,1,0-2,0v2.32A4,4,0,0,0,8,14a3.74,3.74,0,0,0,.18,1.11L5.73,16.56A3,3,0,0,0,4,16a3,3,0,1,0,3,3,3,3,0,0,0-.12-.8l2.3-1.37a4,4,0,0,0,5.64,0l2.3,1.37A3,3,0,1,0,20,16ZM4,20a1,1,0,1,1,1-1A1,1,0,0,1,4,20ZM12,4a1,1,0,1,1-1,1A1,1,0,0,1,12,4Zm0,12a2,2,0,1,1,2-2A2,2,0,0,1,12,16Zm8,4a1,1,0,1,1,1-1A1,1,0,0,1,20,20Z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mt-4">Layanan All in One</h3>
                    <p class="text-white mt-2">Tak hanya Website, Jasterweb juga bisa membuatkan kamu Design Promosi &
                        Skalian Iklan di Google</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white bg-opacity-60 backdrop-blur-lgrounded-lg shadow-lg p-6 w-full mb-6 opacity-0 transition-opacity duration-1000">
                    <div class="flex items-center justify-center bg-indigo-500 rounded-full w-12 h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mt-4">Harga Bisa Request</h3>
                    <p class="text-white mt-2">Suka sama Jasterweb tapi Harga belum cocok? Santai, Kamu bisa tentukan
                        harga websitemu sendiri</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white bg-opacity-60 backdrop-blur-lg rounded-lg shadow-lg p-6 w-full mb-6 opacity-0 transition-opacity duration-1000">
                    <div class="flex items-center justify-center bg-indigo-500 rounded-full w-12 h-12">
                        <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="h-8 w-8" viewBox="0 0 32 32"
                            xml:space="preserve" fill="#ffff" stroke="#ffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <style type="text/css">
                                    .feather_een {
                                        fill: #0B1719;
                                    }
                                </style>
                                <path class="feather_een"
                                    d="M29,4H3C1.343,4,0,5.343,0,7v16c0,1.657,1.343,3,3,3h9v3h-1.5c-0.276,0-0.5,0.224-0.5,0.5l0,0 c0,0.276,0.224,0.5,0.5,0.5h11c0.276,0,0.5-0.224,0.5-0.5l0,0c0-0.276-0.224-0.5-0.5-0.5H20v-3h9c1.657,0,3-1.343,3-3V7 C32,5.343,30.657,4,29,4z M19,29h-6v-3h6V29z M31,23c0,1.105-0.895,2-2,2H3c-1.105,0-2-0.895-2-2V7c0-1.105,0.895-2,2-2h26 c1.105,0,2,0.895,2,2V23z M25.805,9.03c-0.782-0.154-1.475,0.3-1.713,0.97H18V9h-4v1H7.908C7.67,9.33,6.976,8.876,6.195,9.03 c-0.573,0.113-1.04,0.572-1.16,1.144C4.83,11.145,5.565,12,6.5,12c0.652,0,1.202-0.419,1.408-1H14v0.224 c-4.388,0.897-7.745,4.658-7.986,9.246C5.999,20.757,6.227,21,6.515,21h0c0.263,0,0.484-0.204,0.497-0.467 c0.209-4.065,3.134-7.41,6.988-8.289V13h4v-0.757c3.854,0.88,6.779,4.225,6.988,8.289C25.002,20.796,25.222,21,25.485,21h0 c0.288,0,0.516-0.243,0.501-0.53c-0.241-4.588-3.598-8.349-7.986-9.246V11h6.092c0.207,0.581,0.756,1,1.408,1 c0.935,0,1.67-0.855,1.466-1.826C26.845,9.602,26.378,9.143,25.805,9.03z M6.5,11C6.224,11,6,10.776,6,10.5S6.224,10,6.5,10 S7,10.224,7,10.5S6.776,11,6.5,11z M17,12h-2v-2h2V12z M25.5,11c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5 S25.776,11,25.5,11z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mt-4">Ready to Custom</h3>
                    <p class="text-white mt-2">Selain Web Company & Toko Online, Jasterweb juga siap untuk membuat
                        Website Kompleks / Custom</p>
                </div>
                <!-- Card 4 -->
                <div
                    class="bg-white bg-opacity-60 backdrop-blur-lg rounded-lg shadow-lg p-6 w-full mb-6 opacity-0 transition-opacity duration-1000">
                    <div class="flex items-center justify-center bg-indigo-500 rounded-full w-12 h-12">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 52 52"
                            enable-background="new 0 0 52 52" xml:space="preserve" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M42.3,4.9H30.4C29.6,3.2,27.9,2,26,2c-2.6,0-4.8,2.2-4.8,4.8s2.2,4.8,4.8,4.8c2,0,3.7-1.2,4.4-2.9h11.9 c2.1,0,3.8,1.7,3.8,3.8v7.7c0,2.1-1.7,3.8-3.8,3.8h-5.8v-5.8c0-1.6-1.3-2.9-2.9-2.9H18.3c-1.6,0-2.9,1.3-2.9,2.9v5.8H9.7 c-4.2,0-7.7,3.4-7.7,7.7v7.7c0,4.2,3.4,7.7,7.7,7.7h11.9C22.3,48.8,24,50,26,50c2.6,0,4.8-2.2,4.8-4.8c0-2.6-2.2-4.8-4.8-4.8 c-2,0-3.7,1.2-4.4,2.9H9.7c-2.1,0-3.8-1.7-3.8-3.8v-7.7c0-2.1,1.7-3.8,3.8-3.8h5.8v5.8c0,1.6,1.3,2.9,2.9,2.9h15.4 c1.6,0,2.9-1.3,2.9-2.9v-5.8h5.8c4.2,0,7.7-3.4,7.7-7.7v-7.7C50,8.3,46.5,4.9,42.3,4.9z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mt-4">Alur Pekerjaan Jelas</h3>
                    <p class="text-white mt-2">Selain Web Company & Toko Online, Jasterweb juga siap untuk membuat
                        Website Kompleks / Custom</p>
                </div>
                <!-- Card 5 -->
                <div
                    class="bg-white bg-opacity-60 backdrop-blur-lg rounded-lg shadow-lg p-6 w-full mb-6 opacity-0 transition-opacity duration-1000">
                    <div class="flex items-center justify-center bg-indigo-500 rounded-full w-12 h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mt-4">Garansi Selamanya</h3>
                    <p class="text-white mt-2">Selain Web Company & Toko Online, Jasterweb juga siap untuk membuat
                        Website Kompleks / Custom</p>
                </div>
                <!-- Card 6 -->
                <div
                    class="bg-white bg-opacity-60 backdrop-blur-lg rounded-lg shadow-lg p-6 w-full mb-6 opacity-0 transition-opacity duration-1000">
                    <div class="flex items-center justify-center bg-indigo-500 rounded-full w-12 h-12">
                        <svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8"
                            stroke="#ffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M19.5 7.75H18.1C18.5 7.27 18.75 6.67 18.75 6C18.75 4.48 17.52 3.25 16 3.25C14.32 3.25 12.84 4.14 12 5.46C11.16 4.14 9.68 3.25 8 3.25C6.48 3.25 5.25 4.48 5.25 6C5.25 6.67 5.5 7.27 5.9 7.75H4.5C3.81 7.75 3.25 8.31 3.25 9V11.5C3.25 12.1 3.68 12.58 4.25 12.7V19.5C4.25 20.19 4.81 20.75 5.5 20.75H18.5C19.19 20.75 19.75 20.19 19.75 19.5V12.7C20.32 12.58 20.75 12.1 20.75 11.5V9C20.75 8.31 20.19 7.75 19.5 7.75ZM19.25 11.25H12.75V9.25H19.25V11.25ZM16 4.75C16.69 4.75 17.25 5.31 17.25 6C17.25 6.69 16.69 7.25 16 7.25H12.84C13.18 5.82 14.47 4.75 16 4.75ZM8 4.75C9.53 4.75 10.82 5.82 11.16 7.25H8C7.31 7.25 6.75 6.69 6.75 6C6.75 5.31 7.31 4.75 8 4.75ZM4.75 9.25H11.25V11.25H4.75V9.25ZM5.75 12.75H11.25V19.25H5.75V12.75ZM18.25 19.25H12.75V12.75H18.25V19.25Z"
                                    fill="#ffff"></path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mt-4">Banyak Bonus Menarik</h3>
                    <p class="text-white mt-2">Selain Web Company & Toko Online, Jasterweb juga siap untuk membuat
                        Website Kompleks / Custom</p>
                </div>
            </div>
        </div>
    </section>

    <!--sponsor-->
    <section class="pt-4 py-16 bg-white">
        <div class="py-6 text-center">
            <h2 class="inline-block bg-gray-200 text-sm font-bold text-gray-800 py-1 px-3 mb-4 rounded-full uppercase">
                Trusted By
            </h2>
            <div class="overflow-hidden relative w-full mt-4">
                <div class="flex space-x-12 animate-marquee items-center">
                    <img src="image/1.png" alt="Sponsor 1" class="w-40 h-auto" />
                    <img src="image/2.png" alt="Sponsor 2" class="w-40 h-auto" />
                    <img src="image/3.png" alt="Sponsor 3" class="w-40 h-auto" />
                    <img src="image/4.png" alt="Sponsor 4" class="w-40 h-auto" />
                    <img src="image/5.png" alt="Sponsor 5" class="w-40 h-auto" />
                </div>
            </div>

            <!-- Container Flex untuk teks dan tombol -->
            <div class="flex justify-center items-center mt-6">
                <h2 class="text-gray-400 mr-4">Lihat 100 Testimoni lainnya di Google Maps</h2>
                <a href="https://www.google.com/maps/place/Jakarta"
                    class="inline-flex items-center px-6 py-3 bg-purple-600 text-white font-normal rounded-lg shadow hover:bg-purple-700 transition">
                    Google Maps
                </a>
            </div>
        </div>
    </section>



    <!--kontak-->
    <section class="py-52 bg-cover bg-center text-white relative" style="background-image: url('image/cs.jpg');">
        <!-- Layer Gelap untuk Background -->
        <div class="absolute inset-0 bg-black opacity-30"></div> <!-- Layer hitam transparan di belakang konten -->

        <div class="container mx-auto flex flex-col lg:flex-row items-center lg:space-x-10 px-4 relative">
            <!-- Konten Teks -->
            <div class="lg:w-2/3 text-center lg:text-left mt-10 lg:mt-[-40px]">
                <p class="text-white font-bold mb-2">Jangkau Pelanggan Baru lebih Luas</p>
                <h2 class="text-4xl font-bold text-white mb-4">Buat Websitemu Sekarang!</h2>
                <p class="text-gray-200 mb-6">
                    Dengan pengalaman yang kami miliki, serta tim yang kompeten. Kami siap mewujudkan website impian
                    kamu. Mulai sekarang!
                </p>
                <a href="https://wa.me/1234567890"
                    class="inline-flex items-center px-6 py-3 bg-purple-600 text-white font-bold rounded-lg shadow hover:bg-purple-700 transition">
                    <i class="fab fa-whatsapp mr-2"></i> Hubungi Kami Sekarang
                </a>

                <!-- Ikon Tambahan -->
                <div class="flex justify-center lg:justify-start space-x-6 mt-8">
                    <div class="flex items-center space-x-2">
                        <!-- Menambahkan space-x-2 untuk jarak antara ikon dan teks -->
                        <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.581 19.4041C14.6645 19.9894 14.2606 20.5326 13.676 20.6211L12 20.9841C11.6307 21.1187 11.2169 21.0265 10.9398 20.7477C10.6627 20.469 10.5729 20.0546 10.7097 19.6861C10.8466 19.3176 11.1851 19.0623 11.577 19.0321L13.252 18.6701C13.8213 18.509 14.4142 18.8364 14.581 19.4041V19.4041Z"
                                    stroke="#ffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7 15.9919C5.89543 15.9919 5 15.0965 5 13.9919V10.9919C5 9.88737 5.89543 8.99194 7 8.99194C8.10457 8.99194 9 9.88737 9 10.9919V13.9919C9 15.0965 8.10457 15.9919 7 15.9919Z"
                                    stroke="#ffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17 15.9919C15.8954 15.9919 15 15.0965 15 13.9919V10.9919C15 9.88737 15.8954 8.99194 17 8.99194C18.1046 8.99194 19 9.88737 19 10.9919V13.9919C19 15.0965 18.1046 15.9919 17 15.9919Z"
                                    stroke="#ffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M18.25 11C18.25 11.4142 18.5858 11.75 19 11.75C19.4142 11.75 19.75 11.4142 19.75 11H18.25ZM4.25 11C4.25 11.4142 4.58579 11.75 5 11.75C5.41421 11.75 5.75 11.4142 5.75 11H4.25ZM19.75 14.0023C19.7513 13.5881 19.4165 13.2513 19.0023 13.25C18.5881 13.2487 18.2513 13.5835 18.25 13.9977L19.75 14.0023ZM13.5113 19.8951C13.1071 19.9855 12.8527 20.3865 12.9431 20.7907C13.0335 21.1949 13.4345 21.4493 13.8387 21.3589L13.5113 19.8951ZM19.75 11V9H18.25V11H19.75ZM19.75 9C19.75 4.71979 16.2802 1.25 12 1.25V2.75C15.4518 2.75 18.25 5.54822 18.25 9H19.75ZM12 1.25C7.71979 1.25 4.25 4.71979 4.25 9H5.75C5.75 5.54822 8.54822 2.75 12 2.75V1.25ZM4.25 9V11H5.75V9H4.25ZM18.25 13.9977C18.2414 16.8289 16.2742 19.2771 13.5113 19.8951L13.8387 21.3589C17.2853 20.588 19.7393 17.534 19.75 14.0023L18.25 13.9977Z"
                                    fill="#ffff"></path>
                            </g>
                        </svg>
                        <p class="text-white font-semibold">Respon Cepat</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-white" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16 8L8 0H0V8L8 16L16 8ZM4.5 6C5.32843 6 6 5.32843 6 4.5C6 3.67157 5.32843 3 4.5 3C3.67157 3 3 3.67157 3 4.5C3 5.32843 3.67157 6 4.5 6Z"
                                    fill="#ffff"></path>
                            </g>
                        </svg>
                        <p class="text-white font-semibold">Harga Bisa Request</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--footer-->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo & Deskripsi -->
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start space-x-4">
                    <img src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Logo"
                        class="w-12 h-12">
                    <h4 class="text-xl font-bold uppercase">BrandName</h4>
                </div>
                <p class="mt-4 text-gray-300">
                    Website Resmi Pemerintah Desa Yosowilangun, Kecamatan Manyar, Kabupaten Gresik.
                </p>
                <!-- Ikon Sosial Media -->
                <div class="flex items-center justify-center md:justify-start mt-6 space-x-4">
                    <a href="#" class="w-9 h-9 rounded-full flex items-center justify-center  transition">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M20 12.05C19.9813 10.5255 19.5273 9.03809 18.6915 7.76295C17.8557 6.48781 16.673 5.47804 15.2826 4.85257C13.8921 4.2271 12.3519 4.01198 10.8433 4.23253C9.33473 4.45309 7.92057 5.10013 6.7674 6.09748C5.61422 7.09482 4.77005 8.40092 4.3343 9.86195C3.89856 11.323 3.88938 12.8781 4.30786 14.3442C4.72634 15.8103 5.55504 17.1262 6.69637 18.1371C7.83769 19.148 9.24412 19.8117 10.75 20.05V14.38H8.75001V12.05H10.75V10.28C10.7037 9.86846 10.7483 9.45175 10.8807 9.05931C11.0131 8.66687 11.23 8.30827 11.5161 8.00882C11.8022 7.70936 12.1505 7.47635 12.5365 7.32624C12.9225 7.17612 13.3368 7.11255 13.75 7.14003C14.3498 7.14824 14.9482 7.20173 15.54 7.30003V9.30003H14.54C14.3676 9.27828 14.1924 9.29556 14.0276 9.35059C13.8627 9.40562 13.7123 9.49699 13.5875 9.61795C13.4627 9.73891 13.3667 9.88637 13.3066 10.0494C13.2464 10.2125 13.2237 10.387 13.24 10.56V12.07H15.46L15.1 14.4H13.25V20C15.1399 19.7011 16.8601 18.7347 18.0985 17.2761C19.3369 15.8175 20.0115 13.9634 20 12.05Z"
                                    fill="#ffff"></path>
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="w-8 h-8  rounded-full flex items-center justify-center transition">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M17.6 6.31999C16.8669 5.58141 15.9943 4.99596 15.033 4.59767C14.0716 4.19938 13.0406 3.99622 12 3.99999C10.6089 4.00135 9.24248 4.36819 8.03771 5.06377C6.83294 5.75935 5.83208 6.75926 5.13534 7.96335C4.4386 9.16745 4.07046 10.5335 4.06776 11.9246C4.06507 13.3158 4.42793 14.6832 5.12 15.89L4 20L8.2 18.9C9.35975 19.5452 10.6629 19.8891 11.99 19.9C14.0997 19.9001 16.124 19.0668 17.6222 17.5816C19.1205 16.0965 19.9715 14.0796 19.99 11.97C19.983 10.9173 19.7682 9.87634 19.3581 8.9068C18.948 7.93725 18.3505 7.05819 17.6 6.31999ZM12 18.53C10.8177 18.5308 9.65701 18.213 8.64 17.61L8.4 17.46L5.91 18.12L6.57 15.69L6.41 15.44C5.55925 14.0667 5.24174 12.429 5.51762 10.8372C5.7935 9.24545 6.64361 7.81015 7.9069 6.80322C9.1702 5.79628 10.7589 5.28765 12.3721 5.37368C13.9853 5.4597 15.511 6.13441 16.66 7.26999C17.916 8.49818 18.635 10.1735 18.66 11.93C18.6442 13.6859 17.9355 15.3645 16.6882 16.6006C15.441 17.8366 13.756 18.5301 12 18.53ZM15.61 13.59C15.41 13.49 14.44 13.01 14.26 12.95C14.08 12.89 13.94 12.85 13.81 13.05C13.6144 13.3181 13.404 13.5751 13.18 13.82C13.07 13.96 12.95 13.97 12.75 13.82C11.6097 13.3694 10.6597 12.5394 10.06 11.47C9.85 11.12 10.26 11.14 10.64 10.39C10.6681 10.3359 10.6827 10.2759 10.6827 10.215C10.6827 10.1541 10.6681 10.0941 10.64 10.04C10.64 9.93999 10.19 8.95999 10.03 8.56999C9.87 8.17999 9.71 8.23999 9.58 8.22999H9.19C9.08895 8.23154 8.9894 8.25465 8.898 8.29776C8.8066 8.34087 8.72546 8.403 8.66 8.47999C8.43562 8.69817 8.26061 8.96191 8.14676 9.25343C8.03291 9.54495 7.98287 9.85749 8 10.17C8.0627 10.9181 8.34443 11.6311 8.81 12.22C9.6622 13.4958 10.8301 14.5293 12.2 15.22C12.9185 15.6394 13.7535 15.8148 14.58 15.72C14.8552 15.6654 15.1159 15.5535 15.345 15.3915C15.5742 15.2296 15.7667 15.0212 15.91 14.78C16.0428 14.4856 16.0846 14.1583 16.03 13.84C15.94 13.74 15.81 13.69 15.61 13.59Z"
                                    fill="#ffff"></path>
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="w-6 h-6 rounded-full flex items-center justify-center transition">
                        <svg fill="#ffff" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            stroke="#ffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>tiktok</title>
                                <path
                                    d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z">
                                </path>
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="w-6 h-6 rounded-full flex items-center justify-center  transition">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                    fill="#ffff"></path>
                                <path
                                    d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                    fill="#ffff"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                    fill="#ffff"></path>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Hubungi Kami -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-bold uppercase mb-4">Hubungi Kami</h4>
                <p class="text-gray-300">
                    JL. KNg. Brotonegoro No. 1, Desa Yosowilangun, Kecamatan Manyar, Kabupaten Gresik, Jawa Timur,
                    Indonesia, 61151.
                </p>
                <ul class="mt-4 space-y-2 text-gray-300">
                    <li>
                        <i class="fas fa-phone-alt"></i> <span>Telepon/Fax: 081334462860</span>
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt"></i> <span>No. HP: 081338214281</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i> <span>Email: desayosowilangun@gmail.com</span>
                    </li>
                </ul>
            </div>

            <!-- Ikuti Kami -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-bold uppercase mb-4">Services</h4>
                <ul class="space-y-2 text-gray-300">
                    <li>
                        <a href="#" class="hover:text-white transition">Jasa Pembuatan Website</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white transition">Jasa Website Custom</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white transition">Jasa Redesign Website</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white transition">Iklan Google Ads</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white transition">Aplikasi Android / iOS</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white transition">Optimasi SEO</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white transition">Jasa Pembuatan Logo</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white transition">UI / UX Design</a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Copyright Section -->
        <div class="mt-10 border-t border-gray-700 pt-5">
            <p class="text-center text-gray-400">
                &copy; 2025 Desa Modern. Semua Hak Dilindungi.
            </p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.opacity-0');

            const fadeInCards = () => {
                const windowHeight = window.innerHeight;

                cards.forEach(card => {
                    const cardTop = card.getBoundingClientRect().top;
                    if (cardTop < windowHeight - 100) {
                        card.classList.remove('opacity-0');
                        card.classList.add('opacity-100');
                    }
                });
            };

            window.addEventListener('scroll', fadeInCards);
            fadeInCards(); // Call it initially in case some cards are already in the viewport
        });

    </script>





</body>

</html>