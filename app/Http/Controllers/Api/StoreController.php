<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Api\EloquentStoreRepository;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * EloquentStoreRepository
     */
    protected $stores;

    /**
     * Construct
     */
    public function __construct(EloquentStoreRepository $stores){
        $this->stores = $stores;
    }

    /**
     * Show list stores
     *
     * @return Json
     */
    public function index()
    {
        return response()->json($this->stores->getAll());
    }

    /**
     * Show one store
     *
     * @return Json
     */
    public function show($id)
    {
        return response()->json($this->stores->getOne($id));
    }
}