<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //
    protected $fillable = [
        'name', 'title', 'desc_up', 'desc_bot', 'status', 'type'
    ];
}
