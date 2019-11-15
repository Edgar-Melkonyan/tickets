<?php

namespace StorageDomain\Application\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bind the interface for implementation of repository class
     */
    public function register()
    {
        $this->app->bind("StorageDomain\Infrastructure\Repositories\StorageFactory\StorageFactoryRepository", "StorageDomain\Infrastructure\Repositories\StorageFactory\StorageFactoryService");
    }
}
