<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RowSeat extends Model
{       
    protected $table = 'row_seats';
    protected $primaryKey = 'row_id';
    protected $guarded =[];
}
