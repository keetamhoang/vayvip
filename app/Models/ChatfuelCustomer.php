<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatfuelCustomer extends Model
{
    const CITI = 1;
    const VPBANK = 2;
    const SACOM = 3;

    const DONE = 1;
    const NOT_DONE = 0;

    protected $fillable = [
        'name', 'address', 'birthday', 'phone', 'email', 'salary', 'note', 'status', 'type', 'quan', 'done_time', 'is_from'
    ];
}
