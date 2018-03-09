@extends('acceuil.index')
@section('content')

    <!-- Slideshow SLIDER
    ================================================== -->
    <div id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <!--
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            -->
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/slide1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Le Week-End <span>De la Boisson</span></h2>

                                    <h2 style="text-transform : lowercase" class="animation animated-item-2">Un rendez-vous de toutes les Brasseries</h2>
                                    <br>
                                    <span class="content-nav">
									<a href="#services-wrapper" class="animation animated-item-3">Go</a>
								</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
                <div class="item" style="background-image: url(images/slider/slide2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Des <span>Degustations</span></h2>

                                    <h2 class="animation animated-item-2">+20 Boissons et Produits de Bouche</h2>
                                    <br>
                                    <span class="content-nav">
									<a href="#services-wrapper" class="animation animated-item-3">Go</a>
								</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item">
                    <video id="video_background" preload="auto" autoplay loop="loop" muted="muted" controls>
                        <source src="videos/splash.webm" type="video/webm">
                        <source src="videos/splash.mp4" type="video/mp4">
                        <source src="videos/splash.ogv" type="video/ogg">
                        Video not supported
                    </video>

                    <div id="video_pattern"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">

                                    <h2 class="animation animated-item-1"><span>Animations</span></h2>

                                    <h2 class="animation animated-item-2">Concerts, Ateliers Culinaire, Rencontres</h2>

                                    <br>
                                    <span class="content-nav">
                                    <a href="#services-wrapper" class="animation animated-item-3">Go</a>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs rounded" href="#main-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="next hidden-xs rounded" href="#main-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    <!--/#main-slider-->

   <div id="body-wrapper">

        <!-- Services Programmes
        ================================================== -->
        <div id="services-wrapper">
            <div id="services">
                <div class="inner-wrapper">
                    <div class="container">
                        <h2>Trois Jours  <span>de partages , d'echanges...</span></h2>

                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-diamond"></i>

                                    <h3>Exposition Vente</h3>

                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-lightbulb"></i>

                                    <h3>Jeux-Concours</h3>

                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-beaker"></i>

                                    <h3>Animations Culturelles</h3>

                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-paper-plane"></i>

                                    <h3>Concert & Maquis Geant</h3>

                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    </p>
                                </div>
                            </div>
                         <!--
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-paper-plane"></i>

                                    <h3>UI/UX Design</h3>

                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-star"></i>

                                    <h3>PSD to HTML</h3>

                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-heart"></i>

                                    <h3>Branding</h3>

                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-photo"></i>

                                    <h3>Illustration</h3>

                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    </p>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/#services-->

        <!-- Portfolio GALERIE
        ================================================== -->
        <div id="portfolio-wrapper">
            <div id="portfolio">
                <div class="inner-wrapper">
                    <div class="row">
                        <div class="container">
                            <h2>Notre  <span>Phototeque</span></h2>

                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div id="portfolio-container">
                                        <ul id="portfolio-items">
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/1.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa-info rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/2.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa-check rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/3.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa-cog rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/4.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa-pencil rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/5.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa-rocket rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/4.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa fa-thumbs-o-up rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/3.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa-info rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/2.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa-wrench rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/1.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa-magic rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="portfolio-item">
                                                <div>
                                                    <img class="img-responsive" src="images/portfolio/2.png" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a data-linktype="modal" data-modalclass="portfolio-style"
                                                               href="portfolio1.html"
                                                               class="fa fa-info rounded"></a>

                                                            <h3>consect adipisi elit</h3>

                                                            <p class="project-tag">Design, Develop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="portfolio-directions">
                                        <span class="prev-items rounded"><i class="fa fa-angle-left"></i></span>
                                        <span class="next-items rounded"><i class="fa fa-angle-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/#portfolio-->

        <!-- About us APROPOS
        ================================================== -->
        <div id="aboutus-wrapper">
            <div id="aboutus">
                <div class="inner-wrapper">
                    <div class="row">
                        <div class="container">
                            <h2>Le Week-end De La <span>Boisson ?</span></h2>

                            <div class="row contents">
                                <div class="col-md-6">
                                    <p> On the other hand, we denounce with righteous indignation and dislike men who are
                                        so
                                        beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                        desire,
                                        that they cannot foresee the pain and trouble that are bound to ensue; and equal
                                        blame
                                        belongs to those who fail in their duty through weakness of will, which is the same
                                        as
                                        saying through shrinking from toil and pain. </p>

                                    <p> These cases are perfectly simple and easy to distinguish. In a free hour, when our
                                        power
                                        of choice is untrammelled and when nothing prevents our being able to do what we
                                        like
                                        best,</p>

                                    <p> every pleasure is to be welcomed and every pain avoided. But in certain
                                        circumstances
                                        and owing to the claims of duty or the obligations of business it will frequently
                                        occur
                                        that pleasures have to be repudiated and annoyances accepted. The wise man
                                        therefore
                                        always holds in these matters to this principle of selection: he rejects pleasures
                                        to
                                        secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                                </div>
                                <div class="col-md-6">
                                    <h3>Our Skills</h3>

                                    <p> every pleasure is to be welcomed and every pain avoided. But in certain
                                        circumstances
                                        and
                                        owing to the claims of duty or the obligations of business it will frequently occur
                                        that
                                        pleasures have to be repudiated</p>

                                    <div class="progress-bars">
                                        <div class="skill-progress" data-skill="75%">CSS</div>
                                        <div class="skill-progress" data-skill="60%">HTML</div>
                                        <div class="skill-progress" data-skill="90%">PHP</div>
                                        <div class="skill-progress" data-skill="55%">Photoshop</div>
                                    </div>
                                    <div class="connect">
                                        <h3>Connect with us</h3>

                                        <div class="social-shares">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/#about-us-->


        <!-- Team  --
        ================================================== -->
        <div id="team-wrapper">
            <div id="team">
                <div class="inner-wrapper">
                    <div class="row">
                        <div class="container">
                            <h2 style="color: #00bf73">
                               Inscrivez-<span>Vous </span>
                            </h2>

                            <div id="monrow" class="row">

                                <div class="col-lg-12">
                                    <p>
                                        <a href="#" class="btn btn-sq-lg btn-primary">
                                            <i class="fa fa-user fa-5x"></i><br/>
                                          Incrivez-vous <br>au jeux concours
                                        </a>
                                        <a href="#" class="btn btn-sq-lg btn-success">
                                            <i class="fa fa-user fa-5x"></i><br/>
                                            Incrivez-vous <br>Comme Visiteurs
                                        </a>
                                        <a href="#" class="btn btn-sq-lg btn-info">
                                            <i class="fa fa-user fa-5x"></i><br/>
                                            Incrivez-vous <br>Organe de Presse
                                        </a>
                                        <a href="#" class="btn btn-sq-lg btn-warning">
                                            <i class="fa fa-user fa-5x"></i><br/>
                                            Incrivez-vous <br>Pour etre Partenaire
                                        </a>
                                    </p>
                                </div>

                                      <!--
                                        <ul id="team-items">
                                            <li class="team-member">
                                                <div>
                                                    <div class="img-wrapper">
                                                        <img class="img-responsive" src="images/team/1.jpg" alt="">
                                                    </div>
                                                    <div class="team-item-description">
                                                        <div class="description">
                                                            <h3>
                                                                Amili milton
                                                            </h3>
                                                            <h4>
                                                                Founder
                                                            </h4>
                                                        </div>
                                                        <div class="social social-shares">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-dribbble">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-google-plus">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="team-member">
                                                <div>
                                                    <div class="img-wrapper">
                                                        <img class="img-responsive" src="images/team/2.jpg" alt="">
                                                    </div>
                                                    <div class="team-item-description">
                                                        <div class="description">
                                                            <h3>
                                                                Amili milton
                                                            </h3>
                                                            <h4>
                                                                Designer
                                                            </h4>
                                                        </div>
                                                        <div class="social social-shares">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-dribbble">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-google-plus">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="team-member">
                                                <div>
                                                    <div class="img-wrapper">
                                                        <img class="img-responsive" src="images/team/3.jpg" alt="">
                                                    </div>
                                                    <div class="team-item-description">
                                                        <div class="description">
                                                            <h3>
                                                                Amili milton
                                                            </h3>
                                                            <h4>
                                                                Developer
                                                            </h4>
                                                        </div>
                                                        <div class="social social-shares">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-dribbble">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-google-plus">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li class="team-member">
                                                <div>
                                                    <div class="img-wrapper">
                                                        <img class="img-responsive" src="images/team/4.jpg" alt="">
                                                    </div>
                                                    <div class="team-item-description">
                                                        <div class="description">
                                                            <h3>
                                                                Amili milton
                                                            </h3>
                                                            <h4>
                                                                Programmer
                                                            </h4>
                                                        </div>
                                                        <div class="social social-shares">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-dribbble">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-google-plus">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>s
                                          <!--
                                            <li class="team-member">
                                                <div>
                                                    <div class="img-wrapper">
                                                        <img class="img-responsive" src="images/team/2.jpg" alt="">
                                                    </div>
                                                    <div class="team-item-description">
                                                        <div class="description">
                                                            <h3>
                                                                Amili milton
                                                            </h3>
                                                            <h4>
                                                                Designer
                                                            </h4>
                                                        </div>
                                                        <div class="social social-shares">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-dribbble">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-google-plus">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="team-member">
                                                <div>
                                                    <div class="img-wrapper">
                                                        <img class="img-responsive" src="images/team/3.jpg" alt="">
                                                    </div>
                                                    <div class="team-item-description">
                                                        <div class="description">
                                                            <h3>
                                                                Amili milton
                                                            </h3>
                                                            <h4>
                                                                Developer
                                                            </h4>
                                                        </div>
                                                        <div class="social social-shares">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-dribbble">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-google-plus">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li class="team-member">
                                                <div>
                                                    <div class="img-wrapper">
                                                        <img class="img-responsive" src="images/team/4.jpg" alt="">
                                                    </div>
                                                    <div class="team-item-description">
                                                        <div class="description">
                                                            <h3>
                                                                Amili milton
                                                            </h3>
                                                            <h4>
                                                                Programmer
                                                            </h4>
                                                        </div>
                                                        <div class="social social-shares">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-twitter">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-facebook">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-dribbble">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-google-plus">
                                                                        </i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                        <div class="clearfix">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/#team-->

        <!-- Client
        ================================================== -->
        <div id="client-wrapper">
            <div id="client">
                <div class="inner-wrapper">
                    <div class="row">
                        <div class="container">
                            <h2>Nos Partenaires  <span> & Sponsors</span></h2>

                            <div class="row">
                                <div id="clients">
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/1.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/2.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/3.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/4.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/5.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/6.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/7.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/8.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/9.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/10.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/11.png" alt=""></a>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <a href="#"><img src="images/clients/12.png" alt=""></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#client -->

    <!--    <div id="blog-wrapper">
            <div id="blog">
                <div class="inner-wrapper">
                    <div class="row">
                        <div class="container">
                            <h2>
                                Check out our latest
                                <span>
              Blog
            </span>
                            </h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="blog-posts-list">
                                        <li class="active">
                  <span class="date">
                    September 01, 2013
                  </span>
                                            <a href="#a" data-toggle="tab">
                                                But I must explain to you how all this mistaken idea
                                                of denouncing pleasure and praising pain was born and I will give.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 02, 2013
                  </span>
                                            <a href="#b" data-toggle="tab">
                                                Secondo sed ac orci quis tortor imperdiet
                                                venenatis. Duis elementum auctor accumsan.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#c" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                        <li>
                  <span class="date">
                    September 03, 2013
                  </span>
                                            <a href="#d" data-toggle="tab">
                                                Thirdamuno, ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="blog-directions">
                <span class="prev-items rounded">
                  <i class="fa fa-angle-left">
                  </i>
                </span>
                                        <span class="next-items rounded">
                  <i class="fa fa-angle-right">
                  </i>
                </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-content blog-post-descriptions">
                                        <div class="tab-pane active has-thumbnail" id="a">
                                            <div class="entry-title">
                                                <div class="blog-header-wrapper">
                                                    <div class="blog-date">
                        <span class="blog-date-day">
                          07
                        </span>
                                                        <span class="blog-date-other">
                          Nov, 2013
                        </span>
                                                    </div>
                                                    <div class="blog-title">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua
                                                    </div>
                                                </div>
                                                <div class="blog-entry-thumb">
                                                    <img src="images/blog/blog.jpg" class="img-responsive" alt="">
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                    mollit anim id est laborum.
                                                </p>
                                                <a class="readmore" data-linktype="modal" data-modalclass="blog-style" href="blog-single1.html">Read
                                                    more <i class=" fa fa-arrow-circle-o-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="b">
                                            <div class="entry-title">
                                                <div class="blog-header-wrapper">
                                                    <div class="blog-date">
                        <span class="blog-date-day">
                          07
                        </span>
                                                        <span class="blog-date-other">
                          Nov, 2013
                        </span>
                                                    </div>
                                                    <div class="blog-title">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                    mollit anim id est laborum.
                                                </p>
                                                <a class="readmore" data-linktype="modal" data-modalclass="blog-style" href="blog-single1.html">Read
                                                    more <i class=" fa fa-arrow-circle-o-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane has-thumbnail" id="c">
                                            <div class="entry-title">
                                                <div class="blog-header-wrapper">
                                                    <div class="blog-date">
                        <span class="blog-date-day">
                          07
                        </span>
                                                        <span class="blog-date-other">
                          Nov, 2013
                        </span>
                                                    </div>
                                                    <div class="blog-title">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua
                                                    </div>
                                                </div>
                                                <div class="blog-entry-thumb">
                                                    <img src="images/blog/blog.jpg" class="img-responsive" alt="">
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                    mollit anim id est laborum.
                                                </p>
                                                <a class="readmore" data-linktype="modal" data-modalclass="blog-style" href="blog-single1.html">Read
                                                    more <i class=" fa fa-arrow-circle-o-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="d">
                                            <div class="entry-title">
                                                <div class="blog-header-wrapper">
                                                    <div class="blog-date">
                        <span class="blog-date-day">
                          07
                        </span>
                                                        <span class="blog-date-other">
                          Nov, 2013
                        </span>
                                                    </div>
                                                    <div class="blog-title">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                    mollit anim id est laborum.
                                                </p>
                                                <a class="readmore" data-linktype="modal" data-modalclass="blog-style" href="blog-single1.html">Read
                                                    more <i class=" fa fa-arrow-circle-o-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--/#blog-->

        <!-- Contact
        ================================================== -->
        <div id="contact-wrapper">
            <div id="contact">
                <div class="inner-wrapper">
                    <div class="row">
                        <div class="container">
                            <h2><span>Contacez-nous</span>Maintenant !</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div id="map-canvas"></div>
                                    <div class="contact-info">
                                        <ul>
                                            <li class="first">
                                                <p><i class="fa fa-map-marker fa-2"></i>Week-end De La Boisson</p>

                                                <p> Palais de la Culture d'Abidjan, Treichville.</p>
                                            </li>
                                            <li class="second">
                                                <p><i class="fa fa-phone fa-2"></i> +225 22417844-07582431</p>

                                                <p><i class="fa fa-envelope fa-2"></i> africimage@gmail.com </p>
                                            </li>
                                            <li class="third">
                                                <p><i class="fa fa-clock-o fa-2"></i> 13-14 & 15 Juillet 2018</p>

                                                <p>10h - 00h</p>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="message-box">
                                        <h3>Envoyé un Message</h3>

                                        <form method="post" action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea class="form-control" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" class="readmore send-button"
                                                           value="Send Message">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/#contact-wrapper-->
    </div>



@endsection