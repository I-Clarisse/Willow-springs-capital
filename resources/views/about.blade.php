<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/background.jpeg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full text-center">
            <div class="text-white">
                <h1 class="text-6xl font-bold">Empowering Growth & <br> Building Communities</h1>
                <p class="mt-4 text-lg">At Willow Springs Capital, we’re more than just investors,
                    we’re community builders, committed to sustainable growth and positive change</p>
                <a href="#overview" class="mt-6 inline-block px-8 py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded">Explore Our Journey</a>
            </div>
        </div>
    </section>
    <section class="flex items-center justify-center h-full w-4/5 mx-auto mt-5">
    <div class="flex items-center justify-between space-x-8 w-full">
        <div class="w-2/5">
            <h1 class="text-2xl font-bold inline-block border-b-2 border-green-400 pb-2 mt-3">
                Who We Are
            </h1>
            <p class="my-3 text-left">
                Founded in the heart of South Florida, Willow Springs Capital is a real estate investment management firm dedicated to more than just property development. We are passionate about shaping vibrant communities, fostering economic growth, and creating spaces that inspire connection, well-being, and progress. 
                Every investment we make reflects our deep commitment to integrity, innovation, and positive social impact.
            </p>
            <p>
                At Willow Springs Capital, we are more than a real estate investment firm; we are a catalyst for growth, a force driven by passion, and a guardian of enduring values. Join us in shaping a future where excellence, innovation, and community thrive in harmony.
            </p>
        </div>

        <div class="w-3/5 h-full">
        <img src="{{ asset('images/building-image.jpeg') }}" alt="Building" class="w-full h-full object-cover rounded-lg shadow-lg">

    </div>
    </div>
</section>

   <section class="bg-gray-50 py-10 my-10">
    <div class="text-center">
     <h1 class="text-2xl text-center font-bold inline-block border-b-2 border-green-400 pb-2 mt-3">
              Our Core Values
    </h1>   
    <p class="my-10">
    At Willow Springs Capital, our core values define who we are and how we operate.<br/>
      These values shape our every decision and project, ensuring that we remain true to our mission.
    </p>
    </div>
    <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start w-4/5 mx-auto">
    <div class="w-full lg:w-1/3 p-4">
        <div class="p-6 bg-gray-50 rounded shadow-lg text-center">
        <i class="fa-solid icon-style fa-thumbs-up my-5"></i>
            <h4 class="text-2xl font-semibold mb-4">Committed to Growth</h4>
            <p class="text-gray-600">
            We are devoted to nurturing economic and social advancement with a deep sense of peace and gratitude. Through our thoughtfully designed investments, we cultivate sustainable development, creating spaces where communities and ventures harmoniously thrive. 
            Each step is a mindful journey toward a more radiant future, reflecting our interconnectedness and shared aspirations.
            </p>
        </div>
    </div>

    <div class="w-full lg:w-1/3 p-4 mt-20"> 
        <div class="p-6 bg-gray-50 rounded shadow-lg text-center">
        <i class="fa-solid icon-style fa-shield-halved my-5"></i>
            <h4 class="text-2xl font-semibold mb-4">Driven by Passion</h4>
            <p class="text-gray-600">
            Our passion for real estate is a source of profound inspiration, driving us to effect meaningful change with serene dedication. We approach each project with an innovative spirit and a heartfelt commitment to enhancing value, cherishing the moments of connection and growth that arise within the communities we serve.
            </p>
        </div>
    </div>

    <div class="w-full lg:w-1/3 p-4 mt-40 "> 
        <div class="p-6 bg-gray-50  rounded shadow-lg text-center">
        <i class="fa-regular icon-style fa-star my-5"></i>
            <h4 class="text-2xl font-semibold mb-4">Grounded In Values</h4>
            <p class="text-gray-600">At Willow Springs Capital, we are rooted in the timeless principles of integrity, transparency, and professionalism. 
                We uphold the highest standards of ethical conduct, ensuring that every decision and interaction resonates with our commitment to excellence and reflects the delicate interconnectedness that binds us all in a shared pursuit of greatness.</p>
        </div>
    </div>
