<?php \Velto\Core\View\View::setLayout('layouts.axion'); ?>

<?php \Velto\Core\View\View::startSection('title'); ?>
    VeltoAdmin | VeltoPHP V2.0
<?php \Velto\Core\View\View::endSection(); ?>

<?php \Velto\Core\View\View::startSection('axion-content'); ?>
<div class="min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="mb-8 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900">Admin Dashboard</h1>
                <p class="mt-2 text-sm text-gray-600">Welcome back, <span class="text-red-500"><?php echo htmlspecialchars((string)(Auth::user()->name), ENT_QUOTES, 'UTF-8'); ?></span> . Here's an overview of your platform.</p>
            </div>
        </div>

        
        <div class="hidden md:flex grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Users Card -->
            <div class="bg-white hover:bg-gray-100 rounded-xl">
                <div class="px-5 py-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 border border-red-600 rounded-xl p-3">
                            <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Users</dt>
                            <dd class="mt-1 flex items-baseline">
                                <span class="text-2xl font-semibold text-gray-900"><?php echo htmlspecialchars((string)($totalUsers), ENT_QUOTES, 'UTF-8'); ?></span>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Threads Card -->
            <div class="bg-white hover:bg-gray-100 rounded-xl">
                <div class="px-5 py-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 border border-red-600 rounded-xl p-3">
                            <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Threads</dt>
                            <dd class="mt-1 flex items-baseline">
                                <span class="text-2xl font-semibold text-gray-900"><?php echo htmlspecialchars((string)($totalThreads), ENT_QUOTES, 'UTF-8'); ?></span>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Card -->
            <div class="bg-white hover:bg-gray-100 rounded-xl">
                <div class="px-5 py-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 border border-red-600 rounded-xl p-3">
                            <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Comments</dt>
                            <dd class="mt-1 flex items-baseline">
                                <span class="text-2xl font-semibold text-gray-900"><?php echo htmlspecialchars((string)($totalComments), ENT_QUOTES, 'UTF-8'); ?></span>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="mb-8">
            <!-- Header with search -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                <div>
                    <h2 class="text-xl text-gray-900">User Management</h2>
                    <p class="text-sm text-gray-500 mt-1">Manage all registered users and their permissions</p>
                </div>
                <form action="<?php echo htmlspecialchars((string)(route('search.user')), ENT_QUOTES, 'UTF-8'); ?>" class="flex w-full sm:w-64">
                    <div class="relative flex-grow">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            name="search_user"
                            placeholder="Search users..." 
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-l-lg bg-white shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        >
                    </div>
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-r-lg hover:bg-red-600">
                        Go
                    </button>
                </form>                
            </div>
            
            <!-- Table container -->
            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($users as $user): ?>
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full border border-red-500 flex items-center justify-center text-gray-800 font-medium">
                                                <?php echo htmlspecialchars((string)(strtoupper(substr($user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-semibold text-red-500"> <a href="<?php echo htmlspecialchars((string)(route('user',['username' => urlencode($user->username)])), ENT_QUOTES, 'UTF-8'); ?>" class="hover:underline"><?php echo htmlspecialchars((string)($user->name), ENT_QUOTES, 'UTF-8'); ?></a></div>
                                            <div class="text-sm text-gray-500">@<?php echo htmlspecialchars((string)($user->username), ENT_QUOTES, 'UTF-8'); ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo htmlspecialchars((string)($user->email), ENT_QUOTES, 'UTF-8'); ?></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-medium rounded-full 
                                        <?php echo htmlspecialchars((string)($user->role === 'admin' ? 'bg-red-500 text-white' : 'bg-green-500 text-white'), ENT_QUOTES, 'UTF-8'); ?>">
                                        <?php echo htmlspecialchars((string)(ucfirst($user->role)), ENT_QUOTES, 'UTF-8'); ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-medium rounded-full 
                                        <?php echo htmlspecialchars((string)($user->email_verified ? 'bg-green-500 text-white' : 'bg-yellow-500 text-white'), ENT_QUOTES, 'UTF-8'); ?>">
                                        <?php echo htmlspecialchars((string)($user->email_verified ? 'Verified' : 'Pending'), ENT_QUOTES, 'UTF-8'); ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex items-center justify-end space-x-3">
                                        
                                        <a href="#" onclick="document.getElementById('modal-edit-<?php echo htmlspecialchars((string)($user->id), ENT_QUOTES, 'UTF-8'); ?>').showModal()" class="text-blue-600 hover:text-blue-800" title="Edit">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        
                                        <a href="#" onclick="document.getElementById('modal-view-<?php echo htmlspecialchars((string)($user->id), ENT_QUOTES, 'UTF-8'); ?>').showModal()" class="text-gray-600 hover:text-gray-800" title="View">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <dialog id="modal-view-<?php echo htmlspecialchars((string)($user->id), ENT_QUOTES, 'UTF-8'); ?>" class="rounded-xl w-full max-w-md p-0 overflow-hidden border border-gray-100">
                                <!-- Header with gradient -->
                                <div class="p-6 text-gray-800 border-b border-gray-100">
                                    <div class="flex items-center space-x-4">
                                        <!-- Modern avatar with subtle shadow -->
                                        <div class="h-12 w-12 rounded-full border border-red-500 flex items-center justify-center text-red-500 font-bold text-lg backdrop-blur-sm">
                                            <?php echo htmlspecialchars((string)(strtoupper(substr($user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                                        </div>
                                        <div>
                                            <h2 class="text-xl font-bold"><?php echo htmlspecialchars((string)($user->name), ENT_QUOTES, 'UTF-8'); ?></h2>
                                            <p class="text-sm opacity-90"><?php echo htmlspecialchars((string)(ucfirst($user->role)), ENT_QUOTES, 'UTF-8'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Content area -->
                                <div class="p-6 space-y-4">
                                    <div class="flex items-center py-2 border-b border-gray-100">
                                        <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Username</p>
                                            <p class="font-medium"><?php echo htmlspecialchars((string)($user->username), ENT_QUOTES, 'UTF-8'); ?></p>
                                        </div>
                                    </div>
                            
                                    <div class="flex items-center py-2 border-b border-gray-100">
                                        <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Email</p>
                                            <p class="font-medium"><?php echo htmlspecialchars((string)($user->email), ENT_QUOTES, 'UTF-8'); ?></p>
                                        </div>
                                    </div>
                            
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Status</p>
                                            <p class="font-medium flex items-center">
                                                <span class="inline-block w-2 h-2 rounded-full mr-2 <?php echo htmlspecialchars((string)($user->email_verified ? 'bg-green-400' : 'bg-yellow-400'), ENT_QUOTES, 'UTF-8'); ?>"></span>
                                                <?php echo htmlspecialchars((string)($user->email_verified ? 'Verified' : 'Pending Verification'), ENT_QUOTES, 'UTF-8'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Footer with action -->
                                <div class="px-6 pb-6">
                                    <button onclick="document.getElementById('modal-view-<?php echo htmlspecialchars((string)($user->id), ENT_QUOTES, 'UTF-8'); ?>').close()" 
                                            class="w-full py-3 bg-red-500 hover:bg-red-600 text-white rounded-lg font-medium transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                                        Close Profile
                                    </button>
                                </div>
                            </dialog>
                            
                            
                            
                            <dialog id="modal-edit-<?php echo htmlspecialchars((string)($user->id), ENT_QUOTES, 'UTF-8'); ?>" class="rounded-xl w-full max-w-md p-0 overflow-hidden border border-gray-100">
                                <form method="POST" action="<?php echo htmlspecialchars((string)(route('user.update', ['username' => $user->username])), ENT_QUOTES, 'UTF-8'); ?>">
                                    <?= csrf_field() ?>

                                    <!-- Header -->
                                    <div class="p-6 text-gray-800 border-b border-gray-100">
                                        <div class="flex items-center space-x-4">
                                            <div class="h-12 w-12 rounded-full border border-red-500 flex items-center justify-center text-red-500 font-bold text-lg backdrop-blur-sm">
                                                <?php echo htmlspecialchars((string)(strtoupper(substr($user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                                            </div>
                                            <div>
                                                <h2 class="text-xl font-bold"><?php echo htmlspecialchars((string)($user->name), ENT_QUOTES, 'UTF-8'); ?></h2>
                                                <p class="text-sm opacity-90"><?php echo htmlspecialchars((string)(ucfirst($user->role)), ENT_QUOTES, 'UTF-8'); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form content -->
                                    <div class="p-6 space-y-4 text-gray-700">
                                        <div>
                                            <label class="block text-sm text-gray-500 mb-1">Name</label>
                                            <input name="name" value="<?php echo htmlspecialchars((string)($user->name), ENT_QUOTES, 'UTF-8'); ?>" required
                                                class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring-1 focus:ring-red-500 focus:border-red-500 outline-none">
                                        </div>

                                        <div>
                                            <label class="block text-sm text-gray-500 mb-1">Email</label>
                                            <input name="email" value="<?php echo htmlspecialchars((string)($user->email), ENT_QUOTES, 'UTF-8'); ?>" type="email" required
                                                class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring-1 focus:ring-red-500 focus:border-red-500 outline-none">
                                        </div>

                                        <div>
                                            <label class="block text-sm text-gray-500 mb-1">Role</label>
                                            <select name="role"
                                                class="w-full border border-gray-300 px-3 py-2 rounded-md focus:ring-1 focus:ring-red-500 focus:border-red-500 outline-none">
                                                <option value="user" <?php echo htmlspecialchars((string)($user->role === 'user' ? 'selected' : ''), ENT_QUOTES, 'UTF-8'); ?>>User</option>
                                                <option value="writer" <?php echo htmlspecialchars((string)($user->role === 'writer' ? 'selected' : ''), ENT_QUOTES, 'UTF-8'); ?>>Writer</option>
                                                <option value="moderator" <?php echo htmlspecialchars((string)($user->role === 'moderator' ? 'selected' : ''), ENT_QUOTES, 'UTF-8'); ?>>Moderator</option>
                                                <option value="admin" <?php echo htmlspecialchars((string)($user->role === 'admin' ? 'selected' : ''), ENT_QUOTES, 'UTF-8'); ?>>Admin</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Footer -->
                                    <div class="px-6 pb-6 flex justify-end space-x-3">
                                        <button type="button"
                                            onclick="document.getElementById('modal-edit-<?php echo htmlspecialchars((string)($user->id), ENT_QUOTES, 'UTF-8'); ?>').close()"
                                            class="px-4 py-2 rounded-lg text-gray-700 bg-gray-200 hover:bg-gray-300 font-medium transition-all duration-200">
                                            Cancel
                                        </button>
                                        <button type="submit"
                                            class="px-4 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 font-medium transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </dialog>
                            <?php endforeach ?>
                        </tbody>
                            
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="bg-white px-6 py-4 flex flex-col sm:flex-row items-center justify-between border-t border-gray-200">
                    <div class="flex space-x-1">
                        <?= paginate($users) ?>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <div>
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl text-gray-900">Recent Threads</h2>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800">View All</a>
                </div>
                
                <div class="bg-white border border-gray-200 overflow-hidden sm:rounded-lg">
                    <?php if (count($threads) === 0): ?>
                        <div class="text-center py-12 px-6 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h3 class="mt-2 text-lg font-medium text-gray-900">No threads yet</h3>
                        </div>
                    <?php else: ?>
                        <ul class="divide-y divide-gray-200">
                            <?php foreach ($threads as $thread): ?>
                            <li>
                                <div class="relative group px-6 py-4 hover:bg-gray-50">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-start space-x-4">
                                            <?php if ($thread->image): ?>
                                                <div class="w-36 flex-shrink-0">
                                                    <img src="<?php echo htmlspecialchars((string)($thread->image), ENT_QUOTES, 'UTF-8'); ?>" alt="" class="h-auto w-full object-cover rounded">
                                                </div>
                                            <?php endif; ?>
                                            <div class="font-medium text-gray-900">
                                                <a href="<?php echo htmlspecialchars((string)(route('detail.thread', ['slug' => $thread->slug])), ENT_QUOTES, 'UTF-8'); ?>" class="text-blue-500 hover:underline">
                                                    <?php echo htmlspecialchars((string)($thread->title), ENT_QUOTES, 'UTF-8'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex items-center text-sm text-gray-500">
                                        <div class="flex-shrink-0">
                                            <div class="h-8 w-8 rounded-full border border-red-500 flex items-center justify-center text-gray-800 text-xs">
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
                                            <span><?php echo htmlspecialchars((string)(ucwords(str_replace('-', ' ', $thread->category))), ENT_QUOTES, 'UTF-8'); ?></span>
                                            <span class="mx-1">•</span>
                                            <span class=""><?php echo htmlspecialchars((string)(ucwords($thread->status)), ENT_QUOTES, 'UTF-8'); ?></span>
                                            <span class="mx-1">•</span>
                                            <span><?php echo htmlspecialchars((string)(humanDate($thread->created_at)), ENT_QUOTES, 'UTF-8'); ?></span>
                                        </div>
                                    </div>
                                    <div class="mt-12 flex space-x-2  hidden group-hover:flex">
                                        
                                        <form method="POST" action="<?php echo htmlspecialchars((string)(route('admin.delete.thread', ['slug' => $thread->slug])), ENT_QUOTES, 'UTF-8'); ?>" onsubmit="return veltoAlert('Are you sure to delete this thread?')">
                                            <?= csrf_field() ?>
                                            <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-red-500 rounded-full text-sm font-medium text-red-500 hover:bg-red-50 transition duration-150 ease-in-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>                                    
                                    </div>
                                </div>
                            </li>
                            <?php endforeach ?>
                        </ul>
                        <div class=" bg-white px-6 py-3 flex items-center justify-between border-t border-gray-200">
                            <div class="flex space-x-2">
                                <?= paginate($threads) ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            
            <div>
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl text-gray-900">Recent Comments</h2>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800">View All</a>
                </div>
                
                <div class="bg-white border border-gray-200 overflow-hidden sm:rounded-lg">
                    <?php if (count($comments) === 0): ?>
                        <div class="text-center py-12 px-6 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h3 class="mt-2 text-lg font-medium text-gray-900">No comments yet</h3>
                        </div>
                    <?php else: ?>
                        <ul class="divide-y divide-gray-200">
                            <?php foreach ($comments as $comment): ?>
                            <li class="border-b border-gray-100 last:border-0">
                                <div class="px-6 py-4 hover:bg-gray-50 transition-colors duration-200">
                                    <div class="flex items-start gap-3">
                                        <!-- Avatar -->
                                        <div class="flex-shrink-0">
                                            <div class="h-10 w-10 rounded-full border border-red-500 flex items-center justify-center text-gray-800 font-medium text-sm">
                                                <?php echo htmlspecialchars((string)(strtoupper(substr($comment->user->name, 0, 2))), ENT_QUOTES, 'UTF-8'); ?>
                                            </div>
                                        </div>
                                        
                                        <!-- Content -->
                                        <div class="flex-1 min-w-0">
                                            <!-- User info -->
                                            <div class="flex mt-2 items-baseline gap-2">
                                                <a href="<?php echo htmlspecialchars((string)(route('user',['username' => urlencode($comment->user->username)])), ENT_QUOTES, 'UTF-8'); ?>" 
                                                class="text-sm text-red-500 hover:underline">
                                                    <?php echo htmlspecialchars((string)($comment->user->name), ENT_QUOTES, 'UTF-8'); ?>
                                                </a>
                                            </div>
                                            
                                            <!-- Comment text -->
                                            <div class="prose max-w-none text-gray-700 mb-4">
                                                <?php if ($comment->status === 'hidden'): ?>
                                                    <div class="italic text-sm text-gray-400">
                                                        This comment was hidden due to inappropriate content.
                                                    </div>
                                                <?php else: ?>
                                                    <?= render_comment($comment->comment) ?>
                                                <?php endif; ?>
                                            </div>

                                            <span class="text-xs text-gray-400"><?php echo htmlspecialchars((string)(humanDate($comment->created_at)), ENT_QUOTES, 'UTF-8'); ?></span>
                                            
                                            <!-- Thread reference -->
                                            <div class="mt-3 flex flex-wrap items-center gap-2 text-xs">
                                                <span class="text-gray-500">On thread:</span>
                                                <a href="<?php echo htmlspecialchars((string)(route('detail.thread',['slug' => $comment->thread->slug])), ENT_QUOTES, 'UTF-8'); ?>" 
                                                class="font-medium text-blue-600 hover:text-blue-800 hover:underline">
                                                    <?php echo htmlspecialchars((string)($comment->thread->title), ENT_QUOTES, 'UTF-8'); ?>
                                                </a>
                                            </div>
                                        </div>

                                        <form method="POST" action="<?php echo htmlspecialchars((string)(route('soft.delete')), ENT_QUOTES, 'UTF-8'); ?>"
                                            onsubmit="return veltoAlert('Are you sure to <?php echo htmlspecialchars((string)($comment->status === 'hidden' ? 'show' : 'hide'), ENT_QUOTES, 'UTF-8'); ?> this comment?')">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="commentId" value="<?php echo htmlspecialchars((string)($comment->commentId), ENT_QUOTES, 'UTF-8'); ?>">
                                            <input type="hidden" name="status" value="<?php echo htmlspecialchars((string)($comment->status === 'hidden' ? 'visible' : 'hidden'), ENT_QUOTES, 'UTF-8'); ?>">

                                            <button type="submit"
                                                    class="inline-flex items-center px-3 py-1.5 border rounded-full text-sm font-medium transition duration-150 ease-in-out
                                                        <?php echo htmlspecialchars((string)($comment->status === 'hidden' ? 'border-blue-500 text-blue-500 hover:bg-blue-50' : 'border-red-500 text-red-500 hover:bg-red-50'), ENT_QUOTES, 'UTF-8'); ?>">
                                                <?php if ($comment->status === 'hidden'): ?>
                                                    
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                <?php else: ?>
                                                    
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                <?php endif; ?>
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </li>
                            <?php endforeach ?>
                        </ul>
                        <div class=" bg-white px-6 py-3 flex items-center justify-between border-t border-gray-200">
                            <div class="flex space-x-2">
                                <?= paginate($comments) ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php \Velto\Core\View\View::endSection(); ?>