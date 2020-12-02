<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidat_md extends Model
{
    protected $table ='cand';
    protected $fillable = ['nom_ca','prenom_ca','email_ca','tel_ca','date_ca','age_ca','sexe_ca','situation_ca',
    'ville_ca','adresse_ca','image','image1','date_de'];
}
