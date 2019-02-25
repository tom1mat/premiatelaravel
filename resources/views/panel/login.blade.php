<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>OneUI - Admin Dashboard Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('public/assets/css/oneui.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Login Content -->
<div class="content overflow-hidden">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
            <!-- Login Block -->
            <div class="block block-themed animated fadeIn">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <a href="base_pages_reminder.html">Forgot Password?</a>
                        </li>
                        <li>
                            <a href="base_pages_register.html" data-toggle="tooltip" data-placement="left" title="New Account"><i class="si si-plus"></i></a>
                        </li>
                    </ul>
                    <h3 class="block-title">Login</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    <!-- Login Title -->
                    <h1 class="h2 font-w600 push-30-t push-5">OneUI</h1>
                    <p>Welcome, please login.</p>
                    <!-- END Login Title -->

                    <!-- Login Form -->
                    <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form method="POST" action="{{ route('login') }}" class="js-validation-login form-horizontal push-30-t push-50">
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input id="email" id="login-username" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <label for="login-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input id="login-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <label for="login-password">Password</label>
                                </div>
                            </div>
                        </div>
{{--                        <div class="form-group">
                            <div class="col-xs-12">
                                <label class="css-input switch switch-sm switch-primary">
                                    <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?
                                </label>
                            </div>
                        </div>--}}
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> Log in</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Login Form -->
                </div>
            </div>
            <!-- END Login Block -->
        </div>
    </div>
</div>
<!-- END Login Content -->

<!-- Login Footer -->
<div class="push-10-t text-center animated fadeInUp">
    <small class="text-muted font-w600"><span class="js-year-copy"></span> &copy; OneUI 3.2</small>
</div>
<!-- END Login Footer -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="{{ asset('public/assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/assets/js/core/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('public/assets/js/core/jquery.scrollLock.min.js') }}"></script>
<script src="{{ asset('public/assets/js/core/jquery.appear.min.js') }}"></script>
<script src="{{ asset('public/assets/js/core/jquery.countTo.min.js') }}"></script>
<script src="{{ asset('public/assets/js/core/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('public/assets/js/core/js.cookie.min.js') }}"></script>
<script src="{{ asset('public/assets/js/app.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('public/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('public/assets/js/pages/base_pages_login.js') }}"></script>
</body>
</html>