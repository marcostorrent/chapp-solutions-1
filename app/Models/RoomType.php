<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    public $table = "room_type";

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
