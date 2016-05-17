<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    public function user() 
    {
        $this->hasMany(User::class);
    } 
}
