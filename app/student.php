<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    public $table ="student";
     protected $fillable = [
        'NAME', 'EMAIL', 'MOBILE','PASSWORD'
    ];
     
     protected $hidden = [
        'PASSWORD', 'remember_token',
    ];
}
