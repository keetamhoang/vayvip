<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'source', 'status', 'type', 'bank', 'post_id'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
