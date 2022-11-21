<?php

namespace Deegitalbe\LaravelTrustupIoModelCommons\Models\Traits;

trait Persistable
{
    /**
     * @param array<string, mixed> $options
     */
    public function persist(array $options = []): self
    {
        $this->save($options);

        return $this;
    }
}
