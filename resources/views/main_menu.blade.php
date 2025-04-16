<x-app-layout>
    
<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OutStar - Outdoor Equipment Shop</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <!-- Logo -->
                        <a href="/" class="text-blue-600 font-bold text-xl flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                            OutStar
                        </a>
                    </div>
                    <!-- Main Navigation -->
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            SHOP
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            EQUIPMENT
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            CLOTHING
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            FOOTWEAR
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            EXPLORE
                        </a>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <button type="button" class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="ml-4">
                        <button type="button" class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </button>
                    </div>
                    <div class="ml-4">
                        <button type="button" class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Promotion Banner -->
        <div class="bg-blue-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-8 md:mb-0 md:w-1/2">
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">$50 OFF</h2>
                        <p class="text-lg text-gray-600 mb-6">ON PREMIUM SLEEPING BAGS FOR YOUR NEXT ADVENTURE</p>
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            SHOP NOW
                        </a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://via.placeholder.com/600x300" alt="Sleeping bags collection" class="rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>

        <!-- New Arrivals Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">New Arrivals</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <img src="https://via.placeholder.com/300x300" alt="Mountain Tent" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-medium text-gray-900">Mountain Tent</h3>
                        <p class="text-gray-600">$299.99</p>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <img src="https://via.placeholder.com/300x300" alt="Hiking Pants" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-medium text-gray-900">Hiking Pants</h3>
                        <p class="text-gray-600">$89.99</p>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <img src="https://via.placeholder.com/300x300" alt="Camp Pillow" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-medium text-gray-900">Camp Pillow</h3>
                        <p class="text-gray-600">$29.99</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categories Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Category 1 -->
                <div class="relative h-64 overflow-hidden rounded-lg">
                    <img src="https://via.placeholder.com/600x400" alt="Camping" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end">
                        <div class="p-4 text-white">
                            <h3 class="text-xl font-medium">Camping</h3>
                            <a href="#" class="text-sm font-medium underline mt-1">Shop Now</a>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="relative h-64 overflow-hidden rounded-lg">
                    <img src="https://via.placeholder.com/600x400" alt="Hiking" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end">
                        <div class="p-4 text-white">
                            <h3 class="text-xl font-medium">Hiking</h3>
                            <a href="#" class="text-sm font-medium underline mt-1">Shop Now</a>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="relative h-64 overflow-hidden rounded-lg">
                    <img src="https://via.placeholder.com/600x400" alt="Climbing" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end">
                        <div class="p-4 text-white">
                            <h3 class="text-xl font-medium">Climbing</h3>
                            <a href="#" class="text-sm font-medium underline mt-1">Shop Now</a>
                        </div>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="relative h-64 overflow-hidden rounded-lg">
                    <img src="https://via.placeholder.com/600x400" alt="Skiing" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end">
                        <div class="p-4 text-white">
                            <h3 class="text-xl font-medium">Skiing</h3>
                            <a href="#" class="text-sm font-medium underline mt-1">Shop Now</a>
                        </div>
                    </div>
                </div>

                <!-- Category 5 -->
                <div class="relative h-64 overflow-hidden rounded-lg">
                    <img src="https://via.placeholder.com/600x400" alt="Fishing" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end">
                        <div class="p-4 text-white">
                            <h3 class="text-xl font-medium">Fishing</h3>
                            <a href="#" class="text-sm font-medium underline mt-1">Shop Now</a>
                        </div>
                    </div>
                </div>

                <!-- Category 6 -->
                <div class="relative h-64 overflow-hidden rounded-lg">
                    <img src="https://via.placeholder.com/600x400" alt="Backpacking" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-end">
                        <div class="p-4 text-white">
                            <h3 class="text-xl font-medium">Backpacking</h3>
                            <a href="#" class="text-sm font-medium underline mt-1">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Product -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Popular Right Now</h2>
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-2/3">
                    <img src="https://via.placeholder.com/800x400" alt="Popular tent" class="w-full h-96 object-cover rounded-lg">
                </div>
                <div class="md:w-1/3 flex flex-col justify-center">
                    <h3 class="text-xl font-medium text-gray-900 mb-2">Ultralight Trekking Tent</h3>
                    <p class="text-gray-600 mb-4">Perfect for backpacking adventures, this ultralight tent weighs only 2.8 lbs while providing excellent protection from the elements.</p>
                    <p class="text-lg font-medium text-gray-900 mb-6">$399.99</p>
                    <div>
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            SHOP NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action with Forest Background -->
        <div class="relative">
            <img src="https://via.placeholder.com/1920x400" alt="Forest background" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="text-center px-4">
                    <div class="flex justify-center space-x-12 mb-8">
                        <div class="text-white text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>Contact Us</span>
                        </div>
                        <div class="text-white text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Our Stores</span>
                        </div>
                        <div class="text-white text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Help Center</span>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold text-white">GEAR UP FOR NATURE</h2>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Shop</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">New Arrivals</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Best Sellers</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Sale Items</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Gift Cards</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Contact Us</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">FAQs</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Shipping & Returns</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Warranty</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">About Us</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Sustainability</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Careers</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-900">Partners</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Stay Connected</h3>
                    <p class="text-gray-600 mb-4">Subscribe to our newsletter for updates and promotions.</p>
                    <form class="flex">
                        <input type="email" placeholder="Your email" class="px-4 py-2 w-full border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-r-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Subscribe
                        </button>
                    </form>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-200 pt-8">
                <p class="text-sm text-gray-500">&copy; 2025 OutStar, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
    @livewireScripts
</body>
</html>
    
</x-app-layout>
