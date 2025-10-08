<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends BaseModel
{
    protected $fillable = [
        'order_id',
        'team_id',
        'user_id',
        'amount',
        'method',
        'paid_at',
        'reference',
    ];
    public function order(): belongsTo
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
