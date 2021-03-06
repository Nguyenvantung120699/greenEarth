<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
     protected $table = 'campaign';
     protected $fillable = ['campaign_name','campaign_slug','status','start_date','end_date','image','content','target','organizational_units'];

    public function Donate(){
        return $this->hasMany(Donate::class);
    }

    public function getTarget(){
        return number_format($this->target,"0",",",".");
    }
}
