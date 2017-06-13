<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    
     protected $fillable = [
        'NAME', 'EMAIL', 'MOBILE',
    ];
     
     protected $hidden = [
        'PASSWORD', 'remember_token',
    ];
}
