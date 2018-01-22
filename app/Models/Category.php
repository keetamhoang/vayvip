<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'desc', 'parent_id', 'status', 'type', 'image', 'slug'
    ];
}
