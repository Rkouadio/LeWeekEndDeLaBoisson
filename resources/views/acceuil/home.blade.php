@extends('acceuil.index')
@section('content')
    @if(Session::has('SuccesRapport'))

        <div class="alert alert-success">
            {{Session::get('SuccesRapport')}} <strong><i class="glyphicon glyphicon-thumbs-up"></i></strong>
        </div>
    @endif

    @if(Session::has('EchecRapport'))

        <div class="alert alert-warning">

            {{Session::get('EchecRapport')}}<strong> <i class="glyphicon glyphicon-thumbs-down"></i> </strong>

        </div>
    @endif
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
                <div class="item " style="background-image: url(images/slider/slide_web.jpg)">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-12"s>
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1"> <span style="text-transform: none;color:yellow;font-weight: bold">Le Week End de La Boisson</span></h2>
                                    <h2 style="font-size: 40px" class="animation animated-item-2 ">
                                        <span class="fadeInLeftBig" style="color:whitesmoke;text-transform: none;font-weight: bold">La Boisson au centre des réjouissances et des découvertes<div class="row">
                            <div class="wow fadeInLeft" style="z-index: 9999;">
                                <div class="headline-wrap">
                                    <h2 class="headline animation animated-item-1" style="color:orange">

                                        <span style="color:darkorange;font-weight:bold" class="quotes">Un Evenement</span>
                                        <span style="color:green;font-weight:bold" class="quotes">Une Fete</span>
                                        <span style="color:white;font-weight:bold" class="quotes">Une Joie</span>
                                        <span style="color:yellow;font-weight:bold" class="quotes">Une Gaiete</span>
                                        <span style="color:grey;font-weight:bold" class="quotes">Un Partage</span>

                                    </h2> </div> </div> </div></span></h2>
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
                <div class="item" style="background-image: url(images/slider/slide_web2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Des <span>Degustations</span></h2>
                                    <h2 style="font-size: 40px" class="animation animated-item-2">
                                        <span class="fadeInLeftBig" style="color:yellow;text-transform: none;font-weight: bold">
                                           Plus de 20 Boissons Issus de Diverses Régions à découvrir
                                            <div class="row">
                            <div class="wow fadeInLeft" style="z-index: 9999;">
                                <div class="headline-wrap">
                                    <h2 class="headline animation animated-item-1" style="color:orange">

                                        <span style="color:darkgrey;font-weight:bold" class="quotes">Ivoirienne</span>
                                        <span style="color:green;font-weight:bold" class="quotes">Afrique</span>
                                        <span style="color:white;font-weight:bold" class="quotes">Amérique</span>
                                        <span style="color:yellow;font-weight:bold" class="quotes">Eurasie.</span>
                                         <span style="color:yellow;font-weight:bold" class="quotes">Antarctique</span>


                                    </h2> </div> </div> </div></span></h2>
                                    <!--
                                    <h2 class="animation animated-item-2">Des <span>Degustations</span></h2>
                                    <h2 class="animation animated-item-2">+20 Boissons et Produits de Bouche</h2>
                                        -->

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

                <div class="item active col-lg-12 col-xs-12 col-md-12 col-sm-12">
                    <video id="video_background" preload="auto" autoplay loop="loop" muted="muted" controls>
                       <!-- <source src="videos/splash.webm" type="video/webm"> -->
                        <source src="videos/splash0.mp4" type="video/mp4">
                      <!--  <source src="videos/splash.ogv" type="video/ogg"> -->
                        Video not supported
                    </video>

                    <div id="video_pattern"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-xs-12">
                                <div class="carousel-content centered">

                                    <h2 class="animation animated-item-1"><span>Une Célébration Culturelle</span></h2>

                                    <h2 class="animation animated-item-2">
                                        <span class="fadeInLeftBig" style="color:darkorange; text-transform: none">
                                            Le Grand rendez-vous de toutes les Brasséries  <div class="row">
                            <div class="wow fadeInLeft" style="z-index: 9999;">
                                <div class="headline-wrap">
                                    <h2 class="headline animation animated-item-1" style="color:orange">

                                        <span style="color:darkgray;font-weight:bold" class="quotes">Un Evenement</span>
                                        <span style="color:green;font-weight:bold" class="quotes">Une Fete</span>
                                        <span style="color:white;font-weight:bold" class="quotes">Une Joie</span>
                                        <span style="color:yellow;font-weight:bold" class="quotes">Une Gaiete</span>
                                        <span style="color:grey;font-weight:bold" class="quotes">Un Partage</span>

                                    </h2> </div> </div> </div></span></h2>

                                    <br>
                                    <span class="content-nav">
                                    <a href="#services-wrapper" class="animation animated-item-2">Go</a>
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
                        @if(Session::has('MessageDelivreatedSucces'))

                            <div class="alert alert-success alert-dismissible">
                                <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                                {{Session::get('MessageDelivreatedSucces')}} <strong><i class="glyphicon glyphicon-thumbs-up"></i></strong>
                            </div>
                        @endif
                        @if(Session::has('MessageDelivreatedEchec'))

                            <div class="alert alert-danger alert-dismissible">
                                <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                                {{Session::get('MessageDelivreatedEchec')}} <strong><i class="glyphicon glyphicon-thumbs-up"></i></strong>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">

                                <div class="service-box service-fold">
                                    <i class="hippo-icon-diamond"></i>

                                    <h3>Exposition Vente</h3>

                                    <p>
                                        Des stands a votre disposition, decouvrir les nouveaux produit de nos brasseries...
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-lightbulb"></i>

                                    <h3>Jeux-Concours</h3>

                                    <p>
                                       Inscrivez-vous, participez a nos jeux et repartez avec de nombreux lots...
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-beaker"></i>

                                    <h3>Animations Culturelles</h3>

                                    <p>
                                        Des prestations culturelles attrayantes pour egayer pendant trois jours
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-box service-fold">
                                    <i class="hippo-icon-paper-plane"></i>

                                    <h3>Concert & Maquis Geant</h3>

                            <p>
                                Concert avec des artistes de renom dans un concept d'ambiance bon vivre à l'ivoirienne.
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
                            <h2>Notre  <span style="color : red">Phototeque</span></h2>

                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div id="portfolio-container">
                                        <ul id="portfolio-items">
                                            @foreach($photo as $photo)
                                            <li class="portfolio-item">
                                                <div>
                                                    <img style="max-height: 700px ; max-width: 700px" class="img-responsive img-rounded" src="{{$photo->lienPhoto}}" alt="">

                                                    <div class="portfolio-item-description">
                                                        <div>
                                                            <a
                                                               href="#"
                                                               class="fa fa-info rounded"></a>

                                                            <h3>{{$photo->intitule}}</h3>

                                                            <p class="project-tag">{{$photo->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach

                                          <!--  <li class="portfolio-item">
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
                                            </li> -->
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
                            <h2 style="color : red">Le Week-end De La <span>Boisson ?</span></h2>

                            <div class="row contents">
                                <div class="col-md-6">
                                    <p> Le <span style="color: white">WEB, Week-end de la Boisson</span> est une idée original en vue de créer une plate forme d'echange,
                                    de rejouissance et de decouvertes. Elle permettra de créer un cadre de rencontre entre les professionnels
                                        de la boisson.
                                    </p>

                                    <p> Elle a pour objectif de faire connaitre les specifités des professionnels de la boisson. Aussi
                                    de valoriser les potentialités de la boisson sur le plan commercial et industriel</p>

                                    <p> Le Week-end de la Boisson- WEB, permettra de reunir la Population Ivoirienne,
                                    la Dispora ivoirienne, les touristes, les Operateurs Economiques, le monde de la culture et du Showbiz  et
                                        les Arts.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h3>Communication autour de l'Evenement</h3>
                                    </br>
                                    <p> La reussite du <span>WEB 2018</span>, repose sur une communicatiuon de proximité, en vue d'interesser
                                    chaque ivoirien(ne) & toute la diapora a cet evenement unique en son genre. car elle sera le lieu de rencontre
                                        entre Consommateurs et Brasseries !
                                    </p>

                                    <div class="progress-bars">
                                        <div class="skill-progress" data-skill="95%">AMBIANCE</div>
                                        <div class="skill-progress" data-skill="96%">GAITE</div>
                                        <div class="skill-progress" data-skill="97%">JOIE</div>
                                        <div class="skill-progress" data-skill="98%">FETE</div>
                                    </div>
                                    <div class="connect">
                                        <h3>Restez Connecter au WEB</h3>

                                        <div class="social-shares">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="{{url('https://www.facebook.com/WeekEndDeLaBoisson/')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
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
                            <h2 style="color:darkorange">
                               Inscrivez-<span>Vous </span>
                            </h2>

                                <div class="col-lg-2 col-xs-6">
                                        <a href="{{route('inscriptionJeux')}}" class="btn btn-sq-lg btn-primary">
                                            <i class="fa fa-user fa-5x"></i><br/>
                                           Incrivez-vous <br>au jeux concours
                                        </a>
                                </div>
                                <div class="col-lg-2 col-xs-6">
                                        <a href="{{route('inscriptionVisiteurs')}}" class="btn btn-sq-lg btn-success">
                                            <i class="fa fa-user fa-5x"></i><br/>
                                            Incrivez-vous <br>Comme Visiteurs</a>

                                </div>
                                <div class="col-lg-2 col-xs-6">
                                        <a href="{{route('inscriptionPresse')}}" class="btn btn-sq-lg btn-info">
                                            <i class="fa fa-user fa-5x"></i><br/>
                                            Incrivez-vous <br>Organe de Presse
                                        </a>
                                </div>
                                <div class="col-lg-2 col-xs-6">
                                        <a href="{{route('inscriptionPartenaires')}}" class="btn btn-sq-lg btn-warning">
                                            <i class="fa fa-user fa-5x"></i><br/>
                                            Incrivez-vous <br>Pour etre Partenaire
                                        </a>

                                </div>

                                <div class="col-lg-4 col-xs-12">
                                    <div class="fb-page" data-href="https://www.facebook.com/WeekEndDeLaBoisson/" data-tabs="timeline" data-width="500" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/WeekEndDeLaBoisson/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/WeekEndDeLaBoisson/">Week-end de la boisson</a></blockquote></div>

                                </div>

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
                            <h2>3 JOURS DE <span style="color :red"> GAIETE</span></h2>

                            <div class="row">
                               <!-- <div id="clients">
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

                                </div> -->
                                <div class="col-md-4 col-sm-4 col-xs-8 col-lg-4 fadeInRight">
                                    <h3  style="color: #2E2D2D; text-transform: none ; font-weight: bold"><span style="color: Gray">Jour 1</span>- 13 Juillet 2018</h3>
                                    <div  style="color: #B22222" class=""></br>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Allocution
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Ouverture Officielle avec un groupe artistique
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Visite des stands et découverte
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Animation sponsors et partenaires
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Atéliers et dégustation
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Jeux + Concours + mixage Dj
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Mini concert
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Temps musical / Maquis Geant
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-8 col-lg-4">
                                    <h3 style="color: #2E2D2D; text-transform: none ; font-weight: bold"><span style="color: Gray">Jour 2</span>- 14 Juillet 2018</h3>
                                    <div class="" style="color: #B22222"></br>
                                        <p class="">
                                            <i class="fas fa-check"></i></i> Animations
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check"></i> Visite des stands et découverte
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check"></i> Animation sponsors et partenaires
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check"></i> Jeux + Concours + mixage Dj
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check"></i>  Mini concert(artistes - humoristes -orchestre)
                                        </p>

                                        <p class="">
                                            <i class="fas fa-check"></i> Temps musical / Maquis Geant / bal cloture
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-8 col-lg-4">
                                    <h3  style="color: #2E2D2D;text-transform: none;font-weight: bold"> <span style="color: Gray">Jour 3</span>- 15 Juillet 2018</h3>
                                    <div style="color: #B22222; font-weight: bold" class=""></br>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Animations
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Visite des stands et découverte
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Animation sponsors et partenaires
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Dégustation
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Jeux + concours + mixage Dj
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i></i> mini-concert (artistes + humoristes + orchestre)
                                        </p>
                                        <p class="">
                                            <i class="fas fa-check-circle"></i></i> Animation sponsors et partenaires
                                        </p>

                                        <p class="">
                                            <i class="fas fa-check-circle"></i> Temps musical / Maquis Geant / bal cloture
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#client -->
<!--
       <div id="blog-wrapper">
            <div id="blog">
                <div class="inner-wrapper">
                    <div class="row">
                        <div class="container">
                            <h2>
                                Check out our latest  <span>Blog</span>
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
                                              <i class="fa fa-angle-left"> </i>
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
                                                                <span class="blog-date-day">07 </span>
                                                                        <span class="blog-date-other"> Nov, 2013 </span>
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
                            <h2 style="text-transform: none"><span >Laissez-nous un </span> Message </h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Code google Maps-->
                                    <!-- <div id="map-canvas">
                                    </div> -->
                                    <div class="contact-info">
                                        <ul>
                                            <li class="first">
                                                <p><i class="fa fa-map-marker fa-2"></i><span style="color: orangered">Week-end De La Boisson</span></p>
                                                <p> Palais de la Culture d'Abidjan, Treichville.</p>
                                            </li>
                                            <li class="second">
                                                <p><i class="fa fa-phone fa-2"></i> +225 22417844-07582431</p>

                                                <p><i class="fa fa-envelope fa-2"></i> <span style="color: orangered">infos@weekendelaboisson.com</span>
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

                                        <form  action="{{route('messageUser')}}" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name='nom' class="form-control" placeholder="Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" name='mail' class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea class="form-control" name='message' placeholder="Message"></textarea>
                                                </div>

                                            </div>
                                            <div  class="row">
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