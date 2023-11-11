<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kill extends Model
{
    use HasFactory;

    /**
     * Get the player that achieved the kill.
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    /**
     * Get the killed player.
     */
    public function victim(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'victim_id');
    }

    /**
     * Get the corresponding shuffle.
     */
    public function shuffle(): BelongsTo
    {
        return $this->belongsTo(Shuffle::class);
    }
}
