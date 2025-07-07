<?php \Velto\Core\View\View::setLayout('layouts.axion'); ?>

<?php \Velto\Core\View\View::startSection('title'); ?>
    Example Page | Axion
<?php \Velto\Core\View\View::endSection(); ?>

<?php \Velto\Core\View\View::startSection('axion-content'); ?>
<div class="bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-9 py-12">
        <div class="mb-10">
            <h1 class="text-2xl">Example Page</h1>
            <p class="text-sm text-gray-500"><?php echo htmlspecialchars((string)($message), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <div class="">
            <h1 class="text-2xl">Example Crud</h1>
            <div class="text-red-600">
                <li><a href="<?php echo htmlspecialchars((string)(route('axion.crud')), ENT_QUOTES, 'UTF-8'); ?>" class="hover:underline">Crud-Basic</a></li>
            </div>
        </div>
    </div>
</div>
<?php \Velto\Core\View\View::endSection(); ?>