<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'aff_link', 'content', 'domain', 'end_time', 'root_id', 'image', 'link', 'merchant', 'name', 'start_time', 'status', 'type', 'merchant_id',
        'slug', 'is_coupon', 'is_banner', 'count_view', 'image_local', 'is_hot'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function getImageAttribute()
    {

        if (!empty($this->attributes['image_local'])) {
            return $this->attributes['image_local'];
        }

        return $this->attributes['image'];

    }

    public function merchant()
    {
        return $this->belongsTo('App\Models\Merchant');
    }

    public function getSlugAttribute()
    {
        return $this->attributes['slug'].'-'.$this->attributes['id'];
    }

    public function coupon() {
        return $this->hasMany('App\Models\Coupon', 'id', 'discount_id');
    }
}
