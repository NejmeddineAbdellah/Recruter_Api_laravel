<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annoncecandidat extends Model
{
    use HasFactory;

    protected $fillable=([
        'id',
        'titre_annonce',
        'profile_rechercher',
        'description_annonce',
        'niveau_etude',
        'secteur_activite_candidat',
        'id_candidat',
        'tele_candidat',


    ]);
}
