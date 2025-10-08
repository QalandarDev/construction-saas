<?php

namespace App\Models;


class StockTransaction extends BaseModel
{
    protected $fillable = [
        'product_id',
        'type',
        'quantity',
        'reference_type',
        'reference_id',
    ];
}
