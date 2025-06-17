@extends('layouts.app')

@section('title')
    Velto PHP Framework | Fast & Minimalist RVC-Powered Web Development
@endsection

@section('content')
<div class="container mx-auto px-4 pt-32 max-w-6xl text-center">
    <div class="text-center text-sm text-gray-700 dark:text-gray-300 py-6 px-4">
        <span class="italic">Bug report, contribution, or donation</span> — email us at 
        <a href="mailto:dev@veltophp.com" class="underline text-red-600 dark:text-red-400 hover:text-red-500">dev@veltophp.com</a>
    </div>  
    <!-- Hero Section -->
    <section class="mb-28">
        <h1 class="text-4xl md:text-6xl font-light text-gray-900 dark:text-gray-100 mb-6 leading-tight tracking-tight">
            Build Web Apps <span class="font-semibold text-red-500">Faster</span> with <span class="text-gray-800 dark:text-white">VeltoPHP</span>
        </h1>
        
        <p class="md:text-xl text-gray-600 dark:text-gray-400 max-w-4xl mx-auto mb-10">
            A blazing fast, minimalist PHP framework built on a modern and flexible 
            <strong class="text-gray-800 dark:text-white">RVC / MVC architecture</strong>. Start simple, scale when needed.
        </p>
        <div class="flex justify-center gap-4 flex-wrap">
            <a href="{{route('docs')}}" class="px-7 py-3 rounded-full text-white bg-gradient-to-r from-red-500 to-purple-600 font-medium hover:scale-105 transition-transform shadow-lg">
                Get Started
            </a>
            <a href="https://github.com/veltophp" target="_blank" class="px-7 py-3 rounded-full border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-colors">
                <i class="fab fa-github mr-2"></i> GitHub
            </a>
        </div>
        <div class="text-2xl sm:text-2xl font-light my-12 border border-gray-300 dark:border-gray-600 max-w-xs p-4 rounded-full mx-auto">
            Version <span class="font-semibold text-red-500 dark:text-red-400">1.1.x</span>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 border-t border-gray-200 dark:border-gray-700">
        <h2 class="text-3xl font-light text-gray-900 dark:text-white mb-14">
            Why <span class="text-red-600 dark:text-red-500 font-medium">VeltoPHP</span>?
        </h2>
        <div class="grid md:grid-cols-3 gap-12 text-center">
            <div>
                <div class="mb-5 text-red-500 dark:text-red-400">
                    <i class="fas fa-rocket text-4xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-3">Ultra Lightweight</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Velto's core is under 1MB. No bloat. Just speed and precision.</p>
            </div>
            <div>
                <div class="mb-5 text-purple-500 dark:text-purple-400">
                    <i class="fas fa-cube text-4xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-3">Modern RVC First</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Route-View-Controller structure that's faster to prototype and easier to maintain.</p>
            </div>
            <div>
                <div class="mb-5 text-blue-500 dark:text-blue-400">
                    <i class="fas fa-puzzle-piece text-4xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-3">Power Up with Axion</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Need MVC, migrations, auth, admin panel? Axion scales your stack instantly.</p>
            </div>
        </div>
    </section>
</div>
<div class="relative bg-gray-50 dark:bg-gray-900 m-4 p-5 rounded-xl my-12 text-center max-w-3xl mx-auto italic">
    <svg class="absolute top-4 left-4 w-10 h-10 text-gray-300 dark:text-gray-600 transform -rotate-12" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path d="M9 11H7a5 5 0 0 1 5-5V4a7 7 0 0 0-7 7v4h4v-4zm10 0h-2a5 5 0 0 1 5-5V4a7 7 0 0 0-7 7v4h4v-4z"/>
    </svg>
    <p class="mx-5 text-gray-700 dark:text-gray-300 leading-relaxed">
        “Don’t bring a truck when all you need is a bag. Use the tool that fits your purpose.” - <span class="font-semibold">VeltoPHP</span>
    </p>
</div>
@endsection
