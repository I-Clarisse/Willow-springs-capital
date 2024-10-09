<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css') 
</head>
<body class="antialiased bg-gray-100">

<x-navbar />
<section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/background.jpeg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full text-center">
            <div class="text-white">
                <h1 class="text-6xl font-bold">SMART <br> PROPERTY <br> INVESTMENTS</h1>
                <p class="mt-4 text-lg">Discover the future of property investments with our strategic expertise and partnership opportunities.</p>
                <a href="#overview" class="mt-6 inline-block px-8 py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded">Learn More</a>
            </div>
        </div>
    </section>

    <section id="overview" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-semibold mb-4">Overview</h2>
            <p class="text-lg text-gray-600 mb-8">
                At Vesta Capital, our approach combines decades of experience in property investments with a forward-looking strategy. Whether you're looking for smart investments or growth opportunities, our team delivers value.
            </p>
        </div>
    </section>

    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center">
            
            <div class="lg:w-1/2">
            <img src="{{ asset('images/building-image.jpeg') }}" alt="Building Image" class="rounded shadow-lg">
            </div>

            <div class="lg:w-1/2 mt-12 lg:mt-0 lg:ml-12">
                <h3 class="text-3xl font-semibold mb-6">Our Reputation Is As Real As Our Properties</h3>
                <div class="flex justify-between text-center">
                    <div class="px-4">
                        <h4 class="text-5xl font-bold text-gray-800">85+</h4>
                        <p class="text-lg text-gray-600">Happy Customers</p>
                    </div>
                    <div class="px-4">
                        <h4 class="text-5xl font-bold text-gray-800">34</h4>
                        <p class="text-lg text-gray-600">Real Estate Partners</p>
                    </div>
                    <div class="px-4">
                        <h4 class="text-5xl font-bold text-gray-800">10</h4>
                        <p class="text-lg text-gray-600">Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-semibold mb-10">What We Offer</h2>
            <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start">
                
                <div class="w-full lg:w-1/3 p-4">
                    <div class="p-6 bg-gray-50 rounded shadow-lg">
                        <img src="{{ asset('images/building-image.jpeg') }}" alt="Investment Management Icon" class="mx-auto mb-6">
                        <h4 class="text-2xl font-semibold mb-4">Real Estate Investment Management</h4>
                        <p class="text-gray-600">Tailored investment management strategies for optimizing property portfolios.</p>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/3 p-4">
                    <div class="p-6 bg-gray-50 rounded shadow-lg">
                        <img src="{{ asset('images/building-image.jpeg') }}" alt="Strategic Partnerships Icon" class="mx-auto mb-6">
                        <h4 class="text-2xl font-semibold mb-4">Strategic Partnerships</h4>
                        <p class="text-gray-600">Building long-lasting partnerships for mutual growth and success.</p>
                    </div>
                </div>
               
                <div class="w-full lg:w-1/3 p-4">
                    <div class="p-6 bg-gray-50 rounded shadow-lg">
                        <img src="{{ asset('images/building-image.jpeg') }}" alt="Community Icon" class="mx-auto mb-6">
                        <h4 class="text-2xl font-semibold mb-4">Community Empowerment</h4>
                        <p class="text-gray-600">Creating sustainable communities with our impactful investments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
