<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercices extends Model
{
    protected $table = 'exercices';
    public $timestamps = false;

    public function muscles()
    {
        return $this->belongsTo('App\Muscles', 'idMuscles');
    }
}