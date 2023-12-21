<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use DB;

class ReservationController extends Controller
{
    public function create(Request $request)
    {
        Reservation::create([
            'user_id' => $request['user_id'],
            'room_id' => $request['room_id'],
            'room_number' => 0,
            'adult_guest' => $request['adult_guest'],
            'child_guest' => $request['child_guest'],
            'check_in' => $request['check_in'],
            'note' => $request['note'] ?? '-',
            'payment' => $request['payment'],
            'check_out' => $request['check_out'],
        ]);

        return redirect('/profile');
    }

    public function getOne($id) {
        $rooms = Room::all();

        $reservation = DB::table('reservations')
            ->where('reservations.id', $id)
            ->join('users', 'users.id', '=', 'reservations.user_id')
            ->join('rooms', 'rooms.id', '=', 'reservations.room_id')
            ->select('rooms.id as rid', 'rooms.name_room', 'users.name', 'users.phone_number', 'users.email', 'users.id as uid', 'reservations.*')
            ->first();

        return view('Admin.editBooking', ['reservation' => $reservation, 'rooms' => $rooms ]);
    }

    public function delete($id) {
        Reservation::find($id)->delete();

        return redirect('/admin/room');
    }

    public function update(Request $data, $id) {
        $reservation = Reservation::find($id);

        $reservation->check_in = !empty($data['check_in']) ? $data['check_in'] : $reservation->check_in;
        $reservation->check_out = !empty($data['check_out']) ? $data['check_out'] : $reservation->check_out;
        $reservation->check_out = !empty($data['check_out']) ? $data['check_out'] : $reservation->check_out;
        $reservation->child_guest = !empty($data['child_guest']) ? $data['child_guest'] : $reservation->child_guest;
        $reservation->room_id = !empty($data['room_id']) ? $data['room_id'] : $reservation->room_id;
        $reservation->note = !empty($data['note']) ? $data['note'] : $reservation->note;
        $reservation->payment = !empty($data['payment']) ? $data['payment'] : $reservation->payment;
        $reservation->room_number = !empty($data['room_number']) ? $data['room_number'] : $reservation->room_number;

        $reservation->save();

        return \redirect('admin/room');
    }
}
