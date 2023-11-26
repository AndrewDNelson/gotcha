<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'required',
        'shuffle',
        'instant',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'required' => 'boolean',
        'shuffle' => 'boolean',
        'instant' => 'boolean',
    ];

    /**
     * Get all events with this type.
     */
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
