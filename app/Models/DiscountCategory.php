<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCategory extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'partner_id', 'status', 'type'
    ];

    public function partner() {
        return $this->belongsTo('App\Models\Partner');
    }
}
