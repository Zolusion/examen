<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
  @vite('resources/css/app.css')
  <style>
    .hero-bg {
        background-image: url('https://images.unsplash.com/photo-1608306448197-e83633f1261c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2787&q=80');
    }
</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="absolute w-full">
        <div class="mx-auto p-2">
          <div class="relative h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex space-x-4">
                            <!-- Links -->
                            <a href="#" class="text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg bg-cover bg-center text-white min-h-screen flex flex-col justify-center items-center">
        <div class="text-center mx-auto">
            <h1 class="text-3xl sm:text-5xl font-bold">Welcome to My Website</h1>
            <p class="mt-4 text-lg sm:text-xl">Your one-stop destination for everything amazing.</p>
            <a href="#learn-more" class="mt-8 inline-block bg-white text-indigo-900 font-semibold text-base sm:text-xl px-6 py-3 rounded-full transition duration-300 transform hover:scale-105">Learn More</a>
        </div>
    </section>

    <!-- Blog -->
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8">Latest Blog Posts</h2>
    
            <!-- Blog Post Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">ARA Groep</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="text-indigo-600 hover:underline">Read More</a>
                </div>
    
                <!-- Blog Post Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Laravel</h3>
                    <p class="text-gray-600 mb-4">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="text-indigo-600 hover:underline">Read More</a>
                </div>
    
                <!-- Blog Post Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Database</h3>
                    <p class="text-gray-600 mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="text-indigo-600 hover:underline">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="py-16">
        <div class="container mx-auto w-full bg-white p-8 rounded-md shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Us</h2>
    
            <form action="#" method="post">
                <div class="mb-4">
                    <label for="name" class="text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-indigo-300" required>
                </div>
    
                <div class="mb-4">
                    <label for="email" class="text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-indigo-300" required>
                </div>
    
                <div class="mb-4">
                    <label for="message" class="text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-indigo-300" rows="4" required></textarea>
                </div>
    
                <button type="submit" class="bg-black-600 text-black font-semibold py-2 px-4 rounded-md">Submit</button>
            </form>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-indigo-900 text-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold">Join Our Newsletter</h2>
            <p class="mt-4 text-lg">Subscribe to our newsletter for the latest updates and special offers.</p>
            <div class="mt-6">
                <input type="email" placeholder="Enter your email" class="px-4 py-3 w-64 border border-white rounded-l-lg focus:outline-none" />
                <button class="bg-white text-indigo-900 px-6 py-3 rounded-r-lg hover:bg-indigo-700 transition duration-300">Subscribe</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-indigo-900 text-white py-4">
        <div class="container mx-auto flex items-center justify-between">
            <div>
                <p class="text-sm">&copy; 2023 Your Website</p>
            </div>
            <div>
                <a href="#" class="text-sm mx-2 hover:underline">Privacy Policy</a>
                <a href="#" class="text-sm mx-2 hover:underline">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>