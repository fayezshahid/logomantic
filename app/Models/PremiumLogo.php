<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumLogo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'logoType',
        'image',
    ];

}
