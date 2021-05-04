<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RoomShow extends Model
{
    use Notifiable;
    protected $table = 'room_shows';
    protected $fillable = [
        'room_name'
    ];
    protected $primaryKey = 'room_id';
    protected $guarded = [];
}
