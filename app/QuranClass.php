<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuranClass extends Model
{
    protected $table = 'quran_classes';
    protected $fillable = ['day','time','place','priority','created_at','updated_at'];
}
