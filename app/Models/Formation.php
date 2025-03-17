<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'date_debut_candidature',
        'prix',
        'duree',
        'date_debut',
        'date_fin',
        'date_limite_depot',
        'date_heure',
        'lieu',
        'type'
    ];

    protected $casts = [
        'date_debut_candidature' => 'date',
        'date_debut' => 'date',
        'date_fin' => 'date',
        'date_limite_depot' => 'date',
        'date_heure' => 'datetime',
        'prix' => 'decimal:2'
    ];
}
