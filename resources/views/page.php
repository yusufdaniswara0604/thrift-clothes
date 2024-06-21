<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JualBaju_Co</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-purple-500 text-gray-900">
    <!-- Header -->
    <header class="bg-gray-200 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
            <img src="{{ asset('images/logo-pbl.png') }}" alt="logo" class="w-12 h-12 mr-3">
                <h1 class="text-2xl font-bold text-purple-700">JualBaju_Co</h1>
            </div>
            <div>
                <button class="bg-blue-500 text-white py-2 px-4 rounded mr-2">Login</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Register</button>
            </div>
        </div>
    </header>

    <!-- Main Section -->
    <main class="container mx-auto text-center py-16">
        <h2 class="text-5xl font-bold text-white mb-4">Explore Your Shop With Us</h2>
        <p class="text-white mb-8">Provide a wide selection of clothes according to what you want, and we will make sure you are satisfied with your choice.</p>
        <img src="illustration.png" alt="Illustration" class="mx-auto w-1/2 mb-8">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-2">EASY PAYMENT</h3>
                <p>Experience seamless and hassle-free transactions with our easy payment solution.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-2">Affordable Price</h3>
                <p>We take pride in offering you a curated selection of high-quality products at prices that won't break the bank.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-2">100% Satisfied Customer</h3>
                <p>We prioritize excellence in every aspect, ensuring that our customers are fully satisfied.</p>
            </div>
        </div>
    </main>

    <!-- Brands Section -->
    <section class="bg-gray-200 py-8">
        <div class="container mx-auto text-center">
            <h3 class="text-2xl font-bold text-purple-700 mb-4">Choose from a wide range of clothes</h3>
            <p class="mb-8">Everything you need just let us know, we will take good care of all your needs.</p>
            <div class="flex justify-center space-x-8">
                <img src="nike.png" alt="Nike" class="h-12">
                <img src="chanel.png" alt="Chanel" class="h-12">
                <img src="dior.png" alt="Dior" class="h-12">
                <img src="gucci.png" alt="Gucci" class="h-12">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto grid md:grid-cols-4 gap-8">
            <div>
                <img src="logo.png" alt="Logo" class="w-12 h-12 mb-3">
                <h4 class="text-xl font-bold">JualBaju_Co</h4>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-blue-500"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-pink-500"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-blue-700"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-3">SERVICES</h4>
                <ul>
                    <li>Sample Development</li>
                    <li>Apparel Production</li>
                    <li>Label Tags</li>
                    <li>Packaging</li>
                    <li>Global Shipping</li>
                    <li>Product</li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-3">HOW DOES IS WORK</h4>
                <ul>
                    <li>Portfolio</li>
                    <li>Customer Review</li>
                    <li>About Us</li>
                    <li>Blog</li>
                    <li>FAQ</li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-3">CONTACT US</h4>
                <p>Kota Batam, Kepulauan Riau</p>
                <p>0778-0987-2312</p>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
