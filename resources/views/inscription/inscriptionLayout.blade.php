<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscription -Le WeekEnd de la Boisson</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



    <link rel="icon" type="image/png" href="inscript/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="inscript/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="inscript/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="inscript/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="inscript/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="inscript/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="inscript/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="inscript/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="inscript/vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="inscript/css/util.css">
    <link rel="stylesheet" type="text/css" href="inscript/css/main.css">
    <link rel="stylesheet" type="text/css" href="inscript/css/inscription.css">
    <!--===============================================================================================-->
</head>
<body>



<div class="container">
    <div style="margin-bottom: 15px" class="row">
        <ul class="my-carousel">
            <li><img class="img-rounded" src="inscript/images/coffee-1.png"/></li>
            <li><img class="img-rounded" src="inscript/images/coffee-2.png"/></li>
            <li><img class="img-rounded" src="inscript/images/coffee-3.png"/></li>
        </ul>
    </div>
  <div class="container">
      <div class="center">
          <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-danger btn-lg"><span>Plus d'info</span></button>
          <a href="{{route('home')}}"> <button class="btn btn-success btn-lg"><span>Retournez a l'Acueill</span></button></a>
          <a href="{{url('https://www.facebook.com/WeekEndDeLaBoisson/')}}" target="_blank"> <button class="btn btn-warning btn-lg"><span>Visitez notre page Facebook</span></button></a>
      </div>

      <!-- line modal -->

      <!-- Si Route = inscriptionJeux afficher les informations des jeux -->
      @if(\Request::is('inscriptionJeux'))
      <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                      <h3 style ="color: #ff8c00 ; font-style: italic ; font-weight: bold" class="modal-title" id="lineModalLabel">INFORMATIONS JEUX</h3>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-4">
                              <img style="max-height: 200px ; max-width: 150px" src="images/blog/web_jeux.jpg" alt="">

                          </div>
                          <div class="col-md-8">
                              Vivez une experience sans pareil pendant le <span style="color: red">WEB</span> en participant a nos Jeux Concours
                              Choississez au moins une de nos rubriques de jeux : La Danse, Le Marracana, Le Quiz, ensuite inscrivez !
                          </div>
                      </div>
                       <div class="row">
                           <div class="col-md-12">
                                Participez et soyez le meilleur joueur et recevez de nombreux lots de la part de partenaires et sponsors privilegiés !
                           </div>
                       </div>

                  </div>
                  <div class="modal-footer">
                        <button class="btn btn-primary btn-lg" data-dismiss="modal">
                                            MERCI DE VOUS INSCRIRE
                        </button>
                  </div>
              </div>
          </div>
      </div>
      @endif

  <!-- Si Route = inscriptionVisiteurs afficher les informations des jeux -->
      @if(\Request::is('inscriptionVisiteurs'))
          <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                          <h3 style ="color: #ff8c00 ; font-style: italic ; font-weight: bold" class="modal-title" id="lineModalLabel">INFORMATIONS POUR LES VISITEURS</h3>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-4">
                                  <img style="max-height: 200px ; max-width: 150px" src="images/blog/web_visiteurs.jpg" alt="">

                              </div>
                              <div class="col-md-8">
                                  Chers Visiteurs, veuillez vous inscrire pour etre compter parmi les chaleureux participant du <span style="color: red">WEB</span> pour vivre,
                                  une experience unique au rendez-vous de toutes les brasseries en un seul lieu
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  Rester branchez au <span style="color: red">WEB</span>, en suivant notre page Facebook : <a href="{{url('https://www.facebook.com/WeekEndDeLaBoisson/')}}" target="_blank"><img style=" max-width: 50px ; max-height: 50px" src="images/blog/facebook_icon.png">Weeekend De La Boisson</a>
                              </div>
                          </div>

                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-primary btn-lg" data-dismiss="modal">
                              MERCI DE VOTRE VISITE
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      @endif

  <!-- Si Route = inscriptionPartenaires afficher les informations des jeux -->
      @if(\Request::is('inscriptionPartenaires'))
          <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                          <h3 style ="color: #ff8c00 ; font-style: italic ; font-weight: bold" class="modal-title" id="lineModalLabel">INFORMATIONS POUR LES PARTENAIRES</h3>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-4">
                                  <img style="max-height: 200px ; max-width: 150px" src="images/blog/web_partenaires.jpg" alt="">

                              </div>
                              <div class="col-md-8">
                                  Entreprises, Annonceurs joingrnez votre image au <span style="color: red">WEB</span> pen vous inscrivant pour
                                  unn evenement de marque et d'envergure !
                                  le <span style="color: red">WEB</span> c'est trois jours de partage, de convivialité, de gaité !
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  Vivez un partenariat, sans precedent en vous connectant au Web
                                  Rester branchez au <span style="color: red">WEB</span>, en suivant notre page Facebook : <a href="{{url('https://www.facebook.com/WeekEndDeLaBoisson/')}}" target="_blank"><img style=" max-width: 50px ; max-height: 50px" src="images/blog/facebook_icon.png">Weeekend De La Boisson</a>
                              </div>
                          </div>

                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-primary btn-lg" data-dismiss="modal">
                              MERCI DE NOUS FAIRE CONFINACE !
                          </button>
                      </div>
                  </div>
               </div>
          </div>
      @endif

  <!-- Si Route = inscriptionPresse afficher les informations des jeux -->
      @if(\Request::is('inscriptionPresse'))
          <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                          <h3 style ="color: #ff8c00 ; font-style: italic ; font-weight: bold" class="modal-title" id="lineModalLabel">INFORMATIONS POUR LA PRESSE</h3>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-4">
                                  <img style="max-height: 200px ; max-width: 150px" src="images/blog/web_presse.jpg" alt="">

                              </div>
                              <div class="col-md-8">
                                  Entreprises, Annonceurs joingrnez votre image au <span style="color: red">WEB</span> pen vous inscrivant pour
                                  unn evenement de marque et d'envergure !
                                  le <span style="color: red">WEB</span> c'est trois jours de partage, de convivialité, de gaité !
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  Vivez un partenariat, sans precedent en vous connectant au Web
                                  Rester branchez au <span style="color: red">WEB</span>, en suivant notre page Facebook : <a href="{{url('https://www.facebook.com/WeekEndDeLaBoisson/')}}" target="_blank"><img style=" max-width: 50px ; max-height: 50px" src="images/blog/facebook_icon.png">Weeekend De La Boisson</a>
                              </div>
                          </div>

                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-primary btn-lg" data-dismiss="modal">
                              MERCI DE NOUS FAIRE CONFINACE !
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      @endif

  </div>
    <div class="row">
        <div class="col-lg-12">
            @yield('InscriptionContent');
        </div>
    </div>

</div>



<!--===============================================================================================-->
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src="inscript/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="inscript/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="inscript/vendor/bootstrap/js/popper.js"></script>
<script src="inscript/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="inscript/vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });


        $(".js-select2").each(function(){
            $(this).on('select2:close', function (e){
                if($(this).val() == "Please chooses") {
                    $('.js-show-service').slideUp();
                }
                else {
                    $('.js-show-service').slideUp();
                    $('.js-show-service').slideDown();
                }
            });
        });
    })
</script>
<!--===============================================================================================-->
<script src="inscript/js/webInsJs.js"></script>
<script src="inscript/vendor/daterangepicker/moment.min.js"></script>
<script src="inscript/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="inscript/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="inscript/vendor/noui/nouislider.min.js"></script>
<script>
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [ 1500, 3900 ],
        connect: true,
        range: {
            'min': 1500,
            'max': 7500
        }
    });

    var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function( values, handle ) {
        skipValues[handle].innerHTML = Math.round(values[handle]);
        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
    });
</script>
<!--===============================================================================================-->
<script src="inscript/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
