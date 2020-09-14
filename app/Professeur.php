<?php

namespace App;
use App\Matiere;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    protected $guarded= [];
    public function Profmat() {
        return $this->hasMany(Matiere::class,'idprof');    
    }
    public function proftime() {
        return $this->BelongsTo(Emploitime::class,'id','idprofesseur');
     }
}
