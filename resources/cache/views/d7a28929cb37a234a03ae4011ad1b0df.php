<?php \Velto\Core\View\View::setLayout('layouts.axion'); ?>

<?php \Velto\Core\View\View::startSection('title'); ?>
    Dashboard | Axion
<?php \Velto\Core\View\View::endSection(); ?>

<?php \Velto\Core\View\View::startSection('axion-content'); ?>
<div class="bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-9 py-12">
        
        <div class="mb-10">
            <h1 class="text-2xl">Dashboard</h1>
            <p class="text-sm text-gray-500"><?php echo htmlspecialchars((string)($message), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
    </div>
</div>
<?php \Velto\Core\View\View::endSection(); ?>