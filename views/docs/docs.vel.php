@extends('layouts.app')

@section('title')
    Docs | Velto PHP Framework | Fast & Minimalist RVC-Powered Web Development
@endsection

@section('content')
    <section class="py-36 bg-white dark:bg-dark-900">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-light text-gray-900 dark:text-white mb-6">
                <span class="text-red-600 dark:text-red-500">VeltoPHP</span> Documentation
            </h1>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                Learn how to build fast, modern PHP applications using Velto's minimalist RVC and optional MVC architecture.
            </p>
        </div>
    </section>

    <section class="py-12 border-t border-gray-100 dark:border-gray-700 bg-white dark:bg-dark-900">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Getting Started -->
                <div class="bg-white dark:bg-dark-800 rounded-xl border border-gray-200 dark:border-dark-700 shadow-sm p-8">
                    <h2 class="text-xl font-medium text-gray-900 dark:text-white mb-4">Getting Started With VeltoPHP</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Learn how to install VeltoPHP, run the dev server, and understand its folder structure.
                    </p>
                    <a href="{{route('docs.welcome', ['folder' => '01.prologue', 'file' => '01.1.welcome'])}}" class="text-red-600 dark:text-red-400 font-medium hover:underline">
                        Your code start here →
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
