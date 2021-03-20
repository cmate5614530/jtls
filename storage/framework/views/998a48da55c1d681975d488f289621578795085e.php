<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="<?php echo e(Route::is('admin.dashboard') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>

                <li class="<?php echo e(Route::is('admin.users') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('admin.users')); ?>"><i class="fe fe-user"></i> <span>User List</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
<?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/layouts/partials/nav_admin.blade.php ENDPATH**/ ?>