<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeassessment extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function assessment(){
        return $this->belongsTo('App\Typeassessment');
    }




}
