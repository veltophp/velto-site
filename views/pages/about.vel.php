@extends('layouts.app')

@section('title')
    Velto | About VeltoPHP
@endsection

@section('content')

<section class="min-h-screen flex items-center justify-center dark:bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 mt-12">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <!-- Left Column - About Content -->
        <div class="space-y-8">
            <div>
                <span class="inline-block px-3 py-1 text-sm font-medium text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/30 rounded-full mb-4">
                    About VeltoPHP
                </span>
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Velto PHP Framework | Fast & Minimalist RVC-Powered Web Development.
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300">
                    VeltoPHP is a lightweight, high-performance framework designed to simplify web development while maintaining flexibility and power.
                </p>
            </div>

            <div class="space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/30 p-3 rounded-lg">
                        <i class="fas fa-bolt text-blue-600 dark:text-blue-400 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Blazing Fast</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Velto is built with speed in mind — from routing to response times, everything is optimized to be as fast and efficient as possible.
                            Whether you're building APIs or full-stack web applications, performance will never be your bottleneck.
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/30 p-3 rounded-lg">
                        <i class="fas fa-feather-alt text-blue-600 dark:text-blue-400 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Lightweight by Design</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Velto avoids unnecessary dependencies and bloated libraries. The core is minimal yet powerful,
                            giving developers a solid foundation without forcing a heavy stack — perfect for custom architectures and scalability.
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/30 p-3 rounded-lg">
                        <i class="fas fa-layer-group text-blue-600 dark:text-blue-400 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">RVC Architecture</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            Inspired by simplicity and clarity, Velto embraces a Routing-View-Controller (RVC) pattern — 
                            offering clean separation of logic, presentation, and navigation. This helps teams move faster 
                            and maintain codebases more easily over time, without sacrificing flexibility.
                        </p>
                    </div>
                </div>
            </div>

            <div class="pt-4">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Our Mission</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    VeltoPHP was created to be a fast, lightweight PHP framework that doesn’t get in your way. 
                    Designed with simplicity at its core, Velto requires no database and minimal setup — 
                    making it ideal for static sites, APIs, and small-to-medium web projects. 
                    Our mission is to empower developers with just enough structure to move quickly without unnecessary complexity.
                </p>
            </div>
        </div>

        <!-- Right Column - Team/Stats -->
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-xl p-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">Why Choose VeltoPHP</h2>
            
            <!-- Top Row - 2 Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Left Card -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-800 p-6 rounded-xl border border-blue-100 dark:border-gray-700">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">100% Open Source</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Free to use and modify with active community support</p>
                </div>

                <!-- Right Card -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-800 p-6 rounded-xl border border-blue-100 dark:border-gray-700">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ultra Fast</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Optimized for speed with minimal resource usage</p>
                </div>
            </div>

            <!-- Bottom Row - 1 Wide Card -->
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-800 p-6 rounded-xl border border-blue-100 dark:border-gray-700">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Perfect for Modern Web</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Ideal for static sites, APIs, and modern web applications with clean architecture</p>
            </div>
        </div>
    </div>
</section>

@endsection