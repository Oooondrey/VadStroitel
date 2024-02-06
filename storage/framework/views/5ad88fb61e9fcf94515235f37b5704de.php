<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/svg" sizes="32x32" href="<?php echo e(asset('public/imgs/Favicon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/styles.css')); ?>">
    <script src="<?php echo e(asset('public/js/bootstrap.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/vue.global.js')); ?>"></script>
</head>
<body>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('main'); ?>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\OSPanel\domains\VADSTROITEL\resources\views/layout/app.blade.php ENDPATH**/ ?>