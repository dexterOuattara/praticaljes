<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $fillable = [
        'user_id','assessment_id','proglanguage','framelanguage','framecss','framehtml',
        'level','requirement1','image1','description','name','typeassessment','dateassessment','endassessment',
        'timeassessment','price','numberapplicant','mytimeassessment',
    ];

    public function user(){

        return $this->belongsTo('App\Store');
    }

    public function candidate(){

        return $this->belongsTo('App\Candidate');
    }

    public function assessment(){

        return $this->belongsTo('App\Assessment');
    }

    public function candidate_store(){

        return $this->hasOne('App\Candidate_stores');
    }


}
