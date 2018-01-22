<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'short_desc', 'content', 'form', 'category_id', 'account_id', 'status', 'type', 'is_highlight', 'image', 'slug'
    ];
}
