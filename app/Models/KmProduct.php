<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KmProduct extends Model
{
    const ACTIVE = 0; // status
    const IN_ACTIVE = 1;

    protected $fillable = [
        'aff_link', 'brand', 'category_id', 'category_name', 'desc', 'image', 'link', 'name', 'price', 'discount', 'product_category', 'product_id', 'short_desc',
        'status', 'type', 'root_id', 'slug', 'count_view', 'image_local'
    ];

    public function getImageAttribute()
    {

        if (!empty($this->attributes['image_local'])) {
            return $this->attributes['image_local'];
        }

        return $this->attributes['image'];

    }
}
