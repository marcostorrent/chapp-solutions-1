<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room_num = 0;
        $rooms = [1 => 10, 2 => 5, 3 => 4, 4 => 6];

        foreach ($rooms as $room_type_id => $room_type_num_total) {
            
            $room_type_num=0;
            $room_type_name = RoomType::where('id', $room_type_id)->value('type_name');
            for ($i = 0; $i < $room_type_num_total; $i++) {
                $room_num++;
                $room_type_num++;
                Room::create([
                    'room_name' => $room_type_name.' '. $room_type_num,
                    'description' => 'Habitación '.$room_type_name.' '. $room_type_num.' (Num: '.$room_num.')',
                    'room_type_id' => $room_type_id,
                    'room_num' => $room_num
                ]);
            }
        }
    }
}
