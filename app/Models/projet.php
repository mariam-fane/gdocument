<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    use HasFactory;
    protected $table = 'projets';
    protected $fillable = [
        'code', 'titre', 'resume', 'date_depot', 'fichier', 'semestre',
        'parcours_id', 'type_projets_id', 'personnels_id'
    ];

    public function getParcours(){
        return $this->hasMany(Parcours::class);
    } 
    // public function getParcours(){
    //     return $this->parcours;
    // }

    // public function setParcours($parcours){
    //     $this->parcours =$parcours;
    // }

}
