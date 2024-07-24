<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euforia - Create Stunning Designs Effortlessly</title>

    <!-- Meta tags -->
    <meta name="description" content="Euforia by Eulogia Technologies is your ultimate tool for creating beautiful graphic designs and motion graphics with ease.">
    <meta name="keywords" content="Euforia, graphic design, motion graphics, design tool, Eulogia Technologies, create designs, design software, cloud storage, collaboration tools">
    <meta name="author" content="Eulogia Technologies">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Euforia - Create Stunning Designs Effortlessly">
    <meta property="og:description" content="Euforia by Eulogia Technologies is your ultimate tool for creating beautiful graphic designs and motion graphics with ease.">
    <meta property="og:image" content="https://cdn.pixabay.com/photo/2017/03/07/18/42/graphic-2124949_1280.jpg"> <!-- Replace with your image URL -->
    <meta property="og:url" content="https://www.euforia.eulogia.net"> <!-- Replace with your URL -->
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Euforia - Create Stunning Designs Effortlessly">
    <meta name="twitter:description" content="Euforia by Eulogia Technologies is your ultimate tool for creating beautiful graphic designs and motion graphics with ease.">
    <meta name="twitter:image" content="https://cdn.pixabay.com/photo/2017/03/07/18/42/graphic-2124949_1280.jpg"> <!-- Replace with your image URL -->

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom Tailwind configuration -->
    <style>
        .bg-primary { background-color: #62cb79; }
        .text-primary { color: #62cb79; }
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
                <a href="#edit-image" class="bg-primary hover:bg-green-600 text-white py-2 px-6 rounded-full font-semibold">Create Image Graphics</a>
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

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl lg:text-5xl font-bold text-gray-800 mb-12">Pricing Plans</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Free Plan -->
        
                <div class="p-8 bg-white rounded shadow-lg border-t-4 border-primary">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Free</h3>
                    <p class="text-lg text-gray-600 mb-6">For users who want to save their work.</p>
                    <ul class="text-left mb-6">
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Save up to 10 designs
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Save up to 2 motion graphics
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Access to all free templates
                        </li>
                    </ul>
                    <p class="text-lg text-gray-600 mb-6">Free forever</p>
                    <a href="#" class="bg-primary hover:bg-green-600 text-white py-2 px-6 rounded-full font-semibold">Get Started</a>
                </div>
               <!-- Basic Plan -->
                <div class="p-8 bg-white rounded shadow-lg border-t-4 border-primary">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Basic</h3>
                    <p class="text-lg text-gray-600 mb-6">For users who need advanced features.</p>
                    <ul class="text-left mb-6">
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Save up to 150 designs
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Save up to 5 motion graphics
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Access to stock images
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Auto remove background
                        </li>
                    </ul>
                    <p class="text-lg text-gray-600 mb-6">$4 per month</p>
                    <a href="#" class="bg-primary hover:bg-green-600 text-white py-2 px-6 rounded-full font-semibold">Get Started</a>
                </div>


                <div class="p-8 bg-white rounded shadow-lg border-t-4 border-primary">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Premium</h3>
                    <p class="text-lg text-gray-600 mb-6">For users who need advanced features.</p>
                    <ul class="text-left mb-6">
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Save up unlimited designs
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Save up to unlimited motion graphics
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Access to stock images
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Auto remove background
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            AI graphic generator
                        </li>
                    </ul>
                    <p class="text-lg text-gray-600 mb-6">$4 per month</p>
                    <a href="#" class="bg-primary hover:bg-green-600 text-white py-2 px-6 rounded-full font-semibold">Get Started</a>
                </div>
            </div>

           
        
        
        </div>
      
    
    </section>

    <!-- Testimonials Section -->
<section id="testimonials" class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl lg:text-5xl font-bold text-gray-800 mb-12">What Our Users Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-8 bg-gray-100 rounded shadow-lg">
                <p class="text-lg italic text-gray-600 mb-4">"Euforia's intuitive interface and powerful features have transformed my design workflow. It's a game-changer for graphic design and motion graphics!"</p>
                <h3 class="text-xl font-semibold text-gray-800">- John Doe, Beta Tester</h3>
            </div>
            <div class="p-8 bg-gray-100 rounded shadow-lg">
                <p class="text-lg italic text-gray-600 mb-4">"The templates and assets available in Euforia are top-notch. It's amazing how quickly I can create professional designs."</p>
                <h3 class="text-xl font-semibold text-gray-800">- Jane Smith, Graphic Designer</h3>
            </div>
            <div class="p-8 bg-gray-100 rounded shadow-lg">
                <p class="text-lg italic text-gray-600 mb-4">"As an early adopter, I've seen Euforia evolve into an essential tool for designers. The new features and constant updates are fantastic!"</p>
                <h3 class="text-xl font-semibold text-gray-800">- Alex Johnson, Motion Graphics Artist</h3>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl lg:text-5xl font-bold text-gray-800 mb-12">Contact Us</h2>
        <div class="max-w-lg mx-auto">
            <form action="#" method="post">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-primary hover:bg-green-600 text-white py-2 px-6 rounded-full font-semibold">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>

    <!-- Footer Section -->
    <footer class="bg-primary text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p class="text-sm">© 2024 Euforia. All Rights Reserved.</p>
            <p class="text-sm">Euforia is a product of Eulogia Technologies.</p>
        </div>
    </footer>

    <script>
        const menuButton = document.getElementById('menu-button');
        const menu = document.getElementById('menu');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
