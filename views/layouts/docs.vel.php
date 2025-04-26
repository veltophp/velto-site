<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VeltoPHP Framework | Fast & Minimalist RVC-Powered Web Development.')</title>
    <link rel="icon" href="https://res.cloudinary.com/dmnble1qr/image/upload/v1744859332/velto_zfond5.png" type="image/png">
    <meta name="description" content="Velto is a lightweight PHP framework built with the RVC (Route-View-Controller) pattern. Ideal for building fast, static, and simple web applications — no database required.">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @css_link
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="/assets/js/dark-thema.js" defer></script>
    <!-- watch auto reload -->
    <script src="/assets/js/watch.js"></script>
    <!-- aditional script   -->
    <script src="/assets/js/script.js" defer></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    },
                    colors: {
                        dark: {
                            50: '#f9fafb',
                            100: '#f3f4f6',
                            200: '#e5e7eb',
                            300: '#d1d5db',
                            400: '#9ca3af',
                            500: '#6b7280',
                            600: '#4b5563',
                            700: '#374151',
                            800: '#1f2937',
                            900: '#111827',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <!-- Top Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 border-b border-gray-200 dark:border-gray-800 bg-white/95 dark:bg-gray-900/95 backdrop-blur">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <!-- Logo - Kiri (tetap di posisi saat scroll) -->
                <div class="">
                    <a href="/" class="text-xl font-bold text-primary-light dark:text-primary-dark whitespace-nowrap">VeltoPHP | Docs </a>
                </div>
                
                <!-- Menu - Kanan -->
                <div class="absolute right-4 sm:static flex items-center space-x-4">
                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-6">
                        <a href="/docs/home" class="text-sm font-medium hover:text-primary-light dark:hover:text-primary-dark whitespace-nowrap transition-colors">Documentation</a>
                        <a href="https://github.com/veltophp/velto" target="_blank" class="text-sm font-medium hover:text-primary-light dark:hover:text-primary-dark whitespace-nowrap transition-colors">GitHub</a>
                    </div>
                    
                    <!-- Theme Toggle Button -->
                    <button id="themeToggle" class="p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path class="block dark:hidden" d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                            <path class="hidden dark:block" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"/>
                        </svg>
                    </button>
                    
                    <!-- Mobile Menu Button -->
                    <button id="mobileMenuButton" class="md:hidden p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Spacer untuk konten di bawah fixed header -->
    <div class="h-16"></div>

    <!-- Main Content -->
    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-30 w-64 h-screen pt-16 overflow-y-auto transition-transform duration-300 transform -translate-x-full bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 md:translate-x-0">
            <div class="px-4 py-4">
                <div class="space-y-1" id="navContainer">
                    <h3 class="px-3 text-sm py-4 font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Getting Started</h3>
                    <a href="/docs/home" class="nav-link block px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-100 dark:hover:bg-gray-700" data-path="/docs/home">What's is Velto</a>
                    <a href="/docs/pre-requisites" class="nav-link block px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-100 dark:hover:bg-gray-700" data-path="/docs/pre-requisites">Pre Requisites</a>
                    <a href="/docs/installation" class="nav-link block px-3 py-2 text-sm font-medium rounded-md hover:bg-gray-100 dark:hover:bg-gray-700" data-path="/docs/installation">Installing Velto</a>
                </div>

                <script>
                    // Efficient active link highlighting
                    document.addEventListener('DOMContentLoaded', () => {
                        const currentPath = window.location.pathname;
                        document.querySelectorAll('#navContainer .nav-link').forEach(link => {
                            const linkPath = link.getAttribute('data-path');
                            const isActive = currentPath === linkPath || 
                                        (linkPath !== '/' && currentPath.startsWith(linkPath));
                            
                            link.classList.toggle('bg-gray-100', isActive);
                            link.classList.toggle('dark:bg-gray-700', isActive);
                            link.classList.toggle('text-primary-light', isActive);
                            link.classList.toggle('dark:text-primary-dark', isActive);
                            link.classList.toggle('hover:bg-gray-100', !isActive);
                            link.classList.toggle('dark:hover:bg-gray-700', !isActive);
                        });
                    });
                </script>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 pt-4 md:ml-64">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="max-w-4xl mx-auto">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 z-20 bg-black bg-opacity-50 hidden"></div>

    <script>
        // Toggle mobile menu
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');
        
        mobileMenuButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            mobileOverlay.classList.toggle('hidden');
        });
        
        mobileOverlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            mobileOverlay.classList.add('hidden');
        });
        
         // Theme Toggle Logic
        document.getElementById('themeToggle').addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        });

        // Initialize theme
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
        }
    </script>
</body>
</html>