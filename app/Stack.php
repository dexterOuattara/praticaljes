<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    //
    protected $guarded = [];


    public function store(){

        return $this->belongsTo('App\Stack');
    }

    public function candidate(){

        return $this->belongsTo('App\Candidate');
    }
}
