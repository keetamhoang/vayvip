<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatfuelCustomer extends Model
{
    const CITI = 1;
    const VPBANK = 2;

    protected $fillable = [
        'name', 'address', 'birthday', 'phone', 'email', 'salary', 'note', 'status', 'type', 'quan'
    ];
}
