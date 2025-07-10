<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use App\Mail\DemandeMessageMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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
        // ✅ Validate the form data
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'tel' => 'required|string|max:20',
            'ville_depart' => 'required|string|max:255',
            'ville_arrivee' => 'required|string',
            'poids' => 'nullable|string',
            'detail' => 'nullable|string',
            'g-recaptcha-response' => 'required',
        ]);

        // ✅ Verify reCAPTCHA with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (!($response->json()['success'] ?? false)) {
            return back()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed.'])->withInput();
        }

        // ✅ Create the Demande
        $demande = Demande::create($validated);

        // ✅ Convert to array and send email
        $data = $demande->toArray();
        Mail::to('anassadouq123@gmail.com')->send(new DemandeMessageMail($data));

        // ✅ Redirect with success message
        return to_route('welcome')->with('success', 'Votre demande a été envoyée avec succès.');
    }

    public function destroy(Demande $demande)
    {
        $demande->delete();
        return to_route('demande.index');
    }
}