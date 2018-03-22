<?php

namespace App\Http\Controllers;

use App\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     *
     * Cette Fonction permet d'ajouter des photos de l'evenement dans la base de donnee en vue de leur affichage su la page d'acceuil
     */
    public function store(Request $request)
    {
        $intitule=$request->intitule;
        $description=$request->description;
        $priorite=$request->priorite;
        $statut=$request->statut;
        $evenement=$request->evenement;

        $photoTheque = $_FILES['photo']['name'];
        /* cette partie concerne la recuperation des linfo temporaires des fichiers sources*/
        $sourcePhoto = $_FILES['photo']['tmp_name'];

        $cheminPhoto = "C:/laragon/www/LeWeekEndDeLaBoisson/public/BdfrontendPhoto/photo".basename($_FILES['photo']['name']);
        $CheminPhoto="BdfrontendPhoto/photo/".basename($_FILES['photo']['name']);

        if (copy($sourcePhoto, $CheminPhoto)){
            $photoEnregistre= photo::firstOrCreate([
                'intitule'=>$intitule,
                'description'=>$description,
                'priorite'=>$priorite,
                'statut'=>$statut,
                'evenement'=>$evenement,
                'lienPhoto'=>$CheminPhoto]);

            Session::flash('SuccesRapport','Photo enregistré avec succes');
            /* a modifier dans le frontend Apres inclusion de la page Admin*/
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(photo $photo)
    {
        //
    }
}
