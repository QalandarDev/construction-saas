<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductUnit extends BaseModel
{
    protected $fillable = [
        'product_id',
        'name',
        'conversion_rate',
        'cost_price',
        'sale_price',
        'is_base',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
