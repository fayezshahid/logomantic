<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hexcode extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_id',
        'hexcode',
    ];

    public function logo()
    {
        return $this->belongsTo(Logo::class);
    }

}
