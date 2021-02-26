<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="icon" href="<?php echo e(asset('/images/mgm-sans.png')); ?>" type="image/x-icon">
    <!-- Stylesheets-->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/mod-KambiBC-betslip-container.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/fonts.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/custom.css')); ?>">

    <!-- Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="preloader-item"></div>
    </div>
</div>
<!-- Page-->
<div class="page">
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- BETslip Model -->
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>
<?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/layouts/app.blade.php ENDPATH**/ ?>