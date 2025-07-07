<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://res.cloudinary.com/drbowe2hn/image/upload/v1750857194/VeltoPHP2_la6xfv.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo \Velto\Core\View\View::yieldSection('title', '' ?? ''); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php \Velto\Core\View\View::component('axion-navbar'); ?>
    <?php echo \Velto\Core\View\View::yieldSection('axion-content', '' ?? ''); ?>
    <?php \Velto\Core\View\View::component('axion-footer'); ?>
    <?php \Velto\Core\View\View::component('alerts'); ?>
</body>
</html>