<style>
    nav {
        transition: background-color 0.1s ease, color 0.1s ease;
        z-index: 10;
    }

    .navbar-scrolled {
        background-color: white !important;
        color: black !important;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .nav-link {
        padding: 3px 0;
        transition: color 0.3s ease;
        display: inline-block;
        position: relative;
    }

    .nav-link:hover {
        color: grey;
    }
    .nav-link.active {
        color: White;
        font-weight: bold;
    }

    .contact-btn {
        color: white;
        border: 1px solid white;
        padding: 8px 12px;
        border-radius: 50px;
        font-size: 0.875rem;
        transition: transform 0.1s ease-in-out, background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    }
    .navbar-scrolled .contact-btn {
        color: black;
        border-color: black;
        box-shadow: none;
    }

    .navbar-scrolled .nav-link.active {
        color: black;
        box-shadow: none;
    }
    @media (max-width: 768px) {
        .contact-btn {
            display: none;
        }
    }
    @media (min-width: 768px) {
        #mobile-menu{
            display: none;
        }
    }
</style>

<nav class=" text-white py-2 fixed w-full z-10 ">
    <div class="container mx-auto flex items-center justify-between px-12">
        <div class="flex items-center">
            <img href="/" src="{{ asset('images/visible.png') }}" alt="Logo" class="h-12 mr-4">
        </div>

        <div class="hidden md:flex space-x-12 justify-center flex-grow relative">
            <a href="/" class="nav-link hover:text-gray-300 {{ request()->is('/') ? 'active' : '' }}">
                Home
            </a>
            <a href="/about" class="nav-link hover:text-gray-300 {{ request()->is('about') ? 'active' : '' }}">
                About Us
            </a>
            <a href="{{ url('/') }}#what-we-offer" class="nav-link hover:text-gray-300 {{ request()->is('services') ? 'active' : '' }}">
                Services
            </a>
            <a href="{{ url('/') }}#projects" class="nav-link hover:text-gray-300 {{ request()->is('projects') ? 'active' : '' }}">
                Projects
            </a>
            <!-- <a href="/blog" class="nav-link hover:text-gray-300 {{ request()->is('blog') ? 'active' : '' }}">
                Blog
            </a> -->
        </div>
        
        <!-- Contact Us Button on the Far Right -->
        <div class="ml-auto">
            <!-- <a href="/contact" class="contact-btn">Contact Us</a> -->
            <a href="/contact" class="inline-flex text-xs items-center text-white border border-white contact-btn px-4 py-2.5 rounded-full shadow hover:bg-gray-800 hover:text-white hover:border-gray-800 transition duration-300">
            Contact Us 
        </a>
        </div>
        <!-- Hamburger Icon for Mobile -->
        <button id="menu-toggle" class="md:hidden flex items-center p-2 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>


<div id="mobile-menu" class="fixed top-16 right-0 z-40 w-80 text-center h-full bg-white p-4 overflow-y-auto transition-transform transform translate-x-full">
    <ul class="space-y-4 text-black font-medium">
        <li><a href="/" class="block hover:text-gray-600 py-3">Home</a></li>
        <li><a href="/about" class="block hover:text-gray-600 py-3">About Us</a></li>
        <li><a href="{{ url('/') }}#what-we-offer" class="block hover:text-gray-600 py-3">Services</a></li>
        <li><a href="{{ url('/') }}#projects" class="block hover:text-gray-600 py-3">Projects</a></li>
        <!-- <li><a href="/" class="block hover:text-gray-600 py-3">Blog</a></li> -->
        <li><a href="/contact" class="block hover:text-gray-600 py-3">Contact Us</a></li>
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navbar = document.querySelector('nav');
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const logo = document.querySelector('nav img');
        const contactBtn = document.querySelector('.contact-btn');
        const activeLink = document.querySelector('.nav-link.active');

        // Toggle mobile menu visibility
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('translate-x-full');
            mobileMenu.classList.toggle('translate-x-0');
        });

        // Close mobile menu if clicked outside
        document.addEventListener('click', (event) => {
            // Check if the click is outside the mobile menu and toggle button
            if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                // Close the mobile menu if it's open
                if (!mobileMenu.classList.contains('translate-x-full')) {
                    mobileMenu.classList.add('translate-x-full');
                    mobileMenu.classList.remove('translate-x-0');
                }
            }
        });

        // Change navbar styles on scroll
        window.addEventListener('scroll', () => {
            if (window.scrollY > 120) { 
                navbar.classList.add('navbar-scrolled');
                logo.src = "{{ asset('images/logo_white_background.jpg') }}";
                contactBtn.classList.add('navbar-scrolled');
                if (activeLink) activeLink.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
                logo.src = "{{ asset('images/visible.png') }}";
                contactBtn.classList.remove('navbar-scrolled');
                if (activeLink) activeLink.classList.remove('navbar-scrolled');
            }
        });
    });
</script>


