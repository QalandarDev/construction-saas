<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscription extends BaseModel
{
    protected $fillable = [
        'team_id',
        'plan',
        'status',
        'trial_ends_at',
        'ends_at',
    ];
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class,'team_id');
    }
}
