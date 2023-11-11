<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;

    /**
     * Get the user that is playing.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the players deaths.
     */
    public function deaths(): HasMany
    {
        return $this->hasMany(Death::class);
    }

    /**
     * Get the players revives.
     */
    public function revives(): HasMany
    {
        return $this->hasMany(Revive::class);
    }

    /**
     * Get the players attendances.
     */
    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }

    /** 
     * Gets the players targets.
     */
    public function targets(): HasMany
    {
        return $this->hasMany(Target::class);
    }

    /**
     * Gets the players hunting them.
     */
    public function huntedBy(): HasMany
    {
        return $this->hasMany(Target::class, 'target_id');
    }

    /**
     * Get the players kills.
     */
    public function kills(): HasMany
    {
        return $this->hasMany(Kill::class);
    }

    /**
     * Get the kills where the player was the victim.
     */
    public function killedBy(): HasMany
    {
        return $this->hasMany(Kill::class, 'vicitm_id');
    }



}
