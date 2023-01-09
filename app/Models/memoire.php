<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memoire extends Model
{
    use HasFactory;
    protected $table = 'memoires';
    protected $fillable = [
        'type', 'fichier', 'specialite', 'projets_id'
    ];
}
