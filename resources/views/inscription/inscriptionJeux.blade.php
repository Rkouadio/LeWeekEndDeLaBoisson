@extends('inscription.inscriptionLayout')
@section('InscriptionContent')

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

    <form class="contact100-form validate-form" action="{{route('divertissement')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
				<span class="contact100-form-title">
					Incrivez-vous aux Jeux-Concours
				</span>

        <div class="wrap-input100 validate-input bg1" data-validate="Veuillez Entrer votre Nom">
            <span class="label-input100">Nom *</span>
            <input class="input100" type="text" name="nom" placeholder="Entrez Votre Nom">
        </div>
        <div class="wrap-input100 validate-input bg1" data-validate="Veuillez Entrer votre Prenoms">
            <span class="label-input100">Prenoms</span>
            <input class="input100" type="text" name="prenoms" placeholder="Entrez Votre Prenoms">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Entrez Votre Email (e@a.com)">
            <span class="label-input100">Email *</span>
            <input class="input100" type="text" name="email" placeholder="Entrez Votre Email ">
        </div>
        <div class="wrap-input100 bg1 rs1-wrap-input100">
            <span class="label-input100">Contact</span>
            <input class="input100" type="text" name="contact" placeholder="Entrez Votre Contact">
        </div>
        <div class="wrap-input100 bg1 rs1-wrap-input100">
            <span class="label-input100">Addresse</span>
            <input class="input100" type="text" name="adresse" placeholder="Entrez Votre Addresse">
        </div>


        <div class="wrap-input100 input100-select bg1">
            <span class="label-input100">Choix Jeux</span>
            <div>

                <select class="js-select2" name="choix">
                    @foreach($jeux as $jeux)
                    <option value="{{$jeux->intitule}}">{{$jeux->intitule}}</option>
                        @endforeach

                </select>
                <div class="dropDownSelect2"></div>
            </div>
        </div>

        </div>

        <div class="wrap-input100 validate-input bg0 rs1-alert-validate" >
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