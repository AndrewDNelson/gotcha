<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Target extends Model
{
    use HasFactory;

    /**
     * Get the target player.
     */
    public function target(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'target_id');
    }

    /**
     * Get the player who owns the target.
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    /**
     * Get the corresponding shuffle.
     */
    public function shuffle(): BelongsTo
    {
        return $this->belongsTo(Shuffle::class);
    }
}
