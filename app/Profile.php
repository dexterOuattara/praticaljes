<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    protected $fillable = [
        'user_id','country', 'zip', 'phone', 'mobile', 'address', 'linkedin', 'facebook', 'github',
        'twitter', 'biography', 'website',
    ];



    public function user(){

        return $this->belongsTo('App\User');
    }
}
