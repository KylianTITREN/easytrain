<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $table = 'niveau';

    public function utilisateur(){
        return $this->hasMany('App\User','niveau_id');
    }
}
