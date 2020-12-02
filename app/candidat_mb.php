<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidat_mb extends Model
{
    protected $table ='candidat1';
    protected $fillable = ['image','nom_c','premon_c','email_c','contact_c',
'date_c','situation_c','ville_c','adresse_c','information_c','information_c1'];

  public function selection(){
      return $this->hasMany('App\selection');
  }
}



