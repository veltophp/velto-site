<?php \Velto\Core\View\View::setLayout('layouts.app'); ?>

<?php \Velto\Core\View\View::startSection('title'); ?>
    New Thread | Community Forum | VeltoPHP V2.0
<?php \Velto\Core\View\View::endSection(); ?>

<?php \Velto\Core\View\View::startSection('app-content'); ?>
<div class="min-h-screen mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column - Form -->
            <div class="lg:w-2/3">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-2xl mb-2 text-gray-800">Create New Thread</h1>
                    <p class="text-gray-500">Share your question or idea with the community</p>
                </div>

                <div class="mt-4">
                    <?php echo flash()->display('#form-submit-thread'); ?>
                </div>

                <!-- Thread Form -->
                <div class="bg-white">
                    <form id="form-submit-thread" action="<?php echo htmlspecialchars((string)(route('submit.thread')), ENT_QUOTES, 'UTF-8'); ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <!-- Category Selection -->
                        <div class="mb-6">
                            <label class="block text-gray-700 mb-2">Category</label>
                        
                            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                                <?php 
                                    $categories = [
                                        'general-discussion' => [
                                            'label' => 'General Discussion',
                                            'icon' => '<svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
                                            'bg' => 'border border-red-500'
                                        ],
                                        'help-support' => [
                                            'label' => 'Help & Support',
                                            'icon' => '<svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>',
                                            'bg' => 'border border-red-500'
                                        ],
                                        'showcase' => [
                                            'label' => 'Showcase',
                                            'icon' => '<svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
                                            'bg' => 'border border-red-500'
                                        ],
                                        'announcements' => [
                                            'label' => 'Announcements',
                                            'icon' => '<svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                                            'bg' => 'border border-red-500'
                                        ],
                                    ];
                                    $selected = old('category') ?? ($thread->category ?? '');
                                 ?>
                        
                                <?php foreach ($categories as $key => $cat): ?>
                                    <div>
                                        <input type="radio" name="category" value="<?php echo htmlspecialchars((string)($key), ENT_QUOTES, 'UTF-8'); ?>" id="category-<?php echo htmlspecialchars((string)($key), ENT_QUOTES, 'UTF-8'); ?>"
                                            class="peer hidden" <?php echo htmlspecialchars((string)($selected === $key ? 'checked' : ''), ENT_QUOTES, 'UTF-8'); ?>>
                                
                                        <label for="category-<?php echo htmlspecialchars((string)($key), ENT_QUOTES, 'UTF-8'); ?>"
                                            class="block border rounded-lg p-4 cursor-pointer transition hover:border-red-500 peer-checked:border-red-600">
                                            <div class="flex items-start h-12">
                                                <div class="<?php echo htmlspecialchars((string)($cat['bg']), ENT_QUOTES, 'UTF-8'); ?> p-1 rounded-lg mr-2">
                                                    <?= $cat['icon'] ?>
                                                </div>
                                                <div>
                                                    <h3 class="text-xs font-medium text-gray-800 mb-1"><?php echo htmlspecialchars((string)($cat['label']), ENT_QUOTES, 'UTF-8'); ?></h3>
                                                    <p class="text-xs text-gray-400"><?php echo htmlspecialchars((string)($threadCounts[$key] ?? 0), ENT_QUOTES, 'UTF-8'); ?> Threads</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                <?php endforeach ?>
                    
                            </div>
                        </div>                        

                        <!-- Thread Title -->
                        <div class="mb-6">
                            <label for="title" class="block text-gray-700 mb-2">Thread Title</label>
                            <div class="relative">
                                <input type="text" name="title" id="title" 
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none" 
                                    placeholder="What's your question or topic?">
                                
                                <!-- Emoji Button for Title -->
                                <button type="button" id="emoji-btn-title"
                                class="absolute bottom-3 right-3 p-1.5 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 transition duration-150 ease-in-out"
                                title="Insert Emoji" aria-label="Emoji Picker">
                                    😊
                                </button>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="content" class="block font-medium text-gray-700 mb-2">Content</label>
                            <div class="relative">
                                <textarea id="content" name="content" rows="10"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none transition duration-150 ease-in-out"
                                    placeholder="use ```bash <your-code/> ``` for embed code"></textarea>
                                
                                <!-- Emoji Button for Content -->
                                <button type="button" id="emoji-btn-content"
                                    class="absolute bottom-3 right-3 p-1.5 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 transition duration-150 ease-in-out"
                                    title="Insert Emoji" aria-label="Emoji Picker">
                                    😊
                                </button>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="mb-8">
                            <label for="tags" class="block text-gray-700 mb-2">Tags (Separated by Comma)</label>
                        
                            <div id="tag-container" class="flex flex-wrap gap-2 mb-2"></div>
                        
                            <input type="text" id="tag-input"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none"
                                placeholder="e.g., authentication, database, performance">
                        
                            <input type="hidden" name="tags" id="tags">
                        
                            <p class="text-xs text-gray-400 mt-1">Add up to 5 tags to describe your thread separated by comma.</p>
                        </div>
                        
                        <!-- Form Actions -->
                        <div class="flex justify-between items-center">
                            <div>
                                <label for="image"><span class="text-gray-700">Image (Optional)</span></label>
                                <input type="file" id="image" name="image" accept="image/*" hidden>
                                <span class=""><?= VeltoImage('#image') ?></span>
                            </div>
                            <div class="space-x-3">
                                <button type="submit" class="px-6 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors">
                                    Post Thread
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Guidelines -->
                <div class="mt-10 border border-red-500 rounded-lg p-5">
                    <h3 class="text-lg text-red-700 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        Community Guidelines
                    </h3>
                    <ul class="text-sm text-red-600 space-y-1 list-disc list-inside">
                        <li>Be respectful and considerate of others</li>
                        <li>Make sure your question hasn't been asked before</li>
                        <li>Provide enough details to help others understand your issue</li>
                        <li>Use clear and descriptive titles</li>
                        <li>No spam or self-promotion</li>
                    </ul>
                </div>
            </div>

            <!-- Right Column - Similar Threads -->
            <div class="lg:w-1/3">
                <!-- Similar Threads -->
                <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
                    <h2 class="text-xl mb-4 text-gray-700 border-b pb-2">Latest Threads</h2>
                    <div class="space-y-4">
                        <?php foreach ($threads as $thread): ?>
                        <div class="border-b border-gray-100 pb-4">
                            <h3 class="text-md text-gray-800 mb-1"><a href="<?php echo htmlspecialchars((string)(route('detail.thread',['slug' => $thread->slug])), ENT_QUOTES, 'UTF-8'); ?>" class="text-gray-700 font-medium hover:underline"><?php echo htmlspecialchars((string)($thread->title), ENT_QUOTES, 'UTF-8'); ?></a></h3>
                            <p class="text-sm text-gray-500 mb-2"><?php echo htmlspecialchars((string)(ucwords(str_replace('-', ' ', $thread->category))), ENT_QUOTES, 'UTF-8'); ?></p>
                            <div class="flex items-center text-xs text-gray-400">
                                <div class="w-8 h-8 border border-red-500 text-gray-800 rounded-full flex items-center justify-center mr-2">
                                    <?php echo htmlspecialchars((string)(strtoupper(substr($thread->user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                                </div>
                                <div class="text-sm">
                                    <a href="<?php echo htmlspecialchars((string)(route('user',['username' => urlencode($thread->user->username)])), ENT_QUOTES, 'UTF-8'); ?>" class="text-red-500 hover:underline">
                                        <?php echo htmlspecialchars((string)($thread->user->name), ENT_QUOTES, 'UTF-8'); ?>
                                    </a>
                                    <span class="mx-1">•</span>
                                    <span><?php echo htmlspecialchars((string)(humanDate($thread->created_at)), ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <!-- Popular Categories -->
                <div class="bg-white">
                    <h2 class="text-xl mb-4 text-gray-700 border-b pb-2">Popular Categories</h2>
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
                                    <h3 class="mb-1 text-gray-800 font-semibold"><a href="<?php echo htmlspecialchars((string)(route('category',['category' => 'general-discussion'])), ENT_QUOTES, 'UTF-8'); ?>" class="hover:underline">General Discussion</a></h3>
                                    <p class="text-gray-500 text-sm mb-2">Talk about anything related to VeltoPHP</p>
                                    <p class="text-sm text-gray-400"><?php echo htmlspecialchars((string)($threadCounts['general-discussion']), ENT_QUOTES, 'UTF-8'); ?> Threads</p>
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
                                    <h3 class="mb-1 text-gray-800 font-semibold"><a href="<?php echo htmlspecialchars((string)(route('category',['category' => 'help-support'])), ENT_QUOTES, 'UTF-8'); ?>" class="hover:underline">Help & Support</a></h3>
                                    <p class="text-gray-500 text-sm mb-2">Get help with your VeltoPHP projects</p>
                                    <p class="text-sm text-gray-400"><?php echo htmlspecialchars((string)($threadCounts['help-support']), ENT_QUOTES, 'UTF-8'); ?> Threads</p>
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
                                    <h3 class="mb-1 text-gray-800 font-semibold"><a href="<?php echo htmlspecialchars((string)(route('category',['category' => 'showcase'])), ENT_QUOTES, 'UTF-8'); ?>" class="hover:underline">Showcase</a></h3>
                                    <p class="text-gray-500 text-sm mb-2">Share your VeltoPHP projects</p>
                                    <p class="text-sm text-gray-400"><?php echo htmlspecialchars((string)($threadCounts['showcase']), ENT_QUOTES, 'UTF-8'); ?> Threads</p>
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
                                    <h3 class="mb-1 text-gray-800 font-semibold"><a href="<?php echo htmlspecialchars((string)(route('category',['category' => 'announcements'])), ENT_QUOTES, 'UTF-8'); ?>" class="hover:underline">Announcements</a></h3>
                                    <p class="text-gray-500 text-sm mb-2">News and updates about VeltoPHP</p>
                                    <p class="text-sm text-gray-400"><?php echo htmlspecialchars((string)($threadCounts['announcements']), ENT_QUOTES, 'UTF-8'); ?> Threads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php \Velto\Core\View\View::endSection(); ?>