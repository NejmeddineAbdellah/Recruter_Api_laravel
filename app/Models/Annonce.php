<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable=([
        'id',
        'titre_annonce',
        'description_annonce',
        'profile_rechercher',
        'niveau_etude',
        'secteur_id',
        'contrat',
        'salaire'


    ]);
}
