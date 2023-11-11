<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    /**
     * Get all player attendances.
     */
    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }
}
