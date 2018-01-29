<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KmCategory extends Model
{
    protected $fillable = [
        'discount_id', 'category_name', 'category_name_show', 'category_no', 'status', 'type'
    ];

    public function discount()
    {
        return $this->belongsTo('App\Models\Discount');
    }
}
