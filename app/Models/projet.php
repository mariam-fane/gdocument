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

    public function Parcours(){
        return $this->belongsTo(Parcours::class);
    } 
    // public function getParcours(){
    //     return $this->parcours;
    // }
// Pour recuperer le titre du projet
    public function type_projets(){
    return $this->belongsTo(Type_projet::class);
 }
    public function personnels(){
        return $this->belongsTo(Personnel::class);
    }

}
