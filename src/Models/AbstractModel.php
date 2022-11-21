<?php

namespace Deegitalbe\LaravelTrustupIoModelCommons\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Deegitalbe\LaravelTrustupIoModelCommons\Models\Traits\HasUuid;
use Deegitalbe\LaravelTrustupIoModelCommons\Models\Traits\Persistable;

/**
 * Base model for this project.
 */
abstract class AbstractModel extends EloquentModel
{
    use
        HasUuid,
        SoftDeletes,
        Persistable
    ;

    /**
     * Getting id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}