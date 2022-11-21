<?php

namespace Deegitalbe\LaravelTrustupIoModelCommons\Models\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

/**
 * @property string $uuid
 * @property array[] $fillable
 *
 * @method bool save(array $options = [])
 */

/**
 * Handling automatically uuid attribute value.
 */
trait HasUuid
{
    /**
     * Initializing trait.
     *
     * @return void
     */
    public function initializeHasUuid()
    {
        $this->addUuidToFillable();
        $this->ensureUuidAttribute();
    }

    /**
     * Adding uuid attribute to fillable.
     *
     * @return void
     */
    protected function addUuidToFillable(): void
    {
        $this->fillable[] = 'uuid';
    }

    /**
     * Ensure model has uuid attribute.
     *
     * @return void
     */
    protected function ensureUuidAttribute(): void
    {
        if ($this->uuid) {
            return;
        }

        $this->uuid = Str::uuid();
    }

    /**
     * Getting related uuid.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    
    /**
     * Getting first model matching given uuid.
     *
     * @param string $uuid
     * @return static
     */
    public static function firstByUuid(string $uuid): ?self
    {
        return static::byUuid($uuid)->first();
    }

    /**
     * Getting models matching given uuid.
     * 
     * @param Builder $query
     * @param string $uuid
     * @return Builder
     */
    public function scopeByUuid(Builder $query, string $uuid): Builder
    {
        return $query->where('uuid', $uuid);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
