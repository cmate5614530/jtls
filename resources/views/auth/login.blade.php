@extends('layouts.app')

@section('content')

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
                            </div>
                        </div>
                        <div class="card-form card-form-login">

                            <form  method="post" action="{{ route('login') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-wrap">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-input @error('email') is-invalid @enderror" id="email" type="email" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-wrap">
                                    <label class="form-label" for="password">Password</label>
                                    <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label class="checkbox-inline checkbox-inline-lg checkbox-light">
                                    <input name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>Remember Me
                                </label>
                                <button class="button button-lg button-primary button-block" type="submit">Sign in</button>
{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
