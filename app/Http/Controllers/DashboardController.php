<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the user's dashboard.
     */
    public function index()
    {
        
        // Vérifiez si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }

        // Déclaration de la variable $user
        $user = Auth::user();

    
        // Ajoutez ceci pour vérifier si l'utilisateur est authentifié
        dd($user);
        

        

        // Débogage de l'utilisateur
        //dd($user);

        // Récupération de l'entreprise associée à l'utilisateur
        //$entreprise = Entreprise::where('users_id', $user->id)->first();

        // Retourne la vue avec les données de l'utilisateur et de l'entreprise
        return view('dashboard_client', [
            'user' => $user,
            //'entreprise' => $entreprise
        ]);
    }
}
