<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pub extends Model
{
    protected $table ='publ';
    protected $fillable = ['date_pu','description_pu','date_fu'];
}
