<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = "donate";
    protected $fillable = ["name","email","telephone","address","payment_method","donate","message","campaign_id",];

    public function Campaign(){
        return $this->belongsTo(Campaign::class);
    }
    public function getDonate(){
        return number_format($this->donate,"0",",",".");
    }
}
