<?php

namespace Deegitalbe\LaravelTrustupIoModelCommons\Models\Traits;

trait Persistable
{
    /**
     * Persisting instance.
     * 
     * @param array<string, mixed> $options
     * @return static
     */
    public function persist(array $options = []): self
    {
        $this->save($options);

        return $this;
    }
}
