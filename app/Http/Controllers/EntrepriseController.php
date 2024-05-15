<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_entreprise' => 'required' ,
            'forme_juridique' => 'required',
            'secteurs_activite' => 'required',
            'sigle_usuel' => 'required',
            'enseigne' => 'required',
            'capital' => 'required',
            'valeur_nominale' => 'required',
            'date_debut_activite' => 'required',
            'loyer_mensuel' => 'required',
            'lot' => 'required',
            'situation_geographique' => 'required',
            'numero_titre_foncier' => 'required',
            'contact_adresse_postale' => 'required',
            'chiffre_affaire_previsionnel' => 'required',
            'regime_imposition' => 'required',
        ]);

        $entreprise = new Entreprise();
        $entreprise->nom_entreprise = $request->nom_entreprise;
        $entreprise->forme_juridique = $request->forme_juridique;
        $entreprise->secteurs_activite = $request->secteurs_activite;
        $entreprise->sigle_usuel = $request->sigle_usuel;
        $entreprise->enseigne = $request->enseigne;
        $entreprise->capital = $request->capital;
        $entreprise->valeur_nominale = $request->valeur_nominale;
        $entreprise->date_debut_activite = $request->date_debut_activite;
        $entreprise->loyer_mensuel = $request->loyer_mensuel;
        $entreprise->lot = $request->lot;
        $entreprise->situation_geographique = $request->situation_geographique;
        $entreprise->numero_titre_foncier = $request->numero_titre_foncier;
        $entreprise->contact_adresse_postale = $request->contact_adresse_postale;
        $entreprise->chiffre_affaire_previsionnel = $request->chiffre_affaire_previsionnel;
        $entreprise->regime_imposition = $request->regime_imposition;
        $entreprise->save();

        return redirect('/mon_espace')->with('status', 'Le formulaire a bien été enregistré avec succes.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntrepriseRequest $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }
}
