<?php \Velto\Core\View\View::setLayout('layouts.app'); ?>

<?php \Velto\Core\View\View::startSection('title'); ?>
    Welcome to VeltoPHP V2.0
<?php \Velto\Core\View\View::endSection(); ?>

<?php \Velto\Core\View\View::startSection('app-content'); ?>
<div class="min-h-screen font-thin mb-24">
    <div class="pt-32 pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="text-center font-light text-sm text-gray-700 dark:text-gray-300 py-6 px-4">
                    <span class="italic">Bug report, contribution, or donation</span> — email us at 
                    <a href="mailto:dev@veltophp.com" class="underline text-red-600 dark:text-red-400 hover:text-red-500">dev@veltophp.com</a>
                </div> 
                <h1 class="text-5xl md:text-6xl font-thin text-gray-900 mb-4">
                    Welcome to 
                    <span class="relative text-red-500 ml-2 inline-block">
                        VeltoPHP
                        <span class="absolute -top-2 -right-4 text-sm text-red-500 font-light">V2</span>
                    </span>
                </h1>                
                <p class="text-gray-600 font-light mb-12 max-w-4xl mx-auto">
                    <?php echo htmlspecialchars((string)($message), ENT_QUOTES, 'UTF-8'); ?>
                </p>  
                <div>
                    <a href="https://github.com/veltophp/velto" target="_blank" rel="noopener" class="inline-flex items-center px-4 py-3 bg-red-500 text-white text-sm font-semibold rounded-lg hover:bg-gray-800 transition">
                        <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 24 24">
                            <path d="M12 .5C5.73.5.5 5.73.5 12c0 5.08 3.29 9.39 7.86 10.92.58.11.79-.25.79-.56 0-.28-.01-1.02-.02-2-3.2.7-3.87-1.54-3.87-1.54-.53-1.35-1.3-1.71-1.3-1.71-1.07-.73.08-.72.08-.72 1.19.08 1.81 1.22 1.81 1.22 1.05 1.8 2.75 1.28 3.42.98.11-.76.41-1.28.74-1.57-2.55-.29-5.23-1.28-5.23-5.71 0-1.26.45-2.29 1.18-3.1-.12-.29-.51-1.45.11-3.02 0 0 .96-.31 3.15 1.18a10.94 10.94 0 012.87-.39c.97 0 1.95.13 2.87.39 2.18-1.49 3.14-1.18 3.14-1.18.63 1.57.24 2.73.12 3.02.74.81 1.18 1.84 1.18 3.1 0 4.44-2.69 5.41-5.25 5.69.42.36.79 1.09.79 2.2 0 1.59-.01 2.87-.01 3.26 0 .31.21.68.8.56A10.51 10.51 0 0023.5 12C23.5 5.73 18.27.5 12 .5z"/>
                        </svg>
                        Visit GitHub
                    </a>                    
                </div>                              
            </div>
        </div>
    </div>

    <div class="text-gray-100 max-w-2xl mx-auto p-6 space-y-4">
        <h2 class="text-xl font-bold text-gray-600">Getting Started with VeltoPHP</h2>
      
        <div class="space-y-2 font-mono text-sm bg-gray-800 p-4 rounded-lg border border-gray-700">
          <p><span class="text-green-400"># 1. Create a new project using Composer</span><br>
          composer create-project veltophp/velto my-project</p>
      
          <p><span class="text-green-400"># 2. Move into the project directory</span><br>
          cd my-project</p>
      
          <p><span class="text-green-400"># 3. Start the development server</span><br>
          php velto start</p>
      
          <p><span class="text-green-400"># 4. Open your browser and visit:</span><br>
          http://localhost:8000</p>
        </div>
    </div>      

    <div class="max-w-7xl mt-12 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-thin text-gray-900 mb-4">Built for Modern Development</h2>
            <p class="text-gray-600 font-light">Everything you need to build amazing applications</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group">
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl border border-red-100 p-8 hover:border-red-200 transition-all">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-red-200 transition-colors">
                        <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-light text-gray-900 mb-3">Light and Efficient</h3>
                    <p class="text-gray-600 font-light">VeltoPHP keeps things simple, so your apps stay fast and responsive.</p>
                </div>
            </div>
        
            <div class="group">
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl border border-red-100 p-8 hover:border-red-200 transition-all">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-red-200 transition-colors">
                        <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-light text-gray-900 mb-3">Clean Structure</h3>
                    <p class="text-gray-600 font-light">Organized using a simple HMVC pattern that’s easy to learn and maintain.</p>
                </div>
            </div>
        
            <div class="group">
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl border border-red-100 p-8 hover:border-red-200 transition-all">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-red-200 transition-colors">
                        <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-light text-gray-900 mb-3">Secure by Default</h3>
                    <p class="text-gray-600 font-light">Basic security features are already included to help you build safely.</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php \Velto\Core\View\View::endSection(); ?>