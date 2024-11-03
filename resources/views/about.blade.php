<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_white_background.jpg') }}" type="image/jpg">
    <title>About |Willow Springs Capital</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <x-navbar /> 

    <section class="relative bg-cover bg-center h-screen vidBackground" style="background-image: url('{{ asset('images/main.jpeg') }}');"> 
        <div class="absolute inset-0 bg-black opacity-50"></div> 
        <div class="relative z-10 flex flex-col items-center justify-center h-full"> 
            <div class="text-white text-center"> 
                <div class="text-4xl md:text-5xl lg:text-6xl font-bold">
                    <h1>Empowering Growth &</h1>
                    <h1 class="pl-6 md:pl-10 lg:pl-12">Building Communities</h1>
                </div>
            </div>
            <div class="mt-5 ml-auto mr-20"> <!-- Aligns the button to the right -->
                <a href="#who-we-are" class="inline-flex items-center text-xs border border-white text-white px-4 py-3 shadow-lg hover:bg-black hover:text-white hover:border-gray-800 hover:bg-opacity-60 transition duration-300">
                    Explore Our Journey <span class="ml-2">→</span>
                </a>
            </div>
        </div> 
</section>



<section id="who-we-are" class="flex flex-col md:text-left md:flex-row items-center justify-center h-full mx-auto mt-5 py-12"> 
    <div class="container mx-auto px-4 sm:px-6 lg:px-12 flex flex-col md:flex-row items-center md:items-start md:space-x-12">
        
        <div class="yaa w-full md:w-1/2 mb-5 md:mb-0 text-center px-2">
            <h1 class="text-2xl font-semibold inline-block border-b-2 border-gray-900 pb-2 mb-3">Who We Are</h1> 
            <p class="text-gray-800 py-7">
                At Willow Springs Capital, we are more than a real estate investment firm; we are a catalyst for growth, a force driven by passion, and a guardian of enduring values. Join us in shaping a future where excellence, innovation, and community thrive in complete harmony.
            </p>
            <p class="text-gray-800">
                Founded in the heart of South Florida, Willow Springs Capital is a real estate investment management firm dedicated to more than just property development. We are passionate about shaping vibrant communities, fostering economic growth, and creating spaces that inspire connection, well-being.
            </p>
        </div>

        <div class="w-full md:w-1/2 h-full">
            <img src="{{ asset('images/about.jpeg') }}" alt="Building" class="w-[530px] h-[400px] object-cover shadow-lg">
        </div>
    </div>
</section>


<section class="bg-gray-50 py-7 my-5"> 
    <div class="text-center">
        <h1 class="text-2xl text-center font-bold inline-block border-b-2 border-green-400 pb-2 mt-3">
            Our Core Values
        </h1>
        <p class="my-10 md:text-lg text-gray-600">
        We view real estate investment management as a dynamic journey of connection and growth <br class="hidden md:block"/>
        where each endeavor is a meaningful intersection of purpose and progress.
        </p>
    </div>

    <div class="theedivs container mx-auto px-4 sm:px-6 lg:px-12 flex flex-col lg:flex-row justify-between items-center lg:items-start md:space-x-6 pb-8"> 
        <div class="w-full lg:w-1/3 p-4 transform transition duration-50 ease-in-out hover:scale-105 cursor-pointer"> 
            <div class="p-6 bg-gray-50 rounded shadow-lg text-center"> 
            <div class="icon-container">
                <i class="fa-solid icon-style fa-thumbs-up my-5"></i>
            </div>                   
            <h4 class="text-xl font-semibold mb-4">Committed to Growth</h4> 
                <p class="text-gray-600 text-s">We are devoted to nurturing economic and social advancement with a deep sense of peace and gratitude. Through our thoughtfully designed investments, we cultivate sustainable development, creating spaces where communities and ventures harmoniously thrive.</p> 
            </div> 
        </div>

        <div class="w-full lg:w-1/3 p-4 mt-20 transform transition duration-50 ease-in-out hover:scale-105 cursor-pointer"> 
            <div class="p-6 bg-gray-50 rounded shadow-lg text-center">
                <div class="icon-container">
                <i class="fa-solid fa-heart icon-style my-5"></i></div>
                <h4 class="text-xl font-semibold mb-4">Driven by Passion</h4> 
                <p class="text-gray-600 text-s">Our passion for real estate is a source of profound inspiration, driving us to effect meaningful change with serene dedication. We approach each project with an innovative spirit and a heartfelt commitment cherish growth that arise within the communities we serve.</p> 
            </div> 
        </div>

        <div class="w-full lg:w-1/3 p-4 mt-40 transform transition duration-50 ease-in-out hover:scale-105 cursor-pointer"> 
            <div class="p-6 bg-gray-50 rounded shadow-lg text-center"> 
                <div class="icon-container">
                    <i class="fa-solid icon-style fa-star my-5"></i>
                </div>
                <h4 class="text-xl font-semibold mb-4">Grounded In Values</h4> 
                <p class="text-gray-600 text-s">At Willow Springs Capital, we are rooted in the timeless principles of integrity, transparency, and professionalism. We uphold the highest standards of ethical conduct, ensuring that every decision and interaction resonates with our commitment to excellence.</p> 
            </div> 
        </div>
    </div>
