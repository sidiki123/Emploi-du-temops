<?php

namespace App;
use App\Matiere;
use App\Professeur;
use App\Dating;

use Illuminate\Database\Eloquent\Model;

class Emploitime extends Model
{
    protected $table='emploitimes';
    protected $key= 'id';
    
    protected $fillable= ['idmatiere1','idmatiere2','idmatiere3','idmatiere4','idmatiere5','idmatiere6',
    'idmatiere7','idmatiere8','idmatiere9','idmatiere10','idmatiere11','idmatiere12','idmatiere13','idmatiere14','idmatiere15'
    ,'idmatiere16','idmatiere17','idmatiere18','idmatiere19','idmatiere20','idmatiere21','idmatiere22','idmatiere23','idmatiere24','idmatiere25'
    ,'idmatiere26','idmatiere27','idmatiere28','idmatiere29','idmatiere30','idmatiere31','idmatiere32','idmatiere33','idmatiere34'
    ,'idmatiere35','idmatiere36','idmatiere37','idmatiere38','idmatiere39','idmatiere40','idmatiere41','idmatiere42','idmatiere43'
    ,'idmatiere44','idmatiere45'];
    
    public function emploimat() {
        return $this->hasone(Matiere::class,'id');    
    }

    public function emploiprof() {
        return $this->hasMany(Professeur::class,'idprofesseur');    
    }

    public function emploidate() {
        return $this->hasMany(Dating::class);    
    }

    
}
