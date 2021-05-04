<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SeatNumber extends Model
{
    protected $table = 'seat_numbers';
    protected $primaryKey = 'seat_id';
    protected $guarded =[];
}
