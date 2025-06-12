<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = Demande::all();
        return view('demande.index', compact('demandes'));
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'tel' => 'required|string|max:20',
            'ville_depart' => 'required|string|max:255',
            'ville_arrivee' => 'required|string',
            'poids' => 'required|string',
            'detail' => 'nullable|string',
        ]);

        Demande::create($validated);
        return to_route('welcome')->with('success', 'Votre demande a été envoyé avec succès.');
    }

    public function destroy(Demande $demande)
    {
        $demande->delete();
        return to_route('demande.index');
    }
}