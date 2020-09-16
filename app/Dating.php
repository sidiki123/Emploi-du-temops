<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emploitime;

class Dating extends Model
{
   protected $guarded= [];

   public function datemploi() {
    return $this->belongsTo(Emploitime::class);    
    }
}
