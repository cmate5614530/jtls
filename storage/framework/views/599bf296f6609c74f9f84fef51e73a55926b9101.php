

<!-- Bootstrap Core JS -->
<script src="<?php echo e(asset('assets_admin/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets_admin/js/bootstrap.min.js')); ?>"></script>

<!-- Slimscroll JS -->
<script src="<?php echo e(asset('assets_admin/plugins/slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<?php if(Route::is(['admin.dashboard'])): ?>
    <script src="<?php echo e(asset('assets_admin/plugins/raphael/raphael.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_admin/plugins/morris/morris.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets_admin/js/chart.morris.js')); ?>"></script>
<?php endif; ?>
<!-- Form Validation JS -->
<script src="<?php echo e(asset('assets_admin/js/form-validation.js')); ?>"></script>
<!-- Mask JS -->
<script src="<?php echo e(asset('assets_admin/js/jquery.maskedinput.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets_admin/js/mask.js')); ?>"></script>
<!-- Select2 JS -->
<script src="<?php echo e(asset('assets_admin/js/select2.min.js')); ?>"></script>

<!-- Datetimepicker JS -->
<script src="<?php echo e(asset('assets_admin/js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets_admin/js/bootstrap-datetimepicker.min.js')); ?>"></script>

<!-- Full Calendar JS -->
<script src="<?php echo e(asset('assets_admin/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets_admin/plugins/fullcalendar/fullcalendar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets_admin/plugins/fullcalendar/jquery.fullcalendar.js')); ?>"></script>
<!-- Datatables JS -->
<script src="<?php echo e(asset('assets_admin/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets_admin/plugins/datatables/datatables.min.js')); ?>"></script>
<!-- Custom JS -->
<script  src="<?php echo e(asset('assets_admin/js/script.js')); ?>"></script>
<?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/layouts/partials/footer_admin-scripts.blade.php ENDPATH**/ ?>