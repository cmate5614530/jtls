<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('layouts.partials.head_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
<?php if(!Route::is(['login','register','forgot-password','lock-screen','error-404','error-500'])): ?>
    <?php echo $__env->make('layouts.partials.header_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.partials.nav_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.partials.footer_admin-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
</html>
<?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/layouts/layout_admin.blade.php ENDPATH**/ ?>