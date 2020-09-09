<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';
    protected $fillable = ['title','date','vlink','dlink','priority','status','cover_pic','created_at','updated_at'];
}
