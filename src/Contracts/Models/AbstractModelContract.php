<?php

namespace Deegitalbe\LaravelTrustupIoModelCommons\Contracts\Models;

use Deegitalbe\LaravelTrustupIoModelCommons\Contracts\PersistableContract;

interface AbstractModelContract extends PersistableContract
{
    /**
     * Getting uuid.
     * 
     * @return string
     */
    public function getUuid(): string;

    /**
     * Getting id.
     * 
     * @return int
     */
    public function getId(): ?int;
}
