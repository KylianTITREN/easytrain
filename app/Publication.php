<?php

namespace App;

use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model implements LikeableContract
{
    use Likeable;
    protected $table = 'publications';

    public function utilisateur(){
        return $this->belongsTo('App\User','utilisateur_id');
    }
}
