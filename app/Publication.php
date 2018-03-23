<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';

    public function utilisateur(){
        return $this->belongsTo('App\User','utilisateur_id');
    }
}
