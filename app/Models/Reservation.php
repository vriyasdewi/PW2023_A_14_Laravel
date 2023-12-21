<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'check_in',
        'check_out',
        'adult_guest',
        'child_guest',
        'room_id',
        'payment',
        'room_number',
        'note',
        'created_at',
    ];
}
