@extends('layouts.app')

@section('title')
    Community Forum | VeltoPHP V2.0
@endsection

@section('app-content')
<div class="min-h-screen pt-20 pb-12">
    <!-- Hero Section -->
    <div class="py-8 mb-12">
        <div class="max-w-7xl mx-auto px-4 md:px-2">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-6 md:mb-0">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">VeltoPHP Community</h1>
                    <p class="text-gray-700 max-w-2xl">Connect with developers, share knowledge, and grow together in our vibrant community.</p>
                </div>
                <a href="{{ route('new.thread') }}" class="bg-red-500 text-white font-medium px-6 py-3 rounded-lg transition-colors whitespace-nowrap flex items-center">
                    <i class="fas fa-plus-circle mr-2"></i> New Thread
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 md:px-2">
        <!-- Search and Stats -->
        <!-- Flash Message -->
        <div class="mt-4">
            @flash_info('#form-search')
        </div>
        <div class="bg-white rounded-xl mb-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <form id="#form-search" action="{{route('search.thread')}}" method="GET" class="flex-grow max-w-2xl w-full">
                    <div class="relative flex items-center w-full">
                        <input 
                            type="text" 
                            name="search" 
                            placeholder="Search threads..." 
                            class="flex-grow text-sm text-gray-700 bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 pl-10 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 text-gray-400"></i>
                        <button type="submit" class="absolute right-2 bg-red-600 text-white px-4 py-1.5 rounded-md text-sm hover:bg-red-700 transition">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Categories -->
        <div class="mb-12">
            <h2 class="text-xl font-bold mb-6 text-gray-800 border-b pb-2 flex items-center">
                <i class="fas fa-layer-group mr-2 text-red-500"></i> Categories
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <a href="{{route('category',['category' => 'general-discussion'])}}" class="bg-white rounded-lg   hover:  transition-shadow border border-gray-200 hover:border-red-200 p-6 block">
                    <div class="flex items-start">
                        <div class="bg-red-100 p-3 rounded-lg mr-4 text-red-600">
                            <i class="fas fa-comments fa-lg"></i>
                        </div>
                        <div>
                            <h3 class="mb-1 font-semibold text-gray-800">General Discussion</h3>
                            <p class="text-gray-500 mb-2 text-sm">Talk about anything related to VeltoPHP</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="bg-gray-100 px-2 py-1 rounded mr-2">
                                    <i class="fas fa-comment mr-1 text-red-500"></i> {{$threadCounts['general-discussion']}} Threads
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
                
                <!-- Category 2 -->
                <a href="{{route('category',['category' => 'help-support'])}}" class="bg-white rounded-lg   hover:  transition-shadow border border-gray-200 hover:border-red-200 p-6 block">
                    <div class="flex items-start">
                        <div class="bg-red-100 p-3 rounded-lg mr-4 text-red-600">
                            <i class="fas fa-question-circle fa-lg"></i>
                        </div>
                        <div>
                            <h3 class="mb-1 font-semibold text-gray-800">Help & Support</h3>
                            <p class="text-gray-500 mb-2 text-sm">Get help with your VeltoPHP projects</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="bg-gray-100 px-2 py-1 rounded mr-2">
                                    <i class="fas fa-comment mr-1 text-red-500"></i> {{$threadCounts['help-support']}} Threads
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
                
                <!-- Category 3 -->
                <a href="{{route('category',['category' => 'showcase'])}}" class="bg-white rounded-lg   hover:  transition-shadow border border-gray-200 hover:border-red-200 p-6 block">
                    <div class="flex items-start">
                        <div class="bg-red-100 p-3 rounded-lg mr-4 text-red-600">
                            <i class="fas fa-laptop-code fa-lg"></i>
                        </div>
                        <div>
                            <h3 class="mb-1 font-semibold text-gray-800">Showcase</h3>
                            <p class="text-gray-500 mb-2 text-sm">Share your VeltoPHP projects</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="bg-gray-100 px-2 py-1 rounded mr-2">
                                    <i class="fas fa-comment mr-1 text-red-500"></i> {{$threadCounts['showcase']}} Threads
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
                
                <!-- Category 4 -->
                <a href="{{route('category',['category' => 'announcements'])}}" class="bg-white rounded-lg   hover:  transition-shadow border border-gray-200 hover:border-red-200 p-6 block">
                    <div class="flex items-start">
                        <div class="bg-red-100 p-3 rounded-lg mr-4 text-red-600">
                            <i class="fas fa-bullhorn fa-lg"></i>
                        </div>
                        <div>
                            <h3 class="mb-1 font-semibold text-gray-800">Announcements</h3>
                            <p class="text-gray-500 mb-2 text-sm">News and updates about VeltoPHP</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="bg-gray-100 px-2 py-1 rounded mr-2">
                                    <i class="fas fa-comment mr-1 text-red-500"></i> {{$threadCounts['announcements']}} Threads
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    
        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Threads Column -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-lg   mb-6 overflow-hidden">
                    <div class="border-b border-gray-200 px-6 py-4 bg-gray-50">
                        <h2 class="text-xl font-bold text-gray-800 flex items-center">
                            <i class="fas fa-fire mr-2 text-red-500"></i> Latest Discussions
                        </h2>
                    </div>
                    
                    @foreach ($threads as $thread)
                    <div class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                        <div class="p-6">
                            <div class="flex items-start gap-4">                                
                                <!-- Thread Content -->
                                <div class="flex-1">
                                    <!-- Category and Author -->
                                    <div class="flex items-center text-xs text-gray-500 mb-2">
                                        <a href="{{route('category',['category' => $thread->category])}}" class="bg-red-100 text-red-600 px-2 py-1 rounded mr-2 hover:underline">
                                            {{ ucwords(str_replace('-', ' ', $thread->category)) }}
                                        </a>
                                        <span>Posted by</span>
                                        <a href="{{route('user',['username' => urlencode($thread->user->username)])}}" class="text-red-600 hover:underline ml-1">
                                            {{$thread->user->name}}
                                        </a>
                                        <span class="mx-1">•</span>
                                        <span>{{ humanDate($thread->created_at)}}</span>
                                    </div>
                                    
                                    <!-- Thread Title and Preview -->
                                    <h3 class="text-lg font-semibold mb-2">
                                        <a href="{{ route('detail.thread', ['slug' => $thread->slug]) }}" class="hover:text-red-600 hover:underline">
                                            {{ $thread->title }}
                                        </a>
                                    </h3>
                                    
                                    @if($thread->image)
                                    <div class="mb-3">
                                        <img src="{{ $thread->image }}" alt="" class="h-40 w-full object-cover rounded-lg">
                                    </div>
                                    @endif
                                    
                                    <p class="text-gray-600 text-sm mb-3">
                                        {{ str_limit(strip_tags($thread->content), 200) }}
                                    </p>
                                    
                                    <!-- Thread Stats and Actions -->
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-4 text-sm text-gray-500">
                                            <span class="flex items-center">
                                                <i class="fas fa-comment-alt mr-1.5 text-gray-400"></i> {{$thread->commentCount}} replies
                                            </span>
                                            <span class="flex items-center">
                                                <i class="fas fa-clock mr-1.5 text-gray-400"></i> Last updated {{ humanDate($thread->updated_at)}}
                                            </span>
                                        </div>
                                        <div>
                                            <button class="text-gray-400 hover:text-red-500">
                                                <i class="fas fa-bookmark"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    @if (count($threads) === 0)
                    <div class="text-center text-gray-400 p-12">
                        <i class="fas fa-comment-slash text-4xl mb-4"></i>
                        <p class="text-lg">No discussions yet. Start a new thread!</p>
                    </div>
                    @endif
                </div>
                
                {!! paginate($threads) !!}
            </div>
        
            <!-- Sidebar -->
            <div class="lg:w-1/3 space-y-6">
                <!-- Popular Threads -->
                <div class="bg-white rounded-lg   overflow-hidden">
                    <div class="border-b border-gray-200 px-6 py-4 bg-gray-50">
                        <h2 class="text-xl font-bold text-gray-800 flex items-center">
                            <i class="fas fa-chart-line mr-2 text-red-500"></i> Trending Now
                        </h2>
                    </div>
                    
                    <div class="divide-y divide-gray-100">
                        @foreach ($trendingThreads as $thread)
                        <div class="p-4 hover:bg-gray-50 transition-colors">
                            <div class="flex items-start gap-3">
                                <!-- User Avatar -->
                                <div class="flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-medium text-sm">
                                        {{ strtoupper(substr($thread->user->name, 0, 2)) }}
                                    </div>
                                </div>
                                
                                <!-- Thread Content -->
                                <div class="flex-1">
                                    <h3 class="text-base font-medium text-gray-800 mb-1 leading-snug">
                                        <a href="{{route('detail.thread',['slug' => $thread->slug])}}" class="hover:text-red-600 hover:underline">
                                            {{$thread->title}}
                                        </a>
                                    </h3>
            
                                    <div class="text-xs text-gray-500 mb-2 flex flex-wrap items-center gap-1">
                                        <span>Posted in</span>
                                        <a href="{{route('category',['category' => $thread->category])}}" class="text-red-600 hover:underline">
                                            {{ ucwords(str_replace('-', ' ', $thread->category)) }}
                                        </a>
                                        <span>•</span>
                                        <span>{{ humanDate($thread->created_at)}}</span>
                                    </div>
            
                                    <div class="flex items-center text-xs text-gray-500">
                                        <span class="flex items-center mr-3">
                                            {{-- <i class="fas fa-comment mr-1"></i> {{ $trendingThreadsCommentCount }}  replies --}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        @if (count($trendingThreads) === 0)
                        <div class="text-center text-gray-400 p-8">
                            <i class="fas fa-comment-slash text-2xl mb-2"></i>
                            <p>No trending threads yet</p>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Popular Tags -->
                <div class="bg-white rounded-lg   overflow-hidden">
                    <div class="border-b border-gray-200 px-6 py-4 bg-gray-50">
                        <h2 class="text-xl font-bold text-gray-800 flex items-center">
                            <i class="fas fa-tags mr-2 text-red-500"></i> Popular Tags
                        </h2>
                    </div>
                    
                    <div class="p-6">
                        @if (!empty($popularTags))
                            <div class="flex flex-wrap gap-2">
                                @foreach ($popularTags as $tag => $count)
                                    <a href="{{ route('tag', ['tag' => urlencode($tag)]) }}"
                                    class="px-3 py-1.5 bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-full text-sm transition flex items-center">
                                        <i class="fas fa-hashtag mr-1 text-xs"></i> {{ $tag }}
                                        <span class="ml-1 text-xs bg-gray-200 px-1.5 py-0.5 rounded-full">{{ $count }}</span>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-400 text-center py-4">No tags yet</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection