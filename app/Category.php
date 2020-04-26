<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable =['id','category_name','path','status'];

    public function Post(){
        return $this->hasOne("\App\Post");
    }

    public function Posts(){
        return $this->hasMany("\App\Post");
    }

}