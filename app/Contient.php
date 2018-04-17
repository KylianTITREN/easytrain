<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contient extends Model
{
    protected $table = 'contient';
    public $timestamps = false;

    public function exercice_id() {
        return $this->belongsTo('App\Exercices','exercice_id');
    }

    public function program_id() {
        return $this->belongsTo('App\Program','program_id');
    }
}
