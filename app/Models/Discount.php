<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'aff_link', 'content', 'domain', 'end_time', 'root_id', 'image', 'link', 'merchant', 'name', 'start_time', 'status', 'type', 'merchant_id',
        'slug', 'is_coupon', 'is_banner', 'count_view', 'image_local', 'is_hot', 'local', 'end_time_text'
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

    public function merchantN()
    {
        return $this->belongsTo('App\Models\Merchant', 'merchant_id', 'id');
    }

    public function getSlugAttribute()
    {
        return $this->attributes['slug'].'-'.$this->attributes['id'];
    }

    public function coupon() {
        return $this->hasMany('App\Models\Coupon', 'id', 'discount_id');
    }

    public function scopeVN($query)
    {
        $query->where('local', 'vn');
    }

    public function scopeSG($query)
    {
        $query->where('local', 'sg');
    }

    public function scopeMY($query)
    {
        $query->where('local', 'my');
    }

    public function scopePH($query)
    {
        $query->where('local', 'ph');
    }
    public function scopeID($query)
    {
        $query->where('local', 'id');
    }

    public function scopeTH($query)
    {
        $query->where('local', 'th');
    }
}
