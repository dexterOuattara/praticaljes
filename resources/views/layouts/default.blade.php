<!doctype html>
<html>
<head>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    @include('includes.head')
</head>
<body id="home">

<header id="header" class="nav-stacked affix-top" data-spy="affix" data-offset-top="10">
        @include('includes.header')
</header>

    <div class="row">

        @yield('content')

    </div>

<footer id="footer" class="secondary-bg">
        @include('includes.footer')
</footer>
<div id="back-top" class="back-top">
    <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>
</div>
<!--/Back-to-top-->


<!-- Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/interface.js')}}"></script>
<!--<script src="assets/js/languageanimation.js"></script>-->
<!--Switcher-->
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<!--Carousel-JS-->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- prettyPhoto-->
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>

</body>
</html>

