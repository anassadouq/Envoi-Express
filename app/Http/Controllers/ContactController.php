<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        // ✅ Verify reCAPTCHA with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (!$response->json('success')) {
            return back()->withErrors(['captcha' => 'La vérification reCAPTCHA a échoué.'])->withInput();
        }

        Contact::create($request->except('g-recaptcha-response'));
        return to_route('welcome')->with('success', 'Votre contact a été envoyé avec succès.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return to_route('contact.index');
    }
}