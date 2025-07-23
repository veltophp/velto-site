@extends('layouts.app')

@section('title')
    Search | VeltoPHP V2.0
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
    
        <div class="mt-12 flex flex-col lg:flex-row gap-6">
            <!-- New Threads (Left Column) -->
            <div class="lg:w-2/3">
                <h2 class="text-xl font-medium border-b border-gray-200 py-2 text-gray-800 mb-4">Search Result</h2>
                
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
                {{--  --}}
            </div>
        </div>
    </div>
</div>
@endsection