<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'aff_link', 'content', 'domain', 'end_time', 'root_id', 'image', 'link', 'merchant', 'name', 'start_time', 'status', 'type', 'merchant_id',
        'slug', 'is_coupon'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function merchant()
    {
        return $this->belongsTo('App\Models\Merchant');
    }
}
