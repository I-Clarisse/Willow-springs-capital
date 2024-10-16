<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite('resources/css/app.css') <!-- Assuming you're using Vite -->
</head>
<body>
    <x-navbar />

    <section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/key.jpg') }}');">
        <div class="flex items-center justify-center h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 px-8 max-w-screen-xl">
                <div class="flex items-center justify-start">
                    <div>
                        <h2 class="text-3xl font-extrabold text-yellow-500">Contact Us!</h2>
                        <p class="mt-4 text-5xl font-extrabold text-white">Let's Connect With Willows Spring Capital.</p>
                    </div>
                </div>

                <div class="m-6 bg-white p-8 shadow-lg rounded-lg w-full max-w-lg"> 
                    <h4 class="mb-8 text-lg tracking-tight font-extrabold">Submit A Message</h4>
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-8">
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
                            <textarea name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Enter Message..." required></textarea>
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
