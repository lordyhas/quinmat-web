<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OnlineMessages
 *
 * @mixin IdeHelperOnlineMessages
 * @property int $id
 * @property string $email
 * @property string $user_name
 * @property string|null $message
 * @property string $time
 * @property int $is_read
 * @property int $is_block
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages query()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages whereIsBlock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineMessages whereUserName($value)
 * @mixin \Eloquent
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
