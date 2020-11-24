<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <title>Publishing Company</title> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/./css/font-awesome.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/./css/bootstrap-select.min.css">


    <link rel="stylesheet" href="./css/animate.css">

    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">

    <link rel="stylesheet" href="./css/flaticon.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/books.css">
    <link rel="stylesheet" href="./css/mediabook.css">

    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">

    <!-- ========================================= CONTACT ============================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./css/util.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <!--===============================================================================================-->

</head>

<body>


    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <!-- <div id="ftco-loader " class="show fullscreen "><svg class="circular " width="48px " height="48px ">
            <circle class="path-bg " cx="24 " cy="24 " r="22 " fill="none " stroke-width="4 " stroke="#eeeeee " />
            <circle class="path " cx="24 " cy="24 " r="22 " fill="none " stroke-width="4 " stroke-miterlimit="10 "
                stroke="#F96D00 " /></svg></div> -->
    <script src="./js/jquery.min.js "></script>
    <script src="./js/jquery-migrate-3.0.1.min.js "></script>
    <script src="./js/popper.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./js/jquery.easing.1.3.js "></script>
    <script src="./js/jquery.waypoints.min.js "></script>
    <script src="./js/jquery.stellar.min.js "></script>
    <script src="./js/owl.carousel.min.js "></script>
    <script src="./js/jquery.magnific-popup.min.js "></script>
    <script src="./js/jquery.animateNumber.min.js "></script>
    <script src="./js/scrollax.min.js "></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false ">
    </script>
    <script src="./js/google-map.js "></script>
    <script src="./js/main.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/./js/bootstrap-select.min.js "></script>
    <script src="./js/hehe.js "></script>

    <!--===============================================================================================-->
    <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="./vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="./vendor/bootstrap/js/popper.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="./vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="./vendor/daterangepicker/moment.min.js"></script>
    <script src="./vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="./vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>