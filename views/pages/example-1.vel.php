<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Doe | Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
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
            background-image: linear-gradient(90deg, #3B82F6, #8B5CF6);
        }
        /* Animation Keyframes */
        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-20px) translateX(10px); }
        }
        @keyframes float-delay {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(15px) translateX(-15px); }
        }
        @keyframes blob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -30px) scale(1.1); }
            66% { transform: translate(-30px, 30px) scale(0.9); }
        }
        
        /* Animation Classes */
        .animate-float {
            animation: float 8s ease-in-out infinite;
        }
        .animate-float-delay {
            animation: float-delay 10s ease-in-out infinite;
        }
        .animate-blob {
            animation: blob 12s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-dark-950 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Floating Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 dark:bg-dark-900/80 backdrop-blur-md border-b border-gray-100 dark:border-dark-800">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-primary dark:text-white">JD<span class="text-gray-600 dark:text-gray-300">.</span></a>
            <div class="hidden md:flex space-x-8">
                <a href="#about" class="hover:text-primary transition-colors">About</a>
                <a href="#skills" class="hover:text-primary transition-colors">Skills</a>
                <a href="#projects" class="hover:text-primary transition-colors">Projects</a>
                <a href="#contact" class="hover:text-primary transition-colors">Contact</a>
            </div>
            <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-dark-800">
                <i class="fas fa-moon dark:hidden"></i>
                <i class="fas fa-sun hidden dark:block"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-16 relative overflow-hidden">
        <!-- Dynamic Background Elements -->
        <div class="absolute inset-0 -z-10">
            <!-- Gradient Base -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-dark-800 dark:to-dark-900"></div>
            
            <!-- Animated Grid Pattern -->
            <div class="absolute inset-0 opacity-20 dark:opacity-10">
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
            </div>
            
            <!-- Floating Circles -->
            <div class="absolute top-1/4 left-1/4 w-64 h-64 rounded-full bg-blue-200/30 dark:bg-blue-900/20 blur-3xl animate-float"></div>
            <div class="absolute bottom-1/3 right-1/4 w-72 h-72 rounded-full bg-purple-200/30 dark:bg-purple-900/20 blur-3xl animate-float-delay"></div>
            
            <!-- Animated Blob -->
            <div class="absolute top-1/3 right-1/3 w-96 h-96 bg-gradient-to-r from-blue-300/20 to-purple-300/20 dark:from-blue-700/20 dark:to-purple-700/20 rounded-full filter blur-3xl opacity-70 animate-blob"></div>
        </div>

        <div class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Hi, I'm <span class="gradient-text">John Doe</span>
                </h1>
                <h2 class="text-2xl md:text-3xl text-gray-600 dark:text-gray-300">
                    Full Stack Developer & UI Designer
                </h2>
                <p class="text-lg text-gray-500 dark:text-gray-400 max-w-lg">
                    I build exceptional digital experiences that are fast, accessible, and visually appealing.
                </p>
                <div class="flex space-x-4 pt-4">
                    <a href="#projects" class="px-6 py-3 bg-primary hover:bg-blue-700 text-white font-medium rounded-lg transition-colors shadow-lg hover:shadow-xl">
                        View My Work
                    </a>
                    <a href="#contact" class="px-6 py-3 border border-gray-300 dark:border-dark-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors hover:bg-gray-100 dark:hover:bg-dark-800">
                        Contact Me
                    </a>
                </div>
                <div class="flex space-x-6 pt-8">
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                        <i class="fab fa-dribbble text-2xl"></i>
                    </a>
                </div>
            </div>
            
            <!-- Portrait Image -->
            <div class="relative">
                <!-- Floating gradient shape -->
                <div class="absolute -z-10 top-0 left-0 w-full h-full bg-gradient-to-br from-primary/10 to-purple-500/10 rounded-2xl -rotate-6 scale-105 dark:opacity-30"></div>
                <!-- Portrait with soft shadow -->
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=600&q=80" 
                    alt="John Doe" 
                    class="relative w-full max-w-md rounded-2xl shadow-xl dark:shadow-gray-800/50">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white dark:bg-dark-900">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">About <span class="gradient-text">Me</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-purple-500 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Who am I?</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        I'm a passionate Full Stack Developer with 5+ years of experience creating web applications and digital experiences. I specialize in JavaScript technologies across the whole stack (React.js, Node.js, Express, MongoDB).
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        My approach combines technical expertise with an eye for design, ensuring the products I build are both functional and beautiful.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-calendar-alt text-primary"></i>
                            <span class="text-gray-600 dark:text-gray-300">5+ Years Experience</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-project-diagram text-primary"></i>
                            <span class="text-gray-600 dark:text-gray-300">50+ Projects</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-graduation-cap text-primary"></i>
                            <span class="text-gray-600 dark:text-gray-300">Computer Science Degree</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            <span class="text-gray-600 dark:text-gray-300">San Francisco, CA</span>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-primary/10 rounded-full mr-4">
                                <i class="fas fa-code text-primary text-xl"></i>
                            </div>
                            <h4 class="text-xl font-semibold">Web Development</h4>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300">
                            Building responsive, performant web applications with modern frameworks and best practices.
                        </p>
                    </div>
                    <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-primary/10 rounded-full mr-4">
                                <i class="fas fa-paint-brush text-primary text-xl"></i>
                            </div>
                            <h4 class="text-xl font-semibold">UI/UX Design</h4>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300">
                            Creating intuitive user interfaces with a focus on accessibility and user experience.
                        </p>
                    </div>
                    <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-primary/10 rounded-full mr-4">
                                <i class="fas fa-mobile-alt text-primary text-xl"></i>
                            </div>
                            <h4 class="text-xl font-semibold">Mobile Apps</h4>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300">
                            Developing cross-platform mobile applications using React Native and Flutter.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50 dark:bg-dark-950">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">My <span class="gradient-text">Skills</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-purple-500 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Skill Category 1 -->
                <div class="bg-white dark:bg-dark-800 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="p-3 bg-primary/10 rounded-full mr-4">
                            <i class="fas fa-laptop-code text-primary text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Frontend</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">HTML/CSS</span>
                                <span class="text-gray-500">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">JavaScript</span>
                                <span class="text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">React.js</span>
                                <span class="text-gray-500">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">Tailwind CSS</span>
                                <span class="text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skill Category 2 -->
                <div class="bg-white dark:bg-dark-800 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="p-3 bg-primary/10 rounded-full mr-4">
                            <i class="fas fa-server text-primary text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Backend</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">Node.js</span>
                                <span class="text-gray-500">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">Express</span>
                                <span class="text-gray-500">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">MongoDB</span>
                                <span class="text-gray-500">75%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">REST APIs</span>
                                <span class="text-gray-500">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skill Category 3 -->
                <div class="bg-white dark:bg-dark-800 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="p-3 bg-primary/10 rounded-full mr-4">
                            <i class="fas fa-tools text-primary text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold">Others</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">Git</span>
                                <span class="text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">Figma</span>
                                <span class="text-gray-500">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">Docker</span>
                                <span class="text-gray-500">70%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-600 dark:text-gray-300">AWS</span>
                                <span class="text-gray-500">65%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white dark:bg-dark-900">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Featured <span class="gradient-text">Projects</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-purple-500 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="E-commerce Dashboard" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold mb-2">E-commerce Dashboard</h3>
                            <p class="text-gray-200 mb-4">Advanced analytics dashboard for online stores with real-time data visualization.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-primary/20 text-primary text-xs rounded-full">React</span>
                                <span class="px-3 py-1 bg-primary/20 text-primary text-xs rounded-full">Node.js</span>
                                <span class="px-3 py-1 bg-primary/20 text-primary text-xs rounded-full">MongoDB</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-dark-800 p-6">
                        <h3 class="text-lg font-semibold mb-2">E-commerce Dashboard</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">Advanced analytics platform for online retailers</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" 
                             alt="Health Tracker App" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold mb-2">Health Tracker App</h3>
                            <p class="text-gray-200 mb-4">Mobile application for tracking fitness metrics and health goals.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-primary/20 text-primary text-xs rounded-full">React Native</span>
                                <span class="px-3 py-1 bg-primary/20 text-primary text-xs rounded-full">Firebase</span>
                                <span class="px-3 py-1 bg-primary/20 text-primary text-xs rounded-full">Redux</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-dark-800 p-6">
                        <h3 class="text-lg font-semibold mb-2">Health Tracker App</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">Fitness and wellness tracking mobile application</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Task Management System" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold mb-2">Task Management System</h3>
                            <p class="text-gray-200 mb-4">Collaborative project management tool with team features.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-primary/20 text-primary text-xs rounded-full">Vue.js</span>
                                <span class="px-3 py-1 bg-primary/20 text-primary text-xs rounded-full">Express</span>
                                <span class="px-3 py-1 bg-primary/20 text-primary text-xs rounded-full">PostgreSQL</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-dark-800 p-6">
                        <h3 class="text-lg font-semibold mb-2">Task Management System</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">Team collaboration and productivity platform</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-dark-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors hover:bg-gray-100 dark:hover:bg-dark-800">
                    View All Projects
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 dark:bg-dark-950">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Get In <span class="gradient-text">Touch</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-purple-500 mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Let's talk about your project</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        I'm currently available for freelance work or full-time positions. If you have a project that needs creative expertise or just want to chat, feel free to reach out!
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="p-3 bg-primary/10 rounded-full">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900 dark:text-white">Email</h4>
                                <a href="mailto:john.doe@example.com" class="text-gray-600 dark:text-gray-300 hover:text-primary transition-colors">john.doe@example.com</a>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="p-3 bg-primary/10 rounded-full">
                                <i class="fas fa-phone-alt text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900 dark:text-white">Phone</h4>
                                <a href="tel:+1234567890" class="text-gray-600 dark:text-gray-300 hover:text-primary transition-colors">+1 (234) 567-890</a>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="p-3 bg-primary/10 rounded-full">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900 dark:text-white">Location</h4>
                                <p class="text-gray-600 dark:text-gray-300">San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-dark-800 p-8 rounded-xl shadow-sm">
                    <form>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Name</label>
                                <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-dark-700 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark-900 dark:text-white">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-dark-700 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark-900 dark:text-white">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Subject</label>
                                <input type="text" id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-dark-700 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark-900 dark:text-white">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Message</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-dark-700 focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-dark-900 dark:text-white"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="w-full px-6 py-3 bg-primary hover:bg-blue-700 text-white font-medium rounded-lg transition-colors shadow-md hover:shadow-lg">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-white dark:bg-dark-900 border-t border-gray-100 dark:border-dark-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="text-xl font-bold text-primary dark:text-white">John Doe<span class="text-gray-600 dark:text-gray-300">.</span></a>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">Full Stack Developer & UI Designer</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                        <i class="fab fa-dribbble text-xl"></i>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-100 dark:border-dark-800 mt-8 pt-8 text-center text-gray-500 dark:text-gray-400">
                <p>&copy; 2023 John Doe. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Theme Toggle Script -->
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;

        // Check for saved user preference or use system preference
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }

        // Toggle theme on button click
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });
    </script>
</body>
</html>