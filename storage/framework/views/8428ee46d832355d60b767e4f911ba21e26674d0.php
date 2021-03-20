<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title><?php echo e(config('app.name', 'Laravel')); ?></title>
<link rel="icon" href="<?php echo e(asset('/images/myicon.png')); ?>" type="image/x-icon">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/bootstrap.min.css')); ?>">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/font-awesome.min.css')); ?>">
<!-- <link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/fontawesome/css/font-awesome.min.css')); ?>"> -->
<?php if(Route::is(['blog','blog-details','add-blog','edit-blog','pending-blog'])): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/fontawesome/css/all.min.css')); ?>">
<?php endif; ?>
<!-- Feathericon CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/feathericon.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/morris/morris.css')); ?>">
<!-- Select2 CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/select2.min.css')); ?>">
<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/bootstrap-datetimepicker.min.css')); ?>">

<!-- Full Calander CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css')); ?>">
<!-- Datatables CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/datatables/datatables.min.css')); ?>">

<!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->

<!-- Main CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/style.css')); ?>">
<?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/layouts/partials/head_admin.blade.php ENDPATH**/ ?>