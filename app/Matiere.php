<?php

namespace App;
use App\Professeur;
use App\Emploitime;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
   protected $guarded= [];
   public function matprof() {
    return $this->BelongsTo(Professeur::class, 'idprofesseur',);
   }
   
   public function mattime() {
      return $this->BelongsTo(Emploitime::class,'idmatiere',);
     }
}
