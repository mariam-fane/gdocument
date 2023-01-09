<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_projet extends Model
{
    use HasFactory;
    protected $table = 'type_projets';
    protected $fillable = [
        'designation'
    ];
}
