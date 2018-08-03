<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateStore extends Model
{
    //
    protected $fillable = [
        'user_id','candidate_id','assessment_id','proglanguage','framelanguage','framecss','framehtml',
        'level','requirement1','image1','description','name','typeassessment','dateassessment','endassessment',
        'timeassessment',
    ];

    public function candidate(){

        return $this->belongsTo('App\Candidate');
    }

    public function store(){

        return $this->belongsTo('App\Store');
    }
}
