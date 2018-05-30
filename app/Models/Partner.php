<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //
    protected $fillable = [
        'name', 'title', 'desc_up', 'desc_bot', 'status', 'type'
    ];

    public function categories() {
        return $this->hasMany('App\Models\DiscountCategory', 'id', 'partner_id');
    }
}
