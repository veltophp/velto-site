@extends('layouts.axion')

@section('title')
    Dashboard | Axion
@endsection

@section('axion-content')
<div class="bg-white min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        {{-- Header --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Community Threads</h1>
                <p class="text-sm text-gray-500 mt-1">Manage your community discussions and threads</p>
            </div>
            <a href="{{route('new.thread')}}" class="inline-flex items-center px-4 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg shadow-sm transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                New Thread
            </a>
        </div>

        @if (count($threads) === 0)
            <div class="text-center py-12 px-6 bg-gray-50 border-2 border-dashed border-gray-300 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-2 text-lg font-medium text-gray-900">No threads yet</h3>
                <p class="mt-1 text-gray-500">Get started by creating your first thread</p>
                <div class="mt-6">
                    <a href="{{route('new.thread')}}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Create Thread
                    </a>
                </div>
            </div>
        @else
            <div class="space-y-4">
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

                                    {{-- Action Buttons --}}
                                    <div class="flex-shrink-0 flex items-center gap-3">
                                        <button onclick="openModal('modal-{{ $thread->threadId }}')" 
                                                class="text-blue-500 hover:text-blue-600 transition-colors p-1 rounded-full hover:bg-blue-50"
                                                title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </button>

                                        <form method="POST" action="{{ route('delete.thread', ['slug' => $thread->slug]) }}"
                                            onsubmit="return veltoAlert('Are you sure to delete this thread?')">
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
                        </div>
                    <div id="modal-{{ $thread->threadId }}" class="fixed inset-0 z-50 hidden overflow-y-auto">
                        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div class="fixed inset-0 transition-opacity" onclick="closeModal('modal-{{ $thread->threadId }}')">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>
                            
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                            
                            <div class="w-full sm:max-w-2xl inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Edit Thread</h3>
                                        <button type="button" onclick="closeModal('modal-{{ $thread->threadId }}')" class="text-gray-400 hover:text-gray-500">
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                    
                                    <form method="POST" action="{{ route('update.thread') }}" enctype="multipart/form-data" class="mt-4">
                                        @csrf
                                        <input type="hidden" name="threadId" value="{{ $thread->threadId }}">

                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                                            <input type="text" name="title" value="{{ $thread->title }}"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500">
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                                                <select name="category" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500">
                                                    <option value="general-discussion" {{ $thread->category === 'general-discussion' ? 'selected' : '' }}>General Discussion</option>
                                                    <option value="help-support" {{ $thread->category === 'help-support' ? 'selected' : '' }}>Help & Support</option>
                                                    <option value="showcase" {{ $thread->category === 'showcase' ? 'selected' : '' }}>Showcase</option>
                                                    <option value="announcements" {{ $thread->category === 'announcements' ? 'selected' : '' }}>Announcements</option>
                                                </select>
                                            </div>
                                    
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                                <select name="status" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500">
                                                    <option value="open" {{ $thread->status === 'open' ? 'selected' : '' }}>Open</option>
                                                    <option value="closed" {{ $thread->status === 'closed' ? 'selected' : '' }}>Closed</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                                            <input type="file" id="image-{{ $thread->threadId }}" name="image" accept="image/*" class="hidden">
                                            <div class="mt-1 flex items-center">
                                                {!! VeltoImage('#image-' . $thread->threadId, $thread->image) !!}
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                                            <textarea name="content" rows="6" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500">{{ $thread->content }}</textarea>
                                        </div>

                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Tags (comma separated)</label>
                                            <input type="text" name="tags" value="{{ $thread->tags }}"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500">
                                        </div>

                                        <div class="sm:flex sm:flex-row-reverse">
                                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                Save Changes
                                            </button>
                                            <button type="button" onclick="closeModal('modal-{{ $thread->threadId }}')" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-8">
                {!! paginate($threads) !!}
            </div>
        @endif
    </div>
</div>

<script>
    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
</script>
@endsection