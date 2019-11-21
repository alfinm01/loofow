<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $hidden = [];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function claims() {
    	return $this->hasMany('App\Claim');
    }
}
