<?php

namespace Deegitalbe\LaravelTrustupIoModelCommons\Models;

use Deegitalbe\LaravelTrustupIoModelCommons\Contracts\PersistableContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Deegitalbe\LaravelTrustupIoModelCommons\Models\Traits\HasUuid;
use Deegitalbe\LaravelTrustupIoModelCommons\Models\Traits\Persistable;

/**
 * Base model for this project.
 */
abstract class AbstractModel extends EloquentModel implements PersistableContract
{
    use
        HasUuid,
        SoftDeletes,
        Persistable
    ;

    /**
     * Getting id.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}