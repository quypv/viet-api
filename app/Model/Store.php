<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'cuahang';

    public function address()
    {
        return $this->hasOne('App\Model\StoreAddress', 'id', 'iddiachi');
    }

    public function category()
    {
        return $this->hasOne('App\Model\StoreCategory', 'id', 'idcuahang');
    }

}