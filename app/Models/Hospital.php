<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Hospital
 *
 * @ mixin IdeHelperHospital
 * @property int $id
 * @property string $name
 * @property string|null $phone_numbers
 * @property string|null $emergency _call
 * @property string|null $email
 * @property int $email_verified
 * @property string $location
 * @property string|null $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereEmailVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereEmergencyCall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital wherePhoneNumbers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereUpdatedAt($value)
 * @ property string|null $emergency _call
 * @ mixin \Eloquent
 */
class Hospital extends Model
{
    use HasFactory;
}
