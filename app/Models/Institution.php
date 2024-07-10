<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'institutions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'district_id',
        'address',
        'level',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const LEVEL_SELECT = [
        'Primary School'          => 'Primary School',
        'Secondary School'        => 'Secondary School',
        'Senior Secondary School' => 'Senior Secondary School',
        'Graduate College'        => 'Graduate College',
        'Post Graduate College'   => 'Post Graduate College',
        'University'              => 'University',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
