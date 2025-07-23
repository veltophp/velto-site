@extends('layouts.axion')

@section('title')
    Your Activity | Axion
@endsection

@section('axion-content')
<div class="bg-white min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        {{-- Header --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Your Activity</h1>
                <p class="text-sm text-gray-500 mt-1">View your activity in this forum</p>
            </div>
        </div>

        <div class="mt-2">
            <h1 class="text-2xl font-bold text-gray-900">Bookmark Threads</h1>
            @if (count($threads) === 0)
            <div class="text-center mt-4 py-12 px-6 bg-gray-50 border-2 border-dashed border-gray-300 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-2 text-lg font-medium text-gray-900">No bookmarks threads yet</h3>
            </div>
        @else
            <div class="space-y-4 mt-4">
                <!-- Grid Container -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach ($threads as $thread)
                        <div class="bg-white hover:bg-gray-50 rounded-xl border border-gray-200 transition-shadow duration-200">
                            <div class="p-5">
                                <div class="flex items-start gap-4">
                                    {{-- User Avatar --}}
                                    <div class="flex-shrink-0">
                                        <div class="h-10 w-10 rounded-full border border-red-500 flex items-center justify-center text-red-600 font-medium">
                                            {{ strtoupper(substr($thread->user->name, 0, 2)) }}
                                        </div>
                                    </div>

                                    {{-- Thread Content --}}
                                    <div class="flex-1 min-w-0">
                                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-1">
                                            <h3 class="text-lg text-gray-800 truncate">
                                                <a href="{{ route('detail.thread', ['slug' => $thread->slug]) }}" class="hover:text-red-600 hover:underline">
                                                    {{ $thread->title }}
                                                </a>
                                            </h3>

                                            @php
                                                $statusColors = [
                                                    'open' => 'bg-blue-100 text-blue-800',
                                                    'closed' => 'bg-red-100 text-red-800',
                                                ];
                                                $colorClass = $statusColors[$thread->status] ?? 'bg-gray-100 text-gray-800';
                                            @endphp
                                            <span class="{{ $colorClass }} px-2.5 py-0.5 rounded-full text-xs font-medium whitespace-nowrap">
                                                {{ ucwords($thread->status) }}
                                            </span>
                                        </div>

                                        <div class="text-xs text-gray-500 mb-2">
                                            Started by 
                                            <a href="{{ route('user', ['username' => urlencode($thread->user->username)]) }}" class="text-red-600 hover:underline">
                                                {{ $thread->user->name }}
                                            </a> • 
                                            <a href="{{ route('category', ['category' => $thread->category]) }}" class="text-blue-600 hover:underline">
                                                {{ ucwords(str_replace('-', ' ', $thread->category)) }}
                                            </a> • 
                                            <span>{{ humanDate($thread->created_at) }}</span>
                                        </div>

                                        <div class="flex items-center text-sm text-gray-500 mt-2">
                                            <span class="flex items-center mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                                {{ $thread->commentCount }} {{ $thread->commentCount === 1 ? 'Reply' : 'Replies' }}
                                            </span>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('delete.bookmark', ['slug' => $thread->slug]) }}"
                                        onsubmit="return veltoAlert('Are you sure to delete this bookmark?')">
                                        @csrf
                                        <button type="submit" 
                                                class="text-red-500 hover:text-red-600 transition-colors p-1 rounded-full hover:bg-red-50"
                                                title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        </div>
    </div>
</div>
@endsection