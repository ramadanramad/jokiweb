<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>

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
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Contact</a>
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
                <a href="#" class="block text-gray-600 hover:text-indigo-600 transition">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-indigo-500 py-20 opacity-0 transition-opacity duration-1000">
        <div class="container mx-auto px-6 lg:flex lg:items-center lg:space-x-12">
            <div class="lg:w-1/2">
                <h1 class="text-xl font-bold text-white leading-tight sm:text-4xl">
                    Get in touch
                </h1>
                <p class="mt-6 text-lg text-white">
                    Customer Service Agent Jasterweb siap membantu memberikan solusi terbaik untuk Kebutuhan kamu,
                    Hubungi Kami Sekarang!
                </p>
                <div class="mt-6 text-white flex flex-col lg:flex-row lg:items-start lg:gap-x-20">
                    <div class="lg:w-1/2">
                        <p class="mb-4 font-bold">Office - Surabaya</p>
                        <p class="mb-4 text-sm">Villa Bukit Mas - Mediterian K5 Dukuh Pakis, Surabaya</p>
                    </div>
                    <div class="lg:w-1/2 flex flex-col justify-start lg:ml-8">
                        <p class="font-bold mb-2">WhatsApp</p>
                        <p class="text-base">0812-3456-7890</p>
                    </div>
                </div>

                <div class="mt-6  opacity-0 transition-opacity duration-1000 mr-1">
                    <a href="https://wa.me/1234567890"
                        class="inline-flex items-center px-6 py-3 bg-purple-600 text-white font-bold rounded-lg shadow hover:bg-purple-700 transition">
                        <i class="fab fa-whatsapp mr-2"></i> Hubungi Kami Sekarang
                    </a>
                </div>

            </div>

            <div class="mt-12 lg:mt-0 lg:w-1/2 flex justify-center lg:justify-end ml-4">
                <img src="image/cs.png" alt="Vila Image" class="max-w-full">
            </div>
        </div>
    </section>



    <footer class="bg-gray-800 text-white py-10 ">
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