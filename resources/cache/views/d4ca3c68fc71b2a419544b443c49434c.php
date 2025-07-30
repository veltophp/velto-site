<?php \Velto\Core\View\View::setLayout('layouts.app'); ?>

<?php \Velto\Core\View\View::startSection('title'); ?>
    <?php echo htmlspecialchars((string)($user->name), ENT_QUOTES, 'UTF-8'); ?> | Profile User | VeltoPHP V2.0
<?php \Velto\Core\View\View::endSection(); ?>

<?php \Velto\Core\View\View::startSection('app-content'); ?>
<div class="min-h-screen pt-32 pb-12">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <!-- User Profile -->
        <div class="bg-white border border-gray-200 rounded-xl px-6 py-4 mb-8 flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center text-xl font-semibold">
                    <?php echo htmlspecialchars((string)(strtoupper(substr($user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                </div>
                <div class="ml-4">
                    <p class="text-lg font-semibold text-red-500"><?php echo htmlspecialchars((string)($user->name), ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="text-sm text-gray-500"><?php echo htmlspecialchars((string)(ucwords($user->role)), ENT_QUOTES, 'UTF-8'); ?> • Joined on <?php echo htmlspecialchars((string)(date('d F Y', strtotime($user->created_at))), ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            </div>
        </div>

        <!-- User Threads -->
        <div class="mb-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($threads as $thread): ?>
                <div class="relative bg-white border border-gray-200 hover:border-red-300 rounded-xl p-5 transition-shadow shadow-sm hover:shadow-md">
                    <?php if ($thread->status === 'closed'): ?>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <span class="transform rotate-[-20deg] text-[100px] font-extrabold text-red-600 opacity-5 select-none">
                            CLOSED
                        </span>
                    </div>
                    <?php endif; ?>

                    <div class="flex items-start gap-3 relative z-10">
                        <!-- Avatar -->
                        <div class="h-10 w-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-medium text-sm">
                            <?php echo htmlspecialchars((string)(strtoupper(substr($thread->user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                        </div>

                        <!-- Content -->
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2 leading-snug">
                                <a href="<?php echo htmlspecialchars((string)(route('detail.thread', ['slug' => $thread->slug])), ENT_QUOTES, 'UTF-8'); ?>" class="hover:text-red-600 hover:underline">
                                    <?php echo htmlspecialchars((string)($thread->title), ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </h3>

                            <div class="text-xs text-gray-500 mb-2">
                                <span>Started by</span>
                                <a href="<?php echo htmlspecialchars((string)(route('user', ['username' => urlencode($thread->user->username)])), ENT_QUOTES, 'UTF-8'); ?>" class="text-red-500 hover:underline font-medium ml-1">
                                    <?php echo htmlspecialchars((string)($thread->user->name), ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                                <span class="mx-1">•</span>
                                <a href="<?php echo htmlspecialchars((string)(route('category', ['category' => $thread->category])), ENT_QUOTES, 'UTF-8'); ?>" class="text-red-500 hover:underline font-medium">
                                    <?php echo htmlspecialchars((string)(ucwords(str_replace('-', ' ', $thread->category))), ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </div>

                            <div class="text-xs text-gray-400 mb-3"><?php echo htmlspecialchars((string)(humanDate($thread->created_at)), ENT_QUOTES, 'UTF-8'); ?></div>

                            <div class="flex items-center justify-between text-sm text-gray-600">
                                <span><i class="fas fa-comment-alt mr-1.5 text-gray-400"></i> <?php echo htmlspecialchars((string)($thread->commentCount), ENT_QUOTES, 'UTF-8'); ?> Replies</span>
                            </div>

                            <?php 
                                $tags = explode(',', $thread->tags ?? '');
                             ?>
                            <?php if (!empty($tags)): ?>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <?php foreach ($tags as $tag): ?>
                                    <?php  $tag = trim($tag);  ?>
                                    <?php if ($tag !== ''): ?>
                                    <a href="<?php echo htmlspecialchars((string)(route('tag', ['tag' => urlencode($tag)])), ENT_QUOTES, 'UTF-8'); ?>"
                                        class="px-3 py-1.5 bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-full text-xs font-medium transition">
                                        <i class="fas fa-hashtag text-xs mr-1"></i> <?php echo htmlspecialchars((string)($tag), ENT_QUOTES, 'UTF-8'); ?>
                                    </a>
                                    <?php endif; ?>
                                <?php endforeach ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

            <?php if (count($threads) === 0): ?>
            <div class="text-center text-gray-400 p-12 bg-gray-50 border border-dashed border-gray-300 rounded-xl mt-10">
                <i class="fas fa-comment-slash text-4xl mb-4"></i>
                <p class="text-lg">No Threads is available!</p>
            </div>
            <?php endif; ?>

            <div class="mt-10">
                <?= paginate($threads) ?>
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
                <?php if (!empty($popularTags)): ?>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($popularTags as $tag => $count): ?>
                    <a href="<?php echo htmlspecialchars((string)(route('tag', ['tag' => urlencode($tag)])), ENT_QUOTES, 'UTF-8'); ?>"
                        class="px-3 py-1.5 bg-gray-100 hover:bg-red-100 text-gray-700 hover:text-red-700 rounded-full text-sm transition flex items-center">
                        <i class="fas fa-hashtag mr-1 text-xs"></i> <?php echo htmlspecialchars((string)($tag), ENT_QUOTES, 'UTF-8'); ?>
                        <span class="ml-1 text-xs bg-gray-200 px-1.5 py-0.5 rounded-full"><?php echo htmlspecialchars((string)($count), ENT_QUOTES, 'UTF-8'); ?></span>
                    </a>
                    <?php endforeach ?>
                </div>
                <?php else: ?>
                <p class="text-gray-400 text-center py-4">No tags yet</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php \Velto\Core\View\View::endSection(); ?>
