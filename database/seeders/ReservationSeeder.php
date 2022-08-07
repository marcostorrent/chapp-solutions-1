<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create([
            'date_in' => Carbon::parse('2022-07-02'),
            'date_out' =>  Carbon::parse('2022-07-04'),
            'room_id'  => 1,
            'guest_num' => 1,
            'name' => 'Marcos Torrent',
            'email' => 'marcostorrent@gmail.com',
            'phone' => '679385829',
            'total_price' => 200,
            'uuid' => Str::uuid(36)
        ]);
        Reservation::create([
            'date_in' =>  Carbon::parse('2022-08-06'),
            'date_out' =>  Carbon::parse('2022-08-16'),            
            'room_id'  => 25,
            'guest_num' => 3,
            'name' => 'Marcos Torrent 2',
            'email' => 'marcostorrent+2@gmail.com',
            'phone' => '679385829',
            'total_price' => 100,
            'uuid' => Str::uuid(36)
        ]);
    }
}
