<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    
    protected $fillable=([
        'id',
        'nom_candidat',
        'prenom_candidat',
        'image_candidat',
        'niveau_etude',
        'secteur_activite',
        'cv_candidat'
        
    ]);
}
