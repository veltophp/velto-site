<?php \Velto\Core\View\View::setLayout('layouts.app'); ?>

<?php \Velto\Core\View\View::startSection('title'); ?>
    <?php echo htmlspecialchars((string)($user->name), ENT_QUOTES, 'UTF-8'); ?> | Profile User | VeltoPHP V2.0
<?php \Velto\Core\View\View::endSection(); ?>

<?php \Velto\Core\View\View::startSection('app-content'); ?>
<div class=" min-h-screen mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- User Profile -->
        <div class="flex items-center justify-between bg-white p-4 rounded-lg border border-gray-200 mb-8">
            <div class="flex items-center">
                <div class="w-12 h-12 rounded-full border border-red-500 text-gray-800 flex items-center justify-center text-xl">
                    <?php echo htmlspecialchars((string)(strtoupper(substr($user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                </div>
                <div class="ml-4">
                    <p class="text-lg font-medium text-red-500"><?php echo htmlspecialchars((string)($user->name), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="text-sm text-gray-500"> <?php echo htmlspecialchars((string)(ucwords($user->role)), ENT_QUOTES, 'UTF-8'); ?> •Joined on <?php echo htmlspecialchars((string)(date('d F Y', strtotime($user->created_at))), ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            </div>
        </div>

        <!-- Threads -->
        <div class="mb-12">
            <div class="bg-white overflow-hidden">

                <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($threads as $thread): ?>
                        <div class="relative bg-white border border-gray-200 h-auto rounded-lg p-4 shadow-sm hover:shadow transition overflow-hidden">
                            <?php if ($thread->status === 'closed'): ?>
                                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                    <span class="transform rotate-[-20deg] text-[120px] font-extrabold text-red-600 opacity-5 select-none">
                                        CLOSED
                                    </span>
                                </div>
                            <?php endif; ?>
                            <div class="flex items-start mb-3 mt-4">
                                <div class="w-10 h-10 border border-red-500 text-gray-800 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-sm">
                                        <?php echo htmlspecialchars((string)(strtoupper(substr($thread->user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-base text-gray-800 mb-1 leading-snug">
                                        <a href="<?php echo htmlspecialchars((string)(route('detail.thread', ['slug' => $thread->slug])), ENT_QUOTES, 'UTF-8'); ?>" class="hover:underline text-lg font-semibold">
                                            <?php echo htmlspecialchars((string)($thread->title), ENT_QUOTES, 'UTF-8'); ?>
                                        </a>
                                    </h3>
                                    <div class="text-sm text-gray-500 mt-4">
                                        Started by 
                                        <a href="<?php echo htmlspecialchars((string)(route('user', ['username' => urlencode($thread->user->username)])), ENT_QUOTES, 'UTF-8'); ?>" class="text-red-500 hover:underline">
                                            <?php echo htmlspecialchars((string)($thread->user->name), ENT_QUOTES, 'UTF-8'); ?>
                                        </a> • 
                                        <a href="<?php echo htmlspecialchars((string)(route('category', ['category' => $thread->category])), ENT_QUOTES, 'UTF-8'); ?>" class="text-red-500 hover:underline">
                                            <?php echo htmlspecialchars((string)(ucwords(str_replace('-', ' ', $thread->category))), ENT_QUOTES, 'UTF-8'); ?> </a>
                                        <div>
                                             <?php echo htmlspecialchars((string)(humanDate($thread->created_at)), ENT_QUOTES, 'UTF-8'); ?>
                                        </div>
                                        <div class="flex items-center justify-between text-sm text-gray-600 mt-2">
                                            <span><?php echo htmlspecialchars((string)($thread->commentCount), ENT_QUOTES, 'UTF-8'); ?> Replies</span>
                                        </div>
                                        <div class="my-4">
                                            <?php 
                                                $tags = explode(',', $thread->tags ?? '');
                                             ?>
                                        
                                            <?php foreach ($tags as $tag): ?>
                                                <?php  $tag = trim($tag);  ?>
                                                <?php if ($tag !== ''): ?>
                                                    <a href="<?php echo htmlspecialchars((string)(route('tag', ['tag' => urlencode($tag)])), ENT_QUOTES, 'UTF-8'); ?>"
                                                        class="px-3 mx-1 text-gray-800 border border-red-500 py-1 rounded-full text-sm">
                                                        <?php echo htmlspecialchars((string)($tag), ENT_QUOTES, 'UTF-8'); ?>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                
                <?php if (count($threads) === 0): ?>
                    <div class="text-center text-gray-500 bg-gray-100 border border-dashed border-red-500 p-6 rounded-lg">
                        No Threads is available!
                    </div>
                <?php endif; ?>
            </div>
            <?= paginate($threads) ?>
        </div>

        <div>
            <h2 class="text-xl mb-4 text-gray-700 border-b pb-2">Popular Tags</h2>
            <?php if (!empty($popularTags)): ?>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($popularTags as $tag => $count): ?>
                        <a href="<?php echo htmlspecialchars((string)(route('tag', ['tag' => urlencode($tag)])), ENT_QUOTES, 'UTF-8'); ?>"
                        class="px-3 border border-red-500 py-1 rounded-full text-sm hover:opacity-80 transition">
                            <?php echo htmlspecialchars((string)($tag), ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    <?php endforeach ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php \Velto\Core\View\View::endSection(); ?>