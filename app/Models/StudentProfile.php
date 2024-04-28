<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentProfile extends Model
{
    use HasFactory;


    protected $fillable = [
        'session_id',
        'student_id',
        'standard_id',
        'roll',
        'is_enabled',
    ];

    // relationship
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
    public function academicSession(): BelongsTo
    {
        return $this->belongsTo(AcademicSession::class);
    }
    public function standard(): BelongsTo
    {
        return $this->belongsTo(Standard::class);
    }
}