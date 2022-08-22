<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'room_id',
        'check_in',
        'check_out',
        'deposit'

    ];
    public function client()
    {
        return $this->belongsTo('App\Models\User', 'client_id');
    }
    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'room_id');
    }
}
