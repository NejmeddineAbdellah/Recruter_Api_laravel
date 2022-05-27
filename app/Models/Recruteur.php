<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
    use HasFactory;

    protected $fillable=([
        'id',
        'username',
        'email',
        'password',
        'tele',
        'ville',
        'logo',
        'secteur_id'

    ]);
}
