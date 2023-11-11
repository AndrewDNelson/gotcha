<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Death extends Model
{
    use HasFactory;

    /**
     * Get the player that died.
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
