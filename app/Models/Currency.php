<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $table = 'currencies';

    protected $fillable = [
        'created_at',
        'currency_type',
        'amount',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
