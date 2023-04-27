<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Doctor
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 * @property string $sex
 * @property string $hospital
 * @property int|null $hospital_id
 * @property string $location
 * @property string|null $speciality
 * @property int $is_doctor
 * @property string $last_update
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
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSpeciality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperDoctor {}
}

namespace App\Models{
/**
 * App\Models\EmailAddress
 *
 * @property int $id
 * @property string $email
 * @property int $doctor_id
 * @property int $verified
 * @property string $last_update
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
	class IdeHelperEmailAddress {}
}

namespace App\Models{
/**
 * App\Models\Hospital
 *
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
 * @mixin \Eloquent
 */
	class IdeHelperHospital {}
}

namespace App\Models{
/**
 * App\Models\OnlineMessages
 *
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
	class IdeHelperOnlineMessages {}
}

namespace App\Models{
/**
 * App\Models\OnlineNewsletters
 *
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
	class IdeHelperOnlineNewsletters {}
}

namespace App\Models{
/**
 * App\Models\PhoneNumber
 *
 * @property int $id
 * @property string $phone_number
 * @property int $doctor_id
 * @property int $verified
 * @property string $last_update
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
	class IdeHelperPhoneNumber {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string|null $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $level
 * @property int $is_authorized
 * @property int $is_employee
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAuthorized($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsEmployee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

