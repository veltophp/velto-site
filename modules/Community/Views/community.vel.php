@extends('layouts.app')

@section('title')
    Community Forum | VeltoPHP V2.0
@endsection

@section('app-content')
<div class=" min-h-screen mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex items-center justify-between gap-4 mb-12 flex-wrap">
            <form action="{{route('search.thread')}}" method="GET" class="flex-grow max-w-2xl">
                <div class="flex items-center w-full border border-gray-600 bg-white rounded-xl overflow-hidden px-4 py-2 focus-within:border-gray-900">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Search threads..." 
                        class="flex-grow text-sm text-gray-700 bg-transparent focus:outline-none">
                    <button type="submit" class="text-red-500 font-medium text-sm ml-2">
                        Search
                    </button>
                </div>
            </form>
            <a href="{{ route('new.thread') }}" class="bg-red-500 hover:bg-red-600 text-sm text-white px-6 py-2 rounded-lg transition-colors whitespace-nowrap">
                New Thread
            </a>
        </div>

        <div class="mb-12 hidden md:flex">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <div class="bg-white">
                    <div class="flex items-start">
                        <div class="border border-red-600 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="mb-1 font-semibold text-gray-800"><a href="{{route('category',['category' => 'general-discussion'])}}" class="hover:underline">General Discussion</a></h3>
                            {{-- <p class="text-gray-500 mb-2 text-sm">Talk about anything related to VeltoPHP</p> --}}
                            <p class="text-sm text-gray-400">{{$threadCounts['general-discussion']}} Threads</p>
                        </div>
                    </div>
                </div>
                
                <!-- Category 2 -->
                <div class="bg-white">
                    <div class="flex items-start">
                        <div class="border border-red-600 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="mb-1 font-semibold text-gray-800"><a href="{{route('category',['category' => 'help-support'])}}" class="hover:underline">Help & Support</a></h3>
                            {{-- <p class="text-gray-500 mb-2 text-sm">Get help with your VeltoPHP projects</p> --}}
                            <p class="text-sm text-gray-400">{{$threadCounts['help-support']}} Threads</p>
                        </div>
                    </div>
                </div>
                
                <!-- Category 3 -->
                <div class="bg-white">
                    <div class="flex items-start">
                        <div class="border border-red-600 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="mb-1 font-semibold text-gray-800"><a href="{{route('category',['category' => 'showcase'])}}" class="hover:underline">Showcase</a></h3>
                            {{-- <p class="text-gray-500 mb-2 text-sm">Share your VeltoPHP projects</p> --}}
                            <p class="text-sm text-gray-400">{{$threadCounts['showcase']}} Threads</p>
                        </div>
                    </div>
                </div>
                
                <!-- Category 4 -->
                <div class="bg-white">
                    <div class="flex items-start">
                        <div class="border border-red-600 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="mb-1 font-semibold text-gray-800"><a href="{{route('category',['category' => 'announcements'])}}" class="hover:underline">Announcements</a></h3>
                            {{-- <p class="text-gray-500 mb-2 text-sm">News and updates about VeltoPHP</p> --}}
                            <p class="text-sm text-gray-400">{{$threadCounts['announcements']}} Threads</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="mt-12 flex flex-col lg:flex-row gap-6">
            <!-- New Threads (Left Column) -->
            <div class="lg:w-2/3">
                <h2 class="text-xl font-medium border-b border-gray-200 py-2 text-gray-800 mb-4">New Threads</h2>
                
                <div class="rounded-md">
                    @foreach ($threads as $thread)
                    <div class="border-b border-gray-200">
                        <div class="items-center justify-between mt-4">
                            <div class="flex items-start space-x-4">
                                @if($thread->image)
                                    <div class="w-48 mt-2 flex-shrink-0">
                                        <img src="{{ $thread->image }}" alt="" class="h-auto w-full object-cover rounded">
                                    </div>
                                @endif
                                <div class="font-medium text-xl mt-2 text-gray-900">
                                    <a href="{{ route('detail.thread', ['slug' => $thread->slug]) }}" class="hover:underline text-lg font-semibold">
                                        {{ $thread->title }}
                                    </a>
                                    <p class="font-light text-sm mt-2">
                                        {{ str_limit(strip_tags($thread->content), 200) }}
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-8 flex items-center text-sm text-gray-500">
                            <div class="flex-shrink-0">
                                <div class="h-10 w-10 rounded-full border border-red-500 flex items-center justify-center text-red-600 text-xs">
                                    {{ strtoupper(substr($thread->user->name, 0, 2)) }}
                                </div>
                            </div>
                            <div class="ml-2 text-sm">
                                <span>
                                    <a href="{{route('user',['username' => urlencode($thread->user->username)])}}" class="text-red-500 hover:underline">
                                        {{$thread->user->name}}
                                    </a>
                                </span>
                                <span class="mx-1">•</span>
                                <span>{{$thread->commentCount}} Replies</span>
                                <span class="mx-1">•</span>
                                <span><a href="{{route('category',['category' => $thread->category])}}" class="text-red-500 hover:underline">{{ ucwords(str_replace('-', ' ', $thread->category)) }}</a></span>
                                <span class="mx-1">•</span>
                                <span>{{ humanDate($thread->created_at)}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    @if (count($threads) === 0)
                        <div class="text-center text-gray-400 p-8 border-b border-gray-100">
                            No discussions yet. Start a new thread!
                        </div>
                    @endif
                </div>
                
                {!! paginate($threads) !!}
            </div>
        
            <!-- Popular Threads (Right Column) -->
            <div class="lg:w-1/3">
                <h2 class="text-xl font-medium border-b border-gray-200 py-2 text-gray-800 mb-4">Popular Now</h2>
                
                <div class="bg-white border-b border-gray-200">
                    @foreach ($trendingThreads as $thread)
                    <div class="p-4 transition-colors">
                        <div class="flex items-start gap-3">
                            <!-- User Avatar -->
                            <div class="w-10 h-10 border border-red-500 rounded-full flex items-center justify-center text-red-600 font-medium text-sm">
                                {{ strtoupper(substr($thread->user->name, 0, 2)) }}
                            </div>
                            
                            <!-- Thread Content -->
                            <div class="flex-1">
                                <h3 class="text-base font-normal text-gray-800 mb-1 leading-snug">
                                    <a href="{{route('detail.thread',['slug' => $thread->slug])}}" class="hover:text-red-600 transition-colors">
                                        {{$thread->title}}
                                    </a>
                                </h3>
        
                                <div class="text-xs text-gray-500 mb-2 flex flex-wrap items-center gap-1">
                                    <span>Posted by</span>
                                    <a href="{{route('user',['username' => urlencode($thread->user->username)])}}" class="text-red-600 hover:underline">
                                        {{$thread->user->name}}
                                    </a>
                                    <span>•</span>
                                    <span>{{ humanDate($thread->created_at) }}</span>
                                </div>
        
                                @foreach ($trendingThreads as $index => $thread)
                                    <div class="flex items-center text-sm text-gray-500">
                                        <span class="mr-4">{{ $trendingThreadsCommentCount[$index] ?? 0 }} Replies</span>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    @if (count($trendingThreads) === 0)
                        <div class="text-center text-gray-400 p-8 border-b border-gray-100">
                            No popular threads yet
                        </div>
                    @endif
                </div>
            </div>
        </div>
        

        <div class="mt-8">
            <h2 class="text-xl mb-4 text-gray-700 border-b pb-2">Popular Tags</h2>
            @if (!empty($popularTags))
                <div class="flex flex-wrap gap-2">
                    @foreach ($popularTags as $tag => $count)
                        <a href="{{ route('tag', ['tag' => urlencode($tag)]) }}"
                        class="px-3 border border-red-500 py-1 rounded-full text-sm hover:opacity-80 transition">
                            {{ $tag }}
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection