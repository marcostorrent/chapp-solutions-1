<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomType::create([
            'type_name' => 'Individual',
            'current_price' => 20,
            'guest_max'  => 1
        ]);
        RoomType::create([
            'type_name' => 'Doble',
            'current_price' => 30,
            'guest_max'  => 2
        ]);
        RoomType::create([
            'type_name' => 'Triple',
            'current_price' => 40,
            'guest_max'  => 3
        ]);
        RoomType::create([
            'type_name' => 'Cuádruple',
            'current_price' => 50,
            'guest_max'  => 4
        ]);
    }
}
