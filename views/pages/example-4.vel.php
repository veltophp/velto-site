<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechForward 2023 | Annual Developer Conference</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#8B5CF6',
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
            background-image: linear-gradient(90deg, #8B5CF6, #EC4899);
        }
        .speaker-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(139, 92, 246, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-dark-950 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 dark:bg-dark-900/80 backdrop-blur-md border-b border-gray-100 dark:border-dark-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center mr-3">
                    <i class="fas fa-code text-white"></i>
                </div>
                <a href="#" class="text-xl font-bold text-gray-900 dark:text-white">Tech<span class="gradient-text">Forward</span></a>
            </div>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#about" class="hover:text-primary transition-colors">About</a>
                <a href="#speakers" class="hover:text-primary transition-colors">Speakers</a>
                <a href="#schedule" class="hover:text-primary transition-colors">Schedule</a>
                <a href="#location" class="hover:text-primary transition-colors">Location</a>
                <a href="#rsvp" class="px-4 py-2 bg-primary hover:bg-purple-700 text-white font-medium rounded-lg transition-colors">
                    RSVP Now
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

    <!-- Hero Section with Countdown -->
    <section class="pt-32 pb-20 relative">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-pink-500/10 -z-10"></div>
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary">
                    OCTOBER 15-17, 2025
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Tech<span class="gradient-text">Forward</span> 2025
                </h1>
                <h2 class="text-2xl md:text-3xl text-gray-600 dark:text-gray-300">
                    The Future of Web Development
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">
                    Join 500+ developers for 3 days of workshops, keynotes, and networking in San Francisco.
                </p>
                
                <!-- Countdown Timer -->
                <div class="pt-4">
                    <h3 class="text-lg font-medium mb-3">Event starts in:</h3>
                    <div class="flex gap-3" id="countdown">
                        <div class="bg-white dark:bg-dark-800 p-4 rounded-lg shadow-sm text-center min-w-[70px]">
                            <div class="text-2xl font-bold" id="days">00</div>
                            <div class="text-xs text-gray-500">Days</div>
                        </div>
                        <div class="bg-white dark:bg-dark-800 p-4 rounded-lg shadow-sm text-center min-w-[70px]">
                            <div class="text-2xl font-bold" id="hours">00</div>
                            <div class="text-xs text-gray-500">Hours</div>
                        </div>
                        <div class="bg-white dark:bg-dark-800 p-4 rounded-lg shadow-sm text-center min-w-[70px]">
                            <div class="text-2xl font-bold" id="minutes">00</div>
                            <div class="text-xs text-gray-500">Minutes</div>
                        </div>
                        <div class="bg-white dark:bg-dark-800 p-4 rounded-lg shadow-sm text-center min-w-[70px]">
                            <div class="text-2xl font-bold" id="seconds">00</div>
                            <div class="text-xs text-gray-500">Seconds</div>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-wrap gap-4 pt-6">
                    <a href="#rsvp" class="px-6 py-3 bg-primary hover:bg-purple-700 text-white font-medium rounded-lg transition-colors shadow-lg hover:shadow-xl">
                        Reserve Your Spot
                    </a>
                    <a href="#speakers" class="px-6 py-3 border border-gray-300 dark:border-dark-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors hover:bg-gray-100 dark:hover:bg-dark-800">
                        <i class="fas fa-users mr-2"></i> See Speakers
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-pink-500/10 rounded-2xl -rotate-6 scale-105"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-8 border-white dark:border-dark-800">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Tech Conference" 
                         class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- About Event -->
    <section id="about" class="py-20 bg-white dark:bg-dark-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    ABOUT THE EVENT
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Attend <span class="gradient-text">TechForward</span></h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    The premier conference for developers looking to stay ahead in the rapidly evolving tech landscape.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 dark:bg-dark-800 p-8 rounded-xl">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-lightbulb text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Cutting-Edge Content</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Learn about the latest frameworks, tools, and methodologies from industry experts.
                    </p>
                </div>
                <div class="bg-gray-50 dark:bg-dark-800 p-8 rounded-xl">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-users text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Networking</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Connect with 500+ developers, tech leads, and hiring managers from top companies.
                    </p>
                </div>
                <div class="bg-gray-50 dark:bg-dark-800 p-8 rounded-xl">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fas fa-laptop-code text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Hands-On Workshops</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Practical sessions where you'll build real projects with expert guidance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Speakers Section -->
    <section id="speakers" class="py-20 bg-gray-50 dark:bg-dark-950">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    FEATURED SPEAKERS
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Meet The <span class="gradient-text">Experts</span></h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Learn from industry leaders and innovative thinkers shaping the future of technology.
                </p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Speaker 1 -->
                <div class="speaker-card bg-white dark:bg-dark-800 p-6 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-full aspect-square rounded-lg overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=400&q=80" 
                             alt="John Doe" 
                             class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">John Doe</h3>
                    <p class="text-primary mb-2">Senior Full Stack Developer</p>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        Building scalable web applications with modern JavaScript frameworks.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Speaker 2 -->
                <div class="speaker-card bg-white dark:bg-dark-800 p-6 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-full aspect-square rounded-lg overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=400&q=80" 
                             alt="Jane Smith" 
                             class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">Jane Smith</h3>
                    <p class="text-primary mb-2">Lead UX Designer</p>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        Creating intuitive user experiences that drive engagement and conversion.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Speaker 3 -->
                <div class="speaker-card bg-white dark:bg-dark-800 p-6 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-full aspect-square rounded-lg overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=400&q=80" 
                             alt="Alex Johnson" 
                             class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">Alex Johnson</h3>
                    <p class="text-primary mb-2">CTO at TechStart</p>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        Scaling engineering teams and systems for hypergrowth startups.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-medium"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Speaker 4 -->
                <div class="speaker-card bg-white dark:bg-dark-800 p-6 rounded-xl shadow-sm transition-all duration-300">
                    <div class="w-full aspect-square rounded-lg overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=400&q=80" 
                             alt="Michael Chen" 
                             class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold">Michael Chen</h3>
                    <p class="text-primary mb-2">AI Research Scientist</p>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        Pushing the boundaries of machine learning and neural networks.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-dark-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors hover:bg-gray-100 dark:hover:bg-dark-800">
                    View All 12 Speakers
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section id="schedule" class="py-20 bg-white dark:bg-dark-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    EVENT SCHEDULE
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Conference <span class="gradient-text">Agenda</span></h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Three days packed with keynotes, workshops, and networking opportunities.
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <!-- Day 1 -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold mb-6 flex items-center">
                        <span class="w-8 h-1 bg-primary mr-4"></span>
                        Day 1 - October 15
                    </h3>
                    <div class="space-y-4">
                        <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                                <h4 class="font-semibold">Registration & Breakfast</h4>
                                <span class="text-primary">8:00 AM - 9:00 AM</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Main Lobby</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                                <h4 class="font-semibold">Opening Keynote: The Future of Web Dev</h4>
                                <span class="text-primary">9:00 AM - 10:30 AM</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">John Doe • Grand Ballroom</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                                <h4 class="font-semibold">Workshop: Modern React Patterns</h4>
                                <span class="text-primary">11:00 AM - 1:00 PM</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Alex Johnson • Room A</p>
                        </div>
                    </div>
                </div>
                
                <!-- Day 2 -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold mb-6 flex items-center">
                        <span class="w-8 h-1 bg-primary mr-4"></span>
                        Day 2 - October 16
                    </h3>
                    <div class="space-y-4">
                        <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                                <h4 class="font-semibold">Breakfast & Networking</h4>
                                <span class="text-primary">8:00 AM - 9:00 AM</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Main Lobby</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                                <h4 class="font-semibold">Keynote: AI in Web Development</h4>
                                <span class="text-primary">9:00 AM - 10:30 AM</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Michael Chen • Grand Ballroom</p>
                        </div>
                    </div>
                </div>
                
                <!-- Day 3 -->
                <div>
                    <h3 class="text-2xl font-bold mb-6 flex items-center">
                        <span class="w-8 h-1 bg-primary mr-4"></span>
                        Day 3 - October 17
                    </h3>
                    <div class="space-y-4">
                        <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                                <h4 class="font-semibold">Breakfast & Networking</h4>
                                <span class="text-primary">8:00 AM - 9:00 AM</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Main Lobby</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                                <h4 class="font-semibold">Closing Keynote: What's Next</h4>
                                <span class="text-primary">9:00 AM - 10:30 AM</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Jane Smith • Grand Ballroom</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                                <h4 class="font-semibold">After Party</h4>
                                <span class="text-primary">7:00 PM - 11:00 PM</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Rooftop Lounge</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="py-20 bg-gray-50 dark:bg-dark-950">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    EVENT LOCATION
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Where To <span class="gradient-text">Find Us</span></h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Join us at the beautiful Moscone Center in the heart of San Francisco.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm mb-8">
                        <h3 class="text-xl font-semibold mb-4">Moscone Center</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-primary mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium">Address</p>
                                    <p class="text-gray-600 dark:text-gray-300">747 Howard St, San Francisco, CA 94103</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-calendar-alt text-primary mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium">Date & Time</p>
                                    <p class="text-gray-600 dark:text-gray-300">October 15-17, 2023 • 8:00 AM - 6:00 PM Daily</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-hotel text-primary mt-1 mr-3"></i>
                                <div>
                                    <p class="font-medium">Recommended Hotels</p>
                                    <p class="text-gray-600 dark:text-gray-300">Special rates available at nearby partner hotels</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-primary hover:bg-purple-700 text-white font-medium rounded-lg transition-colors">
                        <i class="fas fa-directions mr-2"></i> Get Directions
                    </a>
                </div>
                <div class="h-96 rounded-xl overflow-hidden shadow-lg">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.325646976455!2d-122.4018669242663!3d37.78431677185707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807d10af6e51%3A0x1122879c36e6d3aa!2sMoscone%20Center!5e0!3m2!1sen!2sus!4v1689879760933!5m2!1sen!2sus" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="dark:grayscale dark:opacity-90">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- RSVP Section -->
    <section id="rsvp" class="py-20 bg-white dark:bg-dark-900">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    REGISTER NOW
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">RSVP For <span class="gradient-text">TechForward 2023</span></h2>
                <p class="text-xl text-gray-600 dark:text-gray-300">
                    Limited seats available. Reserve your spot today!
                </p>
            </div>
            
            <div class="bg-gray-50 dark:bg-dark-800 p-8 md:p-12 rounded-xl shadow-sm">
                <form>
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">First Name</label>
                            <input type="text" id="first-name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-dark-700 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark-900 dark:text-white">
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Last Name</label>
                            <input type="text" id="last-name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-dark-700 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark-900 dark:text-white">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-dark-700 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark-900 dark:text-white">
                    </div>
                    <div class="mb-6">
                        <label for="company" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Company</label>
                        <input type="text" id="company" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-dark-700 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark-900 dark:text-white">
                    </div>
                    <div class="mb-6">
                        <label for="ticket-type" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Ticket Type</label>
                        <select id="ticket-type" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-dark-700 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark-900 dark:text-white">
                            <option>General Admission - $299</option>
                            <option>VIP Pass - $599 (Includes workshops)</option>
                            <option>Student Ticket - $149 (ID required)</option>
                        </select>
                    </div>
                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">Dietary Restrictions</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary dark:border-dark-700">
                                <span class="ml-2 text-gray-700 dark:text-gray-300">Vegetarian</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary dark:border-dark-700">
                                <span class="ml-2 text-gray-700 dark:text-gray-300">Vegan</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary dark:border-dark-700">
                                <span class="ml-2 text-gray-700 dark:text-gray-300">Gluten-Free</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary dark:border-dark-700">
                                <span class="ml-2 text-gray-700 dark:text-gray-300">None</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex items-start mb-6">
                        <input type="checkbox" id="terms" class="mt-1 rounded border-gray-300 text-primary focus:ring-primary dark:border-dark-700">
                        <label for="terms" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                            I agree to the <a href="#" class="text-primary hover:underline">Terms & Conditions</a> and <a href="#" class="text-primary hover:underline">Privacy Policy</a>
                        </label>
                    </div>
                    <button type="submit" class="w-full px-6 py-4 bg-primary hover:bg-purple-700 text-white font-bold rounded-lg transition-colors shadow-lg hover:shadow-xl">
                        Complete Registration
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-gray-900 text-gray-400">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center mr-3">
                            <i class="fas fa-code text-white"></i>
                        </div>
                        <a href="#" class="text-xl font-bold text-white">Tech<span class="text-purple-400">Forward</span></a>
                    </div>
                    <p class="mb-4">
                        The premier conference for developers looking to stay ahead in the rapidly evolving tech landscape.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                        <li