<?php

namespace App;

use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;

class Program extends Model implements LikeableContract
{
    protected $table = 'programme';

    use Likeable;

    public function utilisateur(){
        return $this->belongsTo('App\User','utilisateur_id');
    }

    public function exoProg() {
        return $this->belongsToMany('App\Exercices','contient', 'program_id','exercice_id');
    }

}
