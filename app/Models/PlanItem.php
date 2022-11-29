<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'item'
    ];

    public function package()
    {
        return $this->belongsTo(Plan::class);
    }
}
