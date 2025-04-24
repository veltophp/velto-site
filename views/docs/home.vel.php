@extends('layouts.docs')

@section('title')
    Documentation | VeltoPHP | Version 1.x |
@endsection

@section('content')

    <!-- What is Velto good for -->
    <section class="py-4 px-6 text-gray-800 dark:text-gray-100">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-semibold mb-6 text-center">
                <span class="text-red-500">Version</span> {{ str_replace('v', '', $latestVersion) }}
            </h2>
            <h2 class="text-2xl font-semibold mb-6 text-center">What is Velto good for?</h2>
            <p class="text-md text-gray-700 dark:text-gray-400 text-center mb-10">
                Built on a simple <span class="font-bold">RVC (Route - View - Controller)</span> architecture, Velto is ideal for building 
                fast, lightweight web projects without the overhead of traditional full-stack frameworks.
            </p>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-medium mb-2">🚀 Landing Pages</h3>
                    <ul class="list-disc ml-5 text-sm text-gray-600 dark:text-gray-400">
                        <li>Fast setup, focused on views</li>
                        <li>Great for product, app, or portfolio pages</li>
                        <li>Examples: SaaS landing, personal portfolio, event promo page</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium mb-2">🧩 Microsites / Mini Sites</h3>
                    <ul class="list-disc ml-5 text-sm text-gray-600 dark:text-gray-400">
                        <li>One or a few simple pages with controller logic</li>
                        <li>Examples: Seminar registration, basic survey, company profile</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium mb-2">📄 Static Content Generator</h3>
                    <ul class="list-disc ml-5 text-sm text-gray-600 dark:text-gray-400">
                        <li>No need for a database — use arrays or files</li>
                        <li>Examples: File-based blog, documentation, learning site</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium mb-2">🧪 Prototypes / MVPs</h3>
                    <ul class="list-disc ml-5 text-sm text-gray-600 dark:text-gray-400">
                        <li>Great for quick idea validation</li>
                        <li>Examples: Order forms, reporting tools, form-based apps</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium mb-2">🛠️ Web Tools / Utilities</h3>
                    <ul class="list-disc ml-5 text-sm text-gray-600 dark:text-gray-400">
                        <li>Lightweight tools without heavy backend</li>
                        <li>Examples: QR code generator, converters, dev tools</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium mb-2">🌐 Frontend for External APIs</h3>
                    <ul class="list-disc ml-5 text-sm text-gray-600 dark:text-gray-400">
                        <li>Use Velto as a simple API frontend</li>
                        <li>Examples: API dashboards, weather apps, shipment tracking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="my-4 py-2 font-semibold text-gray-700 dark:text-gray-300 flex justify-end text-right bg-gray-200 dark:bg-gray-700 rounded-lg">
        <a href="/docs/pre-requisites" class="hover:text-blue-500 dark:hover:text-blue-400 mx-4 transition-colors duration-200 flex items-center">
            Next
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>

@endsection