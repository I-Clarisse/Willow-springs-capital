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
        position: relative;
        padding: 3px 0; 
        transition: color 0.3s ease;
        display: inline-block; 
    }

    .nav-link:hover {
        color: grey;
    }

    #nav-indicator {
        position: absolute;
        bottom: -3px; 
        right: 0;
        height: 2px; 
        background-color: white; 
        transition: transform 0.3s ease;
        width: 12%; 
        margin-right: 88%; 
    }
</style>



<nav class="bg-black bg-opacity-50 text-white py-2 fixed w-full z-10">
    <div class="container mx-auto flex items-center justify-between px-12">
        <div class="flex items-center">
            <img href="/" src="{{ asset('images/visible.png') }}" alt="Logo" class="h-12 mr-4">
        </div>
        <div class="hidden md:flex space-x-6 ml-auto mr-6 relative">
            <a href="/" class="nav-link hover:text-gray-300 {{ request()->is('/') ? 'active' : '' }}">
                Home
            </a>
            <a href="/about" class="nav-link hover:text-gray-300 {{ request()->is('about') ? 'active' : '' }}">
                About Us
            </a>
            <a href="/" class="nav-link hover:text-gray-300 {{ request()->is('services') ? 'active' : '' }}">
                Services
            </a>
            <a href="/projects" class="nav-link hover:text-gray-300 {{ request()->is('projects') ? 'active' : '' }}">
                Projects
            </a>
            <a href="/" class="nav-link hover:text-gray-300 {{ request()->is('blog') ? 'active' : '' }}">
                Blog
            </a>
            <a href="/contact" class="nav-link hover:text-gray-300 {{ request()->is('contact') ? 'active' : '' }}">
                Contact Us
            </a>
            <div id="nav-indicator"></div>
        </div>
        <!-- Hamburger Icon -->
        <button id="menu-toggle" class="md:hidden flex items-center p-2 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>


<div id="mobile-menu" class="fixed top-16 right-0 z-40 w-64 h-full bg-black bg-opacity-70 p-4 overflow-y-auto transition-transform transform translate-x-full">
    <ul class="space-y-4 text-white font-medium">
        <li><a href="/" class="block hover:text-gray-300">Home</a></li>
        <li><a href="/about" class="block hover:text-gray-300">About Us</a></li>
        <li><a href="/services" class="block hover:text-gray-300">Services</a></li>
        <li><a href="/projects" class="block hover:text-gray-300">Projects</a></li>
        <li><a href="/blog" class="block hover:text-gray-300">Blog</a></li>
        <li><a href="/contact" class="block hover:text-gray-300">Contact Us</a></li>
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('.nav-link');
        const navIndicator = document.getElementById('nav-indicator');
        const navbar = document.querySelector('nav');

        function updateIndicator(link) {
            const linkRect = link.getBoundingClientRect();
            const navRect = link.parentNode.getBoundingClientRect(); // Get parent (navbar) position
            const indicatorPosition = linkRect.left - navRect.left + linkRect.width / 2 - navIndicator.clientWidth / 2;

            navIndicator.style.transform = `translateX(${indicatorPosition}px)`;
        }

        // Set the initial position based on the active link
        links.forEach(link => {
            if (link.classList.contains('active')) {
                updateIndicator(link);
            }
        });

        links.forEach(link => {
            link.addEventListener('click', () => {
                links.forEach(l => l.classList.remove('active')); // Remove active class from all
                link.classList.add('active'); // Add active class to clicked link
                updateIndicator(link); // Update the indicator position
            });
        });

        // Add scroll behavior for the navbar
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const logo = document.querySelector('nav img');

        const scrollThreshold = 500;

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('translate-x-full'); 
            mobileMenu.classList.toggle('translate-x-0');    
        });

        window.addEventListener('scroll', () => {
            if (window.scrollY > scrollThreshold) {
                navbar.classList.add('navbar-scrolled');
                navIndicator.style.backgroundColor = 'black'; // Change indicator to black
                logo.src = "{{ asset('images/logo_white_background.jpg') }}"; // New logo
            } else {
                navbar.classList.remove('navbar-scrolled');
                navIndicator.style.backgroundColor = 'white'; // Change indicator back to white
                logo.src = "{{ asset('images/visible.png') }}"; // Original logo
            }
        });
    });
</script>





