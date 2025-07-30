@extends('layouts.app')

@section('title')
    {{ $user->name }} | Profile User | VeltoPHP V2.0
@endsection

@section('app-content')
<div class="min-h-screen pt-32 pb-12">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- User Profile -->
        <div class="bg-white border border-gray-200 rounded-xl px-6 py-4 mb-8 flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center text-xl font-semibold">
                    {{ strtoupper(substr($user->name, 0, 2)) }}
                </div>
                <div class="ml-4">
                    <p class="text-lg font-semibold text-red-500">{{ $user->name }}</p>
                    <p class="text-sm text-gray-500">{{ ucwords($user->role) }} • Joined on {{ date('d F Y', strtotime($user->created_at)) }}</p>
                </div>
            </div>
        </div>

        <!-- User Threads -->
        <div class="mb-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($threads as $thread)
                <div class="relative bg-white border border-gray-200 hover:border-red-300 rounded-xl p-5 transition-shadow shadow-sm hover:shadow-md">
                    @if($thread->status === 'closed')
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <span class="transform rotate-[-20deg] text-[100px] font-extrabold text-red-600 opacity-5 select-none">
                            CLOSED
                        </span>
                    </div>
                    @endif

                    <div class="flex items-start gap-3 relative z-10">
                        <!-- Avatar -->
                        <div class="h-10 w-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-medium text-sm">
                            {{ strtoupper(substr($thread->user->name, 0, 2)) }}
                        </div>

                        <!-- Content -->
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2 leading-snug">
                                <a href="{{ route('detail.thread', ['slug' => $thread->slug]) }}" class="hover:text-red-600 hover:underline">
                                    {{ $thread->title }}
                                </a>
                            </h3>

                            <div class="text-xs text-gray-500 mb-2">
                                <span>Started by</span>
                                <a href="{{ route('user', ['username' => urlencode($thread->user->username)]) }}" class="text-red-500 hover:underline font-medium ml-1">
                                    {{ $thread->user->name }}
                                </a>
                                <span class="mx-1">•</span>
                                <a href="{{ route('category', ['category' => $thread->category]) }}" class="text-red-500 hover:underline font-medium">
                                    {{ ucwords(str_replace('-', ' ', $thread->category)) }}
                                </a>
                            </div>

                            <div class="text-xs text-gray-400 mb-3">{{ humanDate($thread->created_at) }}</div>

                            <div class="flex items-center justify-between text-sm text-gray-600">
                                <span><i class="fas fa-comment-alt mr-1.5 text-gray-400"></i> {{ $thread->commentCount }} Replies</span>
                            </div>

                            @php
                                $tags = explode(',', $thread->tags ?? '');
                            @endphp
                            @if (!empty($tags))
                            <div class="mt-4 flex flex-wrap gap-2">
                                @foreach ($tags as $tag)
                                    @php $tag = trim($tag); @endphp
                                    @if ($tag !== '')
                                    <a href="{{ route('tag', ['tag' => urlencode($tag)]) }}"
                                        class="px-3 py-1.5 bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-full text-xs font-medium transition">
                                        <i class="fas fa-hashtag text-xs mr-1"></i> {{ $tag }}
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @if (count($threads) === 0)
            <div class="text-center text-gray-400 p-12 bg-gray-50 border border-dashed border-gray-300 rounded-xl mt-10">
                <i class="fas fa-comment-slash text-4xl mb-4"></i>
                <p class="text-lg">No Threads is available!</p>
            </div>
            @endif

            <div class="mt-10">
                {!! paginate($threads) !!}
            </div>
        </div>

        <!-- Popular Tags -->
        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
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
@endsection
