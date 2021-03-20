<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
{{--            <a href="index_admin" class="logo">--}}
{{--                <img src="../assets_admin/img/logo.png" alt="Logo">--}}
{{--            </a>--}}
{{--            <a href="index_admin" class="logo logo-small">--}}
{{--                <img src="../assets_admin/img/logo-small.png" alt="Logo" width="30" height="30">--}}
{{--            </a>--}}
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">


            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="{{asset('assets_admin/img/profiles/avatar-01.jpg')}}" width="31" alt="Admin"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="{{asset('assets_admin/img/profiles/avatar-01.jpg')}}" alt="Admin" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>{{Auth::user()->name}}</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="profile">My Profile</a>
                    <a class="dropdown-item" href="settings">Settings</a>
                    <a class="dropdown-item" href="login">Logout</a>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

    </div>
    <!-- /Header -->
