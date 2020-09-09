<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveClass extends Model
{
    protected $table = 'live_classes';
    protected $fillable = ['url','type','created_at','updated_at'];
}
