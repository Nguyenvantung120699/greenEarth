<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable =['id','post_title','post_content','status','views','like','category_id'];

    const SHOW = 1;
    const HIDE = 0;
}