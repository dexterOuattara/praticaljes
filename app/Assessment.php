<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    //

    protected $fillable = [
        'name','description', 'challenge', 'solution', 'numberOfApplicants'
        , 'numberOfMeeting', 'numberOfDaysSaves', 'numberOfHiring'
        , 'emberVideo', 'imageCase', 'linkResources','author',
    ];

//    public function users()
//    {
//        return $this->belongsToMany('App\User');
//    }


    public function typeassessment(){

        return $this->hasOne('App\Typeassessment');
    }

    public function users()
    {
        return $this->belongsToMany(user::class)->withPivot('created_at', 'updated_at', 'id', 'user_id');
    }

    public function user(){

        return $this->hasOne('App\User');
    }
}
