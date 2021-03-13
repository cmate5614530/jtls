<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="icon" href="<?php echo e(asset('/images/myicon.png')); ?>" type="image/x-icon">
    <!-- Stylesheets-->

    <link rel="apple-touch-icon" href="<?php echo e(asset('/theme/img/icon57.png')); ?>" sizes="57x57">
    <link rel="apple-touch-icon" href="<?php echo e(asset('/theme/img/icon72.png')); ?>" sizes="72x72">
    <link rel="apple-touch-icon" href="<?php echo e(asset('/theme/img/icon76.png')); ?>" sizes="76x76">
    <link rel="apple-touch-icon" href="<?php echo e(asset('/theme/img/icon114.png')); ?>" sizes="114x114">
    <link rel="apple-touch-icon" href="<?php echo e(asset('/theme/img/icon120.png')); ?>" sizes="120x120">
    <link rel="apple-touch-icon" href="<?php echo e(asset('/theme/img/icon144.png')); ?>" sizes="144x144">
    <link rel="apple-touch-icon" href="<?php echo e(asset('/theme/img/icon152.png')); ?>" sizes="152x152">
    <link rel="apple-touch-icon" href="<?php echo e(asset('/theme/img/icon180.png')); ?>" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="<?php echo e(asset('/theme/css/bootstrap.min.css')); ?>">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('/theme/css/plugins.css')); ?>">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="<?php echo e(asset('/theme/css/main.css')); ?>">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="<?php echo e(asset('/theme/css/themes.css')); ?>">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="<?php echo e(asset('/theme/js/vendor/modernizr.min.js')); ?>"></script>
    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="<?php echo e(asset('/theme/js/vendor/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/theme/js/vendor/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/theme/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('/theme/js/app.js')); ?>"></script>

</head>
<body>
<!-- Page Wrapper -->
<!-- In the PHP version you can set the following options from inc/config file -->
<!--
    Available classes:

    'page-loading'      enables page preloader
