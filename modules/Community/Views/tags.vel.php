@extends('layouts.app')

@section('title')
{{ ucwords(str_replace('-', ' ', $tag)) }} | VeltoPHP V2.0
@endsection

@section('app-content')
<div class=" min-h-screen mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- User Profile -->
        <div class="bg-white p-6 rounded-lg border border-gray-200">
            <div class="flex items-start">
                <div>
                    <a href="{{route('community')}}" class="hover:underline text-red-600">All Thread</a> | {{ ucwords(str_replace('-', ' ', $tag)) }}
                </div>
            </div>
        </div>

        <!-- Recent Threads -->
        <div class="mb-12 mt-8">
            <div class="bg-white overflow-hidden">

                <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($threads as $thread)
                        <div class="bg-white border border-gray-200 h-auto rounded-lg p-4 shadow-sm hover:shadow transition">
                            <div class="flex items-start mb-3 mt-4">
                                <div class="w-10 h-10 border border-red-500 text-gray-800 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-sm">
                                        {{ strtoupper(substr($thread->user->name, 0, 2)) }}
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-base text-gray-800 mb-1 leading-snug">
                                        <a href="{{ route('detail.thread', ['slug' => $thread->slug]) }}" class="hover:underline text-lg font-semibold">
                                            {{ $thread->title }}
                                        </a>
                                    </h3>
                                    <div class="text-sm text-gray-500 mt-4">
                                        Started by 
                                        <a href="{{ route('user', ['username' => urlencode($thread->user->username)]) }}" class="text-red-500 hover:underline">
                                            {{ $thread->user->name }}
                                        </a> • 
                                        <a href="{{ route('category', ['category' => $thread->category]) }}" class="text-red-500 hover:underline">
                                            {{ ucwords(str_replace('-', ' ', $thread->category)) }} </a>
                                        <div>
                                             {{ humanDate($thread->created_at) }}
                                        </div>
                                        <div class="flex items-center justify-between text-sm text-gray-600 mt-2">
                                            <span>{{ $thread->commentCount }} Replies</span>
                                        </div>
                                        <div class="my-4">
                                            @php
                                                $tags = explode(',', $thread->tags ?? '');
                                            @endphp
                                        
                                            @foreach ($tags as $tag)
                                                @php $tag = trim($tag); @endphp
                                                @if ($tag !== '')
                                                    <a href="{{ route('tag', ['tag' => urlencode($tag)]) }}"
                                                        class="px-3 mx-1 text-gray-800 border border-red-500 py-1 rounded-full text-sm">
                                                        {{ $tag }}
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                @if (count($threads) === 0)
                    <div class="text-center text-gray-500 bg-gray-100 border border-dashed border-gray-300 p-6 rounded-lg">
                        No Threads is available!
                    </div>
                @endif
            </div>
            {!! paginate($threads) !!}
        </div>

        <div>
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