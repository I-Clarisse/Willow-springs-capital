<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_white_background.jpg') }}" type="image/jpg">
    <title>Willow Springs Capital</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="antialiased">

<x-navbar />

<section id="video-background" class="relative h-screen overflow-hidden vidBackground ">
    <video autoplay loop playsinline id="background-video" class="absolute inset-0 w-full h-full object-cover">
    <source src="{{ asset('videos/background2.MP4') }}" type="video/mp4">
    Your browser does not support the video tag.
    </video>
    
    
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <div class="relative z-10 flex flex-col justify-center h-full text-left pl-[10%]"> <!-- Change flex direction to column -->
        <div class="span1 flex items-center">
            <p class="text-sm text-gray-200 uppercase tracking-wide mb-1">#Number 1<br> Real Estate</p>
            <h1 class="text-5xl md:text-6xl text-white font-light uppercase leading-tight ml-4"> 
                Willow
            </h1>
        </div>
        
        <div class="mt-2"> 
            <h1 class="text-5xl md:text-6xl text-white font-light uppercase leading-tight ml-4">
                Springs
            </h1>
        </div>

        <div class="ml-[10%] mt-2">
            <h1 class="text-5xl md:text-6xl text-white font-light uppercase leading-tight ml-4">
                Capital
            </h1>
            <p class="text-gray-300 mt-4 text-s font-light">
                At Willow Springs Capital, we are your trusted partner <br> on the path of property investment success.
            </p>

        </div>
    </div>
</section>

<section id="main-section" class="px-4 sm:px-6 lg:px-12 py-16 bg-white">
    
    <section id="overview" class="mb-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12 text-center">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl md:text-3xl font-semibold mb-4 text-black inline-block pb-3 border-b-2 border-gray-900">Overview</h2>
                <p class="text-base md:text-s text-black mb-8 py-3">
                    At Willow Springs Capital, we are more than a real estate investment firm; we are a catalyst for growth, a force driven by passion, and a guardian of enduring values. Join us in shaping a future where excellence, innovation, and community thrive in harmony.
                </p>
            </div>
        </div>
    </section>

    <section class="reputation-section mb-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-12 flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/2">
            <img src="{{ asset('images/sideImage.jpeg') }}" alt="Building Image" class="w-[550px] h-[450px] object-cover shadow-xl border border-gray-200">
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-12 flex flex-col min-h-[450px] pt-12 reputation">
            <h3 class="text-2xl md:text-3xl font-semibold mb-4">
                Our Reputation Is As Real As<br />
                Our Properties
            </h3>
            <p class="text-base text-gray-600 mb-4 pt-4">
                We are professional real estate investors. You will feel premium service from us, and we have done it for all of our customers.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-12">
                <div class="flex flex-col items-center transform transition duration-300 ease-in-out hover:scale-105 cursor-pointer">
                    <h4 id="customers" class="text-3xl font-bold text-gray-800">85+</h4>
                    <p class="text-base text-gray-600 text-center pt-2">Happy<br>Customers</p>
                </div>
                <div class="flex flex-col items-center transform transition duration-300 ease-in-out hover:scale-105 cursor-pointer">
                    <h4 class="text-4xl font-bold text-gray-800">34</h4>
                    <p class="text-base text-gray-600 text-center pt-2">Real Estate <br>Partners</p>
                </div>
                <div class="flex flex-col items-center transform transition duration-300 ease-in-out hover:scale-105 cursor-pointer">
                    <h4 class="text-4xl font-bold text-gray-800">10</h4>
                    <p class="text-base text-gray-600 text-center pt-2">Years of<br> Experience</p>
                </div>
            </div>

        </div>
    </div>
    </section>

    <div class="container mx-auto px-4 sm:px-6 lg:px-12">
    <div id="what-we-offer">
        <x-whatWeOffer/>
    </div>
    <div id="projects">
        <x-featuredListings/>
    </div>
        <div id="testimonials">
            <x-testimonials/>
        </div>
    </div>
</section>


<x-footer/>

<script>
    const video = document.getElementById('background-video');
    document.getElementById('video-background').addEventListener('click', () => {
        document.querySelector('#main-section').scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.getElementById('customers').addEventListener('click', () => {
        document.querySelector('#testimonials').scrollIntoView({
            behavior: 'smooth'
        });
    });

    window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {  
                video.muted = true;
            } else {
                video.muted = false;
            }
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>
</html>
