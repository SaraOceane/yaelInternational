<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;

use Illuminate\Http\Request;


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
        //dd($request['denomination']);

        Entreprise::create(
            ['nom_entreprise' => $request['denomination'],
            'forme_juridique' => $request['forme_juridique' ],
            'sigle_usuel' => $request['sigle'],
            'date_debut_activite' => $request['date_debut'],
            'capital' => $request['capital'],
            'valeur_nominale' => $request['valeur_nominale'],
            'enseigne' => $request['Enseigne'],
            'secteurs_activite' => $request['activite']

            ]


        );
        $request->session()->flush;
        return redirect('/mon_espace');

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
