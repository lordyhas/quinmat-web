<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\EmailAddress
 *
 * @property int $id
 * @property string $email
 * @property int $doctorId
 * @property int $verified
 * @property string $lastUpdate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress whereLastUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailAddress whereVerified($value)
 * @mixin \Eloquent
 */
class EmailAddress extends Model
{
    use HasFactory;
}
