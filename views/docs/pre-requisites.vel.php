@extends('layouts.docs')

@section('title')
    Documentation | VeltoPHP | Version 1.x | Pre Requisites
@endsection

@section('content')

    <div class="docs-section">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">📋 Get Started | Pre-requisites</h2>
        
        <p class="mb-6 text-gray-600 dark:text-gray-400">
            Before installing VeltoPHP, make sure your development environment meets these requirements:
        </p>
        
        <div class="space-y-4">
            <!-- PHP Requirement -->
            <div class="flex items-start">
                <div class="flex-shrink-0 h-5 w-5 text-blue-500 dark:text-blue-400 mt-1">•</div>
                <div class="ml-2">
                    <h3 class="font-medium text-gray-800 dark:text-gray-200">PHP 8.1 or higher</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        VeltoPHP requires PHP 8.1+ for running the backend.
                        <a href="https://www.php.net/downloads" class="text-blue-500 dark:text-blue-400 hover:underline ml-1">Download PHP</a>
                    </p>
                </div>
            </div>
            
            <!-- Composer Requirement -->
            <div class="flex items-start">
                <div class="flex-shrink-0 h-5 w-5 text-blue-500 dark:text-blue-400 mt-1">•</div>
                <div class="ml-2">
                    <h3 class="font-medium text-gray-800 dark:text-gray-200">Composer 2</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Required for dependency management.
                        <a href="https://getcomposer.org/download/" class="text-blue-500 dark:text-blue-400 hover:underline ml-1">Download Composer</a>
                    </p>
                </div>
            </div>
            
            <!-- Text Editor/IDE -->
            <div class="flex items-start">
                <div class="flex-shrink-0 h-5 w-5 text-blue-500 dark:text-blue-400 mt-1">•</div>
                <div class="ml-2">
                    <h3 class="font-medium text-gray-800 dark:text-gray-200">Code Editor</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Recommended editors:
                        <a href="https://code.visualstudio.com" class="text-blue-500 dark:text-blue-400 hover:underline ml-1">VS Code</a>,
                        <a href="https://www.jetbrains.com/phpstorm/" class="text-blue-500 dark:text-blue-400 hover:underline">PHPStorm</a>, or
                        <a href="https://www.sublimetext.com/" class="text-blue-500 dark:text-blue-400 hover:underline">Sublime Text</a>
                    </p>
                </div>
            </div>

            <!-- PHP Basic -->
            <div class="flex items-start">
                <div class="flex-shrink-0 h-5 w-5 text-blue-500 dark:text-blue-400 mt-1">•</div>
                <div class="ml-2">
                    <h3 class="font-medium text-gray-800 dark:text-gray-200">PHP Basics</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        To use VeltoPHP effectively, you should have a basic understanding of PHP. This includes variables, functions, arrays, control structures (if, foreach), and how PHP handles routing and templating.
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 mt-6">
                        If you're new to PHP, consider reviewing the basics at
                        <a href="https://www.php.net/manual/en/langref.php" class="text-blue-500 dark:text-blue-400 hover:underline">PHP Manual</a> or follow beginner tutorials like 
                        <a href="https://www.learn-php.org/" class="text-blue-500 dark:text-blue-400 hover:underline">Learn PHP</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="my-8 py-2 flex justify-between bg-gray-200 dark:bg-gray-700 rounded-lg">
        <!-- Previous Button -->
        <a href="/docs/home" class="hover:text-blue-500 dark:hover:text-blue-400 mx-4 transition-colors duration-200 flex items-center font-semibold text-gray-700 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Previous
        </a>
        
        <!-- Next Button -->
        <a href="/docs/installation" class="hover:text-blue-500 dark:hover:text-blue-400 mx-4 transition-colors duration-200 flex items-center font-semibold text-gray-700 dark:text-gray-300">
            Next
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>

@endsection