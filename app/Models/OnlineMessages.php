<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperOnlineMessages
 */
class OnlineMessages extends Model
{
    use HasFactory;

    protected $fillable = [
        "email",
        "user_name",
        "message",
    ];
}
