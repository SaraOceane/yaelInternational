<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormesJuridiquesController extends Controller
{
    /**
     * Affiche le formulaire.
     *
     * @return \Illuminate\View\View
     */
    public function afficherFormulaire()
    {
        return view('formes_juridiques');
    }

    /**
     * Traite les données soumises par le formulaire.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function traiterFormulaire(Request $request)
    {
        // Valider les données du formulaire ici si nécessaire
        // Enregistrer les données dans la base de données ou effectuer d'autres actions nécessaires

        // Rediriger l'utilisateur vers une autre page après le traitement du formulaire
        return redirect()->route('accueil')->with('success', 'Formulaire soumis avec succès !');
    }
}
