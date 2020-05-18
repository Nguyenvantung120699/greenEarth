<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "join_member";
    protected $fillable = ['name','email','telephone','address','event_id'];

    const PENDING = 0;
    const ACTIVE = 1;

    public function Event(){
        return $this->belongsTo(Event::class);
    }
}