</div>
</div>
   </section>
   <section class="bg-gray-50 my-5">
    <div class="flex flex-col lg:flex-row justify-between items-start w-4/5 mx-auto">
        <div class="lg:w-2/3 p-4">
            <div class="text-left">
            <h1 class="text-2xl text-center font-bold inline-block border-b-2 border-green-400 pb-2 mt-3">
                    Our Approach To Real Estate
                </h1>
                <p class="mt-5">
                    At Willow Springs Capital, our approach defines how we operate in real estate.<br />
                    These principles guide our projects, ensuring that we maximize value for our clients and communities.
                </p>
            </div>

            <div class="mt-8">
                <div class="mb-6 border-b pb-4">
                    <h4 class="text-2xl font-semibold">Professionalism</h4>
                    <p class="text-gray-600 mt-2">
                        Strategy 1:  
                        <span>Whether developing a residential community or managing a commercial property investment, we treat every project with the same level of dedication and professionalism to ensure its success.
                        </span> 
                    </p>
                </div>

                <div class="mb-6 border-b pb-4">
                    <h4 class="text-2xl font-semibold">Integrity</h4>
                    <p class="text-gray-600 mt-2">
                        Strategy 2: From ensuring complete transparency in financial dealings to making ethical decisions in project development, integrity is woven into every aspect of our business.
                    </p>
                </div>

                <div class="border-b pb-4">
                    <h4 class="text-2xl font-semibold">Forward-thinking</h4>
                    <p class="text-gray-600 mt-2">
                        Strategy 3: We continuously seek innovative real estate opportunities, utilizing cutting-edge technologies and market foresight to maximize value for our clients and the communities we serve.
                    </p>
                </div>
            </div>
        </div>

        <div class="w-3/5 h-full">
        <img src="{{ asset('images/background.jpeg') }}" alt="about us image" class="w-full h-full object-cover">
        </div>
    </div>
</section>
<section class="bg-black text-white py-10  w-4/5 mx-auto">
    <div class="text-center">
        <h2 class="text-2xl font-bold mb-5">Why Choose Willow Spring Capital?</h2>
        <div class="flex justify-center space-x-10">
            <div class="text-center">
                <div class="mb-2">
                    <i class="fas fa-brain fa-2x"></i>
                </div>
                <p class="font-semibold">Expertise</p>
            </div>
            <div class="text-center">
                <div class="mb-2">
                    <i class="fas fa-handshake fa-2x"></i>
                </div>
                <p class="font-semibold">Integrity</p>
            </div>
            <div class="text-center">
                <div class="mb-2">
                    <i class="fas fa-lightbulb fa-2x"></i>
                </div>
                <p class="font-semibold">Innovation</p>
            </div>
            <div class="text-center">
                <div class="mb-2">
                    <i class="fas fa-heart fa-2x"></i>
                </div>
                <p class="font-semibold">Community</p>
            </div>
        </div>
    </div>
</section>

<section class="py-10">
    <div class="text-center">
    <h1 class="text-2xl text-center font-bold inline-block border-b-2 border-green-400 pb-2 mt-3">
            Meet Our Team</h1>
    </div>
    
    <div class="flex justify-center space-x-8 my-10">
        <div class="text-center">
            <img src="{{ asset('images/profile.jpg') }}" alt="John Doe" class="w-40 h-40  mb-2">
            <h4 class="font-semibold">John Doe</h4>
            <p>Head Officer</p>
            <div class="flex justify-center space-x-2 mt-2">
                <a href="#" class="text-gray-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="text-center">
            <img src="{{ asset('images/profile.jpg') }}" alt="John Doe" class="w-40 h-40  mb-2">
            <h4 class="font-semibold">John Doe</h4>
            <p>Head Officer</p>
            <div class="flex justify-center space-x-2 mt-2">
                <a href="#" class="text-gray-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="text-center">
            <img src="{{ asset('images/profile.jpg') }}" alt="John Doe" class="w-40 h-40  mb-2">
            <h4 class="font-semibold">John Doe</h4>
            <p>Head Officer</p>
            <div class="flex justify-center space-x-2 mt-2">
                <a href="#" class="text-gray-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="text-center">
            <img src="{{ asset('images/profile.jpg') }}" alt="John Doe" class="w-40 h-40 mb-2">
            <h4 class="font-semibold">John Doe</h4>
            <p>Head Officer</p>
            <div class="flex justify-center space-x-2 mt-2">
                <a href="#" class="text-gray-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-10 text-center">
    <div class="w-4/5 mx-auto p-8 bg-white shadow-lg rounded-lg">
        <h3 class="text-3xl font-bold mb-4">Are you ready to take the next step in your real estate journey?</h3>
        <p class="text-gray-600 mb-6">
            Let's work together to build a brighter, more prosperous future. Contact us today to learn more about how Willow Springs Capital can help you achieve your goals.
        </p>
        <a href="#" class="inline-flex items-center bg-white border border-gray-800 text-gray-800 px-6 py-3 rounded-full shadow-lg hover:bg-gray-800 hover:text-white transition duration-300">
            Get In Touch 
            <span class="ml-2">→</span>
        </a>
    </div>
</section>
<x-footer />

</body>
</html>