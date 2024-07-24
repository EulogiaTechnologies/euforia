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
    </style>
</head>
<body>
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

    <script>
        const menuButton = document.getElementById('menu-button');
        const menu = document.getElementById('menu');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
