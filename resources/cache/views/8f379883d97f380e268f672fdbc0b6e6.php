<?php \Velto\Core\View\View::setLayout('layouts.app'); ?>

<?php \Velto\Core\View\View::startSection('title'); ?>
    Test | VeltoPHP V2.0
<?php \Velto\Core\View\View::endSection(); ?>

<?php \Velto\Core\View\View::startSection('app-content'); ?>
<div class="font-thin">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
        <div class="text-center">
            <h1 class="text-3xl">Welcome to Test Module</h1>
            <p class="text-red-500">VeltoPHP V.2</p>
        </div>
    </div>
</div>
<?php \Velto\Core\View\View::endSection(); ?>