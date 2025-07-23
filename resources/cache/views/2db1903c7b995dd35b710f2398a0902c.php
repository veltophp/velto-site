<nav class="fixed top-0 w-full bg-white/80 backdrop-blur-sm border-b border-red-100 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <a href="<?php echo htmlspecialchars((string)(route('home')), ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center space-x-2">
                    <i class="fas fa-code text-red-600 text-2xl"></i>
                    <img src="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png"
                         alt="VeltoPHP Logo"
                         class="h-8 w-8 object-contain" />
                    <span class="text-xl font-thin text-gray-900">Velto<span class="text-red-500">PHP</span></span>
                </a>
            </div>

            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="<?php echo htmlspecialchars((string)(route('docs')), ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo active('/docs', 'border-red-500'); ?> border-b-2 text-gray-600 hover:text-red-500 transition-colors font-light">Docs</a>
                <a href="<?php echo htmlspecialchars((string)(route('community')), ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo active('/community', 'border-red-500'); ?> border-b-2 text-gray-600 hover:text-red-500 transition-colors font-light">Community</a>
                <?php if (env('AUTH_LOGIN')): ?>
                    <?php if (Auth::user()): ?>
                        <a href="<?php echo htmlspecialchars((string)(route('axion.dashboard')), ENT_QUOTES, 'UTF-8'); ?>" class="text-gray-600 hover:text-red-500 transition-colors font-light">
                            Dashboard
                        </a>
                    <?php else: ?>
                        <a href="<?php echo htmlspecialchars((string)(route('login')), ENT_QUOTES, 'UTF-8'); ?>" class="text-gray-600 hover:text-red-500 transition-colors font-light">
                            Login
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <!-- Mobile Toggle Button -->
            <div class="md:hidden flex items-center">
                <button id="nav-toggle" class="text-gray-700 hover:text-red-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="nav-menu" class="md:hidden hidden px-4 pb-4">
        <a href="<?php echo htmlspecialchars((string)(route('docs')), ENT_QUOTES, 'UTF-8'); ?>" class="block py-2 text-gray-600 hover:text-red-500 font-light">Docs</a>
        <a href="<?php echo htmlspecialchars((string)(route('community')), ENT_QUOTES, 'UTF-8'); ?>" class="block py-2 text-gray-600 hover:text-red-500 font-light">Community</a>
        <?php if (env('AUTH_LOGIN')): ?>
            <div class="border-t border-red-500 pt-2 mt-2">
                <?php if (Auth::user()): ?>
                    <a href="<?php echo htmlspecialchars((string)(route('axion.dashboard')), ENT_QUOTES, 'UTF-8'); ?>" class="block py-2 text-gray-600 hover:text-red-500 font-light">
                        Dashboard
                    </a>
                <?php else: ?>
                    <a href="<?php echo htmlspecialchars((string)(route('axion.dashboard')), ENT_QUOTES, 'UTF-8'); ?>" class="block py-2 text-gray-600 hover:text-red-500 font-light">
                        Login
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>    
</nav>

<script>
    // Toggle mobile nav
    document.getElementById('nav-toggle').addEventListener('click', function () {
        const menu = document.getElementById('nav-menu');
        menu.classList.toggle('hidden');
    });
</script>
