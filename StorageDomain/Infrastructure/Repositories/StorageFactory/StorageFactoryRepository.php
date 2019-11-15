<?php

namespace StorageDomain\Infrastructure\Repositories\StorageFactory;

interface StorageFactoryRepository
{
    public function make(string $type) : object;
}
