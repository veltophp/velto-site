<nav class="bg-white sticky top-0 z-50 border-b border-red-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <div class="flex items-center space-x-4">
                <a href="<?php echo htmlspecialchars((string)(route('home')), ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center space-x-2">
                    <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png"
                         alt="VeltoPHP Logo"
                         class="h-10 w-10 object-contain" />
                </a>

                
                <div class="hidden sm:flex space-x-6">
                    <a href="<?php echo htmlspecialchars((string)(route('axion.dashboard')), ENT_QUOTES, 'UTF-8'); ?>"
                       class="<?php echo active('/axion', 'border-red-500'); ?> inline-flex items-center px-1 pt-1 border-b-2 text-gray-700 hover:text-red-600 hover:border-red-400">
                        Dashboard
                    </a>

                    <?php if(auth() && auth()->role === 'admin'): ?>
                    <a href="<?php echo htmlspecialchars((string)(route('veltoadmin')), ENT_QUOTES, 'UTF-8'); ?>"
                       class="<?php echo active('/velto/admin', 'border-red-500'); ?> inline-flex items-center px-1 pt-1 border-b-2 text-gray-700 hover:text-red-600 hover:border-red-400">
                        Admin
                    </a>
                    <?php endif; ?>

                    <a href="<?php echo htmlspecialchars((string)(route('axion.thread')), ENT_QUOTES, 'UTF-8'); ?>"
                       class="<?php echo active('/axion/thread', 'border-red-500'); ?> inline-flex items-center px-1 pt-1 border-b-2 text-gray-700 hover:text-red-600 hover:border-red-400">
                        Threads
                    </a>
                    <a href="<?php echo htmlspecialchars((string)(route('axion.activity')), ENT_QUOTES, 'UTF-8'); ?>"
                       class="<?php echo active('/axion/activity', 'border-red-500'); ?> inline-flex items-center px-1 pt-1 border-b-2 text-gray-700 hover:text-red-600 hover:border-red-400">
                        Activity
                    </a>
                </div>
            </div>

            
            <div class="hidden sm:flex items-center space-x-4">
                <a href="<?php echo htmlspecialchars((string)(route('axion.profile')), ENT_QUOTES, 'UTF-8'); ?>"
                   class="<?php echo active('/axion/profile', 'border-red-500'); ?> inline-flex items-center px-1 pt-1 border-b-2 text-gray-800 hover:text-red-600 hover:border-red-400">
                   <?php echo htmlspecialchars((string)(Auth::user()->name), ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </div>

            
            <div class="sm:hidden flex items-center">
                <button id="nav-toggle-sm" class="text-gray-700 hover:text-red-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    
    <div id="nav-menu-sm" class="sm:hidden hidden px-4 pb-4">
        <a href="<?php echo htmlspecialchars((string)(route('axion.dashboard')), ENT_QUOTES, 'UTF-8'); ?>"
           class="block py-2 text-gray-700 hover:text-red-600 font-light">Dashboard</a>
           
        <?php if(auth() && auth()->role === 'admin'): ?>
        <a href="<?php echo htmlspecialchars((string)(route('veltoadmin')), ENT_QUOTES, 'UTF-8'); ?>"
           class="block py-2 text-gray-700 hover:text-red-600 font-light">Admin</a>
        <?php endif; ?>

        <a href="<?php echo htmlspecialchars((string)(route('axion.thread')), ENT_QUOTES, 'UTF-8'); ?>"
           class="block py-2 text-gray-700 hover:text-red-600 font-light">Threads</a>

        <a href="<?php echo htmlspecialchars((string)(route('axion.activity')), ENT_QUOTES, 'UTF-8'); ?>"
           class="block py-2 text-gray-700 hover:text-red-600 font-light">Activity</a>
        
        <div class="border-t border-red-500 pt-2 mt-2">
            <a href="<?php echo htmlspecialchars((string)(route('axion.profile')), ENT_QUOTES, 'UTF-8'); ?>"
               class="block py-2 text-gray-800 hover:text-red-600 font-light">
               <?php echo htmlspecialchars((string)(Auth::user()->name), ENT_QUOTES, 'UTF-8'); ?>
            </a>
        </div>
    </div>
</nav>

<script>
    // Toggle mobile nav
    document.getElementById('nav-toggle-sm').addEventListener('click', function () {
        const menu = document.getElementById('nav-menu-sm');
        menu.classList.toggle('hidden');
    });
</script>
