<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table      = "contacts";

    protected $primaryKey = 'contact_ids';

    protected $guarded    = ["contact_ids"];

    public function setNomAttribute($nom)
    {   
        $this->attributes['nom'] = ucfirst(strtolower($nom));
    }

    public function setPrenomAttribute($prenom)
    {
        $this->attributes['prenom'] = ucfirst(strtolower($prenom));
    }
}
