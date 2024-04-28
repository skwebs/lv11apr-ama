<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudentParent extends Model
{
    use HasFactory;

    protected $fillable = [
        'father_name',
        'father_contact',
        'father_contact_2',
        'father_whatsapp',
        'father_photo',
        'mother_name',
        'mother_contact',
        'mother_contact_2',
        'mother_whatsapp',
        'mother_photo',
        'address',
    ];

    // relationship
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }


    // ACCESSORS AND MUTATORS

    // mutators
    protected function fatherName(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucwords(strtolower($value)),
        );
    }

    protected function motherName(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucwords(strtolower($value)),
        );
    }

    protected function address(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucwords(strtolower($value)),
        );
    }
}