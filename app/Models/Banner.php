<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'discount_id', 'height', 'width', 'link', 'status', 'type'
    ];

    public function discount()
    {
        return $this->belongsTo('App\Models\Discount');
    }
}
