<footer class="bg-black text-white py-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="flex items-center justify-between mb-4">
            <a href="landing" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo_white_background.jpg" class="h-8" alt="Logo" />
                <span class="text-2xl font-semibold">WILLOWS SPRINGS CAPITAL</span>
            </a>
        </div>

        <hr class="my-6 border-gray-200 dark:border-gray-700 lg:my-8" />

        <!-- Navigation Links -->
        <div class="flex justify-center space-x-8 mb-6">
            <a href="landing" class="hover:underline">Home</a>
            <a href="/about" class="hover:underline">About Us</a>
            <a href="/contact" class="hover:underline">Contact Us</a>
            <a href="/projects" class="hover:underline">Projects</a>
        </div>

        <hr class="my-6 border-gray-200 dark:border-gray-700 lg:my-8" />

        <!-- Contact Information -->
        <div class="flex flex-col sm:flex-row justify-around items-start mx-auto space-y-8 sm:space-y-0 px-4">
            <!-- Contact Section -->
            <div class="max-w-xs text-center sm:text-left">
                <h2 class="text-xl font-extrabold text-white uppercase mb-4">Reach out to us</h2>
                <ul class="text-gray-400">
                    <li class="mb-4 flex items-center">
                        <svg class="h-5 w-5 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12v4H8v-4M4 12l8-8 8 8M4 16h16m-7 4H7" />
                        </svg>
                        <p class="hover:underline">700 South Rosemary Ave #204</p>
                    </li>
                    <li class="mb-4 flex items-center">
                        <svg class="h-5 w-5 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7M3 7l9 5 9-5" />
                        </svg>
                        <p class="hover:underline">+1 (202) 451-0876</p>
                    </li>
                    <li class="mb-4 flex items-center">
                        <svg class="h-5 w-5 mr-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8a4 4 0 011.33-3 9.28 9.28 0 018.67 0A4 4 0 0118 8v12a4 4 0 01-4 4H7a4 4 0 01-4-4V8z" />
                        </svg>
                        <p class="hover:underline">info@willowsprings-capital.com</p>
                    </li>
                </ul>
            </div>

            <!-- Services Section -->
            <div class="max-w-xs text-center sm:text-left">
                <h2 class="text-xl font-extrabold text-white uppercase mb-4">Services</h2>
                <ul class="text-gray-400 list-disc list-inside">
                    <li class="mb-4 hover:underline">Real Estate Investment Management</li>
                    <li class="mb-4 hover:underline">Strategic Partnerships</li>
                    <li class="mb-4 hover:underline">Community Empowerment</li>
                </ul>
            </div>

            <!-- Partners Section -->
            <div class="max-w-xs text-center sm:text-left">
                <h2 class="text-xl font-extrabold text-white uppercase mb-4">OUR PARTNERS</h2>
                <div class="flex justify-center sm:justify-start space-x-6">
                    <img src="{{ asset('images/usgbc.png') }}" class="w-24 h-auto">
                    <img src="{{ asset('images/uli.png') }}" class="w-24 h-auto">
                </div>
            </div>
        </div>

        <hr class="my-6 border-gray-200 dark:border-gray-700 lg:my-8" />

        <!-- Footer Bottom -->
        <div class="w-full max-w-screen-xl mx-auto p-4 flex flex-col sm:flex-row justify-between items-center text-gray-400 text-sm">
            <a href="#" class="hover:underline mb-2 sm:mb-0">Terms & Conditions</a>
            <a href="#" class="hover:underline mb-2 sm:mb-0">Privacy Policy</a>
            <span>&copy; 2024. All Rights Reserved.</span>
        </div>
    </div>
</footer>
