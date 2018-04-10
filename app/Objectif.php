<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    protected $table = 'objectif';

    public function utilisateur(){
        return $this->hasMany('App\User','niveau_id');
    }
}
