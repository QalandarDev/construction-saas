<?php

namespace App\Models;

class Customer extends BaseModel
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}
