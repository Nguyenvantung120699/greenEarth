<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable =['id','title',"author","short_desc",'content',"slug",'status','count_views','count_like','category_id'];

    const SHOW = 1;
    const HIDE = 0;

    public function Category(){
            return $this->belongsTo("\App\Category");
    }
    public function Comments(){
        return $this->hasMany("\App\Comment");
    }
}