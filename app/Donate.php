<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = "donate";
    protected $fillable = ["name","email","telephone","address","payment_method","donate","message","post_id",];

    public function Post(){
        return $this->belongsTo(Post::class);
    }
    public function getDonate(){
        return number_format($this->donate,"0",",",".");
    }
}
