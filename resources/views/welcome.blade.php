<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euforia Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom Tailwind configuration */
        .bg-primary {
            background-color: #62cb79;
        }
        .text-primary {
            color: #62cb79;
        }
        .hero-bg {
            background-image: url('https://cdn.pixabay.com/photo/2017/03/07/18/42/graphic-2124949_1280.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-primary shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">Euforia</a>
            <div class="block lg:hidden">
                <button id="menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <ul id="menu" class="hidden lg:flex space-x-6">
                <li><a href="#features" class="text-white hover:underline">Features</a></li>
                <li><a href="#pricing" class="text-white hover:underline">Pricing</a></li>
                <li><a href="#testimonials" class="text-white hover:underline">Testimonials</a></li>
                <li><a href="#contact" class="text-white hover:underline">Contact</a></li>
                <li><a href="#signup" class="text-primary bg-white py-2 px-4 rounded font-bold hover:bg-gray-100">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg h-screen flex items-center justify-center text-center text-white">
        <div class="bg-black bg-opacity-50 p-10 rounded">
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">Create Stunning Designs Effortlessly</h1>
            <p class="text-lg lg:text-2xl mb-8">Euforia is your ultimate tool for creating beautiful graphic designs and motion graphics with ease.</p>
            <div class="flex justify-center space-x-4">
                <a href="#edit-image" class="bg-primary hover:bg-green-600 text-white py-2 px-6 rounded-full font-semibold">Edit Image Graphics</a>
                <a href="#create-video" class="bg-primary hover:bg-green-600 text-white py-2 px-6 rounded-full font-semibold">Create Motion Graphics</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl lg:text-5xl font-bold text-gray-800 mb-12">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-100 rounded shadow-lg">
                    <div class="mb-4">
                        <svg class="w-12 h-12 text-primary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M8 20h.01M12 20h.01M16 20h.01M9 4h6M4 8h16M4 12h16M4 16h16"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">User-Friendly Interface</h3>
                    <p class="text-gray-600">Easily create designs with our intuitive and easy-to-use interface.</p>
                </div>
                <div class="p-8 bg-gray-100 rounded shadow-lg">
                    <div class="mb-4">
                        <svg class="w-12 h-12 text-primary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Templates & Assets</h3>
                    <p class="text-gray-600">Access a wide range of templates and design assets to kickstart your projects.</p>
                </div>
                <div class="p-8 bg-gray-100 rounded shadow-lg">
                    <div class="mb-4">
                        <svg class="w-12 h-12 text-primary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6M9 20h6M9 8h6M9 4h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Collaboration Tools</h3>
                    <p class="text-gray-600">Work seamlessly with your team using our collaboration tools.</p>
                </div>
                <div class="p-8 bg-gray-100 rounded shadow-lg">
                    <div class="mb-4">
                        <svg class="w-12 h-12 text-primary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16M12 4v16"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Advanced Editing</h3>
                    <p class="text-gray-600">Utilize advanced editing tools to perfect your designs.</p>
                </div>
                <div class="p-8 bg-gray-100 rounded shadow-lg">
                    <div class="mb-4">
                        <svg class="w-12 h-12 text-primary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l-8-8h16l-8 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Export Options</h3>
                    <p class="text-gray-600">Export your designs in various formats suitable for web and print.</p>
                </div>
                <div class="p-8 bg-gray-100 rounded shadow-lg">
                    <div class="mb-4">
                        <svg class="w-12 h-12 text-primary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6M9 20h6M9 8h6M9 4h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Cloud Storage</h3>
                    <p class="text-gray-600">Save your designs in the cloud and access them from anywhere.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        const menuButton = document.getElementById('menu-button');
        const menu = document.getElementById('menu');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
