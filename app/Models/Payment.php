<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'date',
        'amount',
        'status',
        'amount',
        'paid_amount',
        'method'
    ];
}
