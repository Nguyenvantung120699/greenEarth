<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $table = 'event';
     protected $fillable = ['event_name','event_slug','status','start_date','end_date','image','content','organizational_units','address'];
}
