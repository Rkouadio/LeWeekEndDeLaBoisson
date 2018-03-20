@extends('inscription.inscriptionLayout')
@section('InscriptionContent')

    <form class="contact100-form validate-form" action="presse" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
				<span class="contact100-form-title">
					Organe de Presse Inscrivez pour une Acreditation pour couvrir le  WeekEnd de la Boisson
				</span>


        <div class="wrap-input100 validate-input bg1" data-validate="Veuillez Entrer votre Nom">
            <span class="label-input100">Votre Nom *</span>
            <input class="input100" type="text" name="nom" placeholder="Entrez Votre Nom">
        </div>

        <div class="wrap-input100 validate-input bg1" data-validate="Veuillez Entrer votre Prenoms">
            <span class="label-input100">Votre Prenoms *</span>
            <input class="input100" type="text" name="prenoms" placeholder="Entrez Votre Prenoms">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Entrez Votre Email (e@a.com)">
            <span class="label-input100">Email *</span>
            <input class="input100" type="text" name="email" placeholder="Entrez votre email ">
        </div>

        <div class="wrap-input100 bg1 rs1-wrap-input100" data-validate = "Entrez Votre Contact">
            <span class="label-input100">Contact</span>
            <input class="input100" type="text" name="contact" placeholder="Entrez Votre Contact">
        </div>

        <div class="wrap-input100 bg1 rs1-wrap-input100">
            <span class="label-input100">Addresse</span>
            <input class="input100" type="text" name="adresse" placeholder="Entrez Votre Addresse">
        </div>

        <div class="wrap-input100 bg1 rs1-wrap-input100">
            <span class="label-input100">Organe de Presse</span>
            <input class="input100" type="text" name="organe" placeholder="Entrez Votre Organe de Presse">
        </div>


        <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
            <span class="label-input100">Motivation</span>
            <textarea class="input100" name="motivation" placeholder="Votre Motivation..."></textarea>
        </div>

        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
						<span>
							    Enregistrer
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
            </button>
        </div>
    </form>
@endsection