<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class po extends Model
{
     protected $fillable = [
        'user_id', 'cat_id','title','detail',
    ];

    public function user(){
      return $this->belongsTo(user::class);
    }
    public function cat(){
    	return $this->belongsTo(cat::class);
    }
}
