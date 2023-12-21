<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class MenuController extends Controller
{

    public function index(Request $request) {
        $menus = Menu::all();

        return view('Admin.order', ['menus' => $menus]);
    }

    public function indexGuest()
    {
        $menus = Menu::all();

        return view('About.restaurant', ['menus' => $menus]);
    }


    public function create(Request $request)
    {
        $file = $request->file('image_menu');
        $filePath = time() . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT)
        . '-' . $file->getClientOriginalName();

        $file->move(public_path('img/menu'), $filePath);

        Menu::create([
            'name_menu' => $request['name_menu'],
            'descriptive_menu' => $request['descriptive_menu'],
            'price_menu' => $request['price_menu'],
            'available_menu' => $request['available_menu'],
            'image_menu' => 'img/menu/' . $filePath
        ]);

        //$menus = Menu::all();

        return \redirect('admin/order');
    }
}
