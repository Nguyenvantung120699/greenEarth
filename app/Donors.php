<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donors extends Model
{
    protected $table = 'donors';
    protected $fillable = ['name','logo','event_id'];

    public function Event(){
        return $this->belongsTo(Event::class);
    }
}
