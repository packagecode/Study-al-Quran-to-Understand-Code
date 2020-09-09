<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportantLink extends Model
{
    protected $table = 'important_links';
    protected $fillable  = ['title','url','priority','created_at','updated_at'];
}
