<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $fillable = [
        'User_id', 'phone',
    ];

    public function user(){

    	return $this->belongsTo(User::class);
    }
}
