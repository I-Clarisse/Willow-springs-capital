<nav class="bg-black bg-opacity-40 backdrop-blur-lg text-white py-4">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center mr-8">
            <img src="{{ asset('images/logo_transparent_background.png') }}" alt="Logo" class="h-16 mr-4"> 
        </div>
        <div class="hidden md:flex flex-grow justify-center space-x-8">
            <a href="/" class="hover:text-gray-300">Home</a>
            <a href="/about" class="hover:text-gray-300">About Us</a>
            <a href="#" class="hover:text-gray-300">Services</a>
            <!-- <a href="/projects" class="hover:text-gray-300">Projects</a> -->
            <a href="#" class="hover:text-gray-300">Blog</a>
            <a href="/contact" class="hover:text-gray-300 active:underline">Contact Us</a>
        </div>
        <!-- Hamburger Icon -->
        <button id="menu-toggle" class="md:hidden flex items-center p-2 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>

<!-- Drawer Navigation -->
<div id="mobile-menu" class="fixed top-16 right-0 z-40 w-64 h-full bg-black bg-opacity-70 p-4 overflow-y-auto transition-transform transform translate-x-full">
    <ul class="space-y-4 text-white font-medium">
        <li><a href="/" class="block hover:text-gray-300">Home</a></li>
        <li><a href="/about" class="block hover:text-gray-300">About Us</a></li>
        <li><a href="#" class="block hover:text-gray-300">Services</a></li>
        <!-- <li><a href="/projects" class="block hover:text-gray-300">Projects</a></li> -->
        <li><a href="#" class="block hover:text-gray-300">Blog</a></li>
        <li><a href="/contact" class="block hover:text-gray-300 active:underline">Contact Us</a></li>
    </ul>
</div>

<!-- JavaScript for Toggle -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
       
        mobileMenu.classList.toggle('translate-x-full'); 
        mobileMenu.classList.toggle('translate-x-0');    
    });
</script>

<!-- Drawer Navigation -->
<div id="mobile-menu" class="fixed top-16 right-0 z-40 w-64 h-full bg-black bg-opacity-70 p-4 overflow-y-auto transition-transform transform translate-x-full">
    <ul class="space-y-4 text-white font-medium">
        <li><a href="/" class="block hover:text-gray-300">Home</a></li>
        <li><a href="/about" class="block hover:text-gray-300">About Us</a></li>
        <li><a href="#" class="block hover:text-gray-300">Services</a></li>
        <!-- <li><a href="/projects" class="block hover:text-gray-300">Projects</a></li> -->
        <li><a href="#" class="block hover:text-gray-300">Blog</a></li>
        <li><a href="/contact" class="block hover:text-gray-300 active:underline">Contact Us</a></li>
    </ul>
</div>

<!-- JavaScript for Toggle -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
       
        mobileMenu.classList.toggle('translate-x-full'); 
        mobileMenu.classList.toggle('translate-x-0');    
    });
</script>