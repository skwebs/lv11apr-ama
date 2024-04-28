<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicSession extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'is_current_session',
        'is_enable'
    ];

    public function students():HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function studentProfiles():HasMany
    {
        return $this->hasMany(StudentProfile::class);
    }
}