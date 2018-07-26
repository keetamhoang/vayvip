<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PushSubscrtiption extends Model
{
    protected $table = 'push_subscriptions';

    protected $fillable = [
        'endpoint', 'public_key', 'auth_token'
    ];
}
