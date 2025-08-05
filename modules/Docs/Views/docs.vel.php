@extends('layouts.app')

@section('title')
{{ ucwords(str_replace('-', ' ', $currentPage)) }}
@endsection

@section('app-content')
<div class="font-light">
    <div class="pt-12 md:pt-24">
        <div class="max-w-7xl mx-auto px-4 md:px-0">
            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="md:hidden fixed right-4 top-4 z-50 p-2 rounded-md bg-gray-100 text-gray-500 hover:bg-gray-200 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div class="flex flex-col md:flex-row">
                <!-- Left sidebar navigation -->
                <div id="sidebar" class="hidden md:block w-64 pr-8 fixed h-screen overflow-y-auto border-r border-gray-200 bg-white z-40">
                    @foreach ($docPages as $section => $pages)
                        <div class="pt-4 space-y-1">
                            <h3 class="px-3 py-2 text-sm font-semibold text-gray-500 uppercase tracking-wider">
                                {{ $section }}
                            </h3>
                            @foreach ($pages as $page)
                                <a href="/docs/{{ $page['slug'] }}"
                                   class="block px-3 py-2 text-sm font-medium
                                   {{ $currentPage === $page['slug'] ? 'bg-red-100 text-red-600' : 'text-gray-900 hover:bg-gray-50' }}
                                   rounded">
                                    {{ $page['label'] }}
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                </div>                
                

                <!-- Main content area -->
                <div class="w-full md:pl-72 md:pr-56">
                    <div class="prose docs-content">
                        {!!$html!!}
                    </div>                    
                </div>

                <!-- Right sidebar -->
                <div class="hidden lg:block fixed right-0 w-72 h-screen overflow-y-auto border-l border-gray-200 bg-white pt-4 px-4">
                    <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png"
                         alt="VeltoPHP Logo"
                         class="h-auto w-32 object-contain" />
                    <span class="text-xl font-medium text-gray-900">Velto<span class="text-red-500">PHP</span> V2</span>
                    
                    <div class="mt-6 p-6 bg-red-50 border-l-4 border-red-400 text-red-800 rounded-md text-sm">
                        <h2 class="text-lg font-semibold mb-2">Documentation in Progress</h2>
                        <p class="mb-2">
                            This documentation is currently <strong>under active development</strong>. Some features, syntax, or behaviors described here may still be evolving as VeltoPHP continues to grow.
                        </p>
                        <p class="mb-2">
                            We truly value your feedback! If you notice outdated sections, unclear explanations, or have suggestions to improve the documentation or framework itself, please don’t hesitate to reach out:
                        </p>
                        <ul class="list-disc list-inside mb-2">
                            <li><a href="mailto:dev@veltophp.com" class="text-blue-600 hover:underline">dev@veltophp.com</a></li>
                            <li><a href="https://veltophp.com/community" target="_blank" class="text-blue-600 hover:underline">veltophp.com/community</a></li>
                        </ul>
                        <p>
                            Your insights, ideas, and bug reports are essential to shaping the future of VeltoPHP.
                        </p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Toggle mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
    });
</script>


@endsection