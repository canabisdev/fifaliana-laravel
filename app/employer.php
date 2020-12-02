<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    protected $table ='empl';
    protected $fillable = ['id_ep','nom_ep','premon_ep','email_ep','
    tel_ep','ville_ep','adresse_ep','image','file'];
}
