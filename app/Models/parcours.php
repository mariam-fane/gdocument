<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parcours extends Model
{
    use HasFactory;
    protected $table = 'parcours';
    protected $fillable = [
        'libelle', 'code', 'filieres_id'
    ];
}
