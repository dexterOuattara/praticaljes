<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_recruiter extends Model
{
    //

    protected $fillable = [
        'recruiter_id','candidate_id','category',
    ];



    public function candidate(){

        return $this->belongsTo('App\Candidate');
    }

    public function recruiter(){

        return $this->belongsTo('App\Recruiter');
    }
}
