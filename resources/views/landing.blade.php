<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_white_background.jpg') }}" type="image/jpg">
    <title>Willow Springs Capital</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">

<x-navbar />
<section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/background.jpeg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10 flex items-center justify-center h-full text-center">
        <div class="text-white">
            <h1 class="text-4xl md:text-6xl font-bold">SMART <br> PROPERTY <br> INVESTMENTS</h1>
            <p class="mt-4 text-base md:text-lg">Discover the future of property investments with our strategic expertise and partnership opportunities.</p>
            <a href="#overview" class="mt-6 inline-block px-8 py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded">Learn More</a>
        </div>
    </div>
</section>

<section id="overview" class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-5xl mx-auto"> <!-- Set maximum width and center the content -->
            <h2 class="text-3xl md:text-3xl font-semibold mb-4 text-black">Overview</h2> <!-- Set text color to black -->
            <p class="text-base md:text-s text-black mb-8 py-3"> <!-- Set text color to black -->
            At Willow Springs Capital, we are more than a real estate investment firm; we are a catalyst for growth, a force driven by passion, and a guardian of enduring values. Join us in shaping a future where excellence, innovation, and community thrive in harmony.
            </p>
        </div>
    </div>
</section>

<section>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/2">
            <img src="{{ asset('images/building-image.jpeg') }}" alt="Building Image" class="rounded shadow-lg">
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-12"> <!-- Adjusted margin to move the title up -->
            <h3 class="text-2xl md:text-3xl font-semibold mb-4">
                Our Reputation Is As Real As<br /> <!-- Split the title into two lines -->
                Our Properties
            </h3>
            <p class="text-base text-gray-600 mb-4"> <!-- Added paragraph about premium service -->
                We are professional real estate investors. You will feel premium service from us, and we have done it for all of our customers.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4"> <!-- Use grid for responsiveness -->
                <div class="text-center">
                    <h4 class="text-3xl font-bold text-gray-800">85+</h4>
                    <p class="text-base text-gray-600">Happy Customers</p>
                </div>
                <div class="text-center">
                    <h4 class="text-4xl font-bold text-gray-800">34</h4>
                    <p class="text-base text-gray-600">Real Estate Partners</p>
                </div>
                <div class="text-center">
                    <h4 class="text-4xl font-bold text-gray-800">10</h4>
                    <p class="text-base text-gray-600">Years of Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <x-whatWeOffer/>
    <x-featuredListings/>
    <x-testimonials :testimonials="$testimonials" />
</div>

</body>
</html>
