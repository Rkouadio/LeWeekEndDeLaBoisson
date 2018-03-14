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
          <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-danger btn-lg">PLus d'info</button>

          <a href="{{route('home')}}"> <button class="btn btn-success btn-lg">Retournez a l'Acueill</button></a>
      </div>

      <!-- line modal -->
      <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                      <h3 class="modal-title" id="lineModalLabel">My Modal</h3>
                  </div>
                  <div class="modal-body">
                      Un texte est une série orale ou écrite de mots perçus comme constituant un ensemble cohérent, porteur de sens et utilisant les structures propres à une langue (conjugaisons, construction et association des phrases…)1. Un texte n'a pas de longueur déterminée sauf dans le cas de poèmes à forme fixe comme le sonnet ou le haïku.

                      L'étude formelle des textes s'appuie sur la linguistique, qui est l'approche scientifique du langage.
                      L'étude formelle des textes s'appuie sur la linguistique, qui est l'approche scientifique du langage.
                      L'étude formelle des textes s'appuie sur la linguistique, qui est l'approche scientifique du langage.
                      L'étude formelle des textes s'appuie sur la linguistique, qui est l'approche scientifique du langage.
                      L'étude formelle des textes s'appuie sur la linguistique, qui est l'approche scientifique du langage.
                      L'étude formelle des textes s'appuie sur la linguistique, qui est l'approche scientifique du langage.
                      L'étude formelle des textes s'appuie sur la linguistique, qui est l'approche scientifique du langage.

                  </div>
                  <div class="modal-footer">
                        <button class="btn btn-primary btn-lg">
                                            MERCI
                        </button>

                  </div>
              </div>
          </div>
      </div>
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
