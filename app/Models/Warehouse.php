<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warehouse extends BaseModel
{
    protected $fillable = [
        'team_id',
        'name',
        'location',
        'manager_id',
    ];
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class,'team_id');
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
