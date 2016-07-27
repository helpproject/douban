<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //声明图书和分类的关系
    public function cate()
    {
    	return $this->belongsTo('App\Cate');
    }
}
