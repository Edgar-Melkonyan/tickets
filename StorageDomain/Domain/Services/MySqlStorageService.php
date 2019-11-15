<?php

namespace StorageDomain\Domain\Services;

use StorageDomain\Domain\Models\Ticket;

class MySqlStorageService
{
    /**
     * @var $ticket
     */
    private $ticket;

    /**
     * MySqlStorageService constructor.
     *
     * @param Ticket $ticket
     */
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Storing data into MySQL.
     *
     * @param array $data
     *
     * @return boolean
     */
    public function store(array $data): bool
    {
        return (bool) $this->ticket->create($data);
    }
}
