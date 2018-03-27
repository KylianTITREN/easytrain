<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muscles extends Model
{
    protected $table = 'muscles';
    public $timestamps = false;

    public function exercices(){
        return $this->hasMany('App\Exercices', 'idMuscles');
    }
}
