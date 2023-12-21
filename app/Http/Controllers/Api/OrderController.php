<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Menu;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = Order::all();

        if (count($context) > 0) {
            return response([
                'message' => 'Retrive All Success',
                'data' => $context,
            ], 200);
        }

        return response([
            'message' => 'Empty',
            'data' => null
        ], 400);
    }

    public function indexByUser($id_user)
    {
        // Retrieve orders associated with the authenticated user
        $orders = Order::where('id_user', $id_user)->get();

        if ($orders->isEmpty()) {
            return response(['message' => 'No orders found for this user'], 404);
        }

        return response(['message' => 'Retrieve All Success', 'data' => $orders], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $allRequest = $request->all();

        $validate = Validator::make($allRequest, [
            'id_menu' => 'required',
            'roomNumber' => 'required',
            'id_user' => 'required',
            'quantity' => 'required',
        ]);

        $user = User::find($allRequest['id_user']);
        $menu = Menu::find($allRequest['id_menu']);

        if (!$user) {
            return response(['message' => 'User not found'], 400);
        }
        if (!$menu) {
            return response(['message' => 'Menu not found'], 400);
        }

        if ($validate->fails()) {
            return response(['message' => $validate->errors()], 400);
        }

        $storeData = [
            'id_menu' => $menu->id,
            'id_user' => $user->id,
            'roomNumber' =>$allRequest['roomNumber'],
            'quantity' => $allRequest['quantity'],
            'status' => 'Ordering',
        ];

        $order = Order::create($storeData);

        return response([
            'message' => 'Add order Success',
            'data' => $order,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $orders = Order::find($id);

        if (!is_null($orders)) {
            return response([
                'message' => 'order found, it is ' . $orders->id,
                'data' => $orders
            ], 200);
        }

        return response([
            'message' => 'order Not Found',
            'data' => null
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        if (is_null($order)) {
            return response([
                'message' => 'order Not Found',
                'data' => null
            ], 404);
        }
        $AllRequest = $request->all();
        $validate = Validator::make($AllRequest, [
            'id_menu' => 'required',
            'roomNumber' => 'required',
            'id_user' => 'required',
            'quantity' => 'required',
            'status' => 'required',
        ]);
        $user = User::find($AllRequest['id_user']);
        $menu = Menu::find($AllRequest['id_menu']);

        if ($validate->fails())
            return response(['message' => $validate->errors()], 400);


        $order->id_user = $user->id;
        $order->roomNumber = $AllRequest['roomNumber'];
        $order->id_menu = $menu->id;
        $order->quantity = $AllRequest['quantity'];
        $order->status = $AllRequest['status'];

        if ($order->save()) {
            return response([
                'message' => 'Update order Success',
                'data' => $order
            ], 200);
        }

        return response([
            'message' => 'Update order Failed',
            'data' => null
        ], 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $order = Order::find($id);

        if (is_null($order)) {
            return response([
                'message' => 'order Not Found',
                'data' => null
            ], 404);
        }


        if ($order->delete()) {
            return response([
                'message' => 'Delete order Success',
                'data' => $order
            ], 200);
        }

        return response([
            'message' => 'Delete order Failed',
            'data' => null
        ], 400);
    }
}
