<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{
    public function show()
    {
        $apiKey = env('GOOGLE_API_KEY');
        $placeId = env('GOOGLE_PLACE_ID');

        $data = Cache::remember('google_reviews', now()->addHours(6), function () use ($apiKey, $placeId) {
            $response = Http::get("https://maps.googleapis.com/maps/api/place/details/json", [
                'place_id' => $placeId,
                'fields' => 'name,rating,reviews',
                'key' => $apiKey,
            ]);

            if ($response->successful()) {
                return $response->json()['result'] ?? [];
            }

            return [];
        });

        $reviews = $data['reviews'] ?? [];
        $name = $data['name'] ?? 'Notre entreprise';
        $rating = $data['rating'] ?? null;

        return view('welcome', compact('reviews', 'name', 'rating'));
    }
}