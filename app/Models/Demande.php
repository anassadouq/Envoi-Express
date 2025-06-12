<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'tel',
        'ville_depart',
        'ville_arrivee',
        'poids',
        'detail'
    ];
}