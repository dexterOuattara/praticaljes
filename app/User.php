<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','last_name', 'role_id', 'email', 'password',
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

        return $this->hasOne('App\Profile');
    }

//    public function skill()
//    {
//        return $this->belongsToMany('App\Skill');
//    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }

    public function assessments()
    {
        return $this->belongsToMany('App\Assessment')->withPivot('created_at', 'updated_at', 'id', 'user_id');
    }

    public function store()
    {
        return $this->belongsToMany('App\Store');
    }

    public function typecontracts()
    {
        return $this->belongsToMany(typecontract::class);
    }

}
