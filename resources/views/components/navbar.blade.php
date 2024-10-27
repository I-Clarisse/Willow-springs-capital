<nav class="bg-black bg-opacity-50 text-white py-2 fixed w-full z-10">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center">
            <img src="{{ asset('images/logo_transparent_background.png') }}" alt="Logo" class="h-12 mr-4">
            <!-- <span class="font-bold text-lg">Willow Springs Capital</span> -->
        </div>
        <div class="flex space-x-6">
            <a href="/" class="hover:text-gray-300 transition duration-300 pb-1 {{ request()->is('/') ? 'border-b-2 border-white' : '' }}">
                Home
            </a>
            <a href="/about" class="hover:text-gray-300 transition duration-300 {{ request()->is('about') ? 'border-b-2 border-white' : '' }}">
                About Us
            </a>
            <a href="/services" class="hover:text-gray-300 transition duration-300 {{ request()->is('services') ? 'border-b-2 border-white' : '' }}">
                Services
            </a>
            <a href="/projects" class="hover:text-gray-300 transition duration-300 {{ request()->is('projects') ? 'border-b-2 border-white' : '' }}">
                Projects
            </a>
            <a href="/blog" class="hover:text-gray-300 transition duration-300 {{ request()->is('blog') ? 'border-b-2 border-white' : '' }}">
                Blog
            </a>
            <a href="/contact" class="hover:text-gray-300 transition duration-300 {{ request()->is('contact') ? 'border-b-2 border-white' : '' }}">
                Contact Us
            </a>
        </div>
    </div>
</nav>
