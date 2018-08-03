<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    //

    public function candidates()
    {
        return $this->belongsToMany(candidate::class)->withPivot('created_at', 'updated_at', 'id');
    }
}
