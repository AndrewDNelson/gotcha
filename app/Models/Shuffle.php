<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shuffle extends Model
{
    use HasFactory;

    /**
     * Get the targets list.
     */
    public function targets(): HasMany
    {
        return $this->hasMany(Target::class);
    }

    /**
     * Get all kills since a shuffle (or reshuffle).
     */
    public function kills(): HasMany
    {
        return $this->hasMany(Kill::class);
    }
}
