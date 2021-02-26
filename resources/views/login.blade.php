<?php
session_start();
?>
    <!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('/images/mgm-sans.png')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/mod-KambiBC-betslip-container.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
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
    <!-- Page Header-->
    @include('layouts.header')

<!-- Section Breadcrumbs-->
    <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="images/bg-breadcrumbs-1-1920x726.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Login Page</h3>
{{--                <ul class="breadcrumbs-custom-path">--}}
{{--                    <li><a href="index.html">Home</a></li>--}}
{{--                    <li><a href="#">Pages</a></li>--}}
{{--                    <li class="active">Login Page</li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </section>
    <!-- Section Login/register-->
    <section class="section section-variant-1 bg-gray-100">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6">
                    <div class="card-login-register" id="card-l-r">
                        <div class="card-top-panel">
                            <div class="card-top-panel-left">
                                <h5 class="card-title card-title-login">Login</h5>
                                <h5 class="card-title card-title-register">Register</h5>
                            </div>
                            <div class="card-top-panel-right"><span class="card-subtitle"><span class="card-subtitle-login">Register now</span><span class="card-subtitle-register">Sign in</span></span>

                                    <button class="card-toggle" data-custom-toggle="#card-l-r"><span class="card-toggle-circle"></span></button>

                            </div>
                        </div>
                        <div class="card-form card-form-login">
                            <?php if(isset($_SESSION['login'])){ ?>
                            <div class="alert alert-success">
                                <?php echo $_SESSION['login']; ?>
                            </div>
                            <?php }  elseif(isset($_SESSION['acntact'])){ ?>
                            <div class="alert alert-success">
                                <?php echo $_SESSION['acntact']; ?>
                            </div>
                            <?php } ?>
                            <?php unset($_SESSION['acntact']); ?>

                            <form  method="post" action="customer" enctype="multipart/form-data">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-login-name-1">Login</label>
                                    <input class="form-input" id="form-login-name-1" type="text" name="email" data-constraints="@Required">
                                </div>
                                <div class="form-wrap">
                                    <label class="form-label" for="form-login-password-1">Password</label>
                                    <input class="form-input" id="form-login-password-1" type="password" name="password" data-constraints="@Required">
                                </div>
                                <label class="checkbox-inline checkbox-inline-lg checkbox-light">
                                    <input name="input-checkbox-1" value="checkbox-1" type="checkbox">Remember Me
                                </label>
                                <button class="button button-lg button-primary button-block" type="submit" name="login">Sign in</button>
                            </form>
{{--                            <div class="group-sm group-sm-justify group-middle">--}}
{{--                                <a class="button button-google button-icon button-icon-left button-round" href="#">--}}
{{--                                    <span class="icon fa fa-google-plus"></span><span>Google+</span>--}}
{{--                                </a>--}}
{{--                                <a class="button button-twitter button-icon button-icon-left button-round" href="#">--}}
{{--                                    <span class="icon fa fa-twitter"></span><span>Twitter</span>--}}
{{--                                </a>--}}
{{--                                <a class="button button-facebook button-icon button-icon-left button-round" href="#">--}}
{{--                                    <span class="icon fa fa-facebook"></span><span>Facebook</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="card-form card-form-register">
                            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                                <div class="form-wrap has-error">
                                    <label class="form-label rd-input-label" for="form-register-email">E-mail</label>
                                    <input class="form-input form-control-has-validation form-control-last-child" id="form-register-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation">The text field is required.</span>
                                </div>
                                <div class="form-wrap has-error">
                                    <label class="form-label rd-input-label" for="form-login-name-2">Login</label>
                                    <input class="form-input form-control-has-validation form-control-last-child" id="form-login-name-2" type="text" name="form-input" data-constraints="@Required"><span class="form-validation">The text field is required.</span>
                                </div>
                                <div class="form-wrap has-error">
                                    <label class="form-label rd-input-label" for="form-login-password-2">Password</label>
                                    <input class="form-input form-control-has-validation form-control-last-child" id="form-login-password-2" type="password" name="password" data-constraints="@Required"><span class="form-validation">The text field is required.</span>
                                </div>
                                <div class="form-wrap has-error">
                                    <label class="form-label rd-input-label" for="form-login-password-3">Repeat Password</label>
                                    <input class="form-input form-control-has-validation form-control-last-child" id="form-login-password-3" type="password" name="password" data-constraints="@Required"><span class="form-validation">The text field is required.</span>
                                </div>
                                <button class="button button-lg button-primary button-block" type="submit">Create new account</button>
                            </form>
{{--                            <div class="group-sm group-sm-justify group-middle">--}}
{{--                                <a class="button button-google button-icon button-icon-left button-round" href="#">--}}
{{--                                    <span class="icon fa fa-google-plus"></span><span>Google+</span>--}}
{{--                                </a>--}}
{{--                                <a class="button button-twitter button-icon button-icon-left button-round" href="#">--}}
{{--                                    <span class="icon fa fa-twitter"></span><span>Twitter</span>--}}
{{--                                </a>--}}
{{--                                <a class="button button-facebook button-icon button-icon-left button-round" href="#">--}}
{{--                                    <span class="icon fa fa-facebook"></span><span>Facebook</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Footer-->
    @include('layouts.footer')
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<!--  Data Picker Initialization -->

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>

    setTimeout(function() {
        let alert = document.querySelector(".alert");
        alert.remove();
    }, 9000);

</script>



<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</body>
</html>
