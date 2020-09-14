<?php

namespace App;
use App\Matiere;
use App\Professeur;

use Illuminate\Database\Eloquent\Model;

class Emploitime extends Model
{
    protected $table= 'emploitimes';
    

    public function emploimat() {
        return $this->hasMany(Matiere::class,'idmatiere');    
    }

    public function emploiprof() {
        return $this->hasMany(Professeur::class,'idprofesseur');    
    }

    protected $guarded= [];
}
