{{-- resources/views/components/featured-listings.blade.php --}}
<div>
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold">Explore Our Featured Listings</h2>
        <a href="#" class="text-xs text-black border border-black px-6 py-2.5 rounded-full transition hover:bg-gray-100">View Our Listings</a>

    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/building-image.jpeg') }}" alt="Sunrise Estates" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Sunrise Estates</h3>
                <p class="text-gray-600 mb-2">Location: Miami, Florida</p>
                <p class="text-gray-800 font-bold">Price: $3,500,000</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/building-image.jpeg') }}" alt="Palm Grove Apartments" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Palm Grove Apartments</h3>
                <p class="text-gray-600 mb-2">Location: Fort Lauderdale, Florida</p>
                <p class="text-gray-800 font-bold">Price: $12,000,000</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/building-image.jpeg') }}" alt="Clearwater Office Park" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Clearwater Office Park</h3>
                <p class="text-gray-600 mb-2">Location: Clearwater, Florida</p>
                <p class="text-gray-800 font-bold">Price: $9,700,000</p>
            </div>
        </div>
    </div>
</div>