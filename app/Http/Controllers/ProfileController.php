<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $reservations = Reservation::where([
            'user_id' => Auth::id()
        ])
            ->join('rooms', 'rooms.id', '=', 'reservations.room_id')
            ->get();
        return view('About.profile', [
            'reservations' => $reservations
        ]);
    }

    public function indexEdit()
    {
        return view('About.editProfile');
    }

    public function update(Request $data) {
        $user = User::find(Auth::id());

        if ($data->file('image_user')) {
            $file = $data->file('image_user');
            $filePath = time() . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT)
            . '-' . $file->getClientOriginalName();

            $file->move(public_path('img/user'), $filePath);

            $user->image_user = 'img/user/' . $filePath;
        }

        $user->name = !empty($data['name']) ? $data['name'] : $user->name;
        $user->email = !empty($data['email']) ? $data['email'] : $user->email;
        $user->phone_number = !empty($data['phone_number']) ? $data['phone_number'] : $user->phone_number;
        $user->date_of_birth = !empty($data['date_of_birth']) ? $data['date_of_birth'] : $user->date_of_birth;
        $user->gender = !empty($data['gender']) ? $data['gender'] : $user->gender;
        $user->address = !empty($data['address']) ? $data['address'] : $user->address;
        $user->website_user = !empty($data['website_user']) ? $data['website_user'] : $user->website_user;
        $user->instagram_user = !empty($data['instagram_user']) ? $data['instagram_user'] : $user->instagram_user;
        $user->facebook_user = !empty($data['facebook_user']) ? $data['facebook_user'] : $user->facebook_user;

        $user->save();

        return \redirect('/profile');
    }

    public function alluser() {
        try {
            $users = User::all();
            return view('Admin.user', ['users' => $users]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function delete($id) {
            User::find($id)->delete();

            return redirect('/admin/user');
    }
}
