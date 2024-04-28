<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassRoom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'standard_id',
        'capacity',
        'is_enable'
    ];

    // relationship
    public function standard(): BelongsTo
    {
        return $this->belongsTo(Standard::class)->select('id, name, is_enable');
    }
}
