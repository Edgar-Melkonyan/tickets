<?php

namespace StorageDomain\Infrastructure\Repositories\StorageFactory;

use StorageDomain\Domain\Services\MySqlStorageService;
use StorageDomain\Domain\Services\FileStorageService;
use StorageDomain\Domain\Models\Ticket;

class StorageFactoryService implements StorageFactoryRepository
{
    /**
     * Create object based on type
     *
     * @param string $type
     *
     * @return object
     */
    public function make(string $type) : object
    {
        if ($type === 'FILE')
            return new FileStorageService();

        return new MySqlStorageService(new Ticket());
    }
}
