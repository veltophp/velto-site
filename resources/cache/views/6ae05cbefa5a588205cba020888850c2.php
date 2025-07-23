<?php \Velto\Core\View\View::setLayout('layouts.app'); ?>

<?php \Velto\Core\View\View::startSection('title'); ?>
    Search | VeltoPHP V2.0
<?php \Velto\Core\View\View::endSection(); ?>

<?php \Velto\Core\View\View::startSection('app-content'); ?>
<div class=" min-h-screen mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex items-center justify-between gap-4 mb-12 flex-wrap">
            <form action="<?php echo htmlspecialchars((string)(route('search.thread')), ENT_QUOTES, 'UTF-8'); ?>" method="GET" class="flex-grow max-w-2xl">
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
            <a href="<?php echo htmlspecialchars((string)(route('new.thread')), ENT_QUOTES, 'UTF-8'); ?>" class="bg-red-500 hover:bg-red-600 text-sm text-white px-6 py-2 rounded-lg transition-colors whitespace-nowrap">
                New Thread
            </a>
        </div>
    
        <div class="mt-12 flex flex-col lg:flex-row gap-6">
            <!-- New Threads (Left Column) -->
            <div class="lg:w-2/3">
                <h2 class="text-xl font-medium border-b border-gray-200 py-2 text-gray-800 mb-4">Search Result</h2>
                
                <div class="rounded-md">
                    <?php foreach ($threads as $thread): ?>
                    <div class="border-b border-gray-200">
                        <div class="items-center justify-between mt-4">
                            <div class="flex items-start space-x-4">
                                <?php if ($thread->image): ?>
                                    <div class="w-48 mt-2 flex-shrink-0">
                                        <img src="<?php echo htmlspecialchars((string)($thread->image), ENT_QUOTES, 'UTF-8'); ?>" alt="" class="h-auto w-full object-cover rounded">
                                    </div>
                                <?php endif; ?>
                                <div class="font-medium text-xl mt-2 text-gray-900">
                                    <a href="<?php echo htmlspecialchars((string)(route('detail.thread', ['slug' => $thread->slug])), ENT_QUOTES, 'UTF-8'); ?>" class="hover:underline text-lg font-semibold">
                                        <?php echo htmlspecialchars((string)($thread->title), ENT_QUOTES, 'UTF-8'); ?>
                                    </a>
                                    <p class="font-light text-sm mt-2">
                                        <?php echo htmlspecialchars((string)(str_limit(strip_tags($thread->content), 200)), ENT_QUOTES, 'UTF-8'); ?>
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-8 flex items-center text-sm text-gray-500">
                            <div class="flex-shrink-0">
                                <div class="h-10 w-10 rounded-full border border-red-500 flex items-center justify-center text-red-600 text-xs">
                                    <?php echo htmlspecialchars((string)(strtoupper(substr($thread->user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                                </div>
                            </div>
                            <div class="ml-2 text-sm">
                                <span>
                                    <a href="<?php echo htmlspecialchars((string)(route('user',['username' => urlencode($thread->user->username)])), ENT_QUOTES, 'UTF-8'); ?>" class="text-red-500 hover:underline">
                                        <?php echo htmlspecialchars((string)($thread->user->name), ENT_QUOTES, 'UTF-8'); ?>
                                    </a>
                                </span>
                                <span class="mx-1">•</span>
                                <span><?php echo htmlspecialchars((string)($thread->commentCount), ENT_QUOTES, 'UTF-8'); ?> Replies</span>
                                <span class="mx-1">•</span>
                                <span><a href="<?php echo htmlspecialchars((string)(route('category',['category' => $thread->category])), ENT_QUOTES, 'UTF-8'); ?>" class="text-red-500 hover:underline"><?php echo htmlspecialchars((string)(ucwords(str_replace('-', ' ', $thread->category))), ENT_QUOTES, 'UTF-8'); ?></a></span>
                                <span class="mx-1">•</span>
                                <span><?php echo htmlspecialchars((string)(humanDate($thread->created_at)), ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    
                    <?php if (count($threads) === 0): ?>
                        <div class="text-center text-gray-400 p-8 border-b border-gray-100">
                            No discussions yet. Start a new thread!
                        </div>
                    <?php endif; ?>
                </div>
                
                <?= paginate($threads) ?>
            </div>
        
            <!-- Popular Threads (Right Column) -->
            <div class="lg:w-1/3">
                
            </div>
        </div>
    </div>
</div>
<?php \Velto\Core\View\View::endSection(); ?>