<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cog\Contracts\Love\Liker\Models\Liker as LikerContract;
use Cog\Laravel\Love\Liker\Models\Traits\Liker;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements LikerContract
{
    use Notifiable;
    use Liker;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'objectif_id', 'niveau_id', 'biographie',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function publications(){
        return $this->hasMany('App\Publication', 'utilisateur_id');
    }

    public function program(){
        return $this->hasMany('App\Program', 'utilisateur_id');
    }

    public function objectif(){
        return $this->belongsTo('App\Objectif', 'objectif_id');
    }

    public function niveau(){
        return $this->belongsTo('App\Niveau', 'niveau_id');
    }

    public function followMe(){
        return $this->belongsToMany('App\User','suit','suivi_id','suiveur_id');
    }

    public function follow(){
        return $this->belongsToMany('App\User','suit','suiveur_id','suivi_id');
    }
}
