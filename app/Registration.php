<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
    protected $fillable = ['classname','name','fathername','education','professiondesignation','presentaddress','permanentaddress','telephonemobile','email','yearofjoin','photo','created_at','updated_at'];
}
