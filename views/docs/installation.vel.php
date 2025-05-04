@extends('layouts.docs')

@section('title')
    Documentation | VeltoPHP | Version 1.x | Velto Installation
@endsection

@section('content')

    <section class="installation">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">📦 Installation</h2>

        <p class="text-gray-700 dark:text-gray-300 mb-4">Get the Velto:</p>
        <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200 mb-4">composer create-project veltophp/velto my-project</pre>

        <p class="text-gray-700 dark:text-gray-300 mb-4">Open the project directory:</p>
        <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200 mb-4">cd my-project</pre>

        <p class="text-gray-700 dark:text-gray-300 mb-4">Update the vendor for latest patch version:</p>
        <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200 mb-4">composer update</pre>

        <p class="text-gray-700 dark:text-gray-300 mb-4">Run the local development server:</p>
        <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200 mb-4">php velto start</pre>
    </section>


    <section class="prose mt-8">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-300 mb-4">
            <i class="fa fa-arrow-right ml-1"></i> Why You Need to Run <span class="underline">composer update</span> After Installation
        </h2>

        <p class="text-gray-600 dark:text-gray-300 mb-4">
            When you create a new project using the command below, Composer copies all the files from the 
            veltophp/velto package into your project folder.
        </p>

        <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200 mb-4">composer create-project veltophp/velto my-project</pre>
        <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200 mb-4">composer update</pre>


        <p class="text-gray-600 dark:text-gray-300 mb-4">
            However, this process also includes a pre-generated 
            composer.lock file from the Velto repository.
            This file locks the exact versions of all dependencies, including 
            veltophp/velto-core.
        </p>

        <p class="text-gray-600 dark:text-gray-300 mb-4">
            The issue is that the composer.lock file may point to an older version of 
            velto-core, even if a newer version with bug fixes or improvements is available.
        </p>

        <p class="text-gray-600 dark:text-gray-300 mb-4">
            To ensure you're using the latest and most stable version of all dependencies (especially Velto Core),
            you <strong class="text-red-600">must run</strong> the 
            composer update command right after installation.
            This will fetch the most up-to-date packages according to your 
            composer.json configuration.
        </p>

        <p class="text-gray-600 dark:text-gray-300">
            By doing this, you'll start your project on a solid foundation with all the latest updates from the Velto development team.
        </p>
    </section>

    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mt-10 mb-4">🚀 Quick Start</h2>
    <p class="text-gray-600 dark:text-gray-400 mb-4">To launch the development server:</p>
    <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200">php velto start</pre>
    <p class="text-gray-600 dark:text-gray-400 my-4">To serve on local network with QR Code:</p>
    <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200">php velto start local-ip</pre>

    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mt-10 mb-4">🔄 Auto Reload</h2>
    <p class="text-gray-600 dark:text-gray-400 mb-4">Enable watch mode to automatically reload views when changed:</p>

    <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200">php velto start watch</pre>
    <p class="text-gray-600 dark:text-gray-400 my-4">Or</p>
    <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200">php velto start local-ip watch</pre>

    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mt-10 mb-4">📁 Folder Structure</h2>
    <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-gray-800 dark:text-gray-200">
velto/
├── app/           # Controllers
├── public/        # Public files (entry point)
├── routes/        # Route definitions
├── storage/       # Logs, cache
├── vendor/        # Composer dependencies for velto-core
├── views/         # .vel.php template files
└── velto          # CLI file
    </pre>

    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mt-10 mb-4">🧱 RVC Pattern</h2>
    <ul class="list-disc pl-6 text-gray-600 dark:text-gray-400">
        <li><strong class="dark:text-gray-300">Route:</strong> Define your app's endpoints inside <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">routes/web.php</code></li>
        <li><strong class="dark:text-gray-300">View:</strong> Use <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">.vel.php</code> files inside <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">views/</code></li>
        <li><strong class="dark:text-gray-300">Controller:</strong> Place logic in <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">app/</code> and use it in your route definition</li>
    </ul>

    
    <div class="my-8 py-2 flex justify-between bg-gray-200 dark:bg-gray-700 rounded-lg">
        <!-- Previous Button -->
        <a href="/docs/home" class="hover:text-blue-500 dark:hover:text-blue-400 mx-4 transition-colors duration-200 flex items-center font-semibold text-gray-700 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Previous
        </a>
        
        <!-- Next Button -->
        <a href="/docs/view" class="hover:text-blue-500 dark:hover:text-blue-400 mx-4 transition-colors duration-200 flex items-center font-semibold text-gray-700 dark:text-gray-300">
            Next
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>


@endsection