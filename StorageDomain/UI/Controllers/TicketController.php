<?php

namespace StorageDomain\UI\Controllers;

use StorageDomain\Infrastructure\Repositories\StorageFactory\StorageFactoryRepository;
use StorageDomain\Domain\Requests\StoreTicketRequest;
use Illuminate\Http\JsonResponse;

class TicketController
{
    /**
     * @var $storageFactory
     */
    private $storageFactory;

    /**
     * TicketController constructor.
     *
     * @param StorageFactoryRepository $storageFactory
     */
    public function __construct(StorageFactoryRepository $storageFactory)
    {
        $this->storageFactory = $storageFactory;
    }

    /**
     * Storing data.
     *
     * @param StoreTicketRequest $request
     *
     * @return JsonResponse
     */
    public function __invoke(StoreTicketRequest $request) : JsonResponse
    {
        return response()->json(['success' =>  $this->storageFactory->make($request['type'])->store($request->only('name','text','phone')) ], JsonResponse::HTTP_OK);
    }
}
