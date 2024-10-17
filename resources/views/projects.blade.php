<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
     @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <!-- Header Section -->
    <div class="my-8 px-4 md:px-16">
        <h1 class="text-2xl font-bold text-left">Everywhere you want to live</h1>
        <p class="text-lg mt-2 text-gray-600 text-left">Creating spaces that inspire growth, innovation, and community well-being.</p>
    </div>

   <!-- Tabs for Locations (Full Width) -->
   <div class="bg-white py-4 px-4 md:px-16 border-b">
        <div class="flex justify-between overflow-auto relative">
            <span id="all-tab" class="tab-label flex-1 text-center cursor-pointer" onclick="showProjects('all')">All Listings</span>
            <span id="miami-tab" class="tab-label flex-1 text-center cursor-pointer" onclick="showProjects('miami')">Miami</span>
            <span id="orlando-tab" class="tab-label flex-1 text-center cursor-pointer" onclick="showProjects('orlando')">Orlando</span>
            <span id="tampa-tab" class="tab-label flex-1 text-center cursor-pointer" onclick="showProjects('tampa')">Tampa</span>
            <span id="jacksonville-tab" class="tab-label flex-1 text-center cursor-pointer" onclick="showProjects('jacksonville')">Jacksonville</span>
            <span id="stpetersburg-tab" class="tab-label flex-1 text-center cursor-pointer" onclick="showProjects('stpetersburg')">St. Petersburg</span>
            <span id="tallahassee-tab" class="tab-label flex-1 text-center cursor-pointer" onclick="showProjects('tallahassee')">Tallahassee</span>
            <span id="fortlauderdale-tab" class="tab-label flex-1 text-center cursor-pointer" onclick="showProjects('fortlauderdale')">Fort Lauderdale</span>
            <span id="naples-tab" class="tab-label flex-1 text-center cursor-pointer" onclick="showProjects('naples')">Naples</span>
        </div>
        <div id="tab-indicator" class="bg-gray-300 h-1 mt-1 transition-all duration-300" style="width: calc(100% / 9); transform: translateX(0);"></div>
    </div>
    
    <div class="mt-8 px-4 md:px-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6"> <!-- Use Tailwind grid classes -->
            <!-- Miami Projects -->
            <div id="miami-projects" class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:translate-y-1">
                <img src="../../public/images/building-image.jpeg" alt="Miami House 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Miami Beach House</h3>
                    <p class="text-gray-500">Miami, FL</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm font-semibold text-blue-500">Villa</span>
                        <a href="#" class="text-sm text-blue-500 hover:underline">Show Details &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:translate-y-1">
                <img src="https://via.placeholder.com/400" alt="Miami House 2" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Oceanfront Condo</h3>
                    <p class="text-gray-500">Miami, FL</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm font-semibold text-blue-500">Condo</span>
                        <a href="#" class="text-sm text-blue-500 hover:underline">Show Details &rarr;</a>
                    </div>
                </div>
            </div>
            <!-- Additional Miami projects -->

            <!-- Orlando Projects -->
            <div id="orlando-projects" class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:translate-y-1 hidden">
                <img src="https://via.placeholder.com/400" alt="Orlando House 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Resort Villa</h3>
                    <p class="text-gray-500">Orlando, FL</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm font-semibold text-blue-500">Villa</span>
                        <a href="#" class="text-sm text-blue-500 hover:underline">Show Details &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:translate-y-1 hidden">
                <img src="https://via.placeholder.com/400" alt="Orlando House 2" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Luxury Bungalow</h3>
                    <p class="text-gray-500">Orlando, FL</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm font-semibold text-blue-500">Bungalow</span>
                        <a href="#" class="text-sm text-blue-500 hover:underline">Show Details &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Tampa Projects -->
            <div id="tampa-projects" class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform duration-300 hover:translate-y-1 hidden">
                <img src="https://via.placeholder.com/400" alt="Tampa House 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Waterfront Property</h3>
                    <p class="text-gray-500">Tampa, FL</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm font-semibold text-blue-500">House</span>
                        <a href="#" class="text-sm text-blue-500 hover:underline">Show Details &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Dynamic Tabs and Tab Indicator -->
   <!-- JavaScript for Dynamic Tabs and Tab Indicator -->
   <script>
        function showProjects(location) {
            // Hide all project card containers
            document.querySelectorAll('.project-cards').forEach(function(el) {
                el.classList.add('hidden');
            });
            // Show the selected location's project cards
            document.getElementById(location + '-projects').classList.remove('hidden');
            
            // Reset the tab indicator position
            const tabs = document.querySelectorAll('.tab-label');
            const tabIndicator = document.getElementById('tab-indicator');
            tabs.forEach(function(tab) {
                if (tab.id === location + '-tab') {
                    tabIndicator.style.transform = `translateX(${Array.from(tabs).indexOf(tab) * 100}%)`;
                }
            });
        }

        // Initialize the default selected tab (e.g., Miami)
        document.addEventListener('DOMContentLoaded', function() {
            showProjects('miami'); // Set Miami as the default view
        });
    </script>

</body>
</html>
