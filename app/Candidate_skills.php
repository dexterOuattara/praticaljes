<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_skills extends Model
{
    //

    protected $fillable = [
        'skill_id','candidate_id','valide',
    ];



    public function candidate(){

        return $this->belongsTo('App\Candidate');
    }

    public function skill(){

        return $this->belongsTo('App\Skill');
    }
}
