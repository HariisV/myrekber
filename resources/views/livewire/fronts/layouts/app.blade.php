<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rapid Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="{{asset("themes/rapid/assets/img/favicon.png")}}" rel="icon">
  <link href="{{asset("themes/rapid/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <link href="{{asset("themes/rapid/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("themes/rapid/assets/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
  <link href="{{asset("themes/rapid/assets/vendor/ionicons/css/ionicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("themes/rapid/assets/vendor/venobox/venobox.css")}}" rel="stylesheet">
  <link href="{{asset("themes/rapid/assets/vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
  <link href="{{asset("themes/rapid/assets/vendor/aos/aos.css")}}" rel="stylesheet">

  <link href="{{asset("themes/rapid/assets/css/style.css")}}" rel="stylesheet">
</head>
<style>
  .explain .bubble{
    position: absolute;
    -webkit-animation-name: bubbleMover;
    animation-name: bubbleMover;
    -webkit-animation-duration: 4s;
    animation-duration: 4s;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-transition: all .4s ease;
    transition: all .4s ease;
    -webkit-perspective: 400px;
    perspective: 400px;
}
@-webkit-keyframes bubbleMover {
        0% {
            -webkit-transform: rotate3d(0, 1, 0, 15deg) translateY(0px) translateX(0px);
                    transform: rotate3d(0, 1, 0, 15deg) translateY(0px) translateX(0px);
        }
        30% {
            -webkit-transform: rotate3d(0, 0, 1, 20deg) translateY(10px) translateX(10px);
                    transform: rotate3d(0, 0, 1, 20deg) translateY(10px) translateX(10px);
        }
        60% {
            -webkit-transform: rotate3d(1, 0, 0, 15deg) translateY(20px) translateX(20px);
                    transform: rotate3d(1, 0, 0, 15deg) translateY(20px) translateX(20px);
        }
        80% {
            -webkit-transform: rotate3d(0, 0, 1, 20deg) translateY(10px) translateX(10px);
                    transform: rotate3d(0, 0, 1, 20deg) translateY(10px) translateX(10px);
        }
        100% {
            -webkit-transform: rotate3d(0, 1, 0, 15deg) translateY(0px) translateX(0px);
                    transform: rotate3d(0, 1, 0, 15deg) translateY(0px) translateX(0px);
        }
    }

    @keyframes  bubbleMover {
        0% {
            -webkit-transform: rotate3d(0, 1, 0, 15deg) translateY(0px) translateX(0px);
                    transform: rotate3d(0, 1, 0, 15deg) translateY(0px) translateX(0px);
        }
        30% {
            -webkit-transform: rotate3d(0, 0, 1, 20deg) translateY(10px) translateX(10px);
                    transform: rotate3d(0, 0, 1, 20deg) translateY(10px) translateX(10px);
        }
        60% {
            -webkit-transform: rotate3d(1, 0, 0, 15deg) translateY(20px) translateX(20px);
                    transform: rotate3d(1, 0, 0, 15deg) translateY(20px) translateX(20px);
        }
        80% {
            -webkit-transform: rotate3d(0, 0, 1, 20deg) translateY(10px) translateX(10px);
                    transform: rotate3d(0, 0, 1, 20deg) translateY(10px) translateX(10px);
        }
        100% {
            -webkit-transform: rotate3d(0, 1, 0, 15deg) translateY(0px) translateX(0px);
                    transform: rotate3d(0, 1, 0, 15deg) translateY(0px) translateX(0px);
        }
    }
  }
</style>

<body>
    @include('livewire.fronts.partials.header')

    @yield('content')

    @include('livewire.fronts.partials.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="{{asset("themes/rapid/assets/vendor/jquery/jquery.min.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/vendor/counterup/counterup.min.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/vendor/venobox/venobox.min.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/vendor/waypoints/jquery.waypoints.min.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("themes/rapid/assets/js/main.js")}}"></script>
  <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
