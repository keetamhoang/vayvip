<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShinhanBank extends Model
{
    protected $table = 'bank_customers';

    protected $fillable = [
        'type', 'status', 'name', 'birthday', 'region', 'phone', 'email', 'salary', 'note', 'done_date', 'job', 'hide', 'cmnd'
    ];

    protected $dates = [
        'created_at' , 'updated_at'
    ];
}

