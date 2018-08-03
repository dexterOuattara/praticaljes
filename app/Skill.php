<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $table = 'skills';
    public $timestamps = true;

    protected $fillable = [
        'name','description','tag',
    ];

    public function users()
    {
        return $this->belongsToMany(user::class)->withPivot('created_at', 'updated_at', 'id');
    }

//    public function users()
//    {
//        return $this->belongsToMany(user::class);
//    }
//
    public function candidates()
    {
        return $this->belongsToMany(candidate::class)->withPivot('created_at', 'updated_at', 'id');
    }
}
