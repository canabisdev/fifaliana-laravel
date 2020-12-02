<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offre extends Model
{
    protected $table ='job';
    protected $fillable = ['date_job','info_job','date_fob'];
}
