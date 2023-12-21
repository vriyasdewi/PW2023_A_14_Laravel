<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = Menu::all();

        if (count($context) > 0) {
            return response([
                'message' => 'Retrive All Success',
                'data' => $context,
            ],200);
        }

        return response([
            'message' => 'Empty',
            'data' => null
        ],400);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storeData = $request->all();
        //validasinya bisa ditambahin lagi sesuai kebutuhan
        $validate = Validator::make($storeData, [
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        if( $validate->fails() ){
            return response(['message' => $validate->errors()],400);
        }

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('img/food'), $imageName);

        $storeData['image'] = 'img/food/' . $imageName;

        $menu = Menu::create($storeData);
        return response([
            'message' => 'Add Menu Success',
            'data' => $menu
        ],200);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $menus = Menu::find($id);

        if(!is_null($menus)){
            return response([
                'message' => 'Menu found, it is '.$menus->name,
                'data' => $menus
            ],200);
        }

        return response([
            'message' =>'Menu Not Found',
            'data' => null
        ],404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu = Menu::find($id);
        if(is_null($menu)){
            return response([
                'message' => 'Menu Not Found',
                'data' => null
            ],404);
        }

        $updateData = $request->all();
        //validasi bisa ditambahin
        $validate = Validator::make($updateData, [
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        if( $validate->fails() ){
            return response(['message' => $validate->errors()],400);
        }

        $images = $request->file('image');
        $imageName = $images->getClientOriginalName();
        $images->move(public_path('img/food'), $imageName);


        $updateData['image'] = 'img/food/' . $imageName;

        $menu->image = $updateData['image'];
        $menu->name = $updateData['name'];
        $menu->desc = $updateData['desc'];
        $menu->price = $updateData['price'];

        if( $menu->save() ){
            return response([
                'message'=> 'Update Menu Success',
                'data'=> $menu
            ],200);
        }

        return response([
            'message'=> 'Update menu Failed',
            'data'=> null
        ],400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){

        $menu = Menu::find($id);

        if(is_null($menu)){
            return response([
                'message' => 'Menu Not Found',
                'data' => null
            ],404);
        }


        if($menu->delete()){
            return response([
                'message' => 'Delete Menu Success',
                'data' => $menu
            ], 200);
        }

        return response([
            'message' => 'Delete Menu Failed',
            'data' => null
        ], 400);
    }
}
