<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <link rel="icon" href="/images/logo.ico" type="image/x-icon">

    <title>
        @yield('title', '') - Pumba\'s Pizza
    </title>

    <!-- Loading third party -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <link href="/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="/css/style.css">


</head>


<body>

    <div class="site-content">

        <header class="site-header">
            <div class="container shrinked">
                <a href="{{ route('coming-soon.about') }}" class="button">About Us</a>
                <div class="logo"><a href="{{ route('coming-soon.index') }}">
                        <img src="/images/logo.png" alt="Logo" class="logo-image">
                    </a>
                </div>
                <a href="{{ route('contact.index') }}" class="button">Contact</a>
            </div>
        </header>

        @yield('main-content')

        <footer class="site-footer">
            <div class="container shrinked">

                @yield('footer')

                <div class="social-links">
                    <a href="{{ url('https://www.facebook.com/profile.php?id=100075500664603') }}"><i
                            class="fa fa-facebook"></i></a>
                    <a href="{{ url('https://www.instagram.com/pumbaspizza/') }}"><i class="fa fa-instagram"></i></a>
                </div>

                <div class="colophon">Copyright {{ now()->format('Y') }} <b>Pumba's Pizza</b> . All right reserved</div>

            </div>
        </footer>

    </div>

    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    @yield('additional-scripts')

    <script>
        @if (session('success'))
            Swal.fire(
                'Success!',
                '{{ session('success') }}',
                'success'
            )
        @endif
    </script>
</body>

</html>
