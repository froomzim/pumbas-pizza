<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>
        @yield('title', 'Pumba\'s Pizza')
    </title>

    <!-- Loading third party fonts -->
    <link href="/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="/css/style.css">

    <!--[if lt IE 9]>
  <script src="/js/ie-support/html5.js"></script>
  <script src="/js/ie-support/respond.js"></script>
  <![endif]-->

</head>


<body>

    <div class="site-content">

        <header class="site-header">
            <div class="container shrinked">
                <a href="{{ route('coming-soon.about') }}" class="button">About Us</a>
                <h1 class="logo"><a href="{{ route('coming-soon.index') }}">Pumba's</a></h1>
                <a href="{{ route('coming-soon.contact') }}" class="button">Contact</a>
            </div> <!-- .container -->
        </header> <!-- .site-header -->

        @yield('main-content')

        <footer class="site-footer">
            <div class="container shrinked">

                @yield('footer')

                <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div> <!-- .social-links -->

                <div class="colophon">Copyright {{ now()->format('Y') }} <b>Pumba's Pizza</b> . All right reserved</div>

            </div> <!-- .container -->
        </footer> <!-- .site-footer -->

    </div>

    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/app.js"></script>

</body>

</html>
