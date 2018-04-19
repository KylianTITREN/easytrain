<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contient extends Model
{
    protected $table = 'contient';

    public function exercices_id(){
        return $this->hasMany('App\Exercices', 'id');
    }

    public function program_id(){
        return $this->hasMany('App\Program', 'id');
    }
}
