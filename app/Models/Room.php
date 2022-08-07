<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    use HasFactory;
    public $table = "room";

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public static function freeBetween($date_in, $date_out,$guest_num)
    {
        /* return  Room::with(['reservations'])->whereHas("reservations", function ($q) {
            $q->where("id", ">", 0);
        })->where("room_num", ">", 0)
            ->get();
            */

        return DB::table('room')
            ->leftJoin('reservation', function ($join) use ($date_in, $date_out) {
                $join->on('reservation.room_id', '=', 'room.id')                     
                    ->whereNotBetween('date_in', ["'$date_in'", "'$date_out'"])  
                    ->whereNotBetween('date_out', ["'$date_in'", "'$date_out'"]);
            })            
            //->join('room_type', 'room.room_type_id', '=', 'room_type.id')
            ->join('room_type', function ($join) use ($guest_num) {
                $join->on('room_type.id', '=', 'room.room_type_id')
                ->where('guest_max','>=',$guest_num);
                   
            })  

            ->whereNull('reservation.id')
            ->select('*')
            ->distinct()
            ->get();
    }
}
