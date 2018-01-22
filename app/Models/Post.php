<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'short_desc', 'content', 'form', 'category_id', 'account_id', 'status', 'type', 'is_highlight', 'image', 'slug'
    ];

    public function getSlugAttribute()
    {
        return $this->attributes['slug'].'-'.$this->attributes['id'];
    }

    public function account()
    {
        return $this->belongsTo('App\User', 'account_id', 'id');
    }
}