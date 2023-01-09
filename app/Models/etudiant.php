<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory; 

    protected $table = 'etudiants';
    protected $fillable = [
        'matricule', 'nom', 'prenom', 'date_nais', 'lieu_nais', 'telephone', 'email', 'sexe'
    ];  
}
