<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Revive extends Model
{
    use HasFactory;

    /**
     * Get the revived player.
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
