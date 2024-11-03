<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_white_background.jpg') }}" type="image/jpg">
    <title>Willow Springs Capital</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            overflow-x: hidden;
        }

        @media (max-width: 768px) {
            .h-screen {
                height: auto; 
            }
        }
    </style>
</head>
<body class="overflow-x-hidden">
    <x-navbar />

    <section class="relative bg-cover bg-center h-screen lg:h-screen w-full" style="background-image: url('{{ asset('images/key.jpg') }}');">
        <div class="flex items-center justify-center h-full px-4 md:px-8 lg:px-0">
            <div class="yeee grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-8 max-w-screen-xl w-full mt-5">
                <!-- Text Section -->
                <div class="flex items-center justify-center md:justify-start text-center md:text-left px-4">
                    <div>
                        <h2 class="text-3xl font-extrabold text-yellow-500 md:text-4xl lg:text-5xl">Contact Us!</h2>
                        <p class="mt-4 text-2xl font-extrabold text-white md:text-3xl lg:text-5xl">Let's Connect With Willows Spring Capital.</p>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="bg-white p-6 shadow-lg rounded-lg w-full max-w-lg mx-auto lg:mx-0 lg:p-8"> 
                    <h4 class="mb-6 text-lg tracking-tight font-extrabold text-gray-900 md:mb-8 lg:text-xl">Submit A Message</h4>
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6 md:space-y-8">
                        @csrf
                        <div>
                            <input type="text" name="fname" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="First Name" required>
                        </div>
                        <div>
                            <input type="text" name="lname" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Last Name" required>
                        </div>
                        <div>
                            <input type="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Email Address" required>
                        </div>
                        <div>
                            <textarea name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Enter Message..." required></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
</body>
</html>
