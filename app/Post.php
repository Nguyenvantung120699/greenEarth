<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable =['id','title','image',"author","short_desc",'content',"slug",'status','count_views','count_like','category_id'];

    const SHOW = 1;
    const HIDE = 0;
    const  FAMOUS = 3 ;

    public function Category(){
            return $this->belongsTo("\App\Category");
    }
    public function Comments(){
        return $this->hasMany(Comment::class);
    }

    public function Member(){
        return $this->hasMany(Member::class);
    }

}