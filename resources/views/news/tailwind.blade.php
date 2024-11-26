<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow">
        <nav class="container mx-auto flex items-center justify-between py-4 px-6">
            <img src="Logo.png" alt="Logo" class="h-8">
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Service</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">About</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Blog</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">FAQ</a></li>
            </ul>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Get Started</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="text-center md:text-left md:w-1/2 space-y-4">
                <h1 class="text-4xl font-bold">Lessons and insights <span class="text-blue-500">from 8 years</span></h1>
                <p class="text-gray-600">Where to grow your business as a photographer: site or social media?</p>
                <button class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Register</button>
            </div>
            <div class="mt-8 md:mt-0 md:w-1/2">
                <img src="illustration.png" alt="Illustration" class="mx-auto">
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold">Our Clients</h2>
            <p class="text-gray-600">We have been working with some Fortune 500+ clients</p>
            <div class="flex justify-center flex-wrap gap-6 mt-6">
                <img src="Logo (1).png" alt="Client 1" class="h-12">
                <img src="Logo (2).png" alt="Client 2" class="h-12">
                <img src="Logo (3).png" alt="Client 3" class="h-12">
                <img src="Logo (4).png" alt="Client 4" class="h-12">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-2xl font-semibold text-center">Manage your entire community in a single system</h2>
            <div class="grid md:grid-cols-3 gap-8 mt-10">
                <div class="bg-white shadow-md p-6 text-center">
                    <img src="Icon (1).png" alt="Feature 1" class="h-16 mx-auto mb-4">
                    <h3 class="font-semibold text-lg">Membership Organizations</h3>
                    <p class="text-gray-600">Full automation of membership renewals and payments</p>
                </div>
                <div class="bg-white shadow-md p-6 text-center">
                    <img src="Icon (2).png" alt="Feature 2" class="h-16 mx-auto mb-4">
                    <h3 class="font-semibold text-lg">National Associations</h3>
                    <p class="text-gray-600">Streamline processes for better community engagement</p>
                </div>
                <div class="bg-white shadow-md p-6 text-center">
                    <img src="Icon (3).png" alt="Feature 3" class="h-16 mx-auto mb-4">
                    <h3 class="font-semibold text-lg">Clubs and Groups</h3>
                    <p class="text-gray-600">Organize events and track memberships with ease</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="py-16 bg-blue-100">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="text-center md:text-left md:w-1/2 space-y-4">
                <h1 class="text-3xl font-bold">Helping a local <br><span class="text-blue-500">business reinvent itself</span></h1>
                <p class="text-gray-600">We reached here with our hard work and dedication</p>
            </div>
            <div class="grid grid-cols-2 gap-8 mt-8 md:mt-0 md:w-1/2">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-blue-500">2,245,341</h2>
                    <p class="text-gray-600">Members</p>
                </div>
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-blue-500">46,328</h2>
                    <p class="text-gray-600">Clubs</p>
                </div>
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-blue-500">828,867</h2>
                    <p class="text-gray-600">Event Bookings</p>
                </div>
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-blue-500">1,926,436</h2>
                    <p class="text-gray-600">Payments</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400">
        <div class="container mx-auto py-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <img src="Logo.png" alt="Logo" class="h-8 mb-4">
                    <p>&copy; 2020 Nexcent Ltd. All rights reserved.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="hover:text-white">Instagram</a>
                        <a href="#" class="hover:text-white">Twitter</a>
                        <a href="#" class="hover:text-white">YouTube</a>
                    </div>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-2">Company</h3>
                    <ul>
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                        <li><a href="#" class="hover:text-white">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-2">Support</h3>
                    <ul>
                        <li><a href="#" class="hover:text-white">Help Center</a></li>
                        <li><a href="#" class="hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
