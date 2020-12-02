<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class selection extends Model
{
    public function candidat_mb(){
        return $his->belongsToMany('App\candidat_mb');
    }
}
