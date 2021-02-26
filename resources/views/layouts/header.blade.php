<header class="section page-header rd-navbar-dark">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel-inner container">
                    <div class="rd-navbar-panel-item rd-navbar-panel-item-left">
                        <ul class="list-inline list-inline-sm">
                            <span class="logo" style="justify-content: space-between;align-items: center;">JTLS
                            </span>
{{--                            <li><a class="link link-classic" href="#">Help</a></li>--}}
{{--                            <li><a class="link link-classic" href="contact-us.php">Contacts</a></li>--}}
                        </ul>
                    </div>
                    <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-right just-cont-logo">
                              <span class="logo" style="justify-content: space-between;align-items: center;">
                              </span>
                            @guest
                                <ul class="list-inline list-inline-bordered">
                                    {{--                                <li><a class="badge badge-primary" href="register">registration</a></li>--}}
                                    <li><a class="link link-icon link-icon-left link-classic" href="{{ route('login') }}"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">Your account</span></a></li>
                                </ul>
                            @else
                                <ul>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                </ul>
                            @endguest
                    </div>
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                </div>
            </div>
            <div class="rd-navbar-main">
                <div class="rd-navbar-main-bottom rd-navbar-darker">
                    <div class="rd-navbar-main-container container">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">

                            <li class="rd-nav-item " id="sportsLi"><a class="rd-nav-link" href="{{route('index')}}">Sports</a>
                            </li>
{{--                            <li class="rd-nav-item" id="playLi"><a class="rd-nav-link" href="in-play.php">In-Play</a>--}}
{{--                            </li>--}}
{{--                            <li class="rd-nav-item" id="proLi"><a class="rd-nav-link" href="promotions.php">Promotions</a>--}}
{{--                            </li>--}}
                            <li class="rd-nav-item" id="contactLi"><a class="rd-nav-link" href="{{route('contactus')}}">Contact us</a>
                            </li>
                        </ul>
                        <div class="rd-navbar-main-element">
                            <ul class="list-inline list-inline-sm">
                                <li><a class="icon icon-xs fa fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-xs fa fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xs fa fa-google-plus" href="#"></a></li>
                                <li><a class="icon icon-xs fa fa-instagram" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
