<?php

namespace Deegitalbe\LaravelTrustupIoModelCommons\Contracts;

interface PersistableContract
{
    /**
     * Persisting instance.
     * 
     * @param array<string, mixed> $options
     * @return static
     */
    public function persist(array $options = []): PersistableContract;
}
