<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Doctor
 *
 * @mixin IdeHelperDoctor
 * @property int $id
 * @property string|null $firstName
 * @property string|null $name
 * @property string|null $lastName
 * @property string $sex
 * @property string $hospital
 * @property int|null $hospitalId
 * @property string $location
 * @property string|null $speciality
 * @property int $isDoctor
 * @property string $lastUpdate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereHospital($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereHospitalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereIsDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereLastUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSpeciality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Doctor extends Model
{
    use HasFactory;
}
