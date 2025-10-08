<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends BaseModel
{
    protected $fillable = [
        'order_id',
        'product_id',
        'product_unit_id',
        'quantity',
        'base_quantity',
        'unit_price',
        'total',
    ];

    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function unit(): belongsTo
    {
        return $this->belongsTo(ProductUnit::class, 'product_unit_id');
    }
}
