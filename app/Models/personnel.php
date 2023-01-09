<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnel extends Model
{
    use HasFactory;
    protected $table = 'personnels';
    protected $fillable = [
        'nom', 'prenom', 'telephone', 'email', 'qualite', 'lieuAffection', 'sexe'
    ];
}