-->
<div id="page-wrapper">
    <!-- Preloader -->
    <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
    <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
    <div class="preloader themed-background">
        <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
        <div class="inner">
            <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
            <div class="preloader-spinner hidden-lt-ie10"></div>
        </div>
    </div>
    <!-- END Preloader -->

    <!-- Page Container -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
        Available #page-container classes:

        '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

        'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
        'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
        'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
        'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
        'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

        'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
        'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
        'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

        'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

        'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

        'style-alt'                                     for an alternative main style (without it: the default style)
        'footer-fixed'                                  for a fixed footer (without it: a static footer)

        'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

        'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
        'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

        'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
    -->
    <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">

        <!-- Main Sidebar -->
        <div id="sidebar">
            <!-- Wrapper for scrolling functionality -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">

                    <!-- User Info -->
                    <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                        <div class="sidebar-user-avatar">

                                <img src="<?php echo e(asset('/theme/img/placeholders/avatars/avatar2.jpg')); ?>" alt="avatar">

                        </div>
                        <div class="sidebar-user-name">Welcome</div>
                        <div class="sidebar-user-links">
                            <?php echo e(Auth::user()->name); ?>

                        </div>
                    </div>
                    <!-- END User Info -->

                    <!-- Theme Colors -->
                    <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                    <ul style="display: none;" class="sidebar-section sidebar-themes clearfix sidebar-nav-mini-hide">
                        <!-- You can also add the default color theme
                        <li class="active">
                            <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                        </li>
                        -->
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night" data-theme="<?php echo e(asset('/theme/css/themes/night.css')); ?>" data-toggle="tooltip" title="Night"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-amethyst themed-border-amethyst" data-theme="<?php echo e(asset('/theme/css/themes/amethyst.css')); ?>" data-toggle="tooltip" title="Amethyst"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-modern themed-border-modern" data-theme="<?php echo e(asset('/theme/css/themes/modern.css')); ?>" data-toggle="tooltip" title="Modern"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-autumn themed-border-autumn" data-theme="<?php echo e(asset('/theme/css/themes/autumn.css')); ?>" data-toggle="tooltip" title="Autumn"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-flatie themed-border-flatie" data-theme="<?php echo e(asset('/theme/css/themes/flatie.css')); ?>" data-toggle="tooltip" title="Flatie"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-spring themed-border-spring" data-theme="<?php echo e(asset('/theme/css/themes/spring.css')); ?>" data-toggle="tooltip" title="Spring"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy" data-theme="<?php echo e(asset('/theme/css/themes/fancy.css')); ?>" data-toggle="tooltip" title="Fancy"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire" data-theme="<?php echo e(asset('/theme/css/themes/fire.css')); ?>" data-toggle="tooltip" title="Fire"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-coral themed-border-coral" data-theme="<?php echo e(asset('/theme/css/themes/coral.css')); ?>" data-toggle="tooltip" title="Coral"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-lake themed-border-lake" data-theme="<?php echo e(asset('/theme/css/themes/lake.css')); ?>" data-toggle="tooltip" title="Lake"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-forest themed-border-forest" data-theme="<?php echo e(asset('/theme/css/themes/forest.css')); ?>" data-toggle="tooltip" title="Forest"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-waterlily themed-border-waterlily" data-theme="<?php echo e(asset('/theme/css/themes/waterlily.css')); ?>" data-toggle="tooltip" title="Waterlily"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-emerald themed-border-emerald" data-theme="<?php echo e(asset('/theme/css/themes/emerald.css')); ?>" data-toggle="tooltip" title="Emerald"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-blackberry themed-border-blackberry" data-theme="<?php echo e(asset('/theme/css/themes/blackberry.css')); ?>" data-toggle="tooltip" title="Blackberry"></a>
                        </li>
                    </ul>
                    <!-- END Theme Colors -->

                    <!-- Sidebar Navigation -->
                    <ul class="sidebar-nav">
                        <li>
                            <a href="<?php echo e(route('user.dashboard')); ?>" id="dashboard"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('user.betsdetail')); ?>" id="betsdetail"><i class="gi gi-leaf sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Bets Detail</span></a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('user.home')); ?>" id="betsdetail"><i class="gi gi-unshare sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Back to Home</span></a>
                        </li>

                    </ul>
                    <!-- END Sidebar Navigation -->

                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Main Sidebar -->

        <!-- Main Container -->
        <div id="main-container">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available header.navbar classes:

                'navbar-default'            for the default light header
                'navbar-inverse'            for an alternative dark header

                'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                    'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                    'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
            -->
            <header class="navbar navbar-default">
                <!-- Left Header Navigation -->
                <ul class="nav navbar-nav-custom">
                    <!-- Main Sidebar Toggle Button -->
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                            <i class="fa fa-bars fa-fw"></i>
                        </a>
                    </li>
                    <!-- END Main Sidebar Toggle Button -->

                    <!-- Template Options -->
                    <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="gi gi-settings"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-options">
                            <li class="dropdown-header text-center">Header Style</li>
                            <li>
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                    <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                </div>
                            </li>
                            <li class="dropdown-header text-center">Page Style</li>
                            <li>
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                    <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- END Template Options -->
                </ul>
                <!-- END Left Header Navigation -->

                <!-- Search Form -->





                <!-- END Search Form -->

                <!-- Right Header Navigation -->
                <ul class="nav navbar-nav-custom pull-right">


                    <!-- User Dropdown -->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo e(asset('/theme/img/placeholders/avatars/avatar2.jpg')); ?>" alt="avatar"> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li class="dropdown-header text-center">Account</li>

                            <li>
                                <a href="<?php echo e(route('user.home')); ?>">
                                    <?php echo e(__('Back To Home')); ?>

                                </a>
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-ban fa-fw pull-right"></i>
                                    <?php echo e(__('Logout')); ?>

                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>

                        </ul>
                    </li>
                    <!-- END User Dropdown -->
                </ul>
                <!-- END Right Header Navigation -->
            </header>
            <!-- END Header -->

            <!-- Page content -->
            <div id="page-content">
                <?php echo $__env->yieldContent('page-content'); ?>
            </div>
            <!-- END Page Content -->

            <!-- Footer -->
            <footer class="clearfix">

            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>
<!-- END Page Wrapper -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>



</body>
</html>
<?php /**PATH F:\Laravel\Laravel_blade\bet\resources\views/user/layout.blade.php ENDPATH**/ ?>