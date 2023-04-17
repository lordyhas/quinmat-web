<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperOnlineNewsletters
 */
class OnlineNewsletters extends Model
{
    use HasFactory;

    protected $fillable = [
        "email",
        "first_name",
        "last_name",
        "subscribe_date",
        "last_name"
    ];
}
