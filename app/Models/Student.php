<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'uuid', 'gender', 'date_of_birth', 'aadhaar_number', 'status', 'is_enable', 'photo', 'student_parent_id'];


    // relationship
    public function studentParent(): BelongsTo
    {
        return $this->belongsTo(StudentParent::class)->select('id, father_name, mother_name');
    }

    public function studentProfiles()
    {
        return $this->hasMany(StudentProfile::class);
    }

    // ACCESSORS AND MUTATORS

    // accessors
    // protected function dob(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (string $value) => ($value === null ? "" : Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y')),
    //     );
    // }

    // mutators
    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucwords($value),
        );
    }


    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    protected static function booted(): void
    {
        static::created(function ($student) {
            $student->uuid = Str::orderedUuid();
            $student->save();
        });
    }
}
