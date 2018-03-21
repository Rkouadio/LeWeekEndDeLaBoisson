<?php

namespace App\Http\Controllers;

use App\inscription;
use App\divertissement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('inscription.inscription');
    }

    public function indexJeux()
    {
        $jeux = divertissement::whereCategorie('jeux')->get();
        return view ('inscription.inscriptionJeux', compact('jeux'));
    }
    public function indexVisiteurs()
    {
        $visiteurs = divertissement::whereCategorie('visiteurs')->get();
        return view ('inscription.inscriptionVisiteurs', compact('visiteurs'));
    }
    public function indexPartenaires()
    {
        $partenaires = divertissement::whereCategorie('partenaires');
        return view ('inscription.inscriptionPartenaires', compact('partenaires'));
    }
    public function indexPresse()
    {
        $presse = divertissement::whereCategorie('presse')->get();
        return view ('inscription.inscriptionPresse', compact('presse'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Methode enregistrant une inscription == JEUX == VISITEURS == PRESSE == PARTENAIRES
     */
    public function storeJeux(Request $request)
    {
        $nom=$request->nom;
        $prenoms=$request->prenoms;
        $email=$request->email;
        $motivation=$request->motivation;
        $choix=$request->choix;
        $organe =(empty($request->organe))?$request->organe:'non signifié';
        $contact=(!empty($request->contact))?$request->contact:'non signifié';
        $adresse=(!empty($request->adresse))?$request->adresse:'non signifié';

    //    dd($request);

        $jeuxEnregister= inscription::firstOrCreate([
            'nom'=>$nom,
            'prenoms'=>$prenoms,
            'email'=>$email,
            'motivation'=>$motivation,
            'type_inscriptions'=>"jeux",
            'contact'=>$contact,
            'organe'=>$organe,
            'adresse'=>$adresse,
            'choix'=>$choix
          ]);


        Session::flash('SuccesRapport','Votre inscription a ete pris en compte');
        return redirect()->route('home');
    }

    public function storeVisiteurs(Request $request)
    {
        $nom=$request->nom;
        $prenoms=$request->prenoms;
        $email=$request->email;
        $motivation=$request->motivation;
        $choix=$request->choix;
        $organe =(empty($request->organe))?$request->organe:'non signifié';
        $contact=(!empty($request->contact))?$request->contact:'non signifié';
        $adresse=(!empty($request->adresse))?$request->adresse:'non signifié';

        //    dd($request);

        $visiteursEnregister= inscription::firstOrCreate([
            'nom'=>$nom,
            'prenoms'=>$prenoms,
            'email'=>$email,
            'motivation'=>$motivation,
            'type_inscriptions'=>"visiteurs",
            'contact'=>$contact,
            'organe'=>$organe,
            'adresse'=>$adresse,
            'choix'=>"visiteurs"
        ]);


        Session::flash('SuccesRapport','Votre inscription a ete pris en compte');
        return redirect()->route('home');
    }

    public function storePresse(Request $request)
    {
        $nom=$request->nom;
        $prenoms=$request->prenoms;
        $email=$request->email;
        $motivation=$request->motivation;
        $choix=$request->choix;
        $organe=(!empty($request->organe))?$request->organe:'non signifié';;
        $contact=(!empty($request->contact))?$request->contact:'non signifié';
        $adresse=(!empty($request->adresse))?$request->adresse:'non signifié';

        //  dd($request);

        $presseEnregister= inscription::firstOrCreate([
            'nom'=>$nom,
            'prenoms'=>$prenoms,
            'email'=>$email,
            'motivation'=>$motivation,
            'type_inscriptions'=>"presse",
            'contact'=>$contact,
            'organe'=>$organe,
            'adresse'=>$adresse,
            'choix'=>"presse"
        ]);


        Session::flash('SuccesRapport','Votre inscription a ete pris en compte');
        return redirect()->route('home');
    }

    public function storePartenaires(Request $request)
    {
        $nom=$request->nom;
        $prenoms=$request->prenoms;
        $email=$request->email;
        $motivation=$request->motivation;
        $choix=$request->choix;
        $organe=(!empty($request->organe))?$request->organe:'non signifié';;
        $contact=(!empty($request->contact))?$request->contact:'non signifié';
        $adresse=(!empty($request->adresse))?$request->adresse:'non signifié';

        //  dd($request);

        $partenairesEnregister= inscription::firstOrCreate([
            'nom'=>$nom,
            'prenoms'=>$prenoms,
            'email'=>$email,
            'motivation'=>$motivation,
            'type_inscriptions'=>"partenaires",
            'contact'=>$contact,
            'organe'=>$organe,
            'adresse'=>$adresse,
            'choix'=>"partenaires"
        ]);


        Session::flash('SuccesRapport','Votre inscription a ete pris en compte');
        return redirect()->route('home');
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(inscription $inscription)
    {
        //
    }
}
