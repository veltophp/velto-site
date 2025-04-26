<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Doe | Professional Resume</title>
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
        .timeline-item:not(:last-child)::after {
            content: '';
            position: absolute;
            left: 6px;
            top: 24px;
            height: calc(100% - 16px);
            width: 2px;
            background: #E5E7EB;
            z-index: 1;
        }
        .dark .timeline-item:not(:last-child)::after {
            background: #334155;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-dark-950 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Floating Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 dark:bg-dark-900/80 backdrop-blur-md border-b border-gray-100 dark:border-dark-800">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-primary dark:text-white">JD<span class="text-gray-600 dark:text-gray-300">.</span></a>
            <div class="hidden md:flex space-x-8">
                <a href="#summary" class="hover:text-primary transition-colors">Summary</a>
                <a href="#experience" class="hover:text-primary transition-colors">Experience</a>
                <a href="#education" class="hover:text-primary transition-colors">Education</a>
                <a href="#skills" class="hover:text-primary transition-colors">Skills</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="/path/to/john-doe-resume.pdf" download class="px-4 py-2 bg-primary hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors flex items-center">
                    <i class="fas fa-download mr-2"></i> Download PDF
                </a>
                <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-dark-800">
                    <i class="fas fa-moon dark:hidden"></i>
                    <i class="fas fa-sun hidden dark:block"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-white dark:border-dark-800 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=400&q=80" 
                         alt="John Doe" 
                         class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <h1 class="text-4xl md:text-5xl font-bold mb-2">John Doe</h1>
                    <h2 class="text-2xl text-gray-600 dark:text-gray-300 mb-4">Senior Full Stack Developer</h2>
                    <div class="flex flex-wrap gap-4 text-gray-600 dark:text-gray-400">
                        <div class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-primary"></i>
                            john.doe@example.com
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt mr-2 text-primary"></i>
                            +1 (234) 567-8900
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                            San Francisco, CA
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Summary Section -->
    <section id="summary" class="py-12 bg-white dark:bg-dark-900">
        <div class="max-w-6xl mx-auto px-6">
            <div class="mb-8">
                <h2 class="text-3xl font-bold mb-4 flex items-center">
                    <span class="w-8 h-1 bg-primary mr-4"></span>
                    Professional Summary
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed max-w-4xl">
                    Results-driven Full Stack Developer with 7+ years of experience designing and implementing scalable web applications. 
                    Specialized in JavaScript technologies across the stack with expertise in React, Node.js, and cloud architecture. 
                    Passionate about creating efficient, user-friendly solutions that drive business growth.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 flex items-center">
                        <i class="fas fa-bullseye text-primary mr-3"></i>
                        Key Strengths
                    </h3>
                    <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            Full stack development
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            System architecture
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            Team leadership
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            Agile methodology
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 flex items-center">
                        <i class="fas fa-trophy text-primary mr-3"></i>
                        Achievements
                    </h3>
                    <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-400 mt-1 mr-2"></i>
                            Reduced system latency by 40%
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-400 mt-1 mr-2"></i>
                            Led team of 8 developers
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-400 mt-1 mr-2"></i>
                            5+ successful product launches
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 flex items-center">
                        <i class="fas fa-paperclip text-primary mr-3"></i>
                        Quick Links
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="#" class="px-3 py-1 bg-primary/10 text-primary text-sm rounded-full flex items-center">
                            <i class="fab fa-github mr-2"></i> GitHub
                        </a>
                        <a href="#" class="px-3 py-1 bg-primary/10 text-primary text-sm rounded-full flex items-center">
                            <i class="fab fa-linkedin mr-2"></i> LinkedIn
                        </a>
                        <a href="#" class="px-3 py-1 bg-primary/10 text-primary text-sm rounded-full flex items-center">
                            <i class="fas fa-globe mr-2"></i> Portfolio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-12 bg-gray-50 dark:bg-dark-950">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 flex items-center">
                <span class="w-8 h-1 bg-primary mr-4"></span>
                Work Experience
            </h2>
            
            <div class="space-y-8">
                <!-- Experience 1 -->
                <div class="timeline-item relative pl-8">
                    <div class="absolute left-0 w-4 h-4 bg-primary rounded-full z-10"></div>
                    <div class="bg-white dark:bg-dark-800 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
                            <h3 class="text-xl font-semibold">Senior Full Stack Developer</h3>
                            <div class="text-primary font-medium">TechSolutions Inc. • 2020 - Present</div>
                        </div>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600 dark:text-gray-300">
                            <li>Lead a team of 8 developers in building scalable SaaS applications</li>
                            <li>Architected and implemented microservices infrastructure reducing latency by 40%</li>
                            <li>Mentored junior developers and established coding standards</li>
                            <li>Implemented CI/CD pipelines reducing deployment time by 65%</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Experience 2 -->
                <div class="timeline-item relative pl-8">
                    <div class="absolute left-0 w-4 h-4 bg-primary rounded-full z-10"></div>
                    <div class="bg-white dark:bg-dark-800 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
                            <h3 class="text-xl font-semibold">Full Stack Developer</h3>
                            <div class="text-primary font-medium">Digital Innovations • 2017 - 2020</div>
                        </div>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600 dark:text-gray-300">
                            <li>Developed 15+ client web applications using React and Node.js</li>
                            <li>Optimized database queries improving performance by 30%</li>
                            <li>Implemented automated testing reducing bugs by 25%</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Experience 3 -->
                <div class="timeline-item relative pl-8">
                    <div class="absolute left-0 w-4 h-4 bg-primary rounded-full z-10"></div>
                    <div class="bg-white dark:bg-dark-800 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
                            <h3 class="text-xl font-semibold">Frontend Developer</h3>
                            <div class="text-primary font-medium">WebCraft Studios • 2015 - 2017</div>
                        </div>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600 dark:text-gray-300">
                            <li>Built responsive UIs for 20+ client projects</li>
                            <li>Collaborated with designers to implement pixel-perfect interfaces</li>
                            <li>Improved page load speed by 50% through optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-12 bg-white dark:bg-dark-900">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 flex items-center">
                <span class="w-8 h-1 bg-primary mr-4"></span>
                Education
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-semibold">Master of Computer Science</h3>
                            <p class="text-primary">Stanford University</p>
                        </div>
                        <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">2013 - 2015</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">
                        Specialized in Artificial Intelligence and Distributed Systems. Thesis on "Optimizing Neural Networks for Edge Devices".
                    </p>
                </div>
                
                <div class="bg-gray-50 dark:bg-dark-800 p-6 rounded-lg">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-semibold">Bachelor of Software Engineering</h3>
                            <p class="text-primary">University of California</p>
                        </div>
                        <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">2009 - 2013</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">
                        Graduated with Honors. Minor in Human-Computer Interaction. President of Computer Science Club.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-12 bg-gray-50 dark:bg-dark-950">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 flex items-center">
                <span class="w-8 h-1 bg-primary mr-4"></span>
                Technical Skills
            </h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Technical Skills -->
                <div class="bg-white dark:bg-dark-800 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold mb-4 flex items-center">
                        <i class="fas fa-code text-primary mr-3"></i>
                        Languages & Frameworks
                    </h3>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>JavaScript/TypeScript</span>
                                <span class="text-gray-500">Expert</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>React/Next.js</span>
                                <span class="text-gray-500">Expert</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Node.js/Express</span>
                                <span class="text-gray-500">Advanced</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tools -->
                <div class="bg-white dark:bg-dark-800 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold mb-4 flex items-center">
                        <i class="fas fa-tools text-primary mr-3"></i>
                        Tools & Platforms
                    </h3>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Git/GitHub</span>
                                <span class="text-gray-500">Expert</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>AWS</span>
                                <span class="text-gray-500">Advanced</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Docker/Kubernetes</span>
                                <span class="text-gray-500">Intermediate</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Soft Skills -->
                <div class="bg-white dark:bg-dark-800 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold mb-4 flex items-center">
                        <i class="fas fa-comments text-primary mr-3"></i>
                        Professional Skills
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full">Team Leadership</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full">Agile Methodology</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full">Technical Writing</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full">Mentoring</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full">Problem Solving</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-white dark:bg-dark-900 border-t border-gray-100 dark:border-dark-800">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <p class="text-gray-600 dark:text-gray-400">
                &copy; 2023 John Doe. All rights reserved.
            </p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white transition-colors">
                    <i class="fab fa-twitter"></i>
                </a>
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