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
    <section class="flex items-center justify-center h-full  w-4/5 mx-auto mt-5">
    <div class="flex items-center justify-between space-x-8">
        <div class="">
        <h1 class="text-3xl text-center font-bold inline-block border-b-2 border-black-400 pb-2">
              Who We Are
            </h1>
            <p class="my-3 text-left">
                Founded in the heart of South Florida, Willow Springs Capital is a real estate investment management firm dedicated to more than just property development. We are passionate about shaping vibrant communities, fostering economic growth, and creating spaces that inspire connection, well-being, and progress. 
                Every investment we make reflects our deep commitment to integrity, innovation, and positive social impact.
            </p>
            <p>
                At Willow Springs Capital, we view real estate investment management as a dynamic journey of connection and growth where each endeavor is a meaningful intersection of purpose and progress.
            </p>
        </div>
        <div>
        <img src="{{ asset('images/background.jpeg') }}" alt="about us image" class="w-auto h-50">        </div>
    </div>
</section>
   <section class="bg-gray-50 my-5">
    <div class="text-center">
     <h1 class="text-3xl text-center font-bold inline-block border-b-2 border-black-400 pb-2 mt-3">
              Our Core Values
    </h1>   
    <p class="mt-5">
    At Willow Springs Capital, our core values define who we are and how we operate.<br/>
      These values shape our every decision and project, ensuring that we remain true to our mission.
    </p>
    </div>
    <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start w-4/5 mx-auto">
    <div class="w-full lg:w-1/3 p-4">
        <div class="p-6 bg-gray-50 rounded shadow-lg">
            <img src="{{ asset('images/building-image.jpeg') }}" alt="Investment Management Icon" class="mx-auto mb-6">
            <h4 class="text-2xl font-semibold mb-4">Committed to Growth</h4>
            <p class="text-gray-600">We are dedicated to fostering both economic and social development through thoughtful, sustainable real estate investments.</p>
        </div>
    </div>

    <div class="w-full lg:w-1/3 p-4 mt-20"> <!-- 80px top margin -->
        <div class="p-6 bg-gray-50 rounded shadow-lg">
            <img src="{{ asset('images/building-image.jpeg') }}" alt="Strategic Partnerships Icon" class="mx-auto mb-6">
            <h4 class="text-2xl font-semibold mb-4">Driven by Passion</h4>
            <p class="text-gray-600">Our passion for real estate drives us to innovate and make meaningful, positive changes in the communities we serve.</p>
        </div>
    </div>

    <div class="w-full lg:w-1/3 p-4 mt-40"> <!-- Corrected to mt-40 for 160px top margin -->
        <div class="p-6 bg-gray-50 rounded shadow-lg">
            <img src="{{ asset('images/building-image.jpeg') }}" alt="Community Icon" class="mx-auto mb-6">
            <h4 class="text-2xl font-semibold mb-4">Grounded In Values</h4>
            <p class="text-gray-600">Integrity, transparency, and professionalism are at the heart of everything we do, ensuring long-lasting trust with our clients and partners.</p>
        </div>
    </div>
</div>
</div>
   </section>
   <section class="bg-gray-50 my-5">
    <div class="flex flex-col lg:flex-row justify-between items-start w-4/5 mx-auto">
        <div class="lg:w-2/3 p-4">
            <div class="text-left">
                <h1 class="text-3xl font-bold inline-block border-b-2 border-black pb-2 mt-3">
                    Our Approach To Real Estate
                </h1>
                <p class="mt-5">
                    At Willow Springs Capital, our approach defines how we operate in real estate.<br />
                    These principles guide our projects, ensuring that we maximize value for our clients and communities.
                </p>
            </div>

            <div class="mt-8">
                <div class="mb-6 border-b pb-4">
                    <h4 class="text-2xl font-semibold">Strategy 1: Professionalism</h4>
                    <p class="text-gray-600 mt-2">
                        Whether developing a residential community or managing a commercial property investment, we treat every project with the same level of dedication and professionalism to ensure its success.
                    </p>
                </div>

                <div class="mb-6 border-b pb-4">
                    <h4 class="text-2xl font-semibold">Strategy 2: Integrity</h4>
                    <p class="text-gray-600 mt-2">
                        From ensuring complete transparency in financial dealings to making ethical decisions in project development, integrity is woven into every aspect of our business.
                    </p>
                </div>

                <div class="border-b pb-4">
                    <h4 class="text-2xl font-semibold">Strategy 3: Forward-thinking</h4>
                    <p class="text-gray-600 mt-2">
                        We continuously seek innovative real estate opportunities, utilizing cutting-edge technologies and market foresight to maximize value for our clients and the communities we serve.
                    </p>
                </div>
            </div>
        </div>

        <div class="lg:w-1/3 mt-10 lg:mt-0">
            <img src="{{ asset('images/building-image.jpeg') }}" alt="Building" class="w-full h-full object-cover rounded-lg shadow-lg">
        </div>
    </div>
</section>
<section class="bg-black text-white py-10">
    <div class="text-center">
        <h2 class="text-3xl font-bold mb-5">Why Choose Willow Spring Capital?</h2>
        <div class="flex justify-center space-x-10">
            <div class="text-center">
                <div class="mb-2">
                    <i class="fas fa-brain fa-3x"></i>
                </div>
                <p class="font-semibold">Expertise</p>
            </div>
            <div class="text-center">
                <div class="mb-2">
                    <i class="fas fa-handshake fa-3x"></i>
                </div>
                <p class="font-semibold">Integrity</p>
            </div>
            <div class="text-center">
                <div class="mb-2">
                    <i class="fas fa-lightbulb fa-3x"></i>
                </div>
                <p class="font-semibold">Innovation</p>
            </div>
            <div class="text-center">
                <div class="mb-2">
                    <i class="fas fa-heart fa-3x"></i>
                </div>
                <p class="font-semibold">Community</p>
            </div>
        </div>
    </div>
</section>

<section class="py-10">
    <div class="text-center">
        <h2 class="text-3xl font-bold mb-5">Meet Our Team</h2>
        <hr class="w-1/4 mx-auto mb-6">
    </div>
    
    <div class="flex justify-center space-x-8">
        <div class="text-center">
            <img src="{{ asset('images/profile1.jpg') }}" alt="John Doe" class="w-32 h-32 rounded-full mb-2">
            <h4 class="font-semibold">John Doe</h4>
            <p>Head Officer</p>
            <div class="flex justify-center space-x-2 mt-2">
                <a href="#" class="text-gray-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="text-center">
            <img src="{{ asset('images/profile2.jpg') }}" alt="John Doe" class="w-32 h-32 rounded-full mb-2">
            <h4 class="font-semibold">John Doe</h4>
            <p>Head Officer</p>
            <div class="flex justify-center space-x-2 mt-2">
                <a href="#" class="text-gray-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="text-center">
            <img src="{{ asset('images/profile3.jpg') }}" alt="John Doe" class="w-32 h-32 rounded-full mb-2">
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
    <h3 class="text-xl font-semibold mb-4">Are you ready to take the next step in your real estate journey?</h3>
    <p class="mb-6">Let's work together to build a brighter, more prosperous future. Contact us today to learn more about how Willow Springs Capital can help you achieve your goals.</p>
    <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-full">Get In Touch</a>
</section>




</body>
</html>