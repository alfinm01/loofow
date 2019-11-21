<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'id', 'user_id', 'post_id', 'claimed_at'
    ];

    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    protected $guarded = [];

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
