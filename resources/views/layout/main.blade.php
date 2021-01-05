<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="/img/logo.png" rel="icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/vendor/icofont/icofont.min.css">
        <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/vendor/boxicons/css/boxicons.min.css">
        <link rel="stylesheet" href="/vendor/animate.css/animate.min.css">
        <link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="/vendor/aos/aos.css">
        <link rel="stylesheet" href="/vendor/venobox/venobox.css">
        <link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css" >
    </head>
    <body>
        @include('layout.component.header')

        @yield('content')

        @include('layout.component.footer')

        <a href="#beranda" class="back-to-top"><i class="icofont-simple-up"></i></a>
        <div id="preloader"></div>

        <!-- Optional JavaScript -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#lightgallery").lightGallery(); 
            });
        </script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="/vendor/jquery-sticky/jquery.sticky.js"></script>
        <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
        <script src="/vendor/venobox/venobox.min.js"></script>
        <script src="/vendor/aos/aos.js"></script>
        <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="/vendor/superfish/superfish.min.js"></script>
        <script src="/vendor/hoverIntent/hoverIntent.js"></script>
        <script src="/vendor/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>