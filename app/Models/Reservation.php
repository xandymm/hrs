<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomReservation extends Model
{
    protected $fillable = ['room_number', 'guest_name', 'check_in_date', 'check_out_date'];
}

