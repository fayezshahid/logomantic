<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'logoType',
        'image',
        'path',
    ];

    public function hexcodes()
    {
        return $this->hasMany(Hexcode::class);
    }

}
