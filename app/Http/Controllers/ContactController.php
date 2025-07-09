<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
            'email' => 'required|email',
            'sujet' => 'required|string',
            'message' => 'nullable|string',
            'g-recaptcha-response' => 'required',
        ]);

        // Vérification reCAPTCHA
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (!($response->json()['success'] ?? false)) {
            return back()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed.'])->withInput();
        }

        // Créer contact et récupérer ID
        $contact = Contact::create($validated);
        $data = $contact->toArray(); // contient l'ID

        // Envoyer l'e-mail avec l'ID du contact
        Mail::to('anassadouq123@gmail.com')->send(new ContactMessageMail($data));

        return to_route('welcome')->with('success', 'Votre message a été envoyé avec succès.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return to_route('contact.index');
    }
}