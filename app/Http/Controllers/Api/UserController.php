<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index()
    {
        $context = User::all();

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
     * Display the specified resource.
     */
    public function show($id)
    {
        $users = User::find($id);

        if(!is_null($users)){
            return response([
                'message' => 'User found, it is '.$users->email,
                'data' => $users
            ],200);
        }

        return response([
            'message' =>'User Not Found',
            'data' => null
        ],404);
    }
}
