<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country',
        'firstName',
        'lastName',
        'company',
        'address',
        'city',
        'state',
        'zip',
        'email',
        'phone',
        'notes',
        'amount',
        'payment',
        'isCompleted'
    ];

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
}
