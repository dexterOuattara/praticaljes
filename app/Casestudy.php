<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casestudy extends Model
{
    //


    protected $fillable = [
        'name','description', 'challenge', 'solution', 'numberOfApplicants'
        , 'numberOfMeeting', 'numberOfDaysSaves', 'numberOfHiring'
        , 'emberVideo', 'imageCase', 'linkResources','author',
    ];


}
