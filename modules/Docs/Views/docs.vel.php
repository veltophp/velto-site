@extends('layouts.app')

@section('title')
    Docs | VeltoPHP V2.0
@endsection

@section('app-content')
<div class="font-light">
    <div class="pt-16 md:pt-24">
        <div class="max-w-7xl mx-auto px-2 sm:px-4">
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
                                   {{ $currentPage === $page['slug'] ? 'bg-gray-100 text-blue-600' : 'text-gray-900 hover:bg-gray-50' }}
                                   rounded">
                                    {{ $page['label'] }}
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                </div>                
                

                <!-- Main content area -->
                <div class="w-full md:pl-72 md:pr-56 pt-4 md:pt-0">
                    <div class="prose docs-content">
                        {!!$html!!}
                    </div>                    
                </div>

                <!-- Right sidebar -->
                <div class="hidden lg:block fixed right-0 w-56 h-screen overflow-y-auto border-l border-gray-200 bg-white pt-4 px-4">
                    {{--  --}}
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