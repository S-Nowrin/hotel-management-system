<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pick_drop_facility extends Model
{
    use HasFactory;
    protected $fillable = [
        'pick_location',
        'drop_location',
        'cost',
        'car_id'
    ];

    public function car()
    {
        return $this->belongsTo('App\Models\Car', 'car_id');
    }
}
