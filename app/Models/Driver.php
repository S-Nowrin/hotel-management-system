<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nid'
    ];
    public function car(){
        return $this->hasOne('App\Car', 'driver_id', 'id');
    }
}
