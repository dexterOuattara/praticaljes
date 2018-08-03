<?php

namespace App;

use App\Notifications\CandidateResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidate extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CandidateResetPassword($token));
    }

    public function skills()
    {
        return $this->belongsToMany(skill::class);
    }

    public function typecontracts()
    {
        return $this->belongsToMany(typecontract::class);
    }

    public function profilecandidate(){

        return $this->hasOne('App\Profilecandidate');
    }


    public function stack()
    {
        return $this->belongsToMany('App\Stack');
    }

    public function rewards()
    {
        return $this->belongsToMany(reward::class);
    }

}
