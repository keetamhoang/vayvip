<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    //
    protected $fillable = [
        'name', 'code', 'title', 'desc', 'hsd', 'percent', 'status', 'type', 'type_km', 'priority'
    ];
}
