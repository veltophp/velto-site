@extends('layouts.docs')

@section('title')
    {{ $cleanDocTitle }} | VeltoPHP Documentation
@endsection

@section('content')
<div class="flex flex-col lg:flex-row">
    <!-- Sidebar -->
    <div class="hidden lg:block lg:w-64 xl:w-64 flex-shrink-0 border-r border-gray-200 dark:border-gray-800 h-[calc(100vh-5rem)] sticky top-16 overflow-y-auto py-8 px-4">
        <div class="space-y-5">
            @foreach ($docsCategories as $category)
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 hover:text-red-600 tracking-wider">
                        {{ $category['title'] }}
                    </h3>
                    <div class="mt-2 space-y-1">
                        @foreach ($docsSubCategories[$category['key']] ?? [] as $file)
                            <a href="{{ route('docs.welcome', ['folder' => $category['key'], 'file' => pathinfo($file['key'], PATHINFO_FILENAME)]) }}"
                               class="sidebar-link block px-3 py-2 text-sm hover:text-red-600 {{ ($doc === $file['key']) ? 'font-bold text-red-600' : '' }}">
                               {{ $file['title'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>        
    </div>    
    
    <!-- Mobile sidebar toggle -->
    <div class="lg:hidden pt-4 pb-2 border-b border-gray-200 dark:border-gray-800">
        <button id="sidebar-toggle" class="flex items-center text-2xl font-extrabold text-gray-800">
            <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            Menu
        </button>
    </div>

    <!-- Mobile sidebar (hidden by default) -->
    <div id="mobile-sidebar" class="hidden lg:hidden border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900">
        <div class="px-4 py-4 space-y-5">
            <div>
                @foreach ($docsCategories as $category)
                <div class="my-4">
                    <h3 class="text-sm font-semibold text-gray-500 hover:text-red-600 uppercase tracking-wider">
                        {{ $category['title'] }}
                    </h3>
                    <div class="mt-2 space-y-1">
                        @foreach ($docsSubCategories[$category['key']] ?? [] as $file)
                            <a href="{{ route('docs.welcome', ['folder' => $category['key'], 'file' => pathinfo($file['key'], PATHINFO_FILENAME)]) }}"
                               class="sidebar-link block px-3 py-2 text-sm hover:text-red-600 {{ ($doc === $file['key']) ? 'font-bold text-red-600' : '' }}">
                                {{ $file['title'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="py-4 px-0 md:px-4">
        <div class="prose dark:prose-invert max-w-3xl mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 hover:text-red-600 mb-6">{{ $cleanDocTitle }}</h1>
            <div class="border-t border-gray-200 pt-6">
                <div class="max-w-2xl mx-auto prose">
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block border-l border-gray-200">
        {{-- another side bar menu --}}
    </div>    
</div>

<script>
    // Mobile sidebar toggle
    document.getElementById('sidebar-toggle').addEventListener('click', function() {
        document.getElementById('mobile-sidebar').classList.toggle('hidden');
    });
</script>
@endsection