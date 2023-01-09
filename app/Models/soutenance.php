<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soutenance extends Model
{
    use HasFactory;
    protected $table = 'soutenances';
    protected $fillable = [
        'projets_id', 'etudiants_id', 'date_soutenance', 'note', 'mention'
    ];
}
