<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = [
        'name', 'email',
    ];

     public function phone(){

    	return $this->hasOne(phone::class);
    }

    public function post(){
    	return $this->hasMany(post::class);
    }
}
