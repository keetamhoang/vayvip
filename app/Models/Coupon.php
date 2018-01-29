<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'discount_id', 'coupon_code', 'coupon_desc', 'coupon_save', 'status', 'type'
    ];

    public function discount()
    {
        return $this->belongsTo('App\Models\Discount');
    }
}
