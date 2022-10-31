<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Order extends Model
{
    use HasFactory;

    protected $table = 'cart_order';
    protected $fillable = [
        'cart_id',
        'order_id',
    ];
}
