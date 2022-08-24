<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',
        'no_plate',
        'driver_id'

    ];
    public function driver()
    {
        return $this->belongsTo('App\Models\Driver', 'driver_id');
    }
    public function facility(){
        return $this->hasOne('App\Model\Car', 'car_id', 'id');
    }
}
