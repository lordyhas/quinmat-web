<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OnlineNewsletters
 *
 * @mixin IdeHelperOnlineNewsletters
 * @property int $id
 * @property string $email
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int $is_blocked
 * @property int $unsubscribe
 * @property string $subscribe_date
 * @property string|null $unsubscribe_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters query()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereIsBlocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereSubscribeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereUnsubscribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereUnsubscribeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineNewsletters whereUpdatedAt($value)
 * @mixin \Eloquent
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
