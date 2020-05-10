<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    protected $table = 'introduction';
    protected $fillable = ['name','email','gender','telephone','address','message'];
}
