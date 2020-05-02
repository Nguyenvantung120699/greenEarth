<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable =['content','post_id','status','user_name','email','comment_id'];

    const ACTIVE = 0;
    const PENDING = 1;

    public function Post(){
        return $this->belongsTo("\App\Post");
    }

    public function getParentAttribute(){
         return $this::where("id",$this->comment_id)->first();
    }
    public function getChildrenAttribute(){
            return $this::where("comment_id",$this->id)->get();
    }
    public function hasParent(){
        return $this::where("id",$this->comment_id)->first() ?true : false;
    }
    public function hasChildren(){
        return $this::where("comment_id",$this->id)->get() ?true : false;
    }
}
