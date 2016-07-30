<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Readbook extends Model
{
    public function books(){
        return $this->belongsTo('App\Books','id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
