<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Standard extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'arrange_order',
        'is_enable'
    ];

    // relationship
    public function classRooms(): HasMany
    {
        return $this->hasMany(Standard::class);
    }
}