@extends('layouts.app')

@section('title')
    Search | VeltoPHP V2.0
@endsection

@section('app-content')
<div class="min-h-screen pt-32 pb-12">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- Search Bar & New Thread -->
        <div class="bg-white rounded-xl mb-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <form action="{{route('search.thread')}}" method="GET" class="flex-grow max-w-2xl w-full">
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

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Search Result Threads -->
            <div class="lg:w-2/3">

                <div class="bg-white rounded-lg   mb-6 overflow-hidden">
                    <div class="border-b border-gray-200 px-6 py-4 bg-gray-50">
                        <h2 class="text-xl font-bold text-gray-800 flex items-center">
                            <i class="fas fa-fire mr-2 text-red-500"></i> Search Result
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
                        <p class="text-lg">No threads found! Please use another keyword to search.</p>
                    </div>
                    @endif
                </div>
                
                {!! paginate($threads) !!}
            </div>

            <!-- Placeholder for Popular Threads (optional future use) -->
            <div class="lg:w-1/3">
                {{-- You can add "Popular Threads", "Recent Categories", etc. here --}}
            </div>
        </div>
    </div>
</div>
@endsection
