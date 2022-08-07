<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $reservations = Reservation::all();
        return view('reservation.index', ['reservations' => $reservations]);
    }
    public function new(Request $request)
    {
        return view('reservation.new');
    }
    public function newStep2(Request $request)
    {
        $date_in =  $request->input('date_in');
        $date_out =  $request->input('date_out');
        $guest_num = $request->input('guest_num');
        $rooms = Room::freeBetween($date_in, $date_out, $guest_num);
        return view('reservation.newstep2', ['rooms' => $rooms, 'date_in' => $date_in, 'date_out' => $date_out, 'num_total' => $rooms->count(), 'guest_num' => $guest_num]);
    }
    public function newStep3(Request $request)
    {
        $date_in = $request->input('date_in');
        $date_out = $request->input('date_out');
        $room_num = $request->input('room_num');
        $guest_num = $request->input('guest_num');
        $room = Room::where('room_num', $room_num)->first();
        return view('reservation.newstep3', ['room' => $room, 'date_in' => $date_in, 'date_out' => $date_out, 'guest_num' => $guest_num]);
    }
    public function newStep4(Request $request)
    {
        $date_in = $request->input('date_in');
        $date_out = $request->input('date_out');
        $room_id = $request->input('room_id');
        $guest_num = $request->input('guest_num');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $current_price = Room::find($room_id)->roomType->current_price;
        $reservation = new Reservation();
        $reservation->date_in = Carbon::parse($date_in);
        $reservation->date_out = Carbon::parse($date_out);
        $reservation->room_id = $room_id;
        $reservation->guest_num = $guest_num;
        $reservation->name = $name;
        $reservation->email = $email;
        $reservation->phone = $phone;
        $reservation->total_price = $reservation->date_in->diffInDays($reservation->date_out) * $current_price;
        $reservation->uuid = Str::uuid(36);
        $reservation->save();
        return redirect()->route('home');
    }
}
