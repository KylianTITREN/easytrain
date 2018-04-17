<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programme';
    public $timestamps = false;

    public function utilisateur(){
        return $this->belongsTo('App\User','utilisateur_id');
    }

    public function contient() {
        return $this->hasMany('App\Contient','id');
    }

}