</section>

    <section class="my-8"> 
        <div class="flex flex-col lg:flex-row justify-between items-start mx-auto container mx-auto px-4 sm:px-6 lg:px-12 flex flex-col md:flex-row items-center md:items-start md:space-x-12"> 
            <div class="lg:w-2/3 p-4"> 

                <div class="mt-8"> 
                    <div class="mb-6 border-b pb-5"> 
                        <h4 class="text-xl font-semibold pb-3">Professionalism</h4> 
                        <div class="flex items-start mt-2 text-gray-600">
                        <div class="mr-2 pr-10 whitespace-nowrap">
                            <p>Strategy 1</p>
                        </div>
                        <div>
                                <p>Whether developing a residential community or managing a commercial property investment, we treat every project with the same level of dedication and professionalism to ensure its success.</p>
                                </div>
                        </div>

                    </div>

                    <div class="mb-6 border-b pb-5"> 
                        <h4 class="text-xl font-semibold pb-3">Integrity</h4> 
                        <div class="flex items-start mt-2 text-gray-600">
                        <div class="mr-2 pr-10 whitespace-nowrap">
                            <p>Strategy 2</p>
                        </div>
                        <div>
                                <p>From ensuring complete transparency in financial dealings to making ethical decisions in project development, integrity is woven into every aspect of our business.</p>
                                </div>
                        </div>

                    </div>

                    <div class="mb-6 border-b pb-5"> 
                        <h4 class="text-xl font-semibold pb-3">Forward-thinking</h4> 
                        <div class="flex items-start mt-2 text-gray-600">
                        <div class="mr-2 pr-10 whitespace-nowrap">
                            <p>Strategy 3</p>
                        </div>
                        <div>
                                <p> We continuously seek innovative real estate opportunities, utilizing cutting-edge technologies and market foresight to maximize value for our clients and the communities we serve.</p>
                                </div>
                        </div>

                    </div>
                   
                </div>
            </div>

            <div class="w-3/5 h-full"> 
                <div class="text-left mb-6"> 
                    <h1 class="text-2xl font-bold inline-block pb-3 mt-5 leading-relaxed">Our Approach To <br/> Real Estate</h1> 
                </div>
                <img src="{{ asset('images/side2.jpeg') }}" alt="about us image" class="w-full h-full object-cover"> 
            </div>
        </div>
    </section>

    <section class="bg-black bg-opacity-90 text-white py-10 w-4/5 mx-auto"> 
        <div class="text-center"> 
            <h2 class="text-3xl font-bold mb-9">Our Inspiration</h2> 
            <div class="flex flex-col md:flex-row justify-center space-x-0 md:space-x-10 space-y-5 md:space-y-0"> 
                <div class="text-center"> 
                    <div class="mb-2"> <i class="fas fa-brain fa-2x"></i> </div> 
                    <p class="font-light">Administration Team</p> 
                </div>

                <div class="text-center"> 
                    <div class="mb-2"> <i class="fas fa-handshake fa-2x"></i> </div> 
                    <p class="font-light">Core Team</p> 
                </div> 

                <div class="text-center"> 
                    <div class="mb-2"> <i class="fas fa-lightbulb fa-2x"></i> </div> 
                    <p class="font-light">Management</p> 
                </div> 

                <div class="text-center"> 
                    <div class="mb-2"> <i class="fas fa-heart fa-2x"></i> </div> 
                    <p class="font-light">Executives</p> 
                </div> 

                <div class="text-center"> 
                    <div class="mb-2"> <i class="fas fa-brain fa-2x"></i> </div> 
                    <p class="font-light">Board Members</p> 
                </div>

            </div> 
        </div>
    </section>

    <section class="py-10 px-4">
        <div class="text-center">
            <h1 class="text-2xl text-center font-semibold inline-block border-b-2 border-gray-900 pb-2 mt-3">
                Meet Our Team
            </h1>
        </div>
        <div class="flex flex-wrap justify-center gap-8 my-10 px-10">
            <div class="text-center w-full sm:w-1/2 md:w-1/4 max-w-[250px]">
                <img src="{{ asset('images/profile.jpg') }}" alt="John Doe" class="w-full h-[250px] object-cover mb-4">
                <h4 class="font-semibold">John Doe</h4>
                <p class="text-gray-600">Head Officer</p>
                <div class="flex justify-center space-x-2 mt-2">
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="text-center w-full sm:w-1/2 md:w-1/4 max-w-[250px]">
                <img src="{{ asset('images/profile.jpg') }}" alt="John Doe" class="w-full h-[250px] object-cover mb-4">
                <h4 class="font-semibold">John Doe</h4>
                <p class="text-gray-600">Head Officer</p>
                <div class="flex justify-center space-x-2 mt-2">
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="text-center w-full sm:w-1/2 md:w-1/4 max-w-[250px]">
                <img src="{{ asset('images/profile.jpg') }}" alt="John Doe" class="w-full h-[250px] object-cover mb-4">
                <h4 class="font-semibold">John Doe</h4>
                <p class="text-gray-600">Head Officer</p>
                <div class="flex justify-center space-x-2 mt-2">
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="text-center w-full sm:w-1/2 md:w-1/4 max-w-[250px]">
                <img src="{{ asset('images/profile.jpg') }}" alt="John Doe" class="w-full h-[250px] object-cover mb-4">
                <h4 class="font-semibold">John Doe</h4>
                <p class="text-gray-600">Head Officer</p>
                <div class="flex justify-center space-x-2 mt-2">
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-10 text-center px-4">
        <div class="w-full md:w-4/5 mx-auto p-8 bg-white shadow-lg rounded-lg">
            <h3 class="text-2xl md:text-3xl font-bold mb-4">Are you ready to take the next step in your real estate journey?</h3>
            <p class="text-gray-600 mb-6">
                Let's work together to build a brighter, more prosperous future. Contact us today to learn more about how Willow Springs Capital can help you achieve your goals.
            </p>
            <a href="/contact" class="inline-flex items-center bg-white border border-gray-800 text-gray-800 px-6 py-3 rounded-full shadow-lg hover:bg-gray-800 hover:text-white transition duration-300">
                Get In Touch <span class="ml-2">→</span>
            </a>
        </div>
    </section>

    <x-footer />
</body>
</html>
