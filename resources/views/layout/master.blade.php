<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>WE ARE GROUP</title>
    <link rel="shortcut icon" href="img/favicon-2.png" />
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />

    <meta property="og:url"                content="http://www.wearegroup-bf.com" />
	<meta property="og:type"               content="Web Site" />
	<meta property="og:title"              content="WE ARE GROUP" />
	<meta property="og:description"        content="Capturez l'essence de votre histoire avec notre expertise photographique et façonnez votre présence en ligne avec une communication digitale qui rayonne." />
	<meta property="description"        content="Capturez l'essence de votre histoire avec notre expertise photographique et façonnez votre présence en ligne avec une communication digitale qui rayonne." />
	<meta property="og:image"              content="https://wearegroup-bf.com/img/thumb.png" />
	<meta name="googlebot" content="notranslate">
</head>
<body>
    <!-- Loading -->
    <div class="loading">
        <div class="text-center middle">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    @include('partials.navbar')
    @yield('content')

<!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-text-left">
                    <div class="social"> 
                        <a href="#" target="_blank"><i class="ti-twitter-alt"></i></a> 
                        <a href="https://www.facebook.com/WeAreGroup226/" target="_blank"><i class="ti-facebook"></i></a> 
                        <a href="#" target="_blank"><i class="ti-instagram"></i></a> 
                        <a href="#" target="_blank"><i class="ti-linkedin"></i></a> 
                    </div>
                </div>
                <div class="col-md-4 footer-text-center">
                    <div class="logo">
                        <h1><a href="https://relwinde.com/" target="blank">Relwindé<span>Built It</span></a></h1>
                    </div>
                </div>
                <div class="col-md-4 footer-text-right">
                    <p>&copy;2023 WE ARE GROUP. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>