<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeltoPOS | Modern Point of Sale Solution by John Doe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        dark: {
                            800: '#1E293B',
                            900: '#0F172A',
                            950: '#020617'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(90deg, #4F46E5, #8B5CF6);
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(79, 70, 229, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-dark-950 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 dark:bg-dark-900/80 backdrop-blur-md border-b border-gray-100 dark:border-dark-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center mr-3">
                    <i class="fas fa-cash-register text-white"></i>
                </div>
                <a href="#" class="text-xl font-bold text-gray-900 dark:text-white">Velto<span class="gradient-text">POS</span></a>
            </div>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#features" class="hover:text-primary transition-colors">Features</a>
                <a href="#solutions" class="hover:text-primary transition-colors">Solutions</a>
                <a href="#pricing" class="hover:text-primary transition-colors">Pricing</a>
                <a href="#testimonials" class="hover:text-primary transition-colors">Testimonials</a>
                <a href="#contact" class="px-4 py-2 bg-primary hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors">
                    Get Started
                </a>
            </div>
            <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-dark-800 md:hidden">
                <i class="fas fa-moon dark:hidden"></i>
                <i class="fas fa-sun hidden dark:block"></i>
            </button>
            <button id="mobile-menu-button" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-dark-800 md:hidden">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary">
                    Version 3.0 Released
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Revolutionize Your Retail with <span class="gradient-text">VeltoPOS</span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300">
                    The most intuitive point of sale system for modern businesses. Increase efficiency, reduce costs, and grow your sales.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#pricing" class="px-6 py-3 bg-primary hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors shadow-lg hover:shadow-xl">
                        Get Started - $29/month
                    </a>
                    <a href="#demo" class="px-6 py-3 border border-gray-300 dark:border-dark-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors hover:bg-gray-100 dark:hover:bg-dark-800">
                        <i class="fas fa-play-circle mr-2"></i> Watch Demo
                    </a>
                </div>
                <div class="flex items-center pt-4">
                    <div class="flex -space-x-2">
                        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-dark-800" src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
                        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-dark-800" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-dark-800" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Trusted by <span class="font-medium text-gray-900 dark:text-white">1,200+</span> businesses worldwide</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-purple-500/10 rounded-2xl -rotate-6 scale-105"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-8 border-white dark:border-dark-800">
                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="VeltoPOS Dashboard" 
                         class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Cloud -->
    <section class="py-12 bg-white dark:bg-dark-900 border-y border-gray-100 dark:border-dark-800">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-gray-500 dark:text-gray-400 mb-8">TRUSTED BY LEADING BRANDS</p>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center justify-center">
                <img src="https://logo.clearbit.com/starbucks.com" alt="Starbucks" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all">
                <img src="https://logo.clearbit.com/nike.com" alt="Nike" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all">
                <img src="https://logo.clearbit.com/uniqlo.com" alt="Uniqlo" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all">
                <img src="https://logo.clearbit.com/wholefoods.com" alt="Whole Foods" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all">
                <img src="https://logo.clearbit.com/levi.com" alt="Levi's" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all">
                <img src="https://logo.clearbit.com/patagonia.com" alt="Patagonia" class="h-8 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    CORE FEATURES
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Everything You Need to <span class="gradient-text">Succeed</span></h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    VeltoPOS combines powerful features with an intuitive interface designed for retail excellence.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-bolt text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Lightning Fast Checkout</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Process transactions 3x faster with our optimized interface. Reduce customer wait times and increase throughput.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Real-Time Analytics</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Get instant insights into sales performance, inventory levels, and customer behavior with beautiful dashboards.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-boxes text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Inventory Management</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Automatic stock tracking with low-level alerts. Never run out of popular items again.
                    </p>
                </div>
                
                <!-- Feature 4 -->
                <div class="feature-card bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-users text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Customer CRM</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Build customer profiles, track purchase history, and launch targeted marketing campaigns.
                    </p>
                </div>
                
                <!-- Feature 5 -->
                <div class="feature-card bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mobile Ready</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Manage your business from anywhere with our fully responsive web app and dedicated mobile apps.
                    </p>
                </div>
                
                <!-- Feature 6 -->
                <div class="feature-card bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-plug text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">100+ Integrations</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Connect with accounting, ecommerce, and marketing tools you already use.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Video Section -->
    <section id="demo" class="py-20 bg-primary/5 dark:bg-primary/10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    SEE IT IN ACTION
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">How <span class="gradient-text">VeltoPOS</span> Works</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Watch our 2-minute demo to see how VeltoPOS can transform your business operations.
                </p>
            </div>
            <div class="relative aspect-video max-w-4xl mx-auto rounded-xl overflow-hidden shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-r from-primary to-purple-600 flex items-center justify-center">
                    <button class="w-20 h-20 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center">
                        <i class="fas fa-play text-white text-2xl"></i>
                    </button>
                </div>
                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Video Thumbnail" 
                     class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-white dark:bg-dark-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    PRICING
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Simple, Transparent <span class="gradient-text">Pricing</span></h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Choose the perfect plan for your business. No hidden fees, cancel anytime.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Basic Plan -->
                <div class="bg-gray-50 dark:bg-dark-800 p-8 rounded-xl shadow-sm border border-gray-200 dark:border-dark-700">
                    <h3 class="text-xl font-semibold mb-2">Starter</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">Perfect for small businesses</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold">$29</span>
                        <span class="text-gray-600 dark:text-gray-300">/month</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>1 Register</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Basic Inventory</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Sales Reporting</span>
                        </li>
                        <li class="flex items-start text-gray-400 dark:text-gray-500">
                            <i class="fas fa-times mt-1 mr-2"></i>
                            <span>No CRM Features</span>
                        </li>
                        <li class="flex items-start text-gray-400 dark:text-gray-500">
                            <i class="fas fa-times mt-1 mr-2"></i>
                            <span>No Ecommerce Sync</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full px-6 py-3 text-center border border-gray-300 dark:border-dark-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors hover:bg-gray-100 dark:hover:bg-dark-700">
                        Get Started
                    </a>
                </div>
                
                <!-- Popular Plan -->
                <div class="relative bg-white dark:bg-dark-950 p-8 rounded-xl shadow-lg border-2 border-primary">
                    <div class="absolute top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">
                        MOST POPULAR
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Professional</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">For growing businesses</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold">$79</span>
                        <span class="text-gray-600 dark:text-gray-300">/month</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>3 Registers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Advanced Inventory</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Customer CRM</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Ecommerce Sync</span>
                        </li>
                        <li class="flex items-start text-gray-400 dark:text-gray-500">
                            <i class="fas fa-times mt-1 mr-2"></i>
                            <span>No API Access</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full px-6 py-3 text-center bg-primary hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors">
                        Get Started
                    </a>
                </div>
                
                <!-- Enterprise Plan -->
                <div class="bg-gray-50 dark:bg-dark-800 p-8 rounded-xl shadow-sm border border-gray-200 dark:border-dark-700">
                    <h3 class="text-xl font-semibold mb-2">Enterprise</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">For large retailers</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold">$199</span>
                        <span class="text-gray-600 dark:text-gray-300">/month</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Unlimited Registers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Multi-Location</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Advanced Analytics</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>API Access</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Dedicated Support</span>
                        </li>
                    </ul>
                    <a href="#" class="block w-full px-6 py-3 text-center border border-gray-300 dark:border-dark-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors hover:bg-gray-100 dark:hover:bg-dark-700">
                        Get Started
                    </a>
                </div>
            </div>
            <div class="text-center mt-12 text-gray-600 dark:text-gray-400">
                Need custom pricing for multiple locations? <a href="#contact" class="text-primary hover:underline">Contact sales</a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-20 bg-gray-50 dark:bg-dark-950">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    TESTIMONIALS
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our <span class="gradient-text">Customers</span> Say</h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Don't just take our word for it. Here's what business owners say about VeltoPOS.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Boutique Owner</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        "VeltoPOS cut our checkout time in half and made inventory management a breeze. Our sales increased by 30% in the first month!"
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Michael Chen</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Cafe Owner</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        "The customer profiles and purchase history features helped us personalize our service and increase repeat business by 45%."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Lisa Rodriguez" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Lisa Rodriguez</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Retail Chain Manager</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        "We rolled out VeltoPOS across all 12 locations seamlessly. The multi-store inventory sync alone saved us thousands in stock discrepancies."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-purple-600 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl opacity-90 mb-8">
                Join 1,200+ businesses using VeltoPOS to streamline operations and boost sales.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#pricing" class="px-8 py-4 bg-white text-primary font-bold rounded-lg shadow-lg hover:bg-gray-100 transition-colors">
                    Get Started Today
                </a>
                <a href="#contact" class="px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-colors">
                    Contact Sales
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-white dark:bg-dark-900 border-t border-gray-100 dark:border-dark-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center mr-3">
                            <i class="fas fa-cash-register text-white"></i>
                        </div>
                        <a href="#" class="text-xl font-bold text-gray-900 dark:text-white">Velto<span class="text-primary">POS</span></a>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        The modern point of sale solution for retail businesses of all sizes.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Product</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Features</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Integrations</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Updates</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Documentation</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Guides</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Support</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">About</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Privacy</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary dark:hover:text-white transition-colors">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-100 dark:border-dark-800 mt-12 pt-8 text-center text-gray-600 dark:text-gray-400">
                <p>&copy; 2023 VeltoPOS by John Doe. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Theme Toggle Script -->
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;

        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }

        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });
    </script>
</body>
</html>