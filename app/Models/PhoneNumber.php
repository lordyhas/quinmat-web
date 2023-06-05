<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PhoneNumber
 *
 * @mixin IdeHelperPhoneNumber
 * @property int $id
 * @property string $phoneNumber
 * @property int $doctorId
 * @property int $verified
 * @property string $lastUpdate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereLastUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhoneNumber whereVerified($value)
 * @mixin \Eloquent
 */
class PhoneNumber extends Model
{
    use HasFactory;
}
