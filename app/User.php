<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\ProfileWebteche;
use App\Technology;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }

    // public function addToFavorites(){
    //     return $this->belongsToMany(Favorites::class);
    // }
}
