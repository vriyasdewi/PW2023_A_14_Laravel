<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        $reservations = DB::table('reservations')
            ->join('users', 'users.id', '=', 'reservations.user_id')
            ->join('rooms', 'rooms.id', '=', 'reservations.room_id')
            ->select('rooms.id as rid', 'rooms.name_room', 'users.name', 'users.phone_number', 'users.email', 'users.id as uid', 'reservations.*')
            ->get();

        return view('Admin.booking', ['rooms' => $rooms, 'reservations' => $reservations]);
    }

    public function getOne($id) {
        $room = Room::find($id);

        return view('Admin.editRoom', ['room' => $room ]);
    }

    public function delete($id) {
        Room::find($id)->delete();

        return redirect('/admin/room');
    }

    public function indexGuest()
    {
        $rooms = Room::all();

        return view('About.rooms', ['rooms' => $rooms]);
    }

    public function update(Request $data, $id) {
        $room = Room::find($id);

        if ($data->file('image_room')) {
            $file = $data->file('image_room');
            $filePath = time() . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT)
            . '-' . $file->getClientOriginalName();

            $file->move(public_path('img/room'), $filePath);

            $room->image_room = 'img/room/' . $filePath;
        }

        $room->name_room = !empty($data['name_room']) ? $data['name_room'] : $room->name;
        $room->descriptive_room = !empty($data['descriptive_room']) ? $data['descriptive_room'] : $room->descriptive_room;
        $room->price = !empty($data['price']) ? $data['price'] : $room->price;
        $room->capacity = !empty($data['capacity']) ? $data['capacity'] : $room->capacity;
        $room->available_room = !empty($data['available_room']) ? $data['available_room'] : $room->available_room;

        $room->save();

        return \redirect('admin/room');
    }

    public function create(Request $request)
    {
        $file = $request->file('image_room');
        $filePath = time() . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT)
        . '-' . $file->getClientOriginalName();

        $file->move(public_path('img/room'), $filePath);

        Room::create([
            'name_room' => $request['name_room'],
            'descriptive_room' => $request['descriptive_room'],
            'price' => $request['price'],
            'capacity' => $request['capacity'],
            'available_room' => $request['available_room'],
            'image_room' => 'img/room/' . $filePath
        ]);

        $rooms = Room::all();

        return \redirect('admin/room');
    }
}
