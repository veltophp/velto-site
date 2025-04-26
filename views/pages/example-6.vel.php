<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarkdownParser | Documentation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6', // Blue-500
                        dark: {
                            800: '#1E293B',
                            900: '#0F172A',
                            950: '#020617'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['Fira Code', 'monospace']
                    },
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(90deg, #3B82F6, #8B5CF6);
        }
        .code-block {
            font-family: 'Fira Code', monospace;
            background-color: #1E293B;
            color: #F8FAFC;
            border-radius: 0.5rem;
            padding: 1rem;
            overflow-x: auto;
        }
        .sidebar-link:hover {
            color: #3B82F6;
            background-color: #EFF6FF;
        }
        .dark .sidebar-link:hover {
            background-color: #1E3A8A;
        }
        .content h2 {
            scroll-margin-top: 6rem;
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
                <a href="#" class="text-xl font-bold text-gray-900 dark:text-white">Markdown<span class="gradient-text">Parser</span></a>
            </div>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#getting-started" class="hover:text-primary transition-colors">Docs</a>
                <a href="#examples" class="hover:text-primary transition-colors">Examples</a>
                <a href="#api" class="hover:text-primary transition-colors">API</a>
                <a href="https://github.com/yourusername/markdown-parser" class="hover:text-primary transition-colors">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#contact" class="px-4 py-2 bg-primary hover:bg-blue-700 text-white font-medium rounded-lg transition-colors">
                    Download v2.1.0
                </a>
            </div>
            <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-dark-800">
                <i class="fas fa-moon dark:hidden"></i>
                <i class="fas fa-sun hidden dark:block"></i>
            </button>
        </div>
    </nav>

    <div class="flex pt-16">
        <!-- Sidebar -->
        <aside class="hidden md:block w-64 h-screen sticky top-16 border-r border-gray-200 dark:border-dark-800 overflow-y-auto">
            <div class="p-6">
                <div class="mb-8">
                    <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-4">Getting Started</h3>
                    <ul class="space-y-2">
                        <li><a href="#installation" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Installation</a></li>
                        <li><a href="#basic-usage" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Basic Usage</a></li>
                        <li><a href="#configuration" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Configuration</a></li>
                    </ul>
                </div>
                
                <div class="mb-8">
                    <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-4">Features</h3>
                    <ul class="space-y-2">
                        <li><a href="#headers" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Headers</a></li>
                        <li><a href="#lists" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Lists</a></li>
                        <li><a href="#tables" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Tables</a></li>
                        <li><a href="#code-blocks" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Code Blocks</a></li>
                        <li><a href="#custom-components" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Custom Components</a></li>
                    </ul>
                </div>
                
                <div class="mb-8">
                    <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-4">API Reference</h3>
                    <ul class="space-y-2">
                        <li><a href="#parser-options" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Parser Options</a></li>
                        <li><a href="#extensions" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Extensions</a></li>
                        <li><a href="#plugins" class="sidebar-link block px-3 py-2 rounded-md transition-colors">Plugins</a></li>
                    </ul>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 md:p-12">
            <div class="max-w-3xl mx-auto content">
                <!-- Getting Started -->
                <section id="getting-started" class="mb-16">
                    <h1 class="text-3xl md:text-4xl font-bold mb-6">MarkdownParser Documentation</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
                        A lightweight, extensible Markdown to HTML parser with syntax highlighting and custom component support.
                    </p>
                    
                    <div id="installation" class="mb-12">
                        <h2 class="text-2xl font-bold mb-4 flex items-center">
                            <span class="w-6 h-1 bg-primary mr-4"></span>
                            Installation
                        </h2>
                        <p class="mb-4">Install via npm:</p>
                        <div class="code-block mb-6">
                            <span class="text-blue-400">npm</span> install markdown-parser
                        </div>
                        <p class="mb-4">Or include directly in your HTML:</p>
                        <div class="code-block">
                            <span class="text-blue-400">&lt;script</span> <span class="text-green-400">src=</span><span class="text-yellow-400">"https://cdn.jsdelivr.net/npm/markdown-parser@2.1.0/dist/markdown.min.js"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span>
                        </div>
                    </div>
                    
                    <div id="basic-usage" class="mb-12">
                        <h2 class="text-2xl font-bold mb-4 flex items-center">
                            <span class="w-6 h-1 bg-primary mr-4"></span>
                            Basic Usage
                        </h2>
                        <p class="mb-4">Convert Markdown to HTML with a simple function call:</p>
                        <div class="code-block mb-6">
                            <span class="text-blue-400">const</span> <span class="text-purple-400">markdown</span> = <span class="text-yellow-400">'# Hello World\nThis is **Markdown**'</span>;<br>
                            <span class="text-blue-400">const</span> <span class="text-purple-400">html</span> = <span class="text-green-400">MarkdownParser</span>.<span class="text-yellow-400">parse</span>(markdown);<br>
                            <span class="text-green-400">console</span>.<span class="text-yellow-400">log</span>(html);
                        </div>
                        <p class="mb-2">Output:</p>
                        <div class="code-block">
                            <span class="text-blue-400">&lt;h1&gt;</span>Hello World<span class="text-blue-400">&lt;/h1&gt;</span><br>
                            <span class="text-blue-400">&lt;p&gt;</span>This is <span class="text-blue-400">&lt;strong&gt;</span>Markdown<span class="text-blue-400">&lt;/strong&gt;</span><span class="text-blue-400">&lt;/p&gt;</span>
                        </div>
                    </div>
                </section>
                
                <!-- Features -->
                <section id="features" class="mb-16">
                    <h2 class="text-3xl font-bold mb-8">Features</h2>
                    
                    <div id="headers" class="mb-12">
                        <h3 class="text-xl font-bold mb-4">Headers</h3>
                        <p class="mb-4">Supports all standard Markdown headers:</p>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <p class="font-medium mb-2">Markdown:</p>
                                <div class="code-block">
                                    <span class="text-gray-500"># H1</span><br>
                                    <span class="text-gray-500">## H2</span><br>
                                    <span class="text-gray-500">### H3</span><br>
                                    <span class="text-gray-500">#### H4</span>
                                </div>
                            </div>
                            <div>
                                <p class="font-medium mb-2">HTML Output:</p>
                                <div class="code-block">
                                    <span class="text-blue-400">&lt;h1&gt;</span>H1<span class="text-blue-400">&lt;/h1&gt;</span><br>
                                    <span class="text-blue-400">&lt;h2&gt;</span>H2<span class="text-blue-400">&lt;/h2&gt;</span><br>
                                    <span class="text-blue-400">&lt;h3&gt;</span>H3<span class="text-blue-400">&lt;/h3&gt;</span><br>
                                    <span class="text-blue-400">&lt;h4&gt;</span>H4<span class="text-blue-400">&lt;/h4&gt;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="code-blocks" class="mb-12">
                        <h3 class="text-xl font-bold mb-4">Code Blocks</h3>
                        <p class="mb-4">Syntax highlighting for code blocks with language specification:</p>
                        <div class="code-block mb-6">
                            <span class="text-gray-500">```javascript</span><br>
                            <span class="text-blue-400">function</span> <span class="text-yellow-400">hello</span>() {<br>
                            &nbsp;&nbsp;<span class="text-green-400">console</span>.<span class="text-yellow-400">log</span>(<span class="text-yellow-400">'Hello World'</span>);<br>
                            }<br>
                            <span class="text-gray-500">```</span>
                        </div>
                        <p class="mb-2">HTML Output:</p>
                        <div class="code-block">
                            <span class="text-blue-400">&lt;pre&gt;&lt;code</span> <span class="text-green-400">class=</span><span class="text-yellow-400">"language-javascript"</span><span class="text-blue-400">&gt;</span><br>
                            &lt;span class="token keyword"&gt;function&lt;/span&gt; &lt;span class="token function"&gt;hello&lt;/span&gt;&lt;span class="token punctuation"&gt;(&lt;/span&gt;&lt;span class="token punctuation"&gt;)&lt;/span&gt; &lt;span class="token punctuation"&gt;{&lt;/span&gt;<br>
                            &nbsp;&nbsp;&lt;span class="token console class-name"&gt;console&lt;/span&gt;&lt;span class="token punctuation"&gt;.&lt;/span&gt;&lt;span class="token method"&gt;log&lt;/span&gt;&lt;span class="token punctuation"&gt;(&lt;/span&gt;&lt;span class="token string"&gt;'Hello World'&lt;/span&gt;&lt;span class="token punctuation"&gt;)&lt;/span&gt;&lt;span class="token punctuation"&gt;;&lt;/span&gt;<br>
                            &lt;span class="token punctuation"&gt;}&lt;/span&gt;<br>
                            <span class="text-blue-400">&lt;/code&gt;&lt;/pre&gt;</span>
                        </div>
                    </div>
                </section>
                
                <!-- API Reference -->
                <section id="api">
                    <h2 class="text-3xl font-bold mb-8">API Reference</h2>
                    
                    <div id="parser-options" class="mb-12">
                        <h3 class="text-xl font-bold mb-4">Parser Options</h3>
                        <p class="mb-4">Customize the parser behavior with options:</p>
                        <div class="code-block mb-6">
                            <span class="text-blue-400">const</span> <span class="text-purple-400">options</span> = {<br>
                            &nbsp;&nbsp;<span class="text-green-400">breaks</span>: <span class="text-blue-400">true</span>, <span class="text-gray-500">// Convert newlines to &lt;br&gt;</span><br>
                            &nbsp;&nbsp;<span class="text-green-400">linkify</span>: <span class="text-blue-400">true</span>, <span class="text-gray-500">// Automatically convert URLs to links</span><br>
                            &nbsp;&nbsp;<span class="text-green-400">highlight</span>: <span class="text-blue-400">function</span>(code, lang) {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">if</span> (<span class="text-green-400">hljs</span>.<span class="text-yellow-400">getLanguage</span>(lang)) {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">return</span> <span class="text-green-400">hljs</span>.<span class="text-yellow-400">highlight</span>(lang, code).<span class="text-yellow-400">value</span>;<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">return</span> code;<br>
                            &nbsp;&nbsp;}<br>
                            };
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="py-12 bg-white dark:bg-dark-900 border-t border-gray-100 dark:border-dark-800">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-500 hover:text-primary transition-colors">
                    <i class="fab fa-discord"></i>
                </a>
            </div>
            <p class="text-gray-600 dark:text-gray-400">
                &copy; 2023 MarkdownParser. MIT Licensed.
            </p>
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