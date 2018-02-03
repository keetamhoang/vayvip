<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GetResponse extends Model
{
    protected $fillable = [
        'name', 'address', 'birthday', 'phone', 'email', 'salary', 'note', 'status', 'type', 'job'
    ];
}
