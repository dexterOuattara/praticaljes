<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profilecandidate extends Model
{
    //

    protected $fillable = [
        'candidate_id','country', 'zip', 'phone', 'mobile', 'address', 'linkedin', 'facebook', 'github',
        'twitter', 'biography', 'website',
    ];



    public function candidate(){

        return $this->belongsTo('App\Candidate');
    }



}
