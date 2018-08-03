<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_stores extends Model
{
    //
    protected $fillable = [
        'store_id','user_id','candidate_id','assessment_id','proglanguage','framelanguage','framecss','framehtml',
        'level','requirement1','image1','description','name','typeassessment','dateassessment','endassessment',
        'timeassessment','validate','validate',
    ];

//    public function candidate(){
//
//        return $this->belongsTo('App\Candidate');
//    }

    public function candidates()
    {
        return $this->belongsToMany(candidate::class)->withPivot('created_at', 'updated_at', 'id');
    }

    public function store(){

        return $this->belongsTo('App\Store');
    }


}
