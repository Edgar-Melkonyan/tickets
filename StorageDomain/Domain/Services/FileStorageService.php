<?php

namespace StorageDomain\Domain\Services;

use Illuminate\Support\Facades\Storage as DiskStorage;

class FileStorageService
{
    /**
     * @var $file
     */
    private $file = 'form.txt';

    /**
     * Storing data into File.
     *
     * @param array $data
     *
     * @return boolean
     */
    public function store(array $data): bool
    {
        return DiskStorage::disk('local')->append($this->file, json_encode($data));
    }
}
