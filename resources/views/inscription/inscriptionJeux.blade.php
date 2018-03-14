@extends('inscription.inscriptionLayout')
@section('InscriptionContent')

    <form class="contact100-form validate-form" action="{{route('registerJeux')}}" method="post" enctype="multipart/form-data>
        {{ csrf_field() }}
				<span class="contact100-form-title">
					Incrivez-vous aux Jeux-Concours
				</span>

        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
            <span class="label-input100">Nom *</span>
            <input class="input100" type="text" name="nom" placeholder="Enter Your Name">
        </div>
        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
            <span class="label-input100">Prenoms</span>
            <input class="input100" type="text" name="prenoms" placeholder="Enter Your Name">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
            <span class="label-input100">Email *</span>
            <input class="input100" type="text" name="email" placeholder="Enter Your Email ">
        </div>
        <div class="wrap-input100 bg1 rs1-wrap-input100">
            <span class="label-input100">Contact</span>
            <input class="input100" type="text" name="contact" placeholder="Enter Number Phone">
        </div>
        <div class="wrap-input100 bg1 rs1-wrap-input100">
            <span class="label-input100">Addresse</span>
            <input class="input100" type="text" name="adresse" placeholder="Enter Number Phone">
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

        <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
            <span class="label-input100">Motivation</span>
            <textarea class="input100" name="motivation" placeholder="Your message here..."></textarea>
        </div>

        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
            </button>
        </div>
    </form>
@endsection