<div class="py-4 mt-8">
    <div class="flex justify-between items-center mb-12">
        <h2 class="text-2xl font-bold">Explore Our Featured<br> Listings</h2>
        <a href="{{ url('/projects') }}" class="text-xs text-black border border-black px-4 py-2.5 rounded-full transition duration-100 ease-in-out hover:scale-105 cursor-pointer">View Our Listings</a>

    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="bg-white w-81 shadow-md overflow-hidden transform transition duration-200 ease-in-out hover:scale-105 cursor-pointer relative">
        <img src="{{ asset('images/Sunrise.jpeg') }}" alt="Sunrise Estates" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-xl font-semibold mb-2">Sunrise Estates</h3>
            <p class="text-gray-600 mb-2 text-2s">Location: Miami, Florida</p>
            <p class="text-gray-800 font-bold py-2">Price: $3,500,000</p>
        </div>
        <div class="absolute bottom-3 right-3 bg-gray-800 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2 mb-3">
            <i class="fas fa-arrow-right text-xs"></i> 
        </div>
            </div>

        <div class="bg-white w-81 shadow-md overflow-hidden transform transition duration-200 ease-in-out hover:scale-105 cursor-pointer">
            <img src="{{ asset('images/Palm.jpeg') }}" alt="Palm Grove Apartments" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Palm Grove Apartments</h3>
                <p class="text-gray-600 mb-2 text-2s">Location: Fort Lauderdale, Florida</p>
                <p class="text-gray-800 font-bold py-2">Price: $12,000,000</p>
            </div>
            <div class="absolute bottom-3 right-3 bg-gray-800 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2 mb-3">
            <i class="fas fa-arrow-right text-xs"></i> 
        </div>
        </div>
        <div class="bg-white w-81 shadow-md overflow-hidden transform transition duration-200 ease-in-out hover:scale-105 cursor-pointer">
            <img src="{{ asset('images/clearWater.jpeg') }}" alt="Clearwater Office Park" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Clearwater Office Park</h3>
                <p class="text-gray-600 mb-2 text-2s">Location: Clearwater, Florida</p>
                <p class="text-gray-800 font-bold py-2">Price: $9,700,000</p>
            </div>
            <div class="absolute bottom-3 right-3 bg-gray-800 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2 mb-3">
            <i class="fas fa-arrow-right text-xs"></i> 
        </div>
        </div>
    </div>
</div>