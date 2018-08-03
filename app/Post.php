<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'title','description', 'imgPost', 'category_id', 'author',
    ];


    public function category(){

        return $this->hasOne('App\Category');
    }
}
