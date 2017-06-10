<?php

namespace App\Repositories\Api;

use App\Model\Store;

class EloquentStoreRepository
{
    function getAll() {
        return Store::get();
    }

    function getOne($id) {
        return Store::with(['address', 'category'])->find($id);
    }
}