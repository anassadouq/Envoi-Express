<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DemandeController extends Controller
{
    public function index()
    {
        $demandes = Demande::orderBy('created_at', 'desc')->get();
        return view('demande.index', compact('demandes'));
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'tel' => 'required|string|max:20',
            'ville_depart' => 'required|string|max:255',
            'ville_arrivee' => 'required|string',
            'poids' => 'required|string',
            'detail' => 'nullable|string',
            'g-recaptcha-response' => 'required',
        ]);

        // ✅ Verify reCAPTCHA with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (!$response->json('success')) {
            return back()->withErrors(['captcha' => 'La vérification reCAPTCHA a échoué.'])->withInput();
        }

        Demande::create($request->except('g-recaptcha-response'));

        return to_route('welcome')->with('success', 'Votre demande a été envoyée avec succès.');
    }

    public function destroy(Demande $demande)
    {
        $demande->delete();
        return to_route('demande.index');
    }
}