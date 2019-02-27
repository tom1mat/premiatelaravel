<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Premiate!</title>

    <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('public/assets/img/favicons/favicon.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">--}}

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('public/assets/css/oneui.css') }}">
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero Content -->
        <div class="bg-image" style="background-image: url('{{ asset('public/assets/img/photo31@2x.jpg') }}');">
            <div class="bg-primary-dark-op">
                <!-- Header -->
                <section class="content content-full content-boxed overflow-hidden">
                    <div class="push-150-t push-150">
                        <h1 class="font-s48 font-w700 text-uppercase text-white push-10 visibility-hidden text-center" data-toggle="appear" data-class="animated bounceIn">PREMIATE</h1>
                        <h2 class="h3 font-w400 text-white-op push-50 visibility-hidden text-center" data-toggle="appear" data-class="animated fadeIn" data-timeout="750">GANA HASTA QUE TE CANSES</h2>
                    </div>
                </section>
                <!-- END Header -->
            </div>
        </div>
        <!-- END Hero Content -->

        <!-- More packages -->
        <div class="bg-gray-lighter">
            <section class="content content-full content-boxed">
                <!-- Section Content -->
                <div class="text-center push-50-t push-50">
                    <h2 class="h1 text-black">Sorteos</h2>
                </div>
                <div class="row push-50">
                    @foreach($sorteos as $each)
                        <div class="col-sm-6 col-md-4">
                            <a class="block block-themed block-link-hover2 bg-image" style="background-image: url({{ asset("storage/app")."/".$each->fpremio->imagen }});">
                                <div class="block-header text-right push-150">
                                    <span class="text-white"><i class="fa fa-heart"></i></span>
                                </div>
                                <div class="block-content bg-flat-op">
                                    <h2 class="font-w700 h3 push-10 text-white text-uppercase">{{ $each->sorteo }}</h2>
                                    <p class="text-white-op">{{ $each->fpremio->premio }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <!-- END More packages -->
    </main>

        <!-- Call to action -->
        <div class="bg-white">
            <section class="content content-full content-boxed">
                <!-- Section Content -->
                <div class="push-50-t push-50 text-center">
                    <h3 class="h4 push-20 visibility-hidden" data-toggle="appear">Enterate de los mejores premios</h3>
                    <a class="btn btn-rounded btn-noborder btn-lg btn-success visibility-hidden" data-toggle="appear" data-class="animated bounceIn">Suscribirse</a>
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <!-- END Call to action -->

        <!-- More packages -->
        <div class="bg-gray-lighter">
            <section class="content content-full content-boxed">
                <!-- Section Content -->
                <div class="text-center push-50-t push-50">
                    <h2 class="h1 text-black">Competencias</h2>
                </div>
                <div class="row push-50">
                    @foreach($competencias as $each)
                    <div class="col-sm-6 col-md-4">
                        <a class="block block-themed block-link-hover2 bg-image" style="background-image: url({{ asset('public/assets/img/photo29.jpg') }});">
                            <div class="block-header text-right push-150">
                                <span class="text-white"><i class="fa fa-heart"></i></span>
                            </div>
                            <div class="block-content bg-flat-op">
                                <h2 class="font-w700 h3 push-10 text-white text-uppercase">{{ $each->competencia }}</h2>
                                <p class="text-white-op">{{ $each->flocal->competidor }} vs {{ $each->fvisitante->competidor }}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <!-- END More packages -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-white">
        <!-- Copyright Info -->
        <div class="font-s12 push-20 clearfix">
            <hr class="remove-margin-t">
            <div class="pull-left">
                <a class="font-w600" href="#">Premiate</a> &copy;
            </div>
        </div>
        <!-- END Copyright Info -->
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

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
<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->

<script>
    jQuery(function () {
        // Init page helpers (Appear plugin)
        App.initHelpers(['appear']);
    });
</script>
</body>
</html>