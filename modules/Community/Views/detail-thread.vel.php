@extends('layouts.app')

@section('title')
    {{$thread->title}} | Community Forum | VeltoPHP V2.0
@endsection

@if (!empty($thread->image))
    @section('ogImage')
        {{ og_image($thread->image) }}
    @endsection
@endif


@section('app-content')
<div class="min-h-screen mt-16">
    <div class="max-w-7xl mx-auto px-4 md:px-2 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column - Thread Content -->
            <div class="lg:w-2/3">
                <!-- Thread Header -->
                <div class="mb-8">
                    <div class="flex items-center mb-4">
                        <span class="border border-red-500 text-gray-800 px-3 py-1 rounded-full text-sm mr-3">
                            <a href="{{route('category',['category' => $thread->category])}}">{{ ucwords(str_replace('-', ' ', $thread->category)) }}</a>
                        </span>
                        
                        @php
                            $statusColors = [
                                'open' => 'border border-blue-500 text-gray-800',
                                'closed' => 'border border-red-500 text-gray-800',
                            ];
                            $colorClass = $statusColors[$thread->status];
                        @endphp

                        <span class="{{ $colorClass }} px-3 py-1 rounded-full text-sm mr-3">
                            {{ ucwords($thread->status) }}
                        </span>

                        <span class="text-gray-500 text-sm">Posted {{ humanDate($thread->created_at) }}</span>
                    </div>
                    <h1 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-800">{{$thread->title}}</h1>
                    
                    <!-- Author Info -->
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 border border-red-500 text-gray-800 rounded-full flex items-center justify-center mr-3">
                            {{ strtoupper(substr($thread->user->name, 0, 2)) }}
                        </div>
                        <div>
                            <p class="font-semibold"><a href="{{route('user',['username' => urlencode($thread->user->username)])}}" class="text-red-500 hover:underline">{{$thread->user->name}}</a></p>
                            <p class="text-xs text-gray-500">{{ ucfirst($thread->user->role) }} • Since {{ date('d F Y', strtotime($thread->user->created_at)) }} • {{ $postCount }} post threads</p>
                        </div>
                    </div>
                </div>

                <!-- Thread Content -->
                <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
                    @if($thread->image)
                        <img src="{{$thread->image}}" alt="{{$thread->title}}">
                    @endif

                    <div class="prose my-4 md:my-6 max-w-none text-gray-700">
                        {!! render_comment($thread->content) !!}
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
                    <!-- Thread Actions -->
                    <div class="flex justify-between items-center mt-4 pt-4 border-t border-gray-100">
                        <div class="flex space-x-4">
                            <button class="flex items-center text-gray-500 hover:text-red-500">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                </svg>
                                {{-- <span>12</span> --}}
                            </button>
                            <a href="#comments" class="flex items-center text-gray-500 hover:text-red-500">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                </svg>
                                <span> {{$commentCount}} Comments</span>
                            </a>
                        </div>
                        {{-- Bookmark button --}}
                        <div class="flex space-x-2">
                            <form action="{{ route('bookmark.thread') }}" method="POST">
                                @csrf
                                <input type="hidden" name="threadId" value="{{ $thread->threadId }}">
                                <button type="submit" class="text-gray-500 hover:text-gray-700 p-2 rounded-full hover:bg-gray-100">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                    </svg>
                                </button>
                            </form>                            
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="mb-8">
                    <!-- Comment Form -->
                    @if($thread->status === 'closed')
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8 rounded-lg shadow-sm">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                                </svg>
                                <span class="font-semibold">This thread is closed.</span>
                            </div>
                            <p class="text-sm mt-1 ml-6">
                                Comments are no longer accepted for this discussion.
                            </p>
                        </div>
                    @else
                        <div class="bg-white mb-8">
                            <h2 class="mb-2 text-gray-700">Replay this thread</h2>
                            <div class="my-4">@flash_info('#form-comment')</div>
                            <form id="form-comment" action="{{route('submit.comment',['threadId' => $thread->threadId])}}" method="POST">
                                {!! csrf_field() !!}
                                <div class="mb-6 relative">
                                    {{-- get data for js @tag name --}}
                                    @php
                                        $username = $thread->user->username;
                                        $name = $thread->user->name;
                                    @endphp
                                    {{-- Tetxt area  --}}
                                    <textarea id="comment" name="comment" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none" placeholder="type a comment ..."></textarea>
                                    
                                    {{-- div for tag name --}}
                                    <div id="mention-popup"
                                        class="absolute bg-white border border-gray-300 rounded shadow-md mt-1 p-2 hidden z-50 max-w-sm w-full"
                                        style="top: 100%; left: 0;">
                                        <div class="mention-item px-3 py-1 cursor-pointer hover:bg-gray-100"
                                            data-username="{{ $username }}">
                                            {{ '@' . $username }} <span class="text-gray-500 text-sm ml-1">({{ $name }})</span>
                                        </div>
                                    </div>

                                    {{-- div for emoji --}}
                                    <button type="button" id="emoji-btn-comment"
                                        class="absolute bottom-3 right-3 p-1.5 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 transition duration-150 ease-in-out"
                                        title="Insert Emoji" aria-label="Emoji Picker">
                                        😊
                                    </button>
                                </div>
                                <div class="flex justify-end items-center">
                                    <button type="submit" class="px-6 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors">
                                        Post Comment
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endif

                    <h2 class="text-xl mb-6 text-gray-800 border-b pb-2">Comments</h2>
                    
                    @foreach ($comments as $comment)
                        <div id="comments" class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
                            <div class="flex items-start mb-4">
                                <div class="w-10 h-10 border border-red-500 text-gray-800 rounded-full flex items-center justify-center mr-2">
                                    {{strtoupper(substr($comment->user->name ,0, 2))}}
                                </div>
                                <div>
                                    <p class="text-gray-800 font-medium">
                                        <a href="{{ route('user', ['username' => urlencode($comment->user->username)]) }}" class="text-red-500 hover:underline">
                                            {{ $comment->user->name }}
                                        </a>
                                    </p>
                                    <p class="text-xs text-gray-500">{{ ucfirst($comment->user->role) }}</p>
                                </div>                                
                            </div>
                            <div class="prose max-w-none text-gray-700 mb-4">
                                @if($comment->status === 'hidden')
                                    <div class="italic text-sm text-gray-400">
                                        This comment was hidden due to inappropriate content.
                                    </div>
                                @else
                                    {!! render_comment($comment->comment) !!}
                                @endif
                            </div>
                            
                            <div class="flex items-center justify-between text-sm text-gray-400">
                                <div>
                                    <span class="text-xs">Posted {{ humanDate($comment->created_at) }}</span>
                                </div>
                                <div>
                                @role('admin')
                                    <form method="POST" action="{{ route('soft.delete') }}"
                                        onsubmit="return veltoAlert('Are you sure to {{ $comment->status === 'hidden' ? 'show' : 'hide' }} this comment?')">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="commentId" value="{{ $comment->commentId }}">
                                        <input type="hidden" name="status" value="{{ $comment->status === 'hidden' ? 'visible' : 'hidden' }}">

                                        <button type="submit"
                                                class="inline-flex items-center px-3 py-1.5 border rounded-full text-sm font-medium transition duration-150 ease-in-out
                                                    {{ $comment->status === 'hidden' ? 'border-blue-500 text-blue-500 hover:bg-blue-50' : 'border-red-500 text-red-500 hover:bg-red-50' }}">
                                            @if($comment->status === 'hidden')
                                                {{-- Icon: Eye --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                </svg>
                                            @else
                                                {{-- Icon: Trash --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            @endif
                                        </button>
                                    </form>
                                @end_role
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if (count($comments) === 0)
                        <div class="flex flex-col items-center justify-center text-gray-600 bg-gray-50 border border-dashed border-gray-300 p-8 rounded-lg">
                            <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v7a2 2 0 01-2 2H7l-4 4V10a2 2 0 012-2h2m4 0h4" />
                            </svg>
                            <p class="text-lg font-medium mb-1">No comments yet</p>
                            <p class="text-sm text-gray-500">Be the first to start the discussion!</p>
                        </div>
                    @endif
                    
                </div>
            </div>

            <!-- Right Column - Related Content -->
            <div class="lg:w-1/3">
                <!-- Similar Threads -->
                <div class="bg-white p-2 mb-6">
                    <h2 class="text-xl font-semibold mb-4 text-gray-700 border-b pb-2">Latest Threads</h2>
                    <div class="space-y-4">
                        @foreach ($threads as $thread)
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-md text-gray-800 mb-1"><a href="{{route('detail.thread',['slug' => $thread->slug])}}" class="text-gray-700 font-medium hover:underline">{{$thread->title}}</a></h3>
                            <p class="text-sm text-gray-500 mb-2">{{ ucwords(str_replace('-', ' ', $thread->category)) }} </p>
                            <div class="flex items-center text-xs text-gray-400">
                                <div class="w-8 h-8 border border-red-500 text-gray-800 rounded-full flex items-center justify-center mr-2">
                                    {{ strtoupper(substr($thread->user->name, 0, 2)) }}
                                </div>
                                <div class="text-sm">
                                    <a href="{{route('user',['username' => urlencode($thread->user->username)])}}" class="text-red-500 hover:underline">
                                        {{$thread->user->name}}
                                    </a>
                                    <span class="mx-1">•</span>
                                    <span>{{ humanDate($thread->created_at) }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Popular Categories -->
                <div class="bg-white">
                    <h2 class="text-xl font-semibold mb-4 text-gray-700 border-b pb-2">Popular Categories</h2>
                    <div class="space-y-3">
                        <!-- Category 1 -->
                        <div class="bg-white p-6 rounded-lg border border-gray-200">
                            <div class="flex items-start">
                                <div class="border border-red-500 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 text-gray-800 font-semibold"><a href="{{route('category',['category' => 'general-discussion'])}}" class="hover:underline">General Discussion</a></h3>
                                    <p class="text-gray-500 text-sm mb-2">Talk about anything related to VeltoPHP</p>
                                    <p class="text-sm text-gray-400">{{$threadCounts['general-discussion']}} Threads</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Category 2 -->
                        <div class="bg-white p-6 rounded-lg border border-gray-200">
                            <div class="flex items-start">
                                <div class="border border-red-500 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 text-gray-800 font-semibold"><a href="{{route('category',['category' => 'help-support'])}}" class="hover:underline">Help & Support</a></h3>
                                    <p class="text-gray-500 text-sm mb-2">Get help with your VeltoPHP projects</p>
                                    <p class="text-sm text-gray-400">{{$threadCounts['help-support']}} Threads</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Category 3 -->
                        <div class="bg-white p-6 rounded-lg border border-gray-200">
                            <div class="flex items-start">
                                <div class="border border-red-500 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 text-gray-800 font-semibold"><a href="{{route('category',['category' => 'showcase'])}}" class="hover:underline">Showcase</a></h3>
                                    <p class="text-gray-500 text-sm mb-2">Share your VeltoPHP projects</p>
                                    <p class="text-sm text-gray-400">{{$threadCounts['showcase']}} Threads</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Category 4 -->
                        <div class="bg-white p-6 rounded-lg border border-gray-200">
                            <div class="flex items-start">
                                <div class="border border-red-500 p-3 rounded-lg mr-4">
                                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-1 text-gray-800 font-semibold"><a href="{{route('category',['category' => 'announcements'])}}" class="hover:underline">Announcements</a></h3>
                                    <p class="text-gray-500 text-sm mb-2">News and updates about VeltoPHP</p>
                                    <p class="text-sm text-gray-400">{{$threadCounts['announcements']}} Threads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection