<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117196414-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-117196414-1');
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Le WEB- Week-end De La Boisson</title>

    <link href="css/reset.css" rel="stylesheet"/>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fontello/css/fontello.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/myStyle.css" rel="stylesheet">
    <link href="css/style_web.css" rel="stylesheet">
    <link href="css/media-query.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <![endif]-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12&appId=202313990529976&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

</head>

<body>

<div class="">
    <!-- Navbar body-inner-wrapper MENU
    ================================================== -->

    <div id="menu-wrapper" class="navbar-wrapper">
        <div class="inner-container">
            <div class="row">
                <!-- <nav class="navbar navbar-default">
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Works</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                            <li>
                                <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Categories</a>
                            </li>
                        </ul>
                        <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Graphic design</a></li>
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Motion</a></li>
                            <li><a href="#">Mobile apps</a></li>
                        </ul>
                    </div>

                </nav> -->
            </div>
            <div class="row">
                <div id="navigation-bar" class="navbar navbar-inverse navbar-static-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <div>
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a id="logo" class="navbar-brand" href="#main-slider"><img class="" src="images/logo_web.jpg"
                                                                                           alt=""></a>
                            </div>
                        </div>
                        <div id="menu" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <!-- <li class="active home"><a href="#main-slider"> Acceuil</a></li> -->
                                <li class="about"><a href="#aboutus-wrapper">Le Web</a></li>
                                <li class="service"><a href="#experiences-wrapper">Experiences</a></li>
                                <li class="portfolio"><a href="#portfolio-wrapper">Partenaires</a></li>
                                <li class="team"><a href="#team-wrapper">Inscription</a></li>
                                <li class="client"><a href="#client-wrapper">Programme</a></li>
                                <li class="contact"><a href="#contact-wrapper">Contact</a></li>
                            </ul>
                            <a id="to-top" href="#main-slider"><i class="fa fa-long-arrow-up"></i></a></li>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

            @yield('content')

    <!-- Bottom
    ================================================== -->
    <div id="bottom">
        <div class="row">
            <a id="to-top" href="#main-slider"><i class="fa fa-long-arrow-up"></i></a>

            <div class="container">
                <div class="col-xs-6">
                    <div class="social-shares">
                        <ul>
                            <li><a href="{{url('https://www.facebook.com/WeekEndDeLaBoisson/')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="copyright">
                        <p>Copyright &copy; 2018 Le WEB, By <a href="#" target="_blank" style="color : yellow">Afric Image.</a> Dev : <a href="{{url('http://www.bao-technologie.com/')}}" target="_blank">Bao-<span style="color: darkblue">Technologie</span></a>  </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/#bottom-->

    <!-- Modal Window
    ================================================== -->
    <div id="modal-window-wrapper" class="blog-style">
        <div id="modal-window" class="left-top-fold">
            <div id="modal-window-box">
                <div class="inner-wrapper">
                    <div class="row">
                        <div id="modal-window-content" class="container">
                            <div>
                                <!-- Modal window contents goes here -->
                            </div>
                        </div>
                        <div class="modal-loading">Loading...</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-overlay"></div>
    </div><!--/#Modal Window-->

</div>
<!--/.body-inner-wrapper-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/themehippo.js"></script>
<script src="js/jquery.sticky-kit.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/kinetic.js"></script>
<script src="js/jquery.final-countdown.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
