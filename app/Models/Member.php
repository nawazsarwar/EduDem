<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'members';

    public const DISABILITY_SELECT = [
        'No'  => 'No',
        'Yes' => 'Yes',
    ];

    protected $dates = [
        'dob',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const GENDER_SELECT = [
        'Male'   => 'Male',
        'Female' => 'Female',
        'Other'  => 'Other',
    ];

    public const RELIGION_SELECT = [
        'Islam'    => 'Islam',
        'Hinduism' => 'Hinduism',
        'Sikhism'  => 'Sikhism',
        'Jainism'  => 'Jainism',
        'Other'    => 'Other',
    ];

    public const DISABILITY_TYPE_SELECT = [
        'Hearing Impairment'      => 'Hearing Impairment',
        'Intellectual Disability' => 'Intellectual Disability',
        'Locomotor Disability'    => 'Locomotor Disability',
        'Vision Impairment'       => 'Vision Impairment',
    ];

    protected $fillable = [
        'booth_name',
        'booth_no',
        'assembly_constituency',
        'name',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'email',
        'mobile',
        'gender',
        'disability',
        'disability_type',
        'religion',
        'address',
        'district_id',
        'state_id',
        'home_state_id',
        'department',
        'subject',
        'designation',
        'institution_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getDobAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function home_state()
    {
        return $this->belongsTo(State::class, 'home_state_id');
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }
}
