<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_room',
        'descriptive_room',
        'price',
        'capacity',
        'available_room',
        'image_room'
    ];
}
