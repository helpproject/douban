<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Comment extends Model
{
    //
    protected $table = 'comment';
    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
