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


    //声明图书和关联表
    public function bk_ar()
    {
    	return $this->hasOne('App\Bk_ar');
    }


    public function author()
    {
        return $this->belongsTo('App\Author');
    }




   




}
