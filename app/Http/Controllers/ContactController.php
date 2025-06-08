<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
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
            'email' => 'required|email',
            'tel' => 'required|string|max:20',
            'ville_depart' => 'required|string|max:255',
            'ville_arrivee' => 'required|string',
            'poids' => 'required|string',
            'detail' => 'nullable|string',
        ]);

        Contact::create($validated);
        return to_route('welcome')->with('success', 'Votre demande a été envoyé avec succès.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return to_route('contact.index');
    }
}